<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ummahly | One Mission of Mercy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FDFBF7; /* Soft Off-White / Light Beige */
        }
        .hero-gradient {
            background: linear-gradient(rgba(100, 10, 30, 0.85), rgba(60, 5, 15, 0.95)), 
                        url('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }
        .burgundy-solid { background-color: #800020; }
        .text-burgundy { color: #800020; }
        .border-burgundy { border-color: #800020; }
        .bg-warm-gold { background-color: #D4AF37; }
        .text-warm-gold { color: #D4AF37; }
    </style>
</head>
<body class="antialiased text-slate-900">

    <nav class="absolute top-0 left-0 right-0 z-50 flex items-center justify-between px-8 py-6 lg:px-16">
        <div class="flex items-center gap-2">
            <div class="w-10 h-10 rounded-full bg-warm-gold flex items-center justify-center">
                <span class="text-white font-bold text-xl">U</span>
            </div>
            <span class="text-2xl font-extrabold tracking-tight text-white uppercase">Ummahly</span>
        </div>
        
        <div class="hidden md:flex items-center space-x-10 text-white font-medium">
            <a href="#" class="hover:text-warm-gold transition-colors">Home</a>
            <a href="#" class="hover:text-warm-gold transition-colors">Current Appeals</a>
            <a href="#" class="hover:text-warm-gold transition-colors">Our Programs</a>
            <a href="#" class="hover:text-warm-gold transition-colors">Get Involved</a>
        </div>

        <a href="#" class="burgundy-solid hover:bg-red-900 text-white px-8 py-3 rounded-md font-bold transition-all shadow-lg hover:-translate-y-0.5">
            Donate Now
        </a>
    </nav>

    <header class="hero-gradient min-h-screen flex items-center px-8 lg:px-16 pt-20">
        <div class="max-w-4xl">
            <h1 class="text-5xl lg:text-7xl font-extrabold text-white leading-tight tracking-tight mb-6">
                {{ setting('hero_title') }}<br>
                <span class="text-warm-gold">{{ setting('hero_highlight_text') }}</span>
            </h1>
            <p class="text-xl text-stone-200 mb-10 max-w-2xl leading-relaxed">
                {{ setting('hero_subtitle') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <button class="burgundy-solid text-white px-10 py-4 rounded-md font-bold text-lg shadow-xl hover:bg-red-950 transition-all">
                    {{ setting('hero_primary_cta_text') }}
                </button>
                <button class="border-2 border-white/30 text-white px-10 py-4 rounded-md font-bold text-lg hover:bg-white/10 backdrop-blur-sm transition-all">
                    {{ setting('hero_secondary_cta_text') }}
                </button>
            </div>
        </div>
    </header>

    <section class="py-24 px-8 lg:px-16">
        <div class="flex justify-between items-end mb-16">
            <div>
                <h2 class="text-4xl font-extrabold text-slate-900 mb-4">Urgent Appeals</h2>
                <p class="text-slate-600 max-w-md">Immediate action is required for these critical missions. Your contribution saves lives today.</p>
            </div>
            <a href="#" class="text-burgundy font-bold border-b-2 border-burgundy pb-1">View All Appeals</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-stone-100 group">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Gaza Relief">
                    <span class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 text-xs font-bold rounded">EMERGENCY</span>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-3">Gaza Emergency Relief</h3>
                    <p class="text-slate-600 mb-6 line-clamp-2">Providing hot meals and clean water to families displaced in the northern regions.</p>
                    <div class="mb-6">
                        <div class="flex justify-between text-sm font-bold mb-2">
                            <span>Raised: $425,000</span>
                            <span class="text-burgundy">85%</span>
                        </div>
                        <div class="w-full bg-stone-100 h-2 rounded-full overflow-hidden">
                            <div class="burgundy-solid h-full w-[85%] rounded-full"></div>
                        </div>
                    </div>
                    <button class="w-full border-2 border-burgundy text-burgundy font-bold py-3 rounded-lg hover:bg-burgundy hover:text-white transition-all">Donate To This Cause</button>
                </div>
            </div>
            </div>
    </section>

    <section class="bg-stone-100 py-20 px-8">
        <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
            <div>
                <span class="block text-5xl font-extrabold text-burgundy mb-2">14,250+</span>
                <span class="text-slate-500 font-medium uppercase tracking-widest text-sm">Families Supported</span>
            </div>
            <div>
                <span class="block text-5xl font-extrabold text-burgundy mb-2">320</span>
                <span class="text-slate-500 font-medium uppercase tracking-widest text-sm">Water Wells Built</span>
            </div>
            <div>
                <span class="block text-5xl font-extrabold text-burgundy mb-2">12</span>
                <span class="text-slate-500 font-medium uppercase tracking-widest text-sm">Countries Served</span>
            </div>
            <div>
                <span class="block text-5xl font-extrabold text-burgundy mb-2">100%</span>
                <span class="text-slate-500 font-medium uppercase tracking-widest text-sm">Transparency Policy</span>
            </div>
        </div>
    </section>

    <section class="py-24 px-8 lg:px-16 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-slate-900 mb-4">A Journey of Trust</h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-lg">Your contribution follows a rigorous path from intention to impact, ensuring every penny fulfills its purpose.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
                <div class="flex flex-col items-center text-center group">
                    <div class="w-20 h-20 rounded-full bg-[#FDFBF7] border border-stone-100 shadow-sm flex items-center justify-center mb-6 group-hover:border-burgundy transition-colors">
                        <span class="text-2xl font-bold text-burgundy">01</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">You Donate</h3>
                    <p class="text-slate-600 leading-relaxed px-4">Securely contribute your Sadaqah or Zakat through our encrypted fundraising platform.</p>
                </div>

                <div class="flex flex-col items-center text-center group">
                    <div class="w-20 h-20 rounded-full bg-[#FDFBF7] border border-stone-100 shadow-sm flex items-center justify-center mb-6 group-hover:border-burgundy transition-colors">
                        <span class="text-2xl font-bold text-burgundy">02</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">We Deploy Directly</h3>
                    <p class="text-slate-600 leading-relaxed px-4">Our on-ground teams and verified partners mobilize resources to provide immediate aid.</p>
                </div>

                <div class="flex flex-col items-center text-center group">
                    <div class="w-20 h-20 rounded-full bg-[#FDFBF7] border border-stone-100 shadow-sm flex items-center justify-center mb-6 group-hover:border-burgundy transition-colors">
                        <span class="text-2xl font-bold text-burgundy">03</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Transparent Updates</h3>
                    <p class="text-slate-600 leading-relaxed px-4">Receive verified reports, photos, and financial breakdowns of how your gift changed lives.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 px-8 bg-[#F9F7F2]">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl lg:text-5xl font-extrabold mb-8 italic">"One Donation, Infinite Rewards"</h2>
            <div class="w-24 h-1 burgundy-solid mx-auto mb-8"></div>
            <p class="text-xl text-slate-700 leading-relaxed mb-12">
                Our mission is rooted in the belief that every life has intrinsic value. By focusing on sustainable growth and transparent delivery, we ensure that your Sadaqah and Zakat create a lasting legacy of Barakah for generations to come.
            </p>
            <button class="text-burgundy font-bold text-lg hover:underline transition-all">Read Our Story &rarr;</button>
        </div>
    </section>

    <section class="py-24 px-8 lg:px-16 bg-[#FDFBF7]">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-white p-10 rounded-2xl shadow-sm border border-stone-100 relative">
                    <span class="text-warm-gold text-5xl font-serif absolute top-6 right-8 opacity-20">“</span>
                    <p class="text-lg text-slate-700 italic leading-relaxed mb-8">
                        “Seeing the detailed impact report gave me confidence that my donation truly reached families in need. The transparency level at Ummahly is exceptional compared to other foundations I’ve supported.”
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-stone-200"></div>
                        <div>
                            <h4 class="font-bold text-slate-900">Dr. Sarah Ahmed</h4>
                            <p class="text-sm text-slate-500">Monthly Donor</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-10 rounded-2xl shadow-sm border border-stone-100 relative">
                    <span class="text-warm-gold text-5xl font-serif absolute top-6 right-8 opacity-20">“</span>
                    <p class="text-lg text-slate-700 italic leading-relaxed mb-8">
                        “We partner with Ummahly for our annual CSR initiatives. Their professionalism and data-driven approach ensure that our corporate contributions achieve measurable social impact in the water sector.”
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-stone-200"></div>
                        <div>
                            <h4 class="font-bold text-slate-900">Omar Al-Farsi</h4>
                            <p class="text-sm text-slate-500">Corporate Partner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-8 lg:px-16 bg-white border-t border-stone-100">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-2">Where Your Donation Goes</h2>
                <p class="text-slate-500 uppercase tracking-widest text-xs font-bold">2025 Financial Transparency Report</p>
            </div>

            <div class="space-y-8">
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-bold text-slate-800">Direct Programs & Field Relief</span>
                        <span class="font-bold text-burgundy">88%</span>
                    </div>
                    <div class="w-full h-3 bg-stone-100 rounded-full overflow-hidden">
                        <div class="burgundy-solid h-full w-[88%]"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-bold text-slate-800">Advocacy & Fundraising</span>
                        <span class="font-bold text-burgundy">7%</span>
                    </div>
                    <div class="w-full h-3 bg-stone-100 rounded-full overflow-hidden">
                        <div class="bg-stone-400 h-full w-[7%]"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-bold text-slate-800">Operational Administration</span>
                        <span class="font-bold text-burgundy">5%</span>
                    </div>
                    <div class="w-full h-3 bg-stone-100 rounded-full overflow-hidden">
                        <div class="bg-stone-300 h-full w-[5%]"></div>
                    </div>
                </div>
            </div>

            <p class="mt-12 text-center text-slate-500 text-sm leading-relaxed max-w-2xl mx-auto">
                Our operations are audited by independent third parties to ensure the highest standards of financial integrity and compliance with international non-profit regulations.
            </p>
        </div>
    </section>

    <section class="bg-[#2D000A] text-white py-24 px-8 lg:px-16 overflow-hidden">
        <div class="grid lg:grid-cols-2 gap-16 items-center max-w-7xl mx-auto">
            <div>
                <h2 class="text-4xl font-extrabold mb-6">Global Reach, Local Impact.</h2>
                <p class="text-stone-400 text-lg mb-10 leading-relaxed">
                    We partner with verified on-ground organizations to ensure every dollar reaches the right hands. From the remote villages of Yemen to the bustling streets of Dhaka, our infrastructure is built for speed and accountability.
                </p>
                <div class="grid grid-cols-3 gap-8 opacity-40 grayscale">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5a/United_Nations_logo.png" class="h-12 object-contain" alt="Partner">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Red_Cross_logo.svg" class="h-12 object-contain" alt="Partner">
                    <img src="https://upload.wikimedia.org/wikipedia/en/3/3f/Islamic_Relief_Worldwide_logo.svg" class="h-12 object-contain" alt="Partner">
                </div>
            </div>
            <div class="relative">
                <div class="aspect-square bg-white/5 rounded-full absolute -top-20 -right-20 w-[600px] h-[600px] blur-3xl"></div>
                <img src="https://images.unsplash.com/photo-1526660690293-bcd32dc3b123?q=80&w=2070&auto=format&fit=crop" class="rounded-3xl relative z-10 shadow-2xl grayscale hover:grayscale-0 transition-all duration-700" alt="Global Impact">
            </div>
        </div>
    </section>

    <section class="py-24 px-8 lg:px-16 bg-[#FDFBF7]">
        <div class="max-w-6xl mx-auto">
            <div class="flex justify-between items-center mb-16">
                <h2 class="text-4xl font-extrabold text-slate-900">Latest from the Field</h2>
                <a href="#" class="text-burgundy font-bold hover:underline transition-all">View All Stories &rarr;</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="group">
                    <div class="aspect-[16/10] overflow-hidden rounded-xl mb-6 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="News">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-widest text-burgundy mb-3 block">Field Update</span>
                    <h3 class="text-xl font-bold mb-3 text-slate-900 group-hover:text-burgundy transition-colors leading-tight">Delivering Hope: Winter Kits Reach Remote Yemen</h3>
                    <p class="text-slate-600 mb-6 text-sm line-clamp-2">Our teams successfully reached over 400 families in the mountainous regions of Al-Mahwit with essential thermal blankets and fuel.</p>
                    <a href="#" class="font-bold text-slate-900 text-sm border-b border-stone-200 pb-1 group-hover:border-burgundy">Read More</a>
                </div>

                <div class="group">
                    <div class="aspect-[16/10] overflow-hidden rounded-xl mb-6 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1594608661623-aa0bd3a69d98?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="News">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-widest text-burgundy mb-3 block">Impact Report</span>
                    <h3 class="text-xl font-bold mb-3 text-slate-900 group-hover:text-burgundy transition-colors leading-tight">Sustainability Success: Solar Wells in Kenya</h3>
                    <p class="text-slate-600 mb-6 text-sm line-clamp-2">The completion of our 50th solar-powered well marks a milestone in providing permanent clean water access to 15,000 residents.</p>
                    <a href="#" class="font-bold text-slate-900 text-sm border-b border-stone-200 pb-1 group-hover:border-burgundy">Read More</a>
                </div>

                <div class="group">
                    <div class="aspect-[16/10] overflow-hidden rounded-xl mb-6 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1524062734658-0062a445076e?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="News">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-widest text-burgundy mb-3 block">Organization News</span>
                    <h3 class="text-xl font-bold mb-3 text-slate-900 group-hover:text-burgundy transition-colors leading-tight">Ummahly Foundation Awarded Transparency Seal</h3>
                    <p class="text-slate-600 mb-6 text-sm line-clamp-2">We are proud to announce our recognition by the Global Giving Council for 100% financial accountability and direct delivery ethics.</p>
                    <a href="#" class="font-bold text-slate-900 text-sm border-b border-stone-200 pb-1 group-hover:border-burgundy">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-stone-50 border-t border-stone-200 pt-20 pb-10 px-8 lg:px-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-20 max-w-7xl mx-auto">
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center gap-2 mb-6">
                    <div class="w-8 h-8 rounded-full bg-warm-gold flex items-center justify-center">
                        <span class="text-white font-bold text-sm">U</span>
                    </div>
                    <span class="text-xl font-extrabold tracking-tight text-burgundy uppercase">Ummahly</span>
                </div>
                <p class="text-slate-500 mb-6">
                    Registered UK Charity #123456789. <br/>
                    A global movement for human dignity.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 rounded-full border border-stone-300 flex items-center justify-center hover:bg-burgundy hover:text-white transition-all">F</a>
                    <a href="#" class="w-10 h-10 rounded-full border border-stone-300 flex items-center justify-center hover:bg-burgundy hover:text-white transition-all">X</a>
                    <a href="#" class="w-10 h-10 rounded-full border border-stone-300 flex items-center justify-center hover:bg-burgundy hover:text-white transition-all">I</a>
                </div>
            </div>
            <div>
                <h4 class="font-bold mb-6 text-slate-900">Our Programs</h4>
                <ul class="space-y-4 text-slate-600">
                    <li><a href="#" class="hover:text-burgundy">Food & Nutrition</a></li>
                    <li><a href="#" class="hover:text-burgundy">Water & Sanitation</a></li>
                    <li><a href="#" class="hover:text-burgundy">Education Support</a></li>
                    <li><a href="#" class="hover:text-burgundy">Emergency Response</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-6 text-slate-900">Transparency</h4>
                <ul class="space-y-4 text-slate-600">
                    <li><a href="#" class="hover:text-burgundy">Annual Reports</a></li>
                    <li><a href="#" class="hover:text-burgundy">Financial Statements</a></li>
                    <li><a href="#" class="hover:text-burgundy">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-burgundy">Trust Guarantee</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-6 text-slate-900">Newsletter</h4>
                <p class="text-sm text-slate-500 mb-4">Join 25,000+ donors receiving impact updates.</p>
                <form class="flex gap-2">
                    <input type="email" placeholder="Your email" class="bg-white border border-stone-300 rounded px-4 py-2 w-full focus:outline-none focus:border-burgundy">
                    <button class="burgundy-solid text-white px-4 py-2 rounded font-bold">→</button>
                </form>
            </div>
        </div>
        <div class="border-t border-stone-200 pt-8 text-center text-slate-400 text-sm">
            &copy; 2026 Ummahly Foundation. All rights reserved. Secure SSL Encrypted.
        </div>
    </footer>

</body>
</html>