<?php

namespace App\Http\Livewire\Items;

use App\Models\Document;
use App\Models\Subject;
use Livewire\Component;

class ArabicBasic extends Component
{
    public $companyName;
    public $clientName;
    public $clientPhone;
    public $docNo;
    public $subjects;

    public $selectedSubjects;

    public function save()
    {
        $Arinfo = session()->get('Arinfo', []);
        if (isset($Arinfo['Arinfo'])) {
            session()->forget('Arinfo');
            $sub = Subject::find($this->selectedSubjects);
            $Arinfo['Arinfo'] = [
                "companyName" => $this->companyName,
                "clientName" => $this->clientName,
                "clientPhone" => $this->clientPhone,
                "docNo" => $this->docNo,
                "subjects" => $sub->name,
                "date" => date('Y-m-d H:i:s'),
            ];
        } else {
            $sub = Subject::find($this->selectedSubjects);
            $Arinfo['Arinfo'] = [
                "companyName" => $this->companyName,
                "clientName" => $this->clientName,
                "clientPhone" => $this->clientPhone,
                "docNo" => $this->docNo,
                "subjects" => $sub->name,
                "date" => date('Y-m-d H:i:s'),
            ];
        }
        session()->put('Arinfo', $Arinfo);
        session()->flash('Infomessage', 'ArInfo Added Successfully');
        return redirect('/admin/Arabicitemss');//https://erp-com.preview-domain.com/public
    }

    public function mount($selectedSubjects = null)
    {
        $do = Document::all()->last();
        if ($do) {
            $this->docNo = $do->docNo + 1;
        } else {
            $this->docNo = 1;
        }
        $this->subjects = Subject::where('lang','ar')->get();
        $this->selectedSubjects = $selectedSubjects;
    }

    public function render()
    {
        return view('livewire.items.arabic-basic');
    }
}
