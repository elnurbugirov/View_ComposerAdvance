<?php


namespace App\Http\View\Composers;


use App\Channel;
use Illuminate\View\View;

class ChannelComposers
{
    public function compose(View $view){
        $view->with('channels',Channel::orderBy('name')->get());
    }

}
