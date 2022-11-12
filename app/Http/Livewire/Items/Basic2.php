<?php

namespace App\Http\Livewire\Items;

use Livewire\Component;

class Basic2 extends Component
{
    public $Validity;
    public $Payment_Method;
    public $Payment_Method2;
   
    public function mount()
    {
       
        $this->Validity=15;
        $this->Payment_Method=100;
        $this->Payment_Method2=0;
    }

    public function save()
    {
        $info2 = session()->get('info2', []);
        if (isset($info2['info2'])) {
            session()->forget('info2');
            $info2['info2'] = [
                "Validity" => $this->Validity,
                "Payment_Method" => $this->Payment_Method,
                "Payment_Method2" => $this->Payment_Method2,
            ];
        } else {
            // $sub=Subject::find($this->selectedSubjects);
            $info2['info2'] = [
                "Validity" => $this->Validity,
                "Payment_Method" => $this->Payment_Method,
                "Payment_Method2" => $this->Payment_Method2,
            ];
        }
        session()->put('info2', $info2);
        session()->flash('Infomessage', 'Terms & Conditions Added Successfully');
    }


    public function render()
    {
        return view('livewire.items.basic2');
    }
}
