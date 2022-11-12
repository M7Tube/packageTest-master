<?php

namespace App\Http\Livewire;

use App\Models\Attrubite;
use App\Models\ReportCategory;
use App\Models\Selector;
use App\Models\Template;
use App\Models\TextBox;
use App\Models\User;
use Livewire\Component;

class Control extends Component
{
    public $templateCount;
    public $userCount;
    public $categoryCount;
    public $questionCount;
    public $selectorCount;
    public $textboxCount;

    public function mount()
    {
        $this->templateCount = Template::count();
        $this->userCount = User::count();
        $this->categoryCount = ReportCategory::count();
        $this->questionCount = Attrubite::count();
        $this->selectorCount = Selector::count();
        $this->textboxCount = TextBox::count();
    }
    public function render()
    {
        return view('livewire.control');
    }
}
