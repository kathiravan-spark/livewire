<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;

class Counter extends Component
{
    public $count = 1;
    public $comments=[
        [
        'body'=>'Some quick example text to build on the card title and make up the bulk of the cards content',
        'created_at'=>'5 minutes ago',
        'creator'=>'kathiravan',
        ]
    ];
   
    public $newComment;
    public function addComment(){
     array_unshift($this->comments,
        [
            'body'=>$this->newComment,
            'created_at'=>Carbon::now()->diffForHumans(),
            'creator'=>'You'
        ]);
     
    }
    public function increment()
    {  
        $this->count++;
    }
    public function decrement()
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.counter' ,['count'=>$this->count,'comments'=>$this->comments,'newcomments'=>$this->newComment]);
    }
}
