<?php

use App\Models\ImpactStatistic;
use Livewire\Component;

new class extends Component
{
    public $stats;

    public function mount(): void
    {
        $this->stats = ImpactStatistic::query()
            ->where('is_active', true)
            ->orderBy('order_column')
            ->get();
    }

    public function render()
    {
        return view('components.⚡stats-section');
    }
};
?>

<div>
    @if($stats->isNotEmpty())
    <section class="bg-stone-100 py-20 px-8">
        <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
            @foreach($stats as $stat)
                <div>
                    <span class="block text-5xl font-extrabold text-burgundy mb-2">
                        @if($stat->numeric_value !== null)
                            {{ number_format($stat->numeric_value) }}{{ $stat->suffix ?? '' }}
                        @else
                            {{ $stat->value }}
                        @endif
                    </span>
                    <span class="text-slate-500 font-medium uppercase tracking-widest text-sm">{{ $stat->label }}</span>
                </div>
            @endforeach
        </div>
    </section>
    @endif
</div>
