<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ToastrNotification extends Component
{
    public function render()
    {
        return view('livewire.toastr-notification')->extends('layouts.app');
    }

    public function alertSuccess(){
        $this->dispatchBrowserEvent('alert',['type'=>'success','message'=>'success notification']);
    }

    public function alertError(){
        $this->dispatchBrowserEvent('alert',['type'=>'error','message'=>'error notification']);
    }

    public function alertInfo(){
        $this->dispatchBrowserEvent('alert',['type'=>'info','message'=>'info notification']);
    }
}
