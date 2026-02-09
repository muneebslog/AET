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
    <title>Gaza Emergency Relief | Ummahly Foundation</title>
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
            <a href="#" class="text-burgundy font-bold">Appeals</a>
            <a href="#" class="hover:text-burgundy transition-colors">News</a>
        </div>
        <a href="#" class="burgundy-solid text-white px-6 py-2 rounded font-bold text-sm">Donate Now</a>
    </nav>

    <header class="relative h-[60vh] min-h-[400px] overflow-hidden">
        <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="absolute bottom-0 left-0 right-0 p-8 lg:p-16 text-white bg-gradient-to-t from-black/80 to-transparent">
            <div class="max-w-7xl mx-auto">
                <span class="bg-red-600 text-white px-3 py-1 text-xs font-bold rounded mb-4 inline-block tracking-widest">CRITICAL EMERGENCY</span>
                <h1 class="text-4xl lg:text-6xl font-extrabold mb-4">Gaza Emergency Food Aid</h1>
                <p class="text-stone-200 text-lg max-w-2xl">Targeted distribution of hot meals and medical supplies in the northern regions.</p>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto py-16 px-8 lg:px-16 grid lg:grid-cols-3 gap-16">
        
        <div class="lg:col-span-2">
            <div class="prose prose-lg max-w-none text-slate-700 leading-relaxed space-y-8">
                <h2 class="text-3xl font-extrabold text-slate-900">The Situation</h2>
                <p>As the conflict intensifies, over 1.2 million people face acute food insecurity. Our teams on the ground have established mobile kitchens to provide immediate nutrition to families displaced in temporary shelters.</p>
                
                <h2 class="text-3xl font-extrabold text-slate-900">Our Response</h2>
                <p>In the last 30 days, Ummahly has delivered:</p>
                <ul class="list-disc pl-5 space-y-2 font-medium">
                    <li>15,000+ Hot Meals served daily</li>
                    <li>2,500 Hygiene Kits for women and children</li>
                    <li>Support for 3 local mobile clinics</li>
                </ul>

                <div class="grid grid-cols-2 gap-4 mt-8">
                    <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=2070&auto=format&fit=crop" class="rounded-xl shadow-sm">
                    <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?q=80&w=2070&auto=format&fit=crop" class="rounded-xl shadow-sm">
                </div>

                <h2 class="text-3xl font-extrabold text-slate-900">Zakat Eligibility</h2>
                <p class="bg-[#F9F7F2] p-6 border-l-4 border-warm-gold italic">This project is 100% Zakat eligible. We ensure that your Zakat is handled with strict compliance and distributed directly to the most vulnerable recipients (As-Sunnaf).</p>
            </div>
        </div>

        <div class="lg:col-span-1">
            <div class="sticky top-24 bg-white border border-stone-200 p-8 rounded-3xl shadow-xl">
                <div class="mb-8">
                    <div class="flex justify-between items-end mb-2">
                        <span class="text-3xl font-extrabold text-burgundy">$425,000</span>
                        <span class="text-slate-400 font-bold">of $500k goal</span>
                    </div>
                    <div class="w-full h-3 bg-stone-100 rounded-full overflow-hidden">
                        <div class="burgundy-solid h-full w-[85%]"></div>
                    </div>
                    <p class="text-sm text-slate-500 mt-3 font-medium text-center">Supported by 3,412 donors worldwide</p>
                </div>

                <div class="space-y-4">
                    <p class="font-bold text-slate-900 text-sm uppercase tracking-widest">Select Amount</p>
                    <div class="grid grid-cols-3 gap-2">
                        <button class="border-2 border-stone-100 py-3 rounded-lg font-bold hover:border-burgundy transition-all">$50</button>
                        <button class="border-2 border-burgundy bg-burgundy/5 py-3 rounded-lg font-bold text-burgundy">$100</button>
                        <button class="border-2 border-stone-100 py-3 rounded-lg font-bold hover:border-burgundy transition-all">$250</button>
                    </div>
                    <input type="number" placeholder="Other amount" class="w-full border-2 border-stone-100 rounded-lg p-4 focus:border-burgundy outline-none transition-all">
                    
                    <button class="w-full burgundy-solid text-white py-5 rounded-xl font-extrabold text-lg shadow-lg hover:bg-red-950 transition-all">
                        Donate Now
                    </button>
                    
                    <div class="flex items-center justify-center gap-2 text-xs text-slate-400 font-medium">
                        <span>Secure SSL Encryption</span>
                        <span>•</span>
                        <span>Official Receipt Provided</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>