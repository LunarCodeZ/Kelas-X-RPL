import { Link } from 'react-router-dom';

export default function HeroSection() {
    return (
        <section className="relative overflow-hidden pt-32 pb-40">
            {/* Background elements */}
            <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-blue-500/20 blur-[120px] rounded-full pointer-events-none" />
            
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                <h1 className="text-5xl md:text-7xl font-extrabold tracking-tight mb-8">
                    Showcase Your <br/>
                    <span className="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-500">
                        Developer Journey
                    </span>
                </h1>
                <p className="max-w-2xl mx-auto text-xl text-slate-400 mb-10 leading-relaxed">
                    Build a stunning portfolio, track your ambitious goals, and manage your professional identity in one minimal, elegant platform.
                </p>
                <div className="flex justify-center gap-4">
                    <Link to="/register" className="px-8 py-4 rounded-xl bg-blue-500 text-white font-bold text-lg hover:bg-blue-600 transition-all shadow-[0_0_40px_-10px_rgba(59,130,246,0.5)] hover:shadow-[0_0_60px_-15px_rgba(59,130,246,0.7)] hover:-translate-y-1">
                        Get Started
                    </Link>
                    <Link to="/login" className="px-8 py-4 rounded-xl bg-slate-800 text-slate-200 font-bold text-lg hover:bg-slate-700 transition-all border border-slate-700 hover:border-slate-600">
                        Sign In
                    </Link>
                </div>
            </div>
        </section>
    );
}
