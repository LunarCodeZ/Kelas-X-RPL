import Navbar from './components/Navbar';
import HeroSection from './components/HeroSection';
import ProjectCard from './components/ProjectCard';
import { useState, useEffect } from 'react';
import api from './api';

export default function Landing() {
    const [publicData, setPublicData] = useState(null);
    const [isLoading, setIsLoading] = useState(true);

    useEffect(() => {
        const fetchPublicData = async () => {
            try {
                const { data } = await api.get('/public-portfolio');
                setPublicData(data);
            } catch (error) {
                console.error("No public data available", error);
            } finally {
                setIsLoading(false);
            }
        };
        fetchPublicData();
    }, []);

    const profile = publicData?.profile || {};
    const goals = publicData?.goals || [];
    const projects = publicData?.projects || [];
    const name = profile.full_name || publicData?.name || "Developer";

    return (
        <div className="min-h-screen bg-slate-900 text-slate-100 font-sans selection:bg-blue-500/30">
            <Navbar />
            
            {/* Dynamic Hero */}
            <section className="relative overflow-hidden pt-32 pb-20">
                <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-blue-500/10 blur-[120px] rounded-full pointer-events-none" />
                
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                    <p className="text-blue-400 font-medium tracking-wider mb-4 uppercase">
                        {profile.title || "Fullstack Developer"}
                    </p>
                    <h1 className="text-5xl md:text-7xl font-extrabold tracking-tight mb-8">
                        Hi, I'm <span className="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-500">{name}</span>
                    </h1>
                    <p className="max-w-2xl mx-auto text-xl text-slate-400 mb-10 leading-relaxed">
                        {profile.bio || "Welcome to my portfolio! Browse through my projects and see my upcoming goals as a modern developer."}
                    </p>
                    {profile.address && (
                        <p className="text-slate-500 mb-8 flex items-center justify-center gap-2">
                            <svg className="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            {profile.address}
                        </p>
                    )}
                </div>
            </section>

            {/* Public Goals */}
            {goals.length > 0 && (
                <section className="py-20 bg-slate-800/30 border-y border-slate-800/50">
                    <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div className="text-center mb-16">
                            <h2 className="text-3xl md:text-4xl font-bold bg-gradient-to-r from-white to-slate-400 bg-clip-text text-transparent">Developer Goals</h2>
                            <p className="mt-4 text-slate-400">Milestones I aim to achieve</p>
                        </div>
                        
                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            {goals.map(goal => (
                                <div key={goal.id} className="p-6 rounded-2xl bg-slate-800/80 border border-slate-700/50 backdrop-blur-sm flex flex-col justify-between">
                                    <div>
                                        <div className="flex justify-between items-start mb-4">
                                            <h3 className="text-xl font-bold text-slate-100">{goal.title}</h3>
                                            <span className={`text-xs px-2.5 py-1 rounded-md border ${goal.status === 'achieved' ? 'bg-indigo-500/20 border-indigo-500/30 text-indigo-300' : 'bg-slate-700/50 border-slate-600/50 text-slate-400'}`}>
                                                {goal.status}
                                            </span>
                                        </div>
                                        <p className="text-slate-400 text-sm leading-relaxed mb-4">{goal.description}</p>
                                    </div>
                                    {goal.target_date && <p className="text-xs font-medium text-slate-500">Target Date: {goal.target_date}</p>}
                                </div>
                            ))}
                        </div>
                    </div>
                </section>
            )}

            {/* Public Projects */}
            <section className="py-20">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="text-center mb-16">
                        <h2 className="text-3xl md:text-4xl font-bold bg-gradient-to-r from-white to-slate-400 bg-clip-text text-transparent">Featured Projects</h2>
                        <p className="mt-4 text-slate-400">A selection of my recent works</p>
                    </div>
                    
                    {projects.length > 0 ? (
                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            {projects.map(project => (
                                <ProjectCard 
                                    key={project.id} 
                                    project={project} 
                                />
                            ))}
                        </div>
                    ) : (
                        <div className="text-center py-10">
                            <p className="text-slate-500">No projects to display yet. Check back soon!</p>
                        </div>
                    )}
                </div>
            </section>
        </div>
    );
}
