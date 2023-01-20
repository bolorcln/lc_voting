<?php

namespace App\Http\Livewire;

use App\Exceptions\DuplicateVoteException;
use App\Exceptions\VoteNotFoundException;
use App\Models\Idea;
use Livewire\Component;

class IdeaShow extends Component
{
    public $idea;
    public $votesCount;
    public $hasVoted;

    public function mount(Idea $idea, $votesCount)
    {
        $this->idea = $idea;
        $this->votesCount = $votesCount;
        $this->hasVoted = $idea->isVotedBy(auth()->user());
    }

    public function vote()
    {
        if (!auth()->check()) {
            return redirect(route('login'));
        }

        $user = auth()->user();
        if ($this->hasVoted) {
            try {
                $this->idea->removeVote($user);
            } catch (VoteNotFoundException $e) {
            }
            $this->votesCount--;
            $this->hasVoted = false;
        } else {
            try {
                $this->idea->vote($user);
            } catch (DuplicateVoteException $e) {
            }
            $this->votesCount++;
            $this->hasVoted = true;
        }
    }

    public function render()
    {
        return view('livewire.idea-show');
    }
}
