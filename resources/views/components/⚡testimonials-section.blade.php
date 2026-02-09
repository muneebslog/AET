<?php

use App\Models\Testimonial;
use Livewire\Component;

new class extends Component
{
    public $testimonials;

    public function mount(): void
    {
        $this->testimonials = Testimonial::query()
            ->where('is_active', true)
            ->orderByRaw('is_featured DESC')
            ->latest()
            ->limit(2)
            ->get();
    }

    public function render()
    {
        return view('components.⚡testimonials-section');
    }
};
?>
<div class="">

@if($testimonials->isNotEmpty())
    <section class="py-24 px-8 lg:px-16 bg-[#FDFBF7]">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                @foreach($testimonials as $testimonial)
                    <div class="bg-white p-10 rounded-2xl shadow-sm border border-stone-100 relative">
                        <span class="text-warm-gold text-5xl font-serif absolute top-6 right-8 opacity-20">"</span>
                        <p class="text-lg text-slate-700 italic leading-relaxed mb-8">
                            {{ $testimonial->quote }}
                        </p>
                        <div class="flex items-center gap-4">
                            @if($testimonial->photo)
                                <img src="{{ asset('storage/' . $testimonial->photo) }}" alt="{{ $testimonial->name }}" class="w-12 h-12 rounded-full object-cover">
                            @else
                                <div class="w-12 h-12 rounded-full bg-stone-200 flex items-center justify-center text-slate-600 font-bold text-lg">
                                    {{ strtoupper(mb_substr(trim($testimonial->name), 0, 1)) }}
                                </div>
                            @endif
                            <div>
                                <h4 class="font-bold text-slate-900">{{ $testimonial->name }}</h4>
                                <p class="text-sm text-slate-500">
                                    {{ $testimonial->role }}
                                    @if($testimonial->organization)
                                        <span class="text-slate-500"> · {{ $testimonial->organization }}</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
</div>

