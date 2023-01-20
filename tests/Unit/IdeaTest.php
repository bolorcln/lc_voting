<?php

namespace Tests\Unit;

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
}
