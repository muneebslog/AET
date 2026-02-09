<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ummahly | One Mission of Mercy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FDFBF7;
            /* Soft Off-White / Light Beige */
        }

        .hero-gradient {
            background: linear-gradient(rgba(100, 10, 30, 0.85), rgba(60, 5, 15, 0.95)),
                url('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }

        .burgundy-solid {
            background-color: #800020;
        }

        .text-burgundy {
            color: #800020;
        }

        .border-burgundy {
            border-color: #800020;
        }

        .bg-warm-gold {
            background-color: #D4AF37;
        }

        .text-warm-gold {
            color: #D4AF37;
        }
    </style>
</head>

<body class="antialiased text-slate-900">
    @php
        $settings = \App\Models\Setting::pluck('value', 'key');
    @endphp

    <nav class="absolute top-0 left-0 right-0 z-50 flex items-center justify-between px-8 py-6 lg:px-16">
        <div class="flex items-center gap-2">
            <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center">
                <img src="{{ asset('img/logo.png') }}" alt="Ummahly Logo" class="w-full h-full object-contain">
            </div>
            <span class="text-2xl font-extrabold tracking-tight text-white uppercase">AET Foundation</span>
        </div>

        <div class="hidden md:flex items-center space-x-10 text-white font-medium">
            <a href="#" class="hover:text-warm-gold transition-colors">Home</a>
            <a href="#" class="hover:text-warm-gold transition-colors">Current Appeals</a>
            <a href="#" class="hover:text-warm-gold transition-colors">Posts & Updates</a>
            <a href="#" class="hover:text-warm-gold transition-colors">Get Involved</a>
        </div>

        <a href="#"
            class="burgundy-solid hover:bg-red-900 text-white px-8 py-3 rounded-md font-bold transition-all shadow-lg hover:-translate-y-0.5">
            Donate Now
        </a>
    </nav>
    <header class="hero-gradient min-h-screen flex items-center px-8 lg:px-16 pt-20">
        <div class="max-w-4xl">
            <h1 class="text-5xl lg:text-7xl font-extrabold text-white leading-tight tracking-tight mb-6">
                {{ $settings['hero_title'] ?? '' }}<br>
                <span class="text-warm-gold">{{ $settings['hero_highlight_text'] ?? '' }}</span>
            </h1>
            <p class="text-xl text-stone-200 mb-10 max-w-2xl leading-relaxed">
                {{ $settings['hero_subtitle'] ?? '' }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <button
                    class="burgundy-solid text-white px-10 py-4 rounded-md font-bold text-lg shadow-xl hover:bg-red-950 transition-all">
                    {{ $settings['hero_primary_cta_text'] ?? '' }}
                </button>
                <button
                    class="border-2 border-white/30 text-white px-10 py-4 rounded-md font-bold text-lg hover:bg-white/10 backdrop-blur-sm transition-all">
                    {{ $settings['hero_secondary_cta_text'] ?? '' }}
                </button>
            </div>
        </div>
    </header>
    <livewire:appeals-section />

    <livewire:stats-section />

    <section class="py-24 px-8 lg:px-16 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-slate-900 mb-4">{{ $settings['trust_section_title'] ?? '' }}
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-lg">{{ $settings['trust_section_subtitle'] ?? '' }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
                <div class="flex flex-col items-center text-center group">
                    <div
                        class="w-20 h-20 rounded-full bg-[#FDFBF7] border border-stone-100 shadow-sm flex items-center justify-center mb-6 group-hover:border-burgundy transition-colors">
                        <span class="text-2xl font-bold text-burgundy">01</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">{{ $settings['trust_step_1_title'] ?? '' }}</h3>
                    <p class="text-slate-600 leading-relaxed px-4">{{ $settings['trust_step_1_description'] ?? '' }}</p>
                </div>

                <div class="flex flex-col items-center text-center group">
                    <div
                        class="w-20 h-20 rounded-full bg-[#FDFBF7] border border-stone-100 shadow-sm flex items-center justify-center mb-6 group-hover:border-burgundy transition-colors">
                        <span class="text-2xl font-bold text-burgundy">02</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">{{ $settings['trust_step_2_title'] ?? '' }}</h3>
                    <p class="text-slate-600 leading-relaxed px-4">{{ $settings['trust_step_2_description'] ?? '' }}</p>
                </div>

                <div class="flex flex-col items-center text-center group">
                    <div
                        class="w-20 h-20 rounded-full bg-[#FDFBF7] border border-stone-100 shadow-sm flex items-center justify-center mb-6 group-hover:border-burgundy transition-colors">
                        <span class="text-2xl font-bold text-burgundy">03</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3">{{ $settings['trust_step_3_title'] ?? '' }}</h3>
                    <p class="text-slate-600 leading-relaxed px-4">{{ $settings['trust_step_3_description'] ?? '' }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 px-8 bg-[#F9F7F2]">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl lg:text-5xl font-extrabold mb-8 italic">{{ $settings['mission_quote_title'] ?? '' }}
            </h2>
            <div class="w-24 h-1 burgundy-solid mx-auto mb-8"></div>
            <p class="text-xl text-slate-700 leading-relaxed mb-12">
                {{ $settings['mission_description'] ?? '' }}
            </p>
            <button
                class="text-burgundy font-bold text-lg hover:underline transition-all">{{ $settings['mission_button_text'] ?? '' }}</button>
        </div>
    </section>

    <livewire:testimonials-section />

    <section class="py-24 px-8 lg:px-16 bg-white border-t border-stone-100">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-2">{{ $settings['transparency_title'] ?? '' }}</h2>
                <p class="text-slate-500 uppercase tracking-widest text-xs font-bold">
                    {{ $settings['transparency_subtitle'] ?? '' }}
                </p>
            </div>

            <div class="space-y-8">
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <span
                            class="font-bold text-slate-800">{{ $settings['transparency_programs_label'] ?? '' }}</span>
                        <span
                            class="font-bold text-burgundy">{{ $settings['transparency_programs_percent'] ?? '' }}%</span>
                    </div>
                    <div class="w-full h-3 bg-stone-100 rounded-full overflow-hidden">
                        <div class="burgundy-solid h-full"
                            style="width: {{ $settings['transparency_programs_percent'] ?? 88 }}%;"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2">
                        <span
                            class="font-bold text-slate-800">{{ $settings['transparency_fundraising_label'] ?? '' }}</span>
                        <span
                            class="font-bold text-burgundy">{{ $settings['transparency_fundraising_percent'] ?? '' }}%</span>
                    </div>
                    <div class="w-full h-3 bg-stone-100 rounded-full overflow-hidden">
                        <div class="bg-stone-400 h-full"
                            style="width: {{ $settings['transparency_fundraising_percent'] ?? 7 }}%;"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-bold text-slate-800">{{ $settings['transparency_admin_label'] ?? '' }}</span>
                        <span
                            class="font-bold text-burgundy">{{ $settings['transparency_admin_percent'] ?? '' }}%</span>
                    </div>
                    <div class="w-full h-3 bg-stone-100 rounded-full overflow-hidden">
                        <div class="bg-stone-300 h-full"
                            style="width: {{ $settings['transparency_admin_percent'] ?? 5 }}%;"></div>
                    </div>
                </div>
            </div>

            <p class="mt-12 text-center text-slate-500 text-sm leading-relaxed max-w-2xl mx-auto">
                {{ $settings['transparency_audit_text'] ?? '' }}
            </p>
        </div>
    </section>

    {{-- <section class="bg-[#2D000A] text-white py-24 px-8 lg:px-16 overflow-hidden">
        <div class="grid lg:grid-cols-2 gap-16 items-center max-w-7xl mx-auto">
            <div>
                <h2 class="text-4xl font-extrabold mb-6">{{ $settings['global_title'] ?? '' }}</h2>
                <p class="text-stone-400 text-lg mb-10 leading-relaxed">
                    {{ $settings['global_description'] ?? '' }}
                </p>
                <div class="grid grid-cols-3 gap-8 opacity-40 grayscale">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5a/United_Nations_logo.png"
                        class="h-12 object-contain" alt="Partner">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Red_Cross_logo.svg"
                        class="h-12 object-contain" alt="Partner">
                    <img src="https://upload.wikimedia.org/wikipedia/en/3/3f/Islamic_Relief_Worldwide_logo.svg"
                        class="h-12 object-contain" alt="Partner">
                </div>
            </div>
            <div class="relative">
                <div
                    class="aspect-square bg-white/5 rounded-full absolute -top-20 -right-20 w-[600px] h-[600px] blur-3xl">
                </div>
                @if(!empty($settings['global_image']))
                    <img src="{{ asset('storage/' . $settings['global_image']) }}"
                        class="rounded-3xl relative z-10 shadow-2xl grayscale hover:grayscale-0 transition-all duration-700"
                        alt="Global Impact">
                @else
                    <img src="https://images.unsplash.com/photo-1526660690293-bcd32dc3b123?q=80&w=2070&auto=format&fit=crop"
                        class="rounded-3xl relative z-10 shadow-2xl grayscale hover:grayscale-0 transition-all duration-700"
                        alt="Global Impact">
                @endif
            </div>
        </div>
    </section> --}}

    <livewire:posts-section />

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
                    {{ $settings['footer_registration_number'] ?? '' }} <br />
                    {{ $settings['footer_description'] ?? '' }}
                </p>
                <div class="flex space-x-4">
                    <a href="#"
                        class="w-10 h-10 rounded-full border border-stone-300 flex items-center justify-center hover:bg-burgundy hover:text-white transition-all">F</a>
                    <a href="#"
                        class="w-10 h-10 rounded-full border border-stone-300 flex items-center justify-center hover:bg-burgundy hover:text-white transition-all">X</a>
                    <a href="#"
                        class="w-10 h-10 rounded-full border border-stone-300 flex items-center justify-center hover:bg-burgundy hover:text-white transition-all">I</a>
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
                <p class="text-sm text-slate-500 mb-4">{{ $settings['footer_newsletter_text'] ?? '' }}</p>
                <form class="flex gap-2">
                    <input type="email" placeholder="Your email"
                        class="bg-white border border-stone-300 rounded px-4 py-2 w-full focus:outline-none focus:border-burgundy">
                    <button class="burgundy-solid text-white px-4 py-2 rounded font-bold">→</button>
                </form>
            </div>
        </div>
        <div class="border-t border-stone-200 pt-8 text-center text-slate-400 text-sm">
            {{ $settings['footer_copyright'] ?? '' }}
        </div>
        <div class="border-t border-stone-200 pt-8 text-center text-slate-400 text-sm">
            Admin Panel: <a  href="{{ url('admin') }}" class="text-burgundy">Click here</a>
        </div>
    </footer>

</body>

</html>