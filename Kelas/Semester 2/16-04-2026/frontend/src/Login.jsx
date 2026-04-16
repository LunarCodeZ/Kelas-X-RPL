import { useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import api from './api';
import Navbar from './components/Navbar';

export default function Login() {
    const [credentials, setCredentials] = useState({ email: '', password: '' });
    const [error, setError] = useState('');
    const navigate = useNavigate();

    const handleSubmit = async (e) => {
        e.preventDefault();
        setError('');
        try {
            const { data } = await api.post('/login', credentials);
            localStorage.setItem('token', data.access_token);
            navigate('/dashboard');
        } catch (err) {
            setError(err.response?.data?.message || 'Login failed');
        }
    };

    return (
        <div className="min-h-screen bg-slate-900 flex flex-col">
            <Navbar />
            <div className="flex-1 flex items-center justify-center p-4">
                <div className="w-full max-w-md bg-slate-800/80 p-8 rounded-3xl border border-slate-700 shadow-2xl backdrop-blur-md">
                    <h2 className="text-3xl font-bold text-center text-white mb-8">Welcome Back</h2>
                    
                    {error && (
                        <div className="bg-red-500/10 border border-red-500/20 text-red-400 p-4 rounded-xl mb-6 text-sm">
                            {error}
                        </div>
                    )}
                    
                    <form onSubmit={handleSubmit} className="space-y-5">
                        <div>
                            <label className="block text-sm font-medium text-slate-400 mb-2">Email Address</label>
                            <input 
                                type="email" 
                                required
                                value={credentials.email}
                                onChange={e => setCredentials({...credentials, email: e.target.value})}
                                className="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-slate-200 outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all placeholder-slate-600"
                                placeholder="you@example.com"
                            />
                        </div>
                        <div>
                            <label className="block text-sm font-medium text-slate-400 mb-2">Password</label>
                            <input 
                                type="password" 
                                required
                                value={credentials.password}
                                onChange={e => setCredentials({...credentials, password: e.target.value})}
                                className="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-slate-200 outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all placeholder-slate-600"
                                placeholder="••••••••"
                            />
                        </div>
                        <button type="submit" className="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3.5 rounded-xl transition-all hover:-translate-y-0.5 shadow-lg shadow-blue-500/20 active:scale-95">
                            Sign In
                        </button>
                    </form>
                    
                    <p className="mt-8 text-center text-slate-400">
                        Don't have an account? <Link to="/register" className="text-blue-400 font-medium hover:text-blue-300 transition-colors">Register here</Link>
                    </p>
                </div>
            </div>
        </div>
    );
}
