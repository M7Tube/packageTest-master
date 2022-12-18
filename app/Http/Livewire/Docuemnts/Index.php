<?php

namespace App\Http\Livewire\Docuemnts;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Index extends Component
{
    public $data;

    public function mount()
    {
        $path = storage_path('app/pdf');
        $this->data = Storage::disk()->listContents('pdf');
        // dd($this->data);
    }

    public function download($name)
    {
        return Storage::download('pdf/'.$name);
    }

    public function render()
    {
        return view('livewire.docuemnts.index');
    }
}
