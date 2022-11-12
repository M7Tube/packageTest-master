<?php

namespace App\Http\Livewire\Template;

use App\Models\Template;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\NewTemplate;
use App\Models\Response;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination as LivewireWithPagination;

class Create extends Component
{
    use LivewireWithPagination;
    use WithFileUploads;

    public $title;
    public $desc;
    public $icon;
    public $pages = [];
    public $categorys = [''];
    public $questions = [''];
    public $title_page_questions;
    public $CBmultibleselect = [''];
    public $template_id;

    public $check;


    // public $responses;
    public $renderpage = "create.template";

    public $currentpage;
    public $activeone;
    // public $t_id;
    protected $queryString = ['activeone', 'currentpage', 'template_id'];
    protected $listeners = [
        'changeindex', 'change_active_one', 'multiple_choise_changeindex'
    ];
    public function boot()
    {
        $this->activeone = 0;
        $this->currentpage = 'build';
        $this->title_page_questions[] = '';

        $last = NewTemplate::all('new_template_id')->last();
        if ($last) {
            $this->template_id = $last['new_template_id'];
            $this->check = NewTemplate::find($last['new_template_id']);
            if ($this->check) {
                $this->title = $this->check->title;
                $this->desc = $this->check->desc;
                $this->title_page_questions = $this->check->title_page;
            }
        } else {
            $this->template_id = 1;
        }
    }
    public function increment()
    {
        $this->activeone = $this->activeone + 1;
    }
    public function goBack()
    {
        return redirect()->route('index.template');
    }

    public function add_new_response($questionKey)
    {
        if (count($this->title_page_questions[$questionKey]['multiple_choice']) < 15)
            $this->title_page_questions[$questionKey]['multiple_choice'][] = '';
    }

    public function clear_new_response_option($questionKey)
    {
        if (count($this->title_page_questions[$questionKey]['multiple_choice']) > 0)
            $this->title_page_questions[$questionKey]['multiple_choice'] = [''];
    }

    public function updateOrder($list)
    {
        // foreach ($list as $key => $item) {
        //     array_push($order,$item['order']);
        // }
        // dd($order);
        foreach ($list as $key => $item) {
            // $array=$this->title_page_questions;
            // $array = array_combine(array_map(function($el) use ($item) {
            //     return $this->title_page_questions[$el];
            // }, array_keys($array)), array_values($array[$key]));
            //     krsort($this->title_page_questions[$key]);
            //     // dd($item['value']);
            //     // $this->title_page_questions[$item['order']] = $this->title_page_questions[$item['value']];
            //     // $properOrderedArray = array_merge(array_flip($this->title_page_questions), $customer);
            //     // $this->title_page_questions[$item['value']]['order'] = $item['value'];
            //     // dd($this->title_page_questions);
        }
    }

    public function title_page_add_question()
    {
        array_splice($this->title_page_questions, $this->activeone + 1, 0, '');
    }

    public function CBmultibleselect_add_question()
    {
        $this->CBmultibleselect[] = '';
    }

    public function title_page_delete_question($key)
    {
        if (count($this->title_page_questions) > 1)
            unset($this->title_page_questions[$key]);
    }

    public function CBmultibleselect_delete_question($key)
    {
        if (count($this->CBmultibleselect) > 1)
            unset($this->CBmultibleselect[$key]);
    }

    public function add_question()
    {
        dd($this->pages);
        $this->questions[] = '';
    }
    public function add_section()
    {

        // dd($this->questions[0]);
        dd($this->title_page_questions);
    }
    public function add_page()
    {
        $this->pages[] = ['question' => ['']];
    }

    public function page_delete($key)
    {
        unset($this->pages[$key]);
    }

    public function saveBulkEdit()
    {
        foreach ($this->title_page_questions as $key => $value) {
            foreach ([$value] as $key2 => $value2) {
                // dd($value2);
                if (array_key_exists('is_required', [$value2])) {
                    $value2['is_required'] = true;
                } else {
                    $this->title_page_questions[$key] = ['is_required' => true];
                    // array_push($this->title_page_questions[$key],['is_required' => true]);
                }
            }
        }
    }

    public function changeindex($oldIndex, $newIndex)
    {
        $temp = $this->title_page_questions[$oldIndex];
        $this->title_page_questions[$oldIndex] = $this->title_page_questions[$newIndex];
        $this->title_page_questions[$newIndex] = $temp;
        // $this->activeone = $newIndex;
        $this->updating();
    }

    public function multiple_choise_changeindex($oldIndex, $newIndex)
    {
        $temp = $this->title_page_questions[$this->activeone]['multiple_choice'][$oldIndex];
        $this->title_page_questions[$this->activeone]['multiple_choice'][$oldIndex] = $this->title_page_questions[$this->activeone]['multiple_choice'][$newIndex];
        $this->title_page_questions[$this->activeone]['multiple_choice'][$newIndex] = $temp;
        // $this->activeone = $newIndex;
        $this->updating();
    }

    public function change_active_one($newIndex)
    {
        $this->activeone = $newIndex;
        $this->updating();
    }

    public function normal_page_add_question($pageKey)
    {
        // $this->pages[$pageKey] = ['question'=>['']];
        // dd($pageKey);
        $this->pages[$pageKey]['question'][] = '';
        // foreach ($this->pages[$pageKey] as $key => $value) {
        //     dd($value);
        //     $value=['question'=>['']];
        // }
    }

    public function normal_page_delete_question($pageKey, $questionKey)
    {
        if ($this->pages[$pageKey]['question'] > 1)
            // dd($pageKey);
            unset($this->pages[$pageKey]['question'][$questionKey]);
    }

    public function clear_page()
    {
        $this->title = null;
        $this->desc = null;
        $this->icon = null;
        $this->categorys = [''];
        $this->questions = [''];
        $this->title_page_questions = [''];
        $this->CBmultibleselect = [''];
        $this->pages = [];
        return redirect()->route('new-create-template');
    }
    public function clear()
    {
        $this->template_id = null;
        $this->name = null;
        $this->pic = null;
        $this->user_id = null;
    }

    public function delete_image()
    {
        $this->icon = null;
    }

    public function updating()
    {
        if ($this->check) {
            if (!$this->icon) {
                $this->check->icon = 'defualt.png';
                $this->check->title = $this->title ?? '';
                $this->check->desc = $this->desc ?? '';
                $this->check->title_page = $this->title_page_questions ?? [];
                $this->check->pages = $this->pages ?? [];
                $this->check->user_id = 1;
                $this->check->save();
            } else {
                $this->check->icon = $this->icon->getClientOriginalName() ?? 'defualt.png';
                $this->check->title = $this->title ?? '';
                $this->check->desc = $this->desc ?? '';
                $this->check->title_page = $this->title_page_questions ?? [];
                $this->check->pages = $this->pages ?? [];
                $this->check->user_id = 1;
                $this->check->save();
            }
        } else {
            if (!$this->icon) {
                NewTemplate::Create([
                    'icon' => 'defualt.png',
                    'title' => $this->title ?? '',
                    'desc' => $this->desc ?? '',
                    'title_page' => $this->title_page_questions ?? [],
                    'pages' => $this->pages ?? [],
                    'user_id' => 1,
                ]);
            } else {
                NewTemplate::Create([
                    'icon' => $this->icon->getClientOriginalName() ?? 'defualt.png',
                    'title' => $this->title ?? '',
                    'desc' => $this->desc ?? '',
                    'title_page' => $this->title_page_questions ?? [],
                    'pages' => $this->pages ?? [],
                    'user_id' => 1,
                ]);
            }
        }
    }
    public function render()
    {
        return view('livewire.template.create', [
            'data' => $this->check,
        ]);
    }
}
