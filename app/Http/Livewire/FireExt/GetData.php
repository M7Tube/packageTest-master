<?php

namespace App\Http\Livewire\FireExt;

use App\Models\AccessCode;
use App\Models\FireExt;
use Livewire\Component;

class GetData extends Component
{
    public $project_code;
    public $number;

    public $code;
    public $codeMessage;
    public $SuccesscodeMessage;

    public $errormessage;

    public function updatedProjectCode()
    {
        $this->validate([
            'project_code' => ['required', 'integer'],
            'number' => ['required', 'integer'],
        ]);
    }

    public function updatedNumber()
    {
        $this->validate([
            'project_code' => ['required', 'integer'],
            'number' => ['required', 'integer'],
        ]);
    }

    public function submit()
    {
        $this->validate([
            'project_code' => ['required', 'integer'],
            'number' => ['required', 'integer'],
        ]);
        $data = FireExt::where(['project_code' => $this->project_code], ['number' => $this->number])->first();
        if (!$data) {
            $this->errormessage = 'Fire Extinguisher not found';
        } elseif ($data) {
            return redirect()->route('fire-ext', ['number' => $this->number, 'project_code' => $this->project_code]);
        }
    }

    public function accessCode()
    {
        session()->forget('TrueAccessCode');

        $code = AccessCode::first();
        if ($code) {
            if (!($code->code == $this->code)) {
                $this->codeMessage = 'the givien code is wronge';
                $this->SuccesscodeMessage = null;
            } else {
                $TrueAccessCode = session()->get('TrueAccessCode', []);
                if ($TrueAccessCode) {
                    session()->forget('TrueAccessCode');
                    session()->put('TrueAccessCode', $this->code);
                } else {
                    session()->put('TrueAccessCode', $this->code);
                }
                $this->codeMessage = null;
                $this->SuccesscodeMessage = 'Successfull Request';
                $this->dispatchBrowserEvent('closeModel');
                $this->emit('closeModel');
            }
        }
    }
    public function render()
    {

        return view('livewire.fire-ext.get-data');
    }
}
