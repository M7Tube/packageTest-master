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
    public $pageactiveone;
    public $pagequestionactiveone;
    public $option;
    public $check_for_exist;
    public $activechangingresponse;
    public $uploading;
    public $new_template;
    protected $queryString = ['activeone', 'pageactiveone' , 'pagequestionactiveone' , 'template_id', 'activechangingresponse', 'new_template'];
    protected $listeners = [
        'changeindex', 'change_active_one', 'multiple_choise_changeindex', 'page_changeindex'
    ];
    public function boot()
    {
        $this->activeone = 0;
        $this->pageactiveone = null;
        $this->pagequestionactiveone = null;
        $this->option = [
            [
                [
                    'title' => 'Good',
                    'color' => '#e7f3ef',
                ],
                [
                    'title' => 'Fair',
                    'color' => '#f9f2e2',
                ],
                [
                    'title' => 'Poor',
                    'color' => '#f3e0e5',
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                ],
            ],
            [
                [
                    'title' => 'Safe',
                    'color' => '#e7f3ef',
                ],
                [
                    'title' => 'At Risk',
                    'color' => '#f3e0e5',
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                ],
            ],
            [
                [
                    'title' => 'Pass',
                    'color' => '#e7f3ef',
                ],
                [
                    'title' => 'Fail',
                    'color' => '#f3e0e5',
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                ],
            ],
            [
                [
                    'title' => 'Yes',
                    'color' => '#e7f3ef',
                ],
                [
                    'title' => 'No',
                    'color' => '#f3e0e5',
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                ],
            ],
            [
                [
                    'title' => 'Compliant',
                    'color' => '#e7f3ef',
                ],
                [
                    'title' => 'Non-Compliant',
                    'color' => '#f3e0e5',
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                ],
            ]
        ];
        $this->new_template = 0;
        $this->uploading = false;
        $this->title_page_questions[] = ['response' => 1, 'is_required' => false, 'text_answer_format' => 0];
        $last = NewTemplate::all()->last();
        if ($last) {
            $this->template_id = $last['new_template_id'];
            $this->title = $last->title;
            $this->desc = $last->desc;
            // if ($last->icon)
            $this->icon = $last->icon;
            $this->title_page_questions = $last->title_page;
            $this->title_page_title = $last->title_page_title;
            $this->pages = $last->pages;
            $this->common_multiple_choise_options = $last->common_multiple_choise_options;
            $this->check_for_exist = NewTemplate::find($this->template_id);
        } else {
            $template = NewTemplate::Create([
                'icon' => null,
                'title' => $this->title ?? '',
                'desc' => $this->desc ?? '',
                'title_page' => $this->title_page_questions ?? [],
                'title_page_title' => $this->title_page_title ?? null,
                'pages' => $this->pages ?? [],
                'common_multiple_choise_options' => $this->option ?? null,
                'user_id' => 1,
            ]);
            $this->template_id = $template->new_template_id;
            $this->check_for_exist = NewTemplate::find($template->new_template_id);
        }
    }

    public function test()
    {
        dd($this->title_page_questions);
    }


    public function setResponseValue($response)
    {
        // $this->title_page_questions[$this->activeone]['response'] = $response;
        if ($response == 1) {
            $oldtitle = $this->title_page_questions[$this->activeone]['title'];
            unset($this->title_page_questions[$this->activeone]);
            $this->title_page_questions[$this->activeone]['title'] = $oldtitle;
            $this->title_page_questions[$this->activeone]['response'] = $response;
            $this->title_page_questions[$this->activeone]['is_required'] = false;
            $this->title_page_questions[$this->activeone]['text_answer_format'] = 0;
        } elseif ($response == 2) {
            $oldtitle = $this->title_page_questions[$this->activeone]['title'];
            unset($this->title_page_questions[$this->activeone]);
            $this->title_page_questions[$this->activeone]['title'] = $oldtitle;
            $this->title_page_questions[$this->activeone]['response'] = $response;
            $this->title_page_questions[$this->activeone]['is_required'] = false;
            $this->title_page_questions[$this->activeone]['docNum_format'] = '000001';
        } elseif ($response == 5) {
            $oldtitle = $this->title_page_questions[$this->activeone]['title'];
            unset($this->title_page_questions[$this->activeone]);
            $this->title_page_questions[$this->activeone]['title'] = $oldtitle;
            $this->title_page_questions[$this->activeone]['response'] = $response;
            $this->title_page_questions[$this->activeone]['is_required'] = false;
            $this->title_page_questions[$this->activeone]['is_date'] = false;
            $this->title_page_questions[$this->activeone]['is_time'] = false;
        } elseif ($response == 7) {
            $oldtitle = $this->title_page_questions[$this->activeone]['title'];
            unset($this->title_page_questions[$this->activeone]);
            $this->title_page_questions[$this->activeone]['title'] = $oldtitle;
            $this->title_page_questions[$this->activeone]['response'] = $response;
            $this->title_page_questions[$this->activeone]['is_required'] = false;
            $this->title_page_questions[$this->activeone]['multi_select_multiple_choise'] = false;
            if (!array_key_exists('multiple_choice', $this->title_page_questions[$this->activeone])) {
                $this->title_page_questions[$this->activeone]['multiple_choice'] = [['title' => null, 'color' => '#13855f']];
            }
        } else {
            $oldtitle = $this->title_page_questions[$this->activeone]['title'];
            unset($this->title_page_questions[$this->activeone]);
            $this->title_page_questions[$this->activeone]['title'] = $oldtitle;
            $this->title_page_questions[$this->activeone]['response'] = $response;
            $this->title_page_questions[$this->activeone]['is_required'] = false;
        }
        $this->updating();
    }

    public function EditMultipleChoiseOptionModal($option)
    {
        dd($this->title_page_questions[$this->activeone]['response']);
        $oldtitle = $this->title_page_questions[$this->activeone]['title'];
        unset($this->title_page_questions[$this->activeone]);
        $this->title_page_questions[$this->activeone]['title'] = $oldtitle;
        $this->title_page_questions[$this->activeone]['response'] = 7;
        $this->title_page_questions[$this->activeone]['is_required'] = false;
        $this->title_page_questions[$this->activeone]['multi_select_multiple_choise'] = false;
        $this->title_page_questions[$this->activeone]['multiple_choice'] = $this->option[$option];
        $this->updating();
    }

    public function pageEditMultipleChoiseOptionModal($pagekey, $questionkey, $option)
    {
        $oldtitle = $this->pages[$pagekey]['question'][$questionkey]['title'];
        unset($this->pages[$pagekey]['question'][$questionkey]);
        $this->pages[$pagekey]['question'][$questionkey]['title'] = $oldtitle;
        $this->pages[$pagekey]['question'][$questionkey]['response'] = 7;
        $this->pages[$pagekey]['question'][$questionkey]['is_required'] = false;
        $this->pages[$pagekey]['question'][$questionkey]['multi_select_multiple_choise'] = false;
        $this->pages[$pagekey]['question'][$questionkey]['multiple_choice'] = $this->option[$option];
        $this->updating();
    }

    public function PageSetResponseValue($response)
    {
        $arr = explode('_', $this->activeone);
        if ($response == 1) {
            $oldtitle = $this->pages[$arr[1]]['question'][$arr[2]]['title'];
            unset($this->pages[$arr[1]]['question'][$arr[2]]);
            $this->pages[$arr[1]]['question'][$arr[2]]['title'] = $oldtitle;
            $this->pages[$arr[1]]['question'][$arr[2]]['response'] = $response;
            $this->pages[$arr[1]]['question'][$arr[2]]['is_required'] = false;
            $this->pages[$arr[1]]['question'][$arr[2]]['text_answer_format'] = 0;
        } elseif ($response == 2) {
            $oldtitle = $this->pages[$arr[1]]['question'][$arr[2]]['title'];
            unset($this->pages[$arr[1]]['question'][$arr[2]]);
            $this->pages[$arr[1]]['question'][$arr[2]]['title'] = $oldtitle;
            $this->pages[$arr[1]]['question'][$arr[2]]['response'] = $response;
            $this->pages[$arr[1]]['question'][$arr[2]]['is_required'] = false;
            $this->pages[$arr[1]]['question'][$arr[2]]['docNum_format'] = '000001';
        } elseif ($response == 5) {
            $oldtitle = $this->pages[$arr[1]]['question'][$arr[2]]['title'];
            unset($this->pages[$arr[1]]['question'][$arr[2]]);
            $this->pages[$arr[1]]['question'][$arr[2]]['title'] = $oldtitle;
            $this->pages[$arr[1]]['question'][$arr[2]]['response'] = $response;
            $this->pages[$arr[1]]['question'][$arr[2]]['is_required'] = false;
            $this->pages[$arr[1]]['question'][$arr[2]]['is_date'] = false;
            $this->pages[$arr[1]]['question'][$arr[2]]['is_time'] = false;
        } elseif ($response == 7) {
            $oldtitle = $this->pages[$arr[1]]['question'][$arr[2]]['title'];
            unset($this->pages[$arr[1]]['question'][$arr[2]]);
            $this->pages[$arr[1]]['question'][$arr[2]]['title'] = $oldtitle;
            $this->pages[$arr[1]]['question'][$arr[2]]['response'] = $response;
            // dd(array_key_exists('multiple_choice', $this->pages[$arr[1]]['question'][$arr[2]]));
            $this->pages[$arr[1]]['question'][$arr[2]]['is_required'] = false;
            $this->pages[$arr[1]]['question'][$arr[2]]['multi_select_multiple_choise'] = false;
            if (!array_key_exists('multiple_choice', $this->pages[$arr[1]]['question'][$arr[2]])) {
                $this->pages[$arr[1]]['question'][$arr[2]]['multiple_choice'] = [['title' => null, 'color' => '#13855f']];
            }
        } else {
            $oldtitle = $this->pages[$arr[1]]['question'][$arr[2]]['title'];
            unset($this->pages[$arr[1]]['question'][$arr[2]]);
            $this->pages[$arr[1]]['question'][$arr[2]]['title'] = $oldtitle;
            $this->pages[$arr[1]]['question'][$arr[2]]['response'] = $response;
            $this->pages[$arr[1]]['question'][$arr[2]]['is_required'] = false;
        }
        $this->updating();
    }

    public function setResponseValueFromReadyOptions($responseid, $optionid)
    {
        $oldtitle = $this->title_page_questions[$this->activechangingresponse]['title'];
        unset($this->title_page_questions[$this->activechangingresponse]);
        $this->title_page_questions[$this->activechangingresponse]['title'] = $oldtitle;
        $this->title_page_questions[$this->activechangingresponse]['is_required'] = false;
        $this->title_page_questions[$this->activechangingresponse]['multi_select_multiple_choise'] = false;
        $this->title_page_questions[$this->activechangingresponse]['response'] = $responseid;
        $option = [];
        if ($optionid == 1) {
            $option = [
                [
                    'title' => 'Good',
                    'color' => '#e7f3ef',
                ],
                [
                    'title' => 'Fair',
                    'color' => '#f9f2e2',
                ],
                [
                    'title' => 'Poor',
                    'color' => '#f3e0e5',
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                ],
            ];
        }
        if ($optionid == 2) {
            $option = [
                [
                    'title' => 'Safe',
                    'color' => '#e7f3ef',
                ],
                [
                    'title' => 'At Risk',
                    'color' => '#f3e0e5',
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                ],
            ];
        }
        if ($optionid == 3) {
            $option = [
                [
                    'title' => 'Pass',
                    'color' => '#e7f3ef',
                ],
                [
                    'title' => 'Fail',
                    'color' => '#f3e0e5',
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                ],
            ];
        }
        if ($optionid == 4) {
            $option = [
                [
                    'title' => 'Yes',
                    'color' => '#e7f3ef',
                ],
                [
                    'title' => 'No',
                    'color' => '#f3e0e5',
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                ],
            ];
        }
        if ($optionid == 5) {
            $option = [
                [
                    'title' => 'Compliant',
                    'color' => '#e7f3ef',
                ],
                [
                    'title' => 'Non-Compliant',
                    'color' => '#f3e0e5',
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                ],
            ];
        }
        $this->title_page_questions[$this->activechangingresponse]['multiple_choice'] = $option;
        $this->updating();
    }

    public function PageSetResponseValueFromReadyOptions($pageSKey, $questionSKey, $responseid, $optionid)
    {
        $oldtitle = $this->pages[$pageSKey]['question'][$questionSKey]['title'];
        unset($this->pages[$pageSKey]['question'][$questionSKey]);
        $this->pages[$pageSKey]['question'][$questionSKey]['title'] = $oldtitle;
        $this->pages[$pageSKey]['question'][$questionSKey]['is_required'] = false;
        $this->pages[$pageSKey]['question'][$questionSKey]['multi_select_multiple_choise'] = false;
        $this->pages[$pageSKey]['question'][$questionSKey]['response'] = $responseid;
        $option = [];
        if ($optionid == 1) {
            $option = [
                [
                    'title' => 'Good',
                    'color' => '#e7f3ef',
                ],
                [
                    'title' => 'Fair',
                    'color' => '#f9f2e2',
                ],
                [
                    'title' => 'Poor',
                    'color' => '#f3e0e5',
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                ],
            ];
        }
        if ($optionid == 2) {
            $option = [
                [
                    'title' => 'Safe',
                    'color' => '#e7f3ef',
                ],
                [
                    'title' => 'At Risk',
                    'color' => '#f3e0e5',
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                ],
            ];
        }
        if ($optionid == 3) {
            $option = [
                [
                    'title' => 'Pass',
                    'color' => '#e7f3ef',
                ],
                [
                    'title' => 'Fail',
                    'color' => '#f3e0e5',
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                ],
            ];
        }
        if ($optionid == 4) {
            $option = [
                [
                    'title' => 'Yes',
                    'color' => '#e7f3ef',
                ],
                [
                    'title' => 'No',
                    'color' => '#f3e0e5',
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                ],
            ];
        }
        if ($optionid == 5) {
            $option = [
                [
                    'title' => 'Compliant',
                    'color' => '#e7f3ef',
                ],
                [
                    'title' => 'Non-Compliant',
                    'color' => '#f3e0e5',
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                ],
            ];
        }
        $this->pages[$pageSKey]['question'][$questionSKey]['multiple_choice'] = $option;
        $this->updating();
    }

    public function save_multiple_choise($type, $questionKey)
    {
        // if (is_null($this->common_multiple_choise_options))
        //     $this->common_multiple_choise_options[0] = $this->title_page_questions[$questionKey]['multiple_choice'];
        // else {
        //     // dd(count($this->common_multiple_choise_options));
        //     $this->common_multiple_choise_options[count($this->common_multiple_choise_options)] = $this->title_page_questions[$questionKey]['multiple_choice'];
        // }
        // // dd($this->common_multiple_choise_options);
    }

    public function increment()
    {
        $this->activeone = $this->activeone + 1;
    }

    public function add_new_response($questionKey)
    {
        if (count($this->title_page_questions[$questionKey]['multiple_choice']) < 15)
            $this->title_page_questions[$questionKey]['multiple_choice'][] = ['title' => null, 'color' => '#13855f'];
    }

    public function page_add_new_response($pageKey, $questionKey)
    {
        if (count($this->pages[$pageKey]['question'][$questionKey]['multiple_choice']) < 15)
            $this->pages[$pageKey]['question'][$questionKey]['multiple_choice'][] = ['title' => null, 'color' => '#13855f'];
    }

    public function clear_new_response_option($questionKey)
    {
        if (count($this->title_page_questions[$questionKey]['multiple_choice']) > 0)
            $this->title_page_questions[$questionKey]['multiple_choice'] = [['title' => null, 'color' => '#13855f']];
    }

    public function page_clear_new_response_option($pageKey, $questionKey)
    {
        if (count($this->pages[$pageKey]['question'][$questionKey]['multiple_choice']) > 0)
            $this->pages[$pageKey]['question'][$questionKey]['multiple_choice'] = [['title' => null, 'color' => '#13855f']];
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
        if (count($this->title_page_questions) > 1) {
            array_splice($this->title_page_questions, $key, 1);
            $this->updating();
        }
    }

    public function add_page()
    {
        $this->pages[] = ['question' => [['response' => 1, 'is_required' => false, 'text_answer_format' => 0]]];
    }

    public function delete_page($key)
    {
        array_splice($this->pages, $key, 1);
        $this->updating();
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

    public function normal_page_delete_question($pageKey, $questionKey)
    {
        if ($this->pages[$pageKey]['question'] > 1) {
            unset($this->pages[$pageKey]['question'][$questionKey]);
            $this->updating();
        }
    }

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

    public function title_page_delete_mc_choise($questionKey, $choiceKey)
    {
        // dd($this->title_page_questions[$questionKey]);
        array_splice($this->title_page_questions[$questionKey]['multiple_choice'], $choiceKey, 1);
        $this->updating();
    }

    public function updating()
    {
        $this->check_for_exist->title = $this->title ?? '';
        if ($this->icon == null)
            $this->check_for_exist->icon = null;
        $this->check_for_exist->desc = $this->desc ?? '';
        $this->check_for_exist->title_page = $this->title_page_questions ?? [];
        $this->check_for_exist->title_page_title = $this->title_page_title ?? null;
        $this->check_for_exist->pages = $this->pages ?? [];
        $this->check_for_exist->common_multiple_choise_options = $this->option ?? null;
        $this->check_for_exist->user_id = 1;
        if ($this->uploading == true) {
            $this->icon->storeAs('images', $this->icon->getClientOriginalName());
            $this->check_for_exist->icon = $this->icon->getClientOriginalName();
            $this->icon = $this->icon->getClientOriginalName();
        }
        $this->check_for_exist->save();
        $this->uploading = false;
    }
    // public function render()
    // {
    //     return view('livewire.template.new-create', [
    //         'data' => $this->check,
    //     ]);
    // }
}
