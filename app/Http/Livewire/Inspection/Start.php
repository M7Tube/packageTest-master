<?php

namespace App\Http\Livewire\Inspection;

use App\Models\NewTemplate;
use PDF2;
use Livewire\Component;
use Livewire\WithFileUploads;

class Start extends Component
{
    use WithFileUploads;

    public $template_id;
    public $page;
    public $title_page_result;
    public $page_result;
    public $pictures = [];
    protected $queryString = ['page'];


    public function mount()
    {
        // $this->page = 0;
        $this->template_id = request('id');
    }

    public function updatedPictures()
    {
        $list = [];
        if ($this->pictures) {
            foreach ($this->pictures as $value) {
                array_push($list, $value->getClientOriginalName());
                $value->storeAs('images', $value->getClientOriginalName());
            }
            array_push($this->pictures, $list);
        }
        $this->pictures = $list;
    }
    public function test()
    {
        dd($this->title_page_result);
    }
    public function export()
    {
        dd($this->title_page_result);
        return redirect()->route('new_export', ['data' => $this->title_page_result]);
    }

    // public function next_page()
    // {
    //     $this->page++;
    //     // $this->render();
    // }

    public function render()
    {
        // $this->page = request('page');
        return view('livewire.inspection.start', [
            'data' => NewTemplate::find($this->template_id),
        ]);
    }
}
