<?php

namespace Tests\Feature;

use App\Http\Livewire\IdeasIndex;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SearchFiltersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function searching_works_when_more_than_3_characters()
    {
        $user = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Category 2']);
        $statusImplemented = Status::factory()->create(['id' => 4, 'name' => 'Implemented']);
        $ideaOne = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id,
            'title' => 'My First Idea'
        ]);
        $ideaTwo = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id,
            'title' => 'My Second Idea'
        ]);
        $ideaTwo = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id,
            'title' => 'My Third Idea'
        ]);

        Livewire::test(IdeasIndex::class)
            ->set('search', 'Second')
            ->assertViewHas('ideas', function ($ideas) {
                return $ideas->count() == 1
                    && $ideas->first()->title = 'My Second Idea';
            });
    }

    /** @test */
    public function does_not_perform_search_when_less_than_3_characters()
    {
        $user = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Category 2']);
        $statusImplemented = Status::factory()->create(['id' => 4, 'name' => 'Implemented']);
        $ideaOne = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id,
            'title' => 'My First Idea'
        ]);
        $ideaTwo = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id,
            'title' => 'My Second Idea'
        ]);
        $ideaTwo = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id,
            'title' => 'My Third Idea'
        ]);

        Livewire::test(IdeasIndex::class)
            ->set('search', 'ab')
            ->assertViewHas('ideas', function ($ideas) {
                return $ideas->count() == 3;
            });
    }

    /** @test */
    public function search_works_correctly_with_category_filters()
    {
        $user = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Category 2']);
        $statusImplemented = Status::factory()->create(['id' => 4, 'name' => 'Implemented']);
        $ideaOne = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryTwo->id,
            'status_id' => $statusImplemented->id,
            'title' => 'My First Ide'
        ]);
        $ideaTwo = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id,
            'title' => 'My Second Idea'
        ]);
        $ideaTwo = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryTwo->id,
            'status_id' => $statusImplemented->id,
            'title' => 'My Third Idea'
        ]);

        Livewire::test(IdeasIndex::class)
            ->set('search', 'Idea')
            ->set('category', 'Category 2')
            ->assertViewHas('ideas', function ($ideas) {
                return $ideas->count() == 1 && $ideas->first()->title == 'My Third Idea';
            });
    }
}
