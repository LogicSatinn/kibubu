"use client"

import { useState } from "react"
import { Button } from "@/Components/ui/button"
import { CircleDollarSign, Play, CheckCircle2 } from "lucide-react"

export default function HeroSection() {
    const [isHovering, setIsHovering] = useState(false)

    return (
        <section className="relative min-h-screen w-full flex items-center justify-center overflow-hidden">
            {/* Background with gradient */}
            <div className="absolute inset-0 bg-gradient-to-br from-emerald-50 via-sky-50 to-white" />

            {/* Decorative elements */}
            <div className="absolute top-1/4 -left-20 w-96 h-96 bg-emerald-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" />
            <div
                className="absolute bottom-1/4 -right-20 w-96 h-96 bg-sky-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"
                style={{ animationDelay: "2s" }}
            />
            <div
                className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-amber-200 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse"
                style={{ animationDelay: "4s" }}
            />

            {/* Main content container */}
            <div className="container mx-auto px-4 relative z-10 max-w-4xl">
                <div className="text-center">
                    {/* Logo */}
                    <div className="mb-8 inline-flex items-center justify-center p-3 bg-white rounded-full shadow-lg">
                        <CircleDollarSign className="w-12 h-12 text-emerald-500" />
                    </div>

                    {/* Main Heading with animation */}
                    <h1 className="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-800 mb-6 leading-tight animate-fade-in">
                        Simplify Your Finances <br className="hidden sm:block" />
                        with Kibobo
                    </h1>

                    {/* Subheading */}
                    <p className="text-lg md:text-xl text-slate-600 mb-10 max-w-2xl mx-auto leading-relaxed">
                        Track your spending, create budgets, and reach your financial goals with our intuitive and powerful
                        budgeting tools.
                    </p>

                    {/* CTA Buttons */}
                    <div className="flex flex-col sm:flex-row gap-4 justify-center">
                        <Button
                            size="lg"
                            className="px-8 py-7 bg-emerald-500 hover:bg-emerald-600 text-white font-medium rounded-full shadow-lg hover:shadow-xl transition-all duration-300 text-lg hover:scale-105"
                            onMouseEnter={() => setIsHovering(true)}
                            onMouseLeave={() => setIsHovering(false)}
                        >
                            Start Budgeting for Free
                        </Button>

                        <Button
                            variant="outline"
                            size="lg"
                            className="px-8 py-7 bg-white hover:bg-slate-100 text-slate-700 font-medium rounded-full shadow-md hover:shadow-lg transition-all duration-300 text-lg border border-slate-200"
                        >
                            <Play className="mr-2 h-4 w-4" /> Watch Demo
                        </Button>
                    </div>

                    {/* Trust Indicators */}
                    <div className="mt-12 text-slate-500 flex items-center justify-center gap-8 flex-wrap">
                        <span className="flex items-center">
                            <CheckCircle2 className="w-5 h-5 mr-2 text-emerald-500" />
                            Bank-level security
                        </span>
                        <span className="flex items-center">
                            <CheckCircle2 className="w-5 h-5 mr-2 text-emerald-500" />
                            50,000+ happy users
                        </span>
                        <span className="flex items-center">
                            <CheckCircle2 className="w-5 h-5 mr-2 text-emerald-500" />
                            Free to get started
                        </span>
                    </div>
                </div>
            </div>

            {/* Scroll indicator */}
            <div className="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                <svg className="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>

            {/* Custom animations */}
            {/* <style jsx global>{`
        @keyframes fade-in {
          0% { opacity: 0; transform: translateY(10px); }
          100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
          animation: fade-in 0.8s ease-out forwards;
        }
        .animate-pulse {
          animation: pulse 6s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        @keyframes pulse {
          0%, 100% { opacity: 0.1; }
          50% { opacity: 0.2; }
        }
      `}</style> */}
        </section>
    )
}
