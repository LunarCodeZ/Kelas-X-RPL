import { useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import api from './api';
import Navbar from './components/Navbar';

export default function Register() {
    const [formData, setFormData] = useState({ name: '', email: '', password: '', password_confirmation: '' });
    const [error, setError] = useState('');
    const [errors, setErrors] = useState({});
    const navigate = useNavigate();

    const handleSubmit = async (e) => {
        e.preventDefault();
        setError('');
        setErrors({});
        try {
            const { data } = await api.post('/register', formData);
            localStorage.setItem('token', data.access_token);
            navigate('/dashboard');
        } catch (err) {
            if (err.response?.status === 422) {
                setErrors(err.response.data.errors);
            } else {
                setError(err.response?.data?.message || 'Registration failed');
            }
        }
    };

    return (
        <div className="min-h-screen bg-slate-900 flex flex-col">
            <Navbar />
            <div className="flex-1 flex items-center justify-center p-4">
                <div className="w-full max-w-md bg-slate-800/80 p-8 rounded-3xl border border-slate-700 shadow-2xl backdrop-blur-md">
                    <h2 className="text-3xl font-bold text-center text-white mb-8">Create Account</h2>
                    
                    {error && (
                        <div className="bg-red-500/10 border border-red-500/20 text-red-400 p-4 rounded-xl mb-6 text-sm">
                            {error}
                        </div>
                    )}
                    
                    <form onSubmit={handleSubmit} className="space-y-4">
                        <div>
                            <label className="block text-sm font-medium text-slate-400 mb-1">Full Name</label>
                            <input 
                                type="text" 
                                required
                                value={formData.name}
                                onChange={e => setFormData({...formData, name: e.target.value})}
                                className={`w-full bg-slate-900 border ${errors.name ? 'border-red-500' : 'border-slate-700'} rounded-xl px-4 py-3 text-slate-200 outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all`}
                                placeholder="Your Name"
                            />
                            {errors.name && <p className="text-red-400 text-xs mt-1">{errors.name[0]}</p>}
                        </div>
                        <div>
                            <label className="block text-sm font-medium text-slate-400 mb-1">Email Address</label>
                            <input 
                                type="email" 
                                required
                                value={formData.email}
                                onChange={e => setFormData({...formData, email: e.target.value})}
                                className={`w-full bg-slate-900 border ${errors.email ? 'border-red-500' : 'border-slate-700'} rounded-xl px-4 py-3 text-slate-200 outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all`}
                                placeholder="you@example.com"
                            />
                            {errors.email && <p className="text-red-400 text-xs mt-1">{errors.email[0]}</p>}
                        </div>
                        <div>
                            <label className="block text-sm font-medium text-slate-400 mb-1">Password</label>
                            <input 
                                type="password" 
                                required
                                value={formData.password}
                                onChange={e => setFormData({...formData, password: e.target.value})}
                                className={`w-full bg-slate-900 border ${errors.password ? 'border-red-500' : 'border-slate-700'} rounded-xl px-4 py-3 text-slate-200 outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all`}
                                placeholder="••••••••"
                            />
                            {errors.password && <p className="text-red-400 text-xs mt-1">{errors.password[0]}</p>}
                        </div>
                        <div>
                            <label className="block text-sm font-medium text-slate-400 mb-1">Confirm Password</label>
                            <input 
                                type="password" 
                                required
                                value={formData.password_confirmation}
                                onChange={e => setFormData({...formData, password_confirmation: e.target.value})}
                                className="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-slate-200 outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all"
                                placeholder="••••••••"
                            />
                        </div>
                        <button type="submit" className="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3.5 rounded-xl transition-all mt-4 shadow-lg shadow-blue-500/20 active:scale-95">
                            Join DevFolio
                        </button>
                    </form>
                    
                    <p className="mt-8 text-center text-slate-400">
                        Already have an account? <Link to="/login" className="text-blue-400 font-medium hover:text-blue-300 transition-colors">Sign in</Link>
                    </p>
                </div>
            </div>
        </div>
    );
}
