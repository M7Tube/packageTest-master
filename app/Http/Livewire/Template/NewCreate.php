<?php

namespace App\Http\Livewire\Template;

use App\Models\NewTemplate;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $desc;
    public $icon;
    public $pages = [];
    public $common_multiple_choise_options;
    public $title_page_questions;
    public $title_page_title;
    public $template_id;
    public $check;
    public $activeone;
    public $activechangingresponse;
    public $uploading;
    protected $queryString = ['activeone', 'template_id', 'activechangingresponse'];
    protected $listeners = [
        'changeindex', 'change_active_one', 'multiple_choise_changeindex', 'page_changeindex'
    ];
    public function boot()
    {
        $this->activeone = 0;
        $this->uploading = false;
        $this->title_page_questions[] = ['response' => 1, 'is_required' => false, 'text_answer_format' => 0];

        $last = NewTemplate::all(['new_template_id'])->last();
        if ($last) {
            $this->template_id = $last['new_template_id'];
            $this->check = NewTemplate::find($last['new_template_id']);
            if ($this->check) {
                $this->title = $this->check->title;
                $this->desc = $this->check->desc;
                // if ($this->check->icon)
                $this->icon = $this->check->icon;
                $this->title_page_questions = $this->check->title_page;
                $this->title_page_title = $this->check->title_page_title;
                $this->pages = $this->check->pages;
                $this->common_multiple_choise_options = $this->check->common_multiple_choise_options;
            }
        } else {
            $this->template_id = 1;
        }
        // dd($this->icon);
    }

    public function setResponseValue($response)
    {
        // $this->title_page_questions[$this->activeone]['response'] = $response;
        if ($response == 1) {
            unset($this->title_page_questions[$this->activeone]);
            $this->title_page_questions[$this->activeone]['response'] = $response;
            $this->title_page_questions[$this->activeone]['is_required'] = false;
            $this->title_page_questions[$this->activeone]['text_answer_format'] = 0;
        } elseif ($response == 2) {
            unset($this->title_page_questions[$this->activeone]);
            $this->title_page_questions[$this->activeone]['response'] = $response;
            $this->title_page_questions[$this->activeone]['is_required'] = false;
            $this->title_page_questions[$this->activeone]['docNum_format'] = '000001';
        } elseif ($response == 5) {
            unset($this->title_page_questions[$this->activeone]);
            $this->title_page_questions[$this->activeone]['response'] = $response;
            $this->title_page_questions[$this->activeone]['is_required'] = false;
            $this->title_page_questions[$this->activeone]['is_date'] = false;
            $this->title_page_questions[$this->activeone]['is_time'] = false;
        } elseif ($response == 7) {
            if (!array_key_exists('multiple_choice', $this->title_page_questions[$this->activeone])) {
                unset($this->title_page_questions[$this->activeone]);
            }
            $this->title_page_questions[$this->activeone]['response'] = $response;
            // dd(array_key_exists('multiple_choice', $this->title_page_questions[$this->activeone]));
            $this->title_page_questions[$this->activeone]['is_required'] = false;
            $this->title_page_questions[$this->activeone]['multi_select_multiple_choise'] = false;
            if (!array_key_exists('multiple_choice', $this->title_page_questions[$this->activeone])) {
                $this->title_page_questions[$this->activeone]['multiple_choice'] = [''];
            }
        } else {
            unset($this->title_page_questions[$this->activeone]);
            $this->title_page_questions[$this->activeone]['response'] = $response;
            $this->title_page_questions[$this->activeone]['is_required'] = false;
        }
    }

    public function PageSetResponseValue($pagekey, $questionkey, $response)
    {
        if ($response == 1) {
            unset($this->pages[$pagekey]['question'][$questionkey]);
            $this->pages[$pagekey]['question'][$questionkey]['response'] = $response;
            $this->pages[$pagekey]['question'][$questionkey]['is_required'] = false;
            $this->pages[$pagekey]['question'][$questionkey]['text_answer_format'] = 0;
        } elseif ($response == 2) {
            unset($this->pages[$pagekey]['question'][$questionkey]);
            $this->pages[$pagekey]['question'][$questionkey]['response'] = $response;
            $this->pages[$pagekey]['question'][$questionkey]['is_required'] = false;
            $this->pages[$pagekey]['question'][$questionkey]['docNum_format'] = '000001';
        } elseif ($response == 5) {
            unset($this->pages[$pagekey]['question'][$questionkey]);
            $this->pages[$pagekey]['question'][$questionkey]['response'] = $response;
            $this->pages[$pagekey]['question'][$questionkey]['is_required'] = false;
            $this->pages[$pagekey]['question'][$questionkey]['is_date'] = false;
            $this->pages[$pagekey]['question'][$questionkey]['is_time'] = false;
        } elseif ($response == 7) {
            if (!array_key_exists('multiple_choice', $this->pages[$pagekey]['question'][$questionkey])) {
                unset($this->pages[$pagekey]['question'][$questionkey]);
            }
            $this->pages[$pagekey]['question'][$questionkey]['response'] = $response;
            // dd(array_key_exists('multiple_choice', $this->pages[$pagekey]['question'][$questionkey]));
            $this->pages[$pagekey]['question'][$questionkey]['is_required'] = false;
            $this->pages[$pagekey]['question'][$questionkey]['multi_select_multiple_choise'] = false;
            if (!array_key_exists('multiple_choice', $this->pages[$pagekey]['question'][$questionkey])) {
                $this->pages[$pagekey]['question'][$questionkey]['multiple_choice'] = [''];
            }
        } else {
            unset($this->pages[$pagekey]['question'][$questionkey]);
            $this->pages[$pagekey]['question'][$questionkey]['response'] = $response;
            $this->pages[$pagekey]['question'][$questionkey]['is_required'] = false;
        }
    }

    public function test2()
    {
        unset($this->title_page_questions[0]['text_answer_format']);
    }
    public function test()
    {
        dd($this->title_page_questions);
    }
    public function save_multiple_choise($type, $questionKey)
    {
        if (is_null($this->common_multiple_choise_options))
            $this->common_multiple_choise_options[0] = $this->title_page_questions[$questionKey]['multiple_choice'];
        else {
            // dd(count($this->common_multiple_choise_options));
            $this->common_multiple_choise_options[count($this->common_multiple_choise_options)] = $this->title_page_questions[$questionKey]['multiple_choice'];
        }
        // dd($this->common_multiple_choise_options);
    }
    public function increment()
    {
        $this->activeone = $this->activeone + 1;
    }

    public function add_new_response($questionKey)
    {
        if (count($this->title_page_questions[$questionKey]['multiple_choice']) < 15)
            $this->title_page_questions[$questionKey]['multiple_choice'][] = '';
    }

    public function page_add_new_response($pageKey, $questionKey)
    {
        if (count($this->pages[$pageKey][$questionKey]['multiple_choice']) < 15)
            $this->pages[$pageKey][$questionKey]['multiple_choice'][] = '';
    }

    public function clear_new_response_option($questionKey)
    {
        if (count($this->title_page_questions[$questionKey]['multiple_choice']) > 0)
            $this->title_page_questions[$questionKey]['multiple_choice'] = [''];
    }
    public function page_clear_new_response_option($pageKey, $questionKey)
    {
        if (count($this->pages[$pageKey][$questionKey]['multiple_choice']) > 0)
            $this->pages[$pageKey][$questionKey]['multiple_choice'] = [''];
    }
    public function title_page_add_question()
    {
        if (str_contains($this->activeone, 'p_')) {
            $arr = explode('_', $this->activeone);
            $string = implode('_', array_slice($arr, 0, 3));
            array_splice($this->pages[$arr[1]]['question'], $arr[2] + 1, 0, [['response' => 1, 'is_required' => false, 'text_answer_format' => 0]]);
            // dd($arr[0]);
        } else {
            array_splice($this->title_page_questions, $this->activeone + 1, 0, [['response' => 1, 'is_required' => false, 'text_answer_format' => 0]]);
        }
    }


    public function title_page_delete_question($key)
    {
        // dd(count($this->title_page_questions));
        if (count($this->title_page_questions) > 1)
            // unset($this->title_page_questions[$key]);
            array_splice($this->title_page_questions, $key, 1);
    }

    public function add_page()
    {
        // dd($this->pages);
        $this->pages[] = ['question' => [['response' => 1, 'is_required' => false, 'text_answer_format' => 0]]];
        // dd($this->pages);
    }

    public function delete_page($key)
    {
        array_splice($this->pages, $key, 1);
        $this->updating();
        // unset($this->pages[$key]);
    }

    // public function saveBulkEdit()
    // {
    //     foreach ($this->title_page_questions as $key => $value) {
    //         foreach ([$value] as $key2 => $value2) {
    //             // dd($value2);
    //             if (array_key_exists('is_required', [$value2])) {
    //                 $value2['is_required'] = true;
    //             } else {
    //                 $this->title_page_questions[$key] = ['is_required' => true];
    //                 // array_push($this->title_page_questions[$key],['is_required' => true]);
    //             }
    //         }
    //     }
    // }

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

    public function page_changeindex($oldIndex, $newIndex, $page)
    {
        $temp = $this->pages[$page]['question'][$oldIndex];
        $this->pages[$page]['question'][$oldIndex] = $this->pages[$page]['question'][$newIndex];
        $this->pages[$page]['question'][$newIndex] = $temp;
        // $this->activeone = $newIndex;
        $this->updating();
    }

    public function change_active_one($newIndex)
    {
        $this->activeone = $newIndex;
        $this->updating();
    }

    // public function normal_page_add_question($pageKey)
    // {
    //     // $this->pages[$pageKey] = ['question'=>['']];
    //     // dd($pageKey);
    //     $this->pages[$pageKey]['question'][] = '';
    //     // foreach ($this->pages[$pageKey] as $key => $value) {
    //     //     dd($value);
    //     //     $value=['question'=>['']];
    //     // }
    // }

    public function normal_page_delete_question($pageKey, $questionKey)
    {
        if ($this->pages[$pageKey]['question'] > 1)
            unset($this->pages[$pageKey]['question'][$questionKey]);
    }

    // public function clear_page()
    // {
    //     $this->title = null;
    //     $this->desc = null;
    //     $this->icon = null;
    //     $this->questions = [''];
    //     $this->title_page_questions = [''];
    //     $this->pages = [];
    //     return redirect()->route('new-create-template');
    // }

    public function delete_image()
    {
        $this->icon = null;
        $this->updating();
    }

    public function updatedIcon()
    {
        // $this->icon=$this->icon->getClientOriginalName();
        $this->uploading = true;
        $this->updating();
    }

    public function updating()
    {
        $check_for_exist = NewTemplate::find($this->template_id);
        if (!$this->icon) {
            if (!$check_for_exist) {
                NewTemplate::Create([
                    'title' => $this->title ?? '',
                    'desc' => $this->desc ?? '',
                    'title_page' => $this->title_page_questions ?? [],
                    'title_page_title' => $this->title_page_title ?? null,
                    'pages' => $this->pages ?? [],
                    'user_id' => 1,
                ]);
            } else {
                $check_for_exist->title = $this->title ?? '';
                $check_for_exist->icon = null;
                $check_for_exist->desc = $this->desc ?? '';
                $check_for_exist->title_page = $this->title_page_questions ?? [];
                $check_for_exist->title_page_title = $this->title_page_title ?? null;
                $check_for_exist->pages = $this->pages ?? [];
                $check_for_exist->user_id = 1;
                $check_for_exist->save();
            }
        } else {
            if (!$check_for_exist) {
                NewTemplate::Create([
                    'icon' => $this->icon->getClientOriginalName(),
                    'title' => $this->title ?? '',
                    'desc' => $this->desc ?? '',
                    'title_page' => $this->title_page_questions ?? [],
                    'title_page_title' => $this->title_page_title ?? null,
                    'pages' => $this->pages ?? [],
                    'user_id' => 1,
                ]);
                $this->icon->storeAs('images', $this->icon->getClientOriginalName());
            } else {
                $check_for_exist->title = $this->title ?? '';
                $check_for_exist->desc = $this->desc ?? '';
                $check_for_exist->title_page = $this->title_page_questions ?? [];
                $check_for_exist->title_page_title = $this->title_page_title ?? null;
                $check_for_exist->pages = $this->pages ?? [];
                $check_for_exist->user_id = 1;
                if ($this->uploading == true) {
                    $this->icon->storeAs('images', $this->icon->getClientOriginalName());
                    $check_for_exist->icon = $this->icon->getClientOriginalName();
                    $this->icon = $this->icon->getClientOriginalName();
                }
                $check_for_exist->save();
            }
        }
        $this->uploading = false;
    }
    // public function render()
    // {
    //     return view('livewire.template.new-create', [
    //         'data' => $this->check,
    //     ]);
    // }
}
