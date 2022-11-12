<?php

namespace App\Http\Livewire\Inspection;

use App\Models\NewTemplate;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view(
            'livewire.inspection.index',
            [
                'data' => NewTemplate::latest()->paginate(25),
            ]
        );
    }
}
