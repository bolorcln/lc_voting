<?php

namespace Tests\Unit;

use App\Exceptions\DuplicateVoteException;
use App\Exceptions\VoteNotFoundException;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IdeaTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_check_if_idea_is_voted_for_by_user()
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
            'idea_id' => $idea->id,
            'user_id' => $userOne->id
        ]);

        $this->assertTrue($idea->isVotedBy($userOne));
        $this->assertFalse($idea->isVotedBy($userTwo));
        $this->assertFalse($idea->isVotedBy(null));
    }

    /** @test */
    public function user_can_vote_for_idea()
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

        $this->assertFalse($idea->isVotedBy($userOne));
        $idea->vote($userOne);
        $this->assertTrue($idea->isVotedBy($userOne));
    }

    /** @test */
    public function user_can_unvote_for_idea()
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
            'idea_id' => $idea->id,
            'user_id' => $userOne->id
        ]);

        $this->assertTrue($idea->isVotedBy($userOne));
        $idea->removeVote($userOne);
        $this->assertFalse($idea->isVotedBy($userOne));
    }

    /** @test */
    public function voting_for_an_idea_that_is_already_voted_for_throws_an_exception()
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
            'idea_id' => $idea->id,
            'user_id' => $userOne->id
        ]);

        $this->expectException(DuplicateVoteException::class);
        $idea->vote($userOne);
    }

    /** @test */
    public function removing_voting_for_an_idea_that_does_not_exist_throws_an_exception()
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

        $this->expectException(VoteNotFoundException::class);
        $idea->removeVote($userOne);
    }
}
