<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StatusTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_get_count_of_each_status()
    {
        $user = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $statusOpen = Status::factory()->create(['name' => 'Open']);
        $statusConsidering = Status::factory()->create(['name' => 'Considering']);
        $statusInProgress = Status::factory()->create(['name' => 'In Progress']);
        $statusImplemented = Status::factory()->create(['name' => 'Implemented']);
        $statusClosed = Status::factory()->create(['name' => 'Closed']);

        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id
        ]);

        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusConsidering->id
        ]);
        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusConsidering->id
        ]);

        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusInProgress->id
        ]);
        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusInProgress->id
        ]);
        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusInProgress->id
        ]);

        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id
        ]);
        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id
        ]);
        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id
        ]);
        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id
        ]);

        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusClosed->id
        ]);
        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusClosed->id
        ]);
        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusClosed->id
        ]);
        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusClosed->id
        ]);
        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusClosed->id
        ]);

        $statusCount = Status::getCount();
        $this->assertEquals(15, $statusCount['all_statuses']);
        $this->assertEquals(1, $statusCount['open']);
        $this->assertEquals(2, $statusCount['considering']);
        $this->assertEquals(3, $statusCount['in_progress']);
        $this->assertEquals(4, $statusCount['implemented']);
        $this->assertEquals(5, $statusCount['closed']);
    }
}
