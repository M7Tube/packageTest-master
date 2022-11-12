<?php

namespace App\Http\Livewire\Template;

use App\Models\NewTemplate;
use Livewire\Component;

class Preview extends Component
{
    public $template_id;

    public function mount()
    {
        $this->template_id = request('id');
    }

    public function render()
    {
        return view('livewire.template.preview', [
            'data' => NewTemplate::find($this->template_id),
        ]);
    }
}
