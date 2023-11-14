<?php

namespace App\Livewire;

use App\Models\Feedbacks as Feedbacks;
use App\Models\Topics;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Feedback extends Component
{
    public $reaction_id = 1;

    public $message = null;

    public $topic_id = null;

    public $follow = false;

    public $name = null;

    public $contact = null;

    public function checkRule() {
        $this->validate([
            'reaction_id' => 'required|numeric',
            'message' => 'required',
            'topic_id' => 'required|numeric',
            'follow' => 'required|boolean'
        ]);

        if ($this->follow) {
            Validator::make([
                'name' => $this->name,
                'contact' => $this->contact
            ], [
                'name' => 'required',
                'contact' => 'required'
            ])->validate();
        }

        if (Feedbacks::create([
            'reaction_id' => $this->reaction_id,
            'message' => $this->message,
            'topic_id' => $this->topic_id,
            'follow' => $this->follow,
            'name' => $this->name,
            'contact' => $this->contact
        ]))
        {
            return redirect()->route('feedback_success')->with([
                'feedback_success' => 1
            ]);
        }

        return back();
    }

    public function render()
    {
        return view('livewire.feedback', [
            'topics' => Topics::all()
        ]);
    }
}
