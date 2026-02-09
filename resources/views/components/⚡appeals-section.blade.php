<?php

use App\Models\Project;
use Livewire\Component;

new class extends Component
{
    public $projects;

    public function mount(): void
    {
        $this->projects = Project::query()
            ->where('is_active', true)
            ->whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->limit(3)
            ->get();
    }

  
};
?>

<section class="py-24 px-8 lg:px-16">
    <div class="flex justify-between items-end mb-16">
        <div>
            <h2 class="text-4xl font-extrabold text-slate-900 mb-4">Urgent Appeals</h2>
            <p class="text-slate-600 max-w-md">Immediate action is required for these critical missions. Your
                contribution saves lives today.</p>
        </div>
        <a href="#" class="text-burgundy font-bold border-b-2 border-burgundy pb-1">View All Appeals</a>
    </div>

    @if($projects->isEmpty())
        <p class="text-slate-600 text-center py-12">No active appeals at the moment. Please check back soon.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            @foreach($projects as $project)
                @php
                    $percentage = $project->goal_amount > 0
                        ? min(100, (int) round((float) $project->raised_amount / (float) $project->goal_amount * 100))
                        : 0;
                @endphp
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-stone-100 group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('storage/' . $project->featured_image) }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            alt="{{ $project->title }}">
                        <span
                            class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 text-xs font-bold rounded">EMERGENCY</span>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-3">{{ $project->title }}</h3>
                        <p class="text-slate-600 mb-6 line-clamp-2">{{ $project->excerpt }}</p>
                        <div class="mb-6">
                            <div class="flex justify-between text-sm font-bold mb-2">
                                <span>Raised: ${{ number_format($project->raised_amount, 0) }}</span>
                                <span class="text-burgundy">{{ $percentage }}%</span>
                            </div>
                            <div class="w-full bg-stone-100 h-2 rounded-full overflow-hidden">
                                <div class="burgundy-solid h-full rounded-full" style="width: {{ $percentage }}%;"></div>
                            </div>
                        </div>
                        <button
                            class="w-full border-2 border-burgundy text-burgundy font-bold py-3 rounded-lg hover:bg-burgundy hover:text-white transition-all">Donate
                            To This Cause</button>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</section>
