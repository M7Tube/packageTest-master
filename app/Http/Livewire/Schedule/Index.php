<?php

namespace App\Http\Livewire\Schedule;

use App\Models\Schedules;
use Livewire\Component;

class Index extends Component
{
    public $renderpage = "index.schedule";

    public function changepage($renderpage)
    {
        $this->renderpage = $renderpage;
    }

    public function render()
    {
        return view(
            'livewire.schedule.index',
            [
                'data' => Schedules::paginate(25),
            ]
        );
    }
}
