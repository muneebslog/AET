<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest News | Ummahly Foundation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #FDFBF7; }
        .burgundy-solid { background-color: #800020; }
        .text-burgundy { color: #800020; }
        .bg-warm-gold { background-color: #D4AF37; }
    </style>
</head>
<body class="antialiased text-slate-900">

    <nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-stone-100 flex items-center justify-between px-8 py-4 lg:px-16">
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 rounded-full bg-warm-gold flex items-center justify-center">
                <span class="text-white font-bold text-lg">U</span>
            </div>
            <span class="text-xl font-extrabold tracking-tight text-burgundy uppercase">Ummahly</span>
        </div>
        <div class="hidden md:flex items-center space-x-8 text-slate-600 font-medium text-sm uppercase tracking-wider">
            <a href="index.html" class="hover:text-burgundy transition-colors">Home</a>
            <a href="projects.html" class="hover:text-burgundy transition-colors">Appeals</a>
            <a href="posts.html" class="text-burgundy font-bold">News</a>
        </div>
        <a href="#" class="burgundy-solid text-white px-6 py-2 rounded font-bold text-sm shadow-md">Donate Now</a>
    </nav>

    <section class="py-16 px-8 lg:px-16 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center bg-white p-8 lg:p-12 rounded-3xl border border-stone-100 shadow-sm">
            <div class="rounded-2xl overflow-hidden h-[400px]">
                <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover" alt="Featured Story">
            </div>
            <div>
                <span class="text-xs font-bold uppercase tracking-widest text-burgundy mb-4 block">Major Milestone</span>
                <h2 class="text-4xl font-extrabold mb-6 text-slate-900 leading-tight">2025 Annual Transparency Report: Every Dollar Accounted For</h2>
                <p class="text-slate-600 text-lg mb-8 leading-relaxed">
                    We have just released our independent audit for the fiscal year 2025. Explore how your contributions were distributed across 14 countries, maintaining our 100% donation policy.
                </p>
                <div class="flex items-center gap-4">
                    <button class="burgundy-solid text-white px-8 py-3 rounded-lg font-bold">Read Full Report</button>
                    <span class="text-sm text-slate-400">Feb 08, 2026 • 8 min read</span>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 px-8 lg:px-16 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
            
            <article class="group cursor-pointer">
                <div class="aspect-video rounded-2xl overflow-hidden mb-8 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-xs font-bold text-burgundy uppercase tracking-widest">Field Dispatch</span>
                    <span class="text-stone-300">•</span>
                    <span class="text-xs text-slate-400">Feb 02, 2026</span>
                </div>
                <h3 class="text-2xl font-extrabold text-slate-900 mb-4 group-hover:text-burgundy transition-colors">Yemen: Overcoming Logistics to Deliver Winter Kits</h3>
                <p class="text-slate-600 leading-relaxed mb-6">Our teams navigated mountainous terrain to reach 1,200 families who were previously cut off from aid networks...</p>
                <span class="font-bold border-b-2 border-burgundy pb-1">Read Story</span>
            </article>

            <article class="group cursor-pointer">
                <div class="aspect-video rounded-2xl overflow-hidden mb-8 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1594608661623-aa0bd3a69d98?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-xs font-bold text-burgundy uppercase tracking-widest">Global Impact</span>
                    <span class="text-stone-300">•</span>
                    <span class="text-xs text-slate-400">Jan 28, 2026</span>
                </div>
                <h3 class="text-2xl font-extrabold text-slate-900 mb-4 group-hover:text-burgundy transition-colors">The Ripple Effect: 50 Solar Wells Completed</h3>
                <p class="text-slate-600 leading-relaxed mb-6">Clean water access isn't just about thirst—it's about education and health. Meet the families whose lives changed this month...</p>
                <span class="font-bold border-b-2 border-burgundy pb-1">Read Story</span>
            </article>

        </div>

        <div class="mt-20 flex justify-center items-center gap-4">
            <button class="w-12 h-12 rounded border border-stone-200 flex items-center justify-center text-slate-400 hover:border-burgundy hover:text-burgundy transition-all">←</button>
            <button class="w-12 h-12 rounded burgundy-solid text-white font-bold">1</button>
            <button class="w-12 h-12 rounded border border-stone-200 flex items-center justify-center hover:border-burgundy hover:text-burgundy transition-all">2</button>
            <button class="w-12 h-12 rounded border border-stone-200 flex items-center justify-center hover:border-burgundy hover:text-burgundy transition-all">3</button>
            <button class="w-12 h-12 rounded border border-stone-200 flex items-center justify-center text-slate-400 hover:border-burgundy hover:text-burgundy transition-all">→</button>
        </div>
    </section>

    </body>
</html>