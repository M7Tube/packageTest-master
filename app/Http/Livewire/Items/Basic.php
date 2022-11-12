<?php

namespace App\Http\Livewire\Items;

use App\Models\Document;
use App\Models\Item;
use App\Models\Subject;
use Livewire\Component;

class Basic extends Component
{
    public $companyName;
    public $clientName;
    public $clientPhone;
    public $docNo;
    public $subjects;

    public $selectedSubjects;

    public function save()
    {
        $info = session()->get('info', []);
        if (isset($info['info'])) {
            session()->forget('info');
            $sub = Subject::find($this->selectedSubjects);
            $info['info'] = [
                "companyName" => $this->companyName,
                "clientName" => $this->clientName,
                "clientPhone" => $this->clientPhone,
                "docNo" => $this->docNo,
                "subjects" => $sub->name,
                "date" => date('Y-m-d H:i:s'),
            ];
        } else {
            $sub = Subject::find($this->selectedSubjects);
            $info['info'] = [
                "companyName" => $this->companyName,
                "clientName" => $this->clientName,
                "clientPhone" => $this->clientPhone,
                "docNo" => $this->docNo,
                "subjects" => $sub->name,
                "date" => date('Y-m-d H:i:s'),
            ];
        }
        session()->put('info', $info);
        session()->flash('Infomessage', 'Info Added Successfully');
        return redirect('/admin/itemss');
    }

    public function mount($selectedSubjects = null)
    {
        $do = Document::all()->last();
        if ($do) {
            $this->docNo = $do->docNo + 1;
        } else {
            $this->docNo = 1;
        }
        $this->subjects = Subject::where('lang','en')->get();
        $this->selectedSubjects = $selectedSubjects;
    }

    // public function updatedSelectedCatogary($subjects)
    // {
    //     $this->catogarydetails = CatogaryDetails::where('ad_catogary_id',$catogary)->get();
    //     $this->selectedCatogarydetails = NULL;
    // }

    public function render()
    {
        return view('livewire.items.basic');
    }
}
/*
<?php

namespace App\Http\Livewire;

use App\Models\AdCatogary;
use App\Models\CatogaryDetails;
use Livewire\Component;

class AddNewAdDescription extends Component
{
    public $catogary;
    public $catogarydetails;

    public $selectedCatogary = null;
    public $selectedCatogarydetails = null;

    public function mount($selectedCatogarydetails = null)
    {
        $this->catogary = AdCatogary::all();
        $this->catogarydetails = collect();
        $this->selectedCatogarydetails = $selectedCatogarydetails;

    }
    public function render()
    {
        return view('livewire.add-new-ad-description');
    }
    public function updatedSelectedCatogary($catogary)
    {
        $this->catogarydetails = CatogaryDetails::where('ad_catogary_id',$catogary)->get();
        $this->selectedCatogarydetails = NULL;
    }
}

*/
