<?php

namespace App\Http\Livewire\Inspection;

use App\Models\NewTemplate;
use PDF2;
use Livewire\Component;

class Start extends Component
{
    public $template_id;
    public $title_page_result;

    public function mount()
    {
        $this->template_id = request('id');
    }
    public function export()
    {
        dd($this->title_page_result);
        return redirect()->route('new_export', ['data' => $this->title_page_result]);
    }


    public function goBack()
    {
        return redirect()->route('create.template');
    }

    public function render()
    {
        return view('livewire.inspection.start', [
            'data' => NewTemplate::find($this->template_id),
        ]);
    }
}
