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
    // public $last_doc;
    public $list = [];
    public $pictures = [];
    protected $queryString = ['page'];


    public function mount()
    {
        // $this->page = 0;
        $this->template_id = request('id');
    }

    public function updatedPictures()
    {
        // $this->list = [];
        if ($this->pictures) {
            foreach ($this->pictures as $value) {
                array_push($this->list, $value->getClientOriginalName());
                $value->storeAs('images', $value->getClientOriginalName());
            }
        }
        if (!empty($this->list) && $this->list != []) {
            $this->pictures = $this->list;
        } else {
            array_push($this->pictures, $this->list);
        }
    }
    public function test()
    {
        dd($this->pictures);
    }
    public function export()
    {
        // dd($this->page_result);
        return redirect()->route('new_export', ['title_page' => $this->title_page_result, 'pages' => $this->page_result]);
    }

    public function next_page()
    {
        $this->page++;
        $this->emit('gotoTop');
        // $this->render();
    }

    public function previous_page()
    {
        $this->page--;
        $this->emit('gotoTop');
        // $this->render();
    }

    public function render()
    {
        // $this->page = request('page');
        return view('livewire.inspection.start', [
            'data' => NewTemplate::find($this->template_id),
        ]);
    }
}
