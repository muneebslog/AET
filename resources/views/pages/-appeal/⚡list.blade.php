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
    <title>Our Projects | Ummahly Foundation</title>
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
            <a href="projects.html" class="text-burgundy font-bold">Appeals</a>
            <a href="posts.html" class="hover:text-burgundy transition-colors">News</a>
        </div>
        <a href="#" class="burgundy-solid text-white px-6 py-2 rounded font-bold text-sm shadow-md">Donate Now</a>
    </nav>

    <header class="py-20 px-8 lg:px-16 bg-[#F9F7F2] border-b border-stone-100">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-4xl lg:text-6xl font-extrabold text-slate-900 mb-6 tracking-tight">Current Appeals</h1>
            <p class="text-xl text-slate-600 max-w-2xl leading-relaxed">
                Directing resources to where they are needed most. Every project is vetted, monitored, and reported with 100% transparency.
            </p>
        </div>
    </header>

    <main class="py-16 px-8 lg:px-16 max-w-7xl mx-auto">
        <div class="flex flex-wrap gap-4 mb-12 items-center border-b border-stone-100 pb-8">
            <span class="text-sm font-bold text-slate-400 uppercase tracking-widest mr-4">Filter by:</span>
            <button class="px-6 py-2 rounded-full bg-burgundy text-white font-bold text-sm">All Appeals</button>
            <button class="px-6 py-2 rounded-full bg-white border border-stone-200 text-slate-600 hover:border-burgundy font-bold text-sm transition-all">Emergency Relief</button>
            <button class="px-6 py-2 rounded-full bg-white border border-stone-200 text-slate-600 hover:border-burgundy font-bold text-sm transition-all">Water Projects</button>
            <button class="px-6 py-2 rounded-full bg-white border border-stone-200 text-slate-600 hover:border-burgundy font-bold text-sm transition-all">Education</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-stone-100 flex flex-col">
                <div class="h-64 relative">
                    <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded text-xs font-extrabold text-burgundy uppercase">Palestine</div>
                </div>
                <div class="p-8 flex-grow">
                    <h3 class="text-2xl font-extrabold mb-4 text-slate-900">Gaza Emergency Food Aid</h3>
                    <p class="text-slate-600 mb-8 text-sm leading-relaxed">Deploying emergency hot meals and hydration kits to northern Gaza where supply chains are severed.</p>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex justify-between text-sm font-bold">
                            <span class="text-slate-400">Target: $500,000</span>
                            <span class="text-burgundy">82%</span>
                        </div>
                        <div class="w-full h-2 bg-stone-100 rounded-full overflow-hidden">
                            <div class="burgundy-solid h-full w-[82%]"></div>
                        </div>
                    </div>
                </div>
                <div class="p-8 pt-0">
                    <button class="w-full burgundy-solid text-white py-4 rounded-xl font-bold hover:bg-red-950 transition-all">Support This Project</button>
                </div>
            </div>

            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-stone-100 flex flex-col">
                <div class="h-64 relative">
                    <img src="https://images.unsplash.com/photo-1509099836639-18ba1795216d?q=80&w=2062&auto=format&fit=crop" class="w-full h-full object-cover">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded text-xs font-extrabold text-burgundy uppercase">Tanzania</div>
                </div>
                <div class="p-8 flex-grow">
                    <h3 class="text-2xl font-extrabold mb-4 text-slate-900">Sustainable Well Construction</h3>
                    <p class="text-slate-600 mb-8 text-sm leading-relaxed">Building 12 solar-powered water extraction units to provide clean water to 4,500 villagers.</p>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex justify-between text-sm font-bold">
                            <span class="text-slate-400">Target: $75,000</span>
                            <span class="text-burgundy">45%</span>
                        </div>
                        <div class="w-full h-2 bg-stone-100 rounded-full overflow-hidden">
                            <div class="burgundy-solid h-full w-[45%]"></div>
                        </div>
                    </div>
                </div>
                <div class="p-8 pt-0">
                    <button class="w-full burgundy-solid text-white py-4 rounded-xl font-bold hover:bg-red-950 transition-all">Support This Project</button>
                </div>
            </div>

            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-stone-100 flex flex-col">
                <div class="h-64 relative">
                    <img src="https://images.unsplash.com/photo-1524062734658-0062a445076e?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded text-xs font-extrabold text-burgundy uppercase">Regional</div>
                </div>
                <div class="p-8 flex-grow">
                    <h3 class="text-2xl font-extrabold mb-4 text-slate-900">Zakat Fund 2026</h3>
                    <p class="text-slate-600 mb-8 text-sm leading-relaxed">Our general Zakat fund distributes wealth to the 8 eligible categories across all our operational zones.</p>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex justify-between text-sm font-bold">
                            <span class="text-slate-400">Total Pooled: $1.2M</span>
                            <span class="text-burgundy">Ongoing</span>
                        </div>
                        <div class="w-full h-2 bg-stone-100 rounded-full overflow-hidden">
                            <div class="bg-warm-gold h-full w-full"></div>
                        </div>
                    </div>
                </div>
                <div class="p-8 pt-0">
                    <button class="w-full burgundy-solid text-white py-4 rounded-xl font-bold hover:bg-red-950 transition-all">Contribute Zakat</button>
                </div>
            </div>
        </div>
    </main>

    </body>
</html>