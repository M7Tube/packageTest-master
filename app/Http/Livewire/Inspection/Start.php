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
    public $data;
    public $title;
    public $desc;
    public $icon;
    public $optional_icon;
    public $list = [];
    public $pictures = [];
    protected $queryString = ['page'];


    public function mount()
    {
        // $this->page = 0;
        $this->template_id = request('id');
        $this->data = NewTemplate::find($this->template_id);
        $this->title = $this->data->title ?? null;
        $this->desc = $this->data->desc ?? null;
        $this->icon = $this->data->icon ?? null;
        $this->optional_icon = $this->data->optional_icon ?? null;
        foreach ($this->data['title_page'] as $key => $value) {
            $this->title_page_result[$key]['key'] = $value['title'] ?? null;
            $this->title_page_result[$key]['response'] = $value['response'] ?? null;
            if ($value['response'] != 6) {
                $this->title_page_result[$key]['value'] = null;
            }
            $this->title_page_result[$key]['note'] = null;
            if ($value['response'] == 2) {
                $this->title_page_result[$key]['value'] = $value['docNum_format'];
            } elseif ($value['response'] == 5) {
                $this->title_page_result[$key]['value'] = date("Y-m-d H:i:s");
            } elseif ($value['response'] == 7) {
                $this->title_page_result[$key]['value'] = ['option' => -1, 'key' => null, 'value' => null];
            }
        }
        foreach ($this->data['pages'] as $key => $value) {
            $this->page_result[$key]['pagetitle'] = $value['title'] ?? null;
            foreach ($value['question'] as $key2 => $value2) {
                $this->page_result[$key]['question'][$key2]['key'] = $value2['title'] ?? null;
                $this->page_result[$key]['question'][$key2]['response'] = $value2['response'] ?? null;
                if ($value2['response'] != 6) {
                    $this->page_result[$key]['question'][$key2]['value'] = null;
                }
                $this->page_result[$key]['question'][$key2]['note'] = null;
                if ($value2['response'] == 2) {
                    $this->page_result[$key]['question'][$key2]['value'] = $value2['docNum_format'];
                } elseif ($value2['response'] == 5) {
                    $this->page_result[$key]['question'][$key2]['value'] = date("Y-m-d H:i:s");
                } elseif ($value2['response'] == 7) {
                    $this->page_result[$key]['question'][$key2]['value'] = ['option' => -1, 'key' => null, 'value' => null];
                }
            }
        }
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
        $data = [
            'title_page' => $this->title_page_result,
            'pages' => $this->page_result,
        ];
        dd($data);
    }

    public function set_multiple_choice_value($questionKey, $optionKey, $title, $color)
    {
        $this->title_page_result[$questionKey]['value'] = ['option' => $optionKey, 'key' => $title, 'value' => $color];
    }

    public function page_set_multiple_choice_value($pageKey, $questionKey, $optionKey, $title, $color)
    {
        $this->page_result[$pageKey]['question'][$questionKey]['value'] = ['option' => $optionKey, 'key' => $title, 'value' => $color];
    }

    public function export()
    {
        // dd($this->page_result);
        return redirect()->route('new_export', ['title' => $this->title, 'desc' => $this->desc, 'icon' => $this->icon, 'optional_icon' => $this->optional_icon, 'title_page' => $this->title_page_result, 'pages' => $this->page_result]);
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

    // public function render()
    // {
    //     // $this->page = request('page');
    //     return view('livewire.inspection.start');
    // }
}
