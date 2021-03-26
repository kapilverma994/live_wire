<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public $comments=[
        [
          'body'=>'Some example text. Some example text.'  ,
          'author'=>'Author Name',
          'time'=>'3 sec ago'
        ]
    ];
    public $newcomment;
    public function addcomment(){
array_unshift($this->comments, ['body'=>$this->newcomment, 'author'=>'Author Name','time'=>Carbon::now()->diffForHumans()]);
    }

  
    public function render()
    {
        return view('livewire.comments');
    }
}
