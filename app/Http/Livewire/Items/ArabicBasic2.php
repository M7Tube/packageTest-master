<?php

namespace App\Http\Livewire\Items;

use Livewire\Component;

class ArabicBasic2 extends Component
{
    public $Validity;
    public $Payment_Method;
    public $Payment_Method2;

    public function mount()
    {

        $this->Validity = 15;
        $this->Payment_Method = 100;
        $this->Payment_Method2 = 0;
    }

    public function save()
    {
        $Arinfo2 = session()->get('Arinfo2', []);
        if (isset($Arinfo2['Arinfo2'])) {
            session()->forget('Arinfo2');
            $Arinfo2['Arinfo2'] = [
                "Validity" => $this->Validity,
                "Payment_Method" => $this->Payment_Method,
                "Payment_Method2" => $this->Payment_Method2,
            ];
        } else {
            // $sub=Subject::find($this->selectedSubjects);
            $Arinfo2['Arinfo2'] = [
                "Validity" => $this->Validity,
                "Payment_Method" => $this->Payment_Method,
                "Payment_Method2" => $this->Payment_Method2,
            ];
        }
        session()->put('Arinfo2', $Arinfo2);
        session()->flash('ArInfomessage', 'تم اضافة الشروط والأحكام بنجاح');
    }

    public function render()
    {
        return view('livewire.items.arabic-basic2');
    }
}
