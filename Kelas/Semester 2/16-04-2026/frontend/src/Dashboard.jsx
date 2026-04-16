import { useState, useEffect } from 'react';
import Navbar from './components/Navbar';
import ProjectCard from './components/ProjectCard';
import api from './api';

export default function Dashboard() {
    const [activeTab, setActiveTab] = useState('profile');
    
    const [profile, setProfile] = useState({});
    const [goals, setGoals] = useState([]);
    const [projects, setProjects] = useState([]);
    
    // Form state
    const [goalForm, setGoalForm] = useState({ id: '', title: '', description: '', target_date: '', status: 'pending' });
    const [projectForm, setProjectForm] = useState({ id: '', title: '', description: '', image_url: '', live_link: '', github_link: '', tech_stack: '' });
    
    const [isLoading, setIsLoading] = useState(true);

    useEffect(() => {
        fetchData();
    }, []);

    const fetchData = async () => {
        setIsLoading(true);
        try {
            const [profRes, goalsRes, projRes] = await Promise.all([
                api.get('/profile').catch(() => ({ data: {} })),
                api.get('/goals').catch(() => ({ data: [] })),
                api.get('/projects').catch(() => ({ data: [] }))
            ]);
            setProfile(profRes.data || {});
            setGoals(goalsRes.data || []);
            setProjects(projRes.data || []);
        } catch (error) {
            console.error("Error fetching data", error);
        } finally {
            setIsLoading(false);
        }
    };

    // --- Profile Handlers ---
    const handleProfileSubmit = async (e) => {
        e.preventDefault();
        try {
            const { data } = await api.post('/profile', profile);
            setProfile(data);
            alert('Profile saved!');
        } catch (error) {
            console.error("Error saving profile", error);
        }
    };

    // --- Goals Handlers ---
    const handleGoalSubmit = async (e) => {
        e.preventDefault();
        try {
            if (goalForm.id) {
                const { data } = await api.put(`/goals/${goalForm.id}`, goalForm);
                setGoals(goals.map(g => g.id === goalForm.id ? data : g));
            } else {
                const { data } = await api.post('/goals', goalForm);
                setGoals([...goals, data]);
            }
            setGoalForm({ id: '', title: '', description: '', target_date: '', status: 'pending' });
        } catch (error) {
            console.error("Error saving goal", error);
        }
    };

    const deleteGoal = async (id) => {
        if (!confirm('Are you sure?')) return;
        try {
            await api.delete(`/goals/${id}`);
            setGoals(goals.filter(g => g.id !== id));
        } catch (error) {
            console.error("Error deleting goal", error);
        }
    };

    // --- Project Handlers ---
    const handleProjectSubmit = async (e) => {
        e.preventDefault();
        try {
            if (projectForm.id) {
                const { data } = await api.put(`/projects/${projectForm.id}`, projectForm);
                setProjects(projects.map(p => p.id === projectForm.id ? data : p));
            } else {
                const { data } = await api.post('/projects', projectForm);
                setProjects([...projects, data]);
            }
            setProjectForm({ id: '', title: '', description: '', image_url: '', live_link: '', github_link: '', tech_stack: '' });
        } catch (error) {
            console.error("Error saving project", error);
        }
    };

    const deleteProject = async (id) => {
        if (!confirm('Are you sure?')) return;
        try {
            await api.delete(`/projects/${id}`);
            setProjects(projects.filter(p => p.id !== id));
        } catch (error) {
            console.error("Error deleting project", error);
        }
    };

    if (isLoading) {
        return <div className="min-h-screen bg-slate-900 flex items-center justify-center text-white">Loading...</div>;
    }

    return (
        <div className="min-h-screen bg-slate-900 flex flex-col">
            <Navbar />
            
            <div className="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col lg:flex-row gap-8">
                {/* Sidebar Navigation */}
                <div className="w-full lg:w-64 flex-shrink-0">
                    <nav className="flex flex-col gap-2 p-4 bg-slate-800/50 rounded-2xl border border-slate-700/50 sticky top-24">
                        {['profile', 'goals', 'projects'].map((tab) => (
                            <button
                                key={tab}
                                onClick={() => setActiveTab(tab)}
                                className={`text-left px-4 py-3 rounded-xl transition-all font-medium capitalize ${
                                    activeTab === tab 
                                    ? 'bg-blue-500 text-white shadow-lg shadow-blue-500/20' 
                                    : 'text-slate-400 hover:bg-slate-700/50 hover:text-slate-200'
                                }`}
                            >
                                {tab === 'profile' && 'Personal Profile'}
                                {tab === 'goals' && 'My Goals'}
                                {tab === 'projects' && 'Portfolio Projects'}
                            </button>
                        ))}
                    </nav>
                </div>

                {/* Main Content Area */}
                <div className="flex-1 bg-slate-800/30 border border-slate-700/50 rounded-3xl p-6 md:p-10 shadow-xl backdrop-blur-sm">
                    
                    {/* PROFILE TAB */}
                    {activeTab === 'profile' && (
                        <div>
                            <h2 className="text-3xl font-bold text-white mb-6">Personal Profile</h2>
                            <form onSubmit={handleProfileSubmit} className="space-y-6">
                                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label className="block text-sm font-medium text-slate-400 mb-2">Full Name</label>
                                        <input type="text" value={profile.full_name || ''} onChange={e => setProfile({...profile, full_name: e.target.value})} className="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-slate-200" placeholder="e.g. John Doe" />
                                    </div>
                                    <div>
                                        <label className="block text-sm font-medium text-slate-400 mb-2">Professional Title</label>
                                        <input type="text" value={profile.title || ''} onChange={e => setProfile({...profile, title: e.target.value})} className="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-slate-200" placeholder="e.g. Fullstack Developer" />
                                    </div>
                                </div>
                                <div>
                                    <label className="block text-sm font-medium text-slate-400 mb-2">Bio / About Me</label>
                                    <textarea value={profile.bio || ''} onChange={e => setProfile({...profile, bio: e.target.value})} rows="4" className="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-slate-200" placeholder="Tell the world about yourself..." />
                                </div>
                                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label className="block text-sm font-medium text-slate-400 mb-2">Phone</label>
                                        <input type="text" value={profile.phone || ''} onChange={e => setProfile({...profile, phone: e.target.value})} className="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-slate-200" placeholder="+123456789" />
                                    </div>
                                    <div>
                                        <label className="block text-sm font-medium text-slate-400 mb-2">Address</label>
                                        <input type="text" value={profile.address || ''} onChange={e => setProfile({...profile, address: e.target.value})} className="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-slate-200" placeholder="City, Country" />
                                    </div>
                                </div>
                                <button type="submit" className="bg-blue-500 hover:bg-blue-600 px-6 py-3 rounded-xl font-medium text-white transition-all shadow-lg shadow-blue-500/20 active:scale-95">
                                    Save Profile
                                </button>
                            </form>
                        </div>
                    )}

                    {/* GOALS TAB */}
                    {activeTab === 'goals' && (
                        <div>
                            <div className="flex justify-between items-end mb-8">
                                <h2 className="text-3xl font-bold text-white">Developer Goals</h2>
                            </div>
                            
                            <div className="bg-slate-900/50 p-6 rounded-2xl border border-slate-700 mb-10">
                                <h3 className="text-lg font-bold text-slate-200 mb-4">{goalForm.id ? 'Edit Goal' : 'Add New Goal'}</h3>
                                <form onSubmit={handleGoalSubmit} className="space-y-4">
                                    <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label className="block text-sm text-slate-400 mb-1">Title</label>
                                            <input required type="text" value={goalForm.title} onChange={e => setGoalForm({...goalForm, title: e.target.value})} className="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-slate-200" />
                                        </div>
                                        <div>
                                            <label className="block text-sm text-slate-400 mb-1">Target Date</label>
                                            <input type="date" value={goalForm.target_date || ''} onChange={e => setGoalForm({...goalForm, target_date: e.target.value})} className="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-slate-200" />
                                        </div>
                                    </div>
                                    <div>
                                        <label className="block text-sm text-slate-400 mb-1">Description</label>
                                        <textarea value={goalForm.description || ''} onChange={e => setGoalForm({...goalForm, description: e.target.value})} rows="2" className="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-slate-200" />
                                    </div>
                                    <div className="flex gap-4 items-center">
                                        <select value={goalForm.status} onChange={e => setGoalForm({...goalForm, status: e.target.value})} className="bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-slate-200 outline-none">
                                            <option value="pending">Pending</option>
                                            <option value="achieved">Achieved</option>
                                        </select>
                                        <button type="submit" className="bg-blue-500 hover:bg-blue-600 px-6 py-2 rounded-lg font-medium text-white transition-all shadow-md active:scale-95">
                                            {goalForm.id ? 'Update' : 'Save'} Goal
                                        </button>
                                        {goalForm.id && (
                                            <button type="button" onClick={() => setGoalForm({ id: '', title: '', description: '', target_date: '', status: 'pending' })} className="text-slate-400 hover:text-slate-200">Cancel</button>
                                        )}
                                    </div>
                                </form>
                            </div>

                            <div className="space-y-4">
                                {goals.map(goal => (
                                    <div key={goal.id} className={`p-4 rounded-xl border flex flex-col md:flex-row justify-between md:items-center gap-4 transition-all ${goal.status === 'achieved' ? 'bg-indigo-500/10 border-indigo-500/20' : 'bg-slate-800 border-slate-700'}`}>
                                        <div>
                                            <div className="flex items-center gap-3 mb-1">
                                                <h4 className="font-bold text-lg text-slate-100">{goal.title}</h4>
                                                <span className={`text-xs px-2 py-0.5 rounded-full border ${goal.status === 'achieved' ? 'bg-indigo-500/20 border-indigo-500/30 text-indigo-300' : 'bg-slate-700 border-slate-600 text-slate-400'}`}>
                                                    {goal.status}
                                                </span>
                                            </div>
                                            <p className="text-sm text-slate-400">{goal.description}</p>
                                            {goal.target_date && <p className="text-xs text-slate-500 mt-2">Target: {goal.target_date}</p>}
                                        </div>
                                        <div className="flex gap-2">
                                            <button onClick={() => setGoalForm(goal)} className="px-3 py-1.5 rounded-md bg-slate-700 text-slate-200 text-sm hover:bg-slate-600 transition-colors">Edit</button>
                                            <button onClick={() => deleteGoal(goal.id)} className="px-3 py-1.5 rounded-md bg-red-500/10 text-red-400 text-sm hover:bg-red-500/20 transition-colors">Delete</button>
                                        </div>
                                    </div>
                                ))}
                                {goals.length === 0 && <p className="text-slate-500 text-center py-8">No goals set yet.</p>}
                            </div>
                        </div>
                    )}

                    {/* PROJECTS TAB */}
                    {activeTab === 'projects' && (
                        <div>
                            <h2 className="text-3xl font-bold text-white mb-8">Portfolio Projects</h2>
                            
                            <div className="bg-slate-900/50 p-6 rounded-2xl border border-slate-700 mb-10">
                                <h3 className="text-lg font-bold text-slate-200 mb-4">{projectForm.id ? 'Edit Project' : 'Add New Project'}</h3>
                                <form onSubmit={handleProjectSubmit} className="space-y-4">
                                    <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label className="block text-sm text-slate-400 mb-1">Title</label>
                                            <input required type="text" value={projectForm.title} onChange={e => setProjectForm({...projectForm, title: e.target.value})} className="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-slate-200" />
                                        </div>
                                        <div>
                                            <label className="block text-sm text-slate-400 mb-1">Tech Stack (comma separated)</label>
                                            <input type="text" value={projectForm.tech_stack || ''} onChange={e => setProjectForm({...projectForm, tech_stack: e.target.value})} className="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-slate-200" placeholder="React, Laravel, Tailwind" />
                                        </div>
                                    </div>
                                    <div>
                                        <label className="block text-sm text-slate-400 mb-1">Description</label>
                                        <textarea value={projectForm.description || ''} onChange={e => setProjectForm({...projectForm, description: e.target.value})} rows="2" className="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-slate-200" />
                                    </div>
                                    <div className="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <div>
                                            <label className="block text-sm text-slate-400 mb-1">Image URL</label>
                                            <input type="text" value={projectForm.image_url || ''} onChange={e => setProjectForm({...projectForm, image_url: e.target.value})} className="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-slate-200" />
                                        </div>
                                        <div>
                                            <label className="block text-sm text-slate-400 mb-1">Live Link</label>
                                            <input type="text" value={projectForm.live_link || ''} onChange={e => setProjectForm({...projectForm, live_link: e.target.value})} className="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-slate-200" />
                                        </div>
                                        <div>
                                            <label className="block text-sm text-slate-400 mb-1">Demo/GitHub Link</label>
                                            <input type="text" value={projectForm.github_link || ''} onChange={e => setProjectForm({...projectForm, github_link: e.target.value})} className="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-slate-200" />
                                        </div>
                                    </div>
                                    <div className="flex gap-4 items-center pt-2">
                                        <button type="submit" className="bg-blue-500 hover:bg-blue-600 px-6 py-2 rounded-lg font-medium text-white transition-all shadow-md active:scale-95">
                                            {projectForm.id ? 'Update' : 'Save'} Project
                                        </button>
                                        {projectForm.id && (
                                            <button type="button" onClick={() => setProjectForm({ id: '', title: '', description: '', image_url: '', live_link: '', github_link: '', tech_stack: '' })} className="text-slate-400 hover:text-slate-200">Cancel</button>
                                        )}
                                    </div>
                                </form>
                            </div>

                            <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                                {projects.map(project => (
                                    <ProjectCard 
                                        key={project.id} 
                                        project={project} 
                                        onEdit={(p) => {
                                            setProjectForm(p);
                                            window.scrollTo({ top: 0, behavior: 'smooth' });
                                        }} 
                                        onDelete={deleteProject} 
                                    />
                                ))}
                            </div>
                            {projects.length === 0 && <p className="text-slate-500 text-center py-8">No projects added yet.</p>}
                        </div>
                    )}
                </div>
            </div>
        </div>
    );
}
