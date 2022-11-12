<?php

namespace App\Http\Livewire\Template;

use App\Models\Attrubite;
use App\Models\Template;
use Livewire\Component;

class Manage extends Component
{
    public $template;
    public $template_id;
    public $name;
    public $pic;

    public function edit($id)
    {
        $template = Template::where('template_id', $id)->first();
        if ($template) {
            $this->template_id = $template->template_id;
            $this->name = $template->name;
            $this->pic = $template->pic;
        } else {
            return session()->flash('WrongTemplate', 'You Can Not Edit This Template');
        }
    }

    // public function delete($id)
    // {
    //     $template = Template::where('template_id', $id)->first();
    //     if ($template) {
    //         $this->template_id = $template->template_id;
    //     }
    // }

    // public function confirmDelete($id)
    // {
    //     Template::where('template_id',$id)->delete();
    // }

    public function clear()
    {
        $this->template_id = null;
        $this->name = null;
        $this->pic = null;
    }
    public function update()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:48'],
            'pic' => ['mimes:png,jpg,jpeg'],
        ]);
        $template = Template::find($this->template_id);
        if ($template) {
            $template->update([
                'name' => $this->name,
                'pic' => $this->pic
            ]);
            session()->flash('message', 'Template Updated Successfully');
        } else {
            session()->flash('message', 'You Can Not Edit This Template');
        }
        $this->emit('TemplateUpdated');
    }

    public function render()
    {
        return view('livewire.template.manage', [
            'template' => $this->template,
        ]);
    }
}


/*
<?php

namespace App\Http\Livewire;

use App\Models\AccountType;
use App\Models\AdCatogary;
use App\Models\AdTypeName;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\CatogaryDetails;
use App\Models\Ad;
use App\Models\AdDescription;
use App\Models\AdInfo;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;

class ContoleAdcatogaryTable extends Component
{
    use LivewireWithPagination;

    public $ad_catogary_id;
    public $ad_catogary_name;

    public $orderBy = 'ad_catogary_name';
    public $orderAsc = true;
    public $search = '';

    public function edit($id)
    {
        $adcatogary = AdCatogary::where('ad_catogary_id', $id)->first();
        if ($adcatogary) {
            $this->ad_catogary_id = $adcatogary->ad_catogary_id;
            $this->ad_catogary_name = $adcatogary->ad_catogary_name;
        } else {
            return session()->flash('WrongCatogary', 'You Can Not Edit This Catogary');
        }
    }
    public function clear()
    {
        $this->ad_catogary_id = null;
        $this->ad_catogary_name = null;
    }
    public function update()
    {
        $this->validate([
            'ad_catogary_name' => 'required|max:96',
        ]);
        $adcatogary = AdCatogary::find($this->ad_catogary_id);
        if ($adcatogary) {
            $adcatogary->update([
                'ad_catogary_name' => $this->ad_catogary_name,
            ]);
            session()->flash('message', 'Catogary Updated Successfully');
        } else {
            session()->flash('message', 'You Can Not Edit This Catogary');
        }
        $this->emit('userUpdated');
    }

    public function delete()
    {
        if (session('LoggedAccount')->account_type_id == 1) {
            CatogaryDetails::where('ad_catogary_id',$this->ad_catogary_id)->delete();
            Ad::where('ad_catogary_id',$this->ad_catogary_id)->delete();
            AdDescription::where('ad_catogary_id',$this->ad_catogary_id)->delete();
            AdTypeName::where('ad_catogary_id',$this->ad_catogary_id)->delete();
            AdInfo::where('ad_catogary_id',$this->ad_catogary_id)->delete();
            AdCatogary::where('ad_catogary_id', $this->ad_catogary_id)->delete();
            session()->flash('message', 'Catogary Deleted Successfully');
        } else {
            session()->flash('message', 'YOu Can Not Delete This Catogary');
        }
    }

    public function render()
    {
        return view(
            'livewire.contole-adcatogary-table',
            [
                'catogarys' => AdCatogary::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}

*/
