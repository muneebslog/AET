<?php

use App\Models\Post;
use Livewire\Component;

new class extends Component
{
    /** @var \Illuminate\Database\Eloquent\Collection<int, \App\Models\Post> */
    public $posts;

    public function mount(): void
    {
        $this->posts = Post::query()
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->limit(3)
            ->get();
    }
};
?>

<div class="">

@if($posts->isNotEmpty())
<section class="py-24 px-8 lg:px-16 bg-[#FDFBF7]">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-16">
            <h2 class="text-4xl font-extrabold text-slate-900">Latest from the Field</h2>
            <a href="#" class="text-burgundy font-bold hover:underline transition-all">View All Stories &rarr;</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            @foreach($posts as $post)
            <div class="group">
                <div class="aspect-[16/10] overflow-hidden rounded-xl mb-6 shadow-sm">
                    @if($post->featured_image)
                    <img src="{{ asset('storage/' . $post->featured_image) }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        alt="{{ $post->title }}">
                    @else
                    <div class="w-full h-full bg-slate-200 group-hover:scale-105 transition-transform duration-500"></div>
                    @endif
                </div>
                @if($post->category ?? null)
                <span class="text-xs font-bold uppercase tracking-widest text-burgundy mb-3 block">{{ is_object($post->category) ? $post->category->name : $post->category }}</span>
                @endif
                <span class="text-xs text-slate-500 mb-3 block">{{ $post->published_at->format('F j, Y') }}</span>
                <h3
                    class="text-xl font-bold mb-3 text-slate-900 group-hover:text-burgundy transition-colors leading-tight">
                    <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                </h3>
                <p class="text-slate-600 mb-6 text-sm line-clamp-2">{{ $post->excerpt }}</p>
                <a href="{{ route('posts.show', $post->slug) }}"
                    class="font-bold text-slate-900 text-sm border-b border-stone-200 pb-1 group-hover:border-burgundy">Read
                    More</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
</div>
