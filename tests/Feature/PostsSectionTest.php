<?php

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('latest from the field section is hidden when no published posts exist', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertDontSee('Latest from the Field', false);
});

test('latest from the field section shows published posts', function () {
    $post = Post::factory()->published()->create([
        'title' => 'Test Post Title',
        'excerpt' => 'Test excerpt text',
    ]);

    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('Latest from the Field', false);
    $response->assertSee('Test Post Title', false);
    $response->assertSee('Test excerpt text', false);
    $response->assertSee($post->published_at->format('F j, Y'), false);
    $response->assertSee(route('posts.show', $post->slug), false);
});
