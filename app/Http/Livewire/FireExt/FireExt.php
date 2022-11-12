<?php

namespace App\Http\Livewire\FireExt;

use App\Models\FireExt as ModelsFireExt;
use Livewire\Component;

class FireExt extends Component
{
    public $project_code;
    public $number;
    public $project_name;
    public $fire_extinguisher_type;
    public $weight;
    public $last_inspection;
    public $exp_date;

    public function mount()
    {
        $data = ModelsFireExt::where(['project_code' => request('project_code')], ['number' => request('number')])->first();
        $this->project_code=$data->project_code;
        $this->number=$data->number;
        $this->project_name=$data->project_name;
        $this->fire_extinguisher_type=$data->fire_extinguisher_type;
        $this->weight=$data->weight;
        $this->last_inspection=$data->last_inspection;
        $this->exp_date=$data->exp_date;
    }
    public function render()
    {
        return view('livewire.fire-ext.fire-ext');
    }
}
