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
    <title>Yemen Winter Update | Ummahly Foundation</title>
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

    <nav class="bg-white border-b border-stone-100 flex items-center justify-between px-8 py-4 lg:px-16">
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 rounded-full bg-warm-gold flex items-center justify-center"><span class="text-white font-bold text-lg">U</span></div>
            <span class="text-xl font-extrabold tracking-tight text-burgundy uppercase">Ummahly</span>
        </div>
        <div class="hidden md:flex items-center space-x-8 text-slate-600 font-medium text-sm uppercase tracking-wider">
            <a href="#" class="hover:text-burgundy transition-colors">Home</a>
            <a href="#" class="hover:text-burgundy transition-colors">Appeals</a>
            <a href="#" class="text-burgundy font-bold">News</a>
        </div>
    </nav>

    <header class="pt-24 pb-16 px-8 max-w-4xl mx-auto text-center">
        <span class="text-xs font-bold uppercase tracking-[0.2em] text-burgundy mb-6 block">Field Dispatch — Yemen</span>
        <h1 class="text-4xl lg:text-6xl font-extrabold text-slate-900 leading-tight mb-8">Delivering Hope: Winter Kits Reach Remote Yemen</h1>
        <div class="flex items-center justify-center gap-4 text-sm text-slate-500">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=100&auto=format&fit=crop" class="w-10 h-10 rounded-full grayscale">
            <div class="text-left">
                <p class="font-bold text-slate-900">Hassan Al-Tayeb</p>
                <p>Regional Director, MENA</p>
            </div>
            <span class="mx-2">•</span>
            <span>February 08, 2026</span>
        </div>
    </header>

    <div class="max-w-6xl mx-auto px-8 mb-16">
        <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?q=80&w=2070&auto=format&fit=crop" class="w-full aspect-[21/9] object-cover rounded-3xl shadow-lg">
        <p class="text-center text-stone-400 text-sm mt-4 italic">Our logistics team navigating the Al-Mahwit mountain passes to deliver thermal blankets.</p>
    </div>

    <article class="max-w-3xl mx-auto px-8 py-8">
        <div class="prose prose-lg prose-slate leading-relaxed space-y-10">
            <p class="text-2xl font-medium text-slate-800 leading-normal">
                As temperatures plummet in the highlands of Yemen, the struggle for survival intensifies. For the thousands of families living in temporary shelters, winter is not just a season—it is a life-threatening crisis.
            </p>
            <p>
                Last week, our field teams completed the distribution of 1,200 heavy-duty winter kits. Each kit contains high-thermal blankets, floor mats, solar lanterns, and fuel for heating. We prioritize families with orphans, the elderly, and those with disabilities.
            </p>
            <blockquote class="border-l-4 border-burgundy pl-8 my-12 italic text-2xl font-semibold text-slate-900">
                "We haven't seen an aid truck in this village for eight months. These blankets mean my children will sleep tonight without shivering."
            </blockquote>
            <p>
                Our work in Yemen is ongoing. Despite the logistical challenges and the difficulty of the terrain, Ummahly remains committed to reaching the most isolated communities. This delivery was made possible by our dedicated monthly donors.
            </p>
        </div>

        <div class="mt-20 pt-10 border-t border-stone-100 flex flex-col sm:flex-row justify-between items-center gap-6">
            <div class="flex gap-2">
                <span class="bg-stone-100 px-4 py-2 rounded-md text-xs font-bold text-slate-600">YEMEN</span>
                <span class="bg-stone-100 px-4 py-2 rounded-md text-xs font-bold text-slate-600">WINTER RELIEF</span>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-sm font-bold text-slate-400 uppercase tracking-widest">Share:</span>
                <button class="w-8 h-8 rounded-full border border-stone-200 flex items-center justify-center text-slate-600 hover:text-burgundy transition-all">FB</button>
                <button class="w-8 h-8 rounded-full border border-stone-200 flex items-center justify-center text-slate-600 hover:text-burgundy transition-all">X</button>
            </div>
        </div>
    </article>

    <section class="max-w-4xl mx-auto px-8 mb-24">
        <div class="burgundy-solid p-12 rounded-[2rem] text-center text-white relative overflow-hidden">
            <div class="relative z-10">
                <h3 class="text-3xl font-extrabold mb-4">Help us reach more families</h3>
                <p class="text-stone-300 mb-8 max-w-md mx-auto">Your continuous support allows us to plan these missions months in advance.</p>
                <button class="bg-warm-gold text-white px-10 py-4 rounded-xl font-extrabold shadow-xl hover:scale-105 transition-transform">Support Our Winter Appeal</button>
            </div>
            <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-white/5 rounded-full"></div>
        </div>
    </section>

</body>
</html>