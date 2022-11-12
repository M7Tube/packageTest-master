<?php

namespace App\Http\Livewire;

use App\Models\Template;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard',[
            'templates'=>Template::all(),
        ]);
    }

    public function manage($id)
    {
        $template=Template::where('template_id',$id)->first();
        return redirect('/');
    }
}
