<?php

namespace Tests\Feature;

use App\Http\Livewire\IdeaIndex;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class VoteIndexPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function index_page_contains_idea_index_livewire_component()
    {
        $user = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $statusOpen = Status::factory()->create(['name' => 'Open']);
        $idea = Idea::factory()->create([
            'title' => 'My First Idea',
            'description' => 'Description for my first idea',
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id
        ]);

        $this->get(route('idea.index'))->assertSeeLivewire('idea-index');
    }

    /** @test */
    public function index_page_correctly_receives_votes_count()
    {
        $userOne = User::factory()->create();
        $userTwo = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $statusOpen = Status::factory()->create(['name' => 'Open']);
        $idea = Idea::factory()->create([
            'title' => 'My First Idea',
            'description' => 'Description for my first idea',
            'user_id' => $userOne->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id
        ]);

        Vote::factory()->create([
            'user_id' => $userOne->id,
            'idea_id' => $idea->id
        ]);
        Vote::factory()->create([
            'user_id' => $userTwo->id,
            'idea_id' => $idea->id
        ]);

        $this->get(route('idea.index'))
            ->assertViewHas('ideas', function ($ideas) {
                return $ideas->first()->votes_count == 2;
            });
    }

    /** @test */
    public function votes_count_shows_correctly_on_index_page_livewire_component()
    {
        $userOne = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $statusOpen = Status::factory()->create(['name' => 'Open']);
        $idea = Idea::factory()->create([
            'title' => 'My First Idea',
            'description' => 'Description for my first idea',
            'user_id' => $userOne->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id
        ]);

        Livewire::test(IdeaIndex::class, [
            'idea' => $idea,
            'votesCount' => 5
        ])
            ->assertSet('votesCount', 5);
    }

    /** @test */
    public function user_who_is_logged_in_shows_voted_if_idea_already_voted_for()
    {
        $userOne = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $statusOpen = Status::factory()->create(['name' => 'Open']);
        $idea = Idea::factory()->create([
            'title' => 'My First Idea',
            'description' => 'Description for my first idea',
            'user_id' => $userOne->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id
        ]);
        Vote::factory()->create([
            'user_id' => $userOne->id,
            'idea_id' => $idea->id
        ]);

        $response = $this->actingAs($userOne)->get(route('idea.index'));

        $ideaWithVotes = $response['ideas']->items()[0];

        Livewire::actingAs($userOne)
            ->test(IdeaIndex::class, [
                'idea' => $ideaWithVotes,
                'votesCount' => $ideaWithVotes->votes_count
            ])
            ->assertSet('hasVoted', true);
    }

    /** @test */
    public function user_who_is_not_logged_in_is_redirected_to_login_page_when_trying_to_vote()
    {
        $userOne = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $statusOpen = Status::factory()->create(['name' => 'Open']);
        $idea = Idea::factory()->create([
            'title' => 'My First Idea',
            'description' => 'Description for my first idea',
            'user_id' => $userOne->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id
        ]);

        Livewire::test(IdeaIndex::class, [
            'idea' => $idea,
            'votesCount' => 1
        ])
            ->call('vote')
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function user_who_is_logged_in_can_vote_for_idea()
    {
        $userOne = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $statusOpen = Status::factory()->create(['name' => 'Open']);
        $idea = Idea::factory()->create([
            'title' => 'My First Idea',
            'description' => 'Description for my first idea',
            'user_id' => $userOne->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id
        ]);

        $this->assertDatabaseMissing('votes', [
            'user_id' => $userOne->id,
            'idea_id' => $idea->id
        ]);

        Livewire::actingAs($userOne)
            ->test(IdeaIndex::class, [
                'idea' => $idea,
                'votesCount' => 1
            ])
            ->call('vote')
            ->assertSet('votesCount', 2)
            ->assertSet('hasVoted', true);

        $this->assertDatabaseHas('votes', [
            'user_id' => $userOne->id,
            'idea_id' => $idea->id
        ]);
    }
}
