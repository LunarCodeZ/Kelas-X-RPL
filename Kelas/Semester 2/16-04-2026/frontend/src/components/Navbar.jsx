import { Link, useNavigate } from 'react-router-dom';
import { useState, useEffect } from 'react';
import api from '../api';

export default function Navbar() {
    const navigate = useNavigate();
    const token = localStorage.getItem('token');
    
    const [brandName, setBrandName] = useState('DevFolio');
    const [userName, setUserName] = useState('');

    useEffect(() => {
        const fetchNavData = async () => {
            try {
                // If logged in, get specific user name
                if (token) {
                    const { data } = await api.get('/user');
                    setUserName(data.name);
                    setBrandName(data.name + "'s Folio");
                } else {
                    // Get public portfolio owner's name for brand
                    const { data } = await api.get('/public-portfolio');
                    if (data && data.profile && data.profile.full_name) {
                        setBrandName(data.profile.full_name + "'s Folio");
                    } else if (data && data.name) {
                        setBrandName(data.name + "'s Folio");
                    }
                }
            } catch (error) {
                console.error("Failed to fetch nav data", error);
            }
        };
        fetchNavData();
    }, [token]);

    const handleLogout = async () => {
        try {
            if (token) {
                await api.post('/logout');
            }
        } catch (error) {
            console.error(error);
        } finally {
            localStorage.removeItem('token');
            navigate('/login');
        }
    };

    return (
        <nav className="w-full bg-slate-900/80 backdrop-blur-md border-b border-slate-800 sticky top-0 z-50">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="flex justify-between items-center h-16">
                    <Link to="/" className="text-2xl font-bold bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">
                        {brandName}
                    </Link>
                    <div className="flex gap-4 items-center">
                        {token ? (
                            <>
                                <span className="text-slate-400 hidden sm:inline-block">Halo, {userName}</span>
                                <Link to="/dashboard" className="text-slate-300 hover:text-white transition-colors">Dashboard</Link>
                                <button onClick={handleLogout} className="px-4 py-2 rounded-lg bg-red-500/10 text-red-400 hover:bg-red-500/20 transition-all">
                                    Logout
                                </button>
                            </>
                        ) : (
                            <>
                                <Link to="/login" className="text-slate-300 hover:text-white transition-colors">Login</Link>
                                <Link to="/register" className="px-4 py-2 rounded-lg bg-blue-500 text-white hover:bg-blue-600 transition-all font-medium transition-transform hover:scale-105 active:scale-95 shadow-lg shadow-blue-500/20">
                                    Register
                                </Link>
                            </>
                        )}
                    </div>
                </div>
            </div>
        </nav>
    );
}
