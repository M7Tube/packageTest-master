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
    public $optional_icon;
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
    public $optional_uploading;
    public $new_template;
    protected $queryString = ['activeone', 'pageactiveone', 'pagequestionactiveone', 'template_id', 'activechangingresponse', 'new_template'];
    protected $listeners = [
        'changeindex', 'change_active_one', 'multiple_choise_changeindex', 'page_changeindex',
    ];

    public function mount()
    {
        $this->activeone = null;
        $this->pageactiveone = null;
        $this->pagequestionactiveone = null;
        $this->option = [
            [
                [
                    'title' => 'Good',
                    'color' => '#e7f3ef',
                    'font_color' => '#000000'
                ],
                [
                    'title' => 'Fair',
                    'color' => '#f9f2e2',
                    'font_color' => '#000000'
                ],
                [
                    'title' => 'Poor',
                    'color' => '#f3e0e5',
                    'font_color' => '#000000'
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                    'font_color' => '#000000'
                ],
            ],
            [
                [
                    'title' => 'Safe',
                    'color' => '#e7f3ef',
                    'font_color' => '#000000'
                ],
                [
                    'title' => 'At Risk',
                    'color' => '#f3e0e5',
                    'font_color' => '#000000'
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                    'font_color' => '#000000'
                ],
            ],
            [
                [
                    'title' => 'Pass',
                    'color' => '#e7f3ef',
                    'font_color' => '#000000'
                ],
                [
                    'title' => 'Fail',
                    'color' => '#f3e0e5',
                    'font_color' => '#000000'
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                    'font_color' => '#000000'
                ],
            ],
            [
                [
                    'title' => 'Yes',
                    'color' => '#e7f3ef',
                    'font_color' => '#000000'
                ],
                [
                    'title' => 'No',
                    'color' => '#f3e0e5',
                    'font_color' => '#000000'
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                    'font_color' => '#000000'
                ],
            ],
            [
                [
                    'title' => 'Compliant',
                    'color' => '#e7f3ef',
                    'font_color' => '#000000'
                ],
                [
                    'title' => 'Non-Compliant',
                    'color' => '#f3e0e5',
                    'font_color' => '#000000'
                ],
                [
                    'title' => 'N/A',
                    'color' => '#eaebed',
                    'font_color' => '#000000'
                ],
            ]
        ];
        $this->new_template = 0;
        $this->uploading = false;
        $this->optional_uploading = false;
        $this->title_page_questions[] = ['response' => 1, 'is_required' => false, 'text_answer_format' => 0];
        $this->common_multiple_choise_options = $this->option;
        $last = NewTemplate::all()->last();
        if ($last) {
            $this->template_id = $last['new_template_id'];
            $this->title = $last->title;
            $this->desc = $last->desc;
            // if ($last->icon)
            $this->icon = $last->icon;
            $this->optional_icon = $last->optional_icon;
            $this->title_page_questions = $last->title_page;
            $this->title_page_title = $last->title_page_title;
            $this->pages = $last->pages;
            $this->common_multiple_choise_options = $last->common_multiple_choise_options;
            $this->check_for_exist = NewTemplate::find($this->template_id);
        } else {
            $template = NewTemplate::Create([
                'icon' => null,
                'optional_icon' => null,
                'title' => $this->title ?? '',
                'desc' => $this->desc ?? '',
                'title_page' => $this->title_page_questions ?? [],
                'title_page_title' => $this->title_page_title ?? null,
                'pages' => $this->pages ?? [],
                'common_multiple_choise_options' => $this->option,
                'user_id' => 1,
            ]);
            $this->template_id = $template->new_template_id;
            $this->check_for_exist = NewTemplate::find($template->new_template_id);
        }
        $this->updating();
    }

    // public function test()
    // {
    //     dd($this->title_page_questions);
    // }


    public function setResponseValue($response)
    {
        if ($response == 1) {
            $oldtitle = $this->title_page_questions[$this->activeone]['title'] ?? null;
            unset($this->title_page_questions[$this->activeone]);
            $this->title_page_questions[$this->activeone]['title'] = $oldtitle ?? null;
            $this->title_page_questions[$this->activeone]['response'] = $response;
            $this->title_page_questions[$this->activeone]['is_required'] = false;
            $this->title_page_questions[$this->activeone]['text_answer_format'] = 0;
        } elseif ($response == 2) {
            $oldtitle = $this->title_page_questions[$this->activeone]['title'] ?? null;
            unset($this->title_page_questions[$this->activeone]);
            $this->title_page_questions[$this->activeone]['title'] = $oldtitle ?? null;
            $this->title_page_questions[$this->activeone]['response'] = $response;
            $this->title_page_questions[$this->activeone]['is_required'] = false;
            $this->title_page_questions[$this->activeone]['docNum_format'] = '000001';
        } elseif ($response == 5) {
            $oldtitle = $this->title_page_questions[$this->activeone]['title'] ?? null;
            unset($this->title_page_questions[$this->activeone]);
            $this->title_page_questions[$this->activeone]['title'] = $oldtitle ?? null;
            $this->title_page_questions[$this->activeone]['response'] = $response;
            $this->title_page_questions[$this->activeone]['is_required'] = false;
            $this->title_page_questions[$this->activeone]['is_date'] = false;
            $this->title_page_questions[$this->activeone]['is_time'] = false;
        } elseif ($response == 7) {
            $oldtitle = $this->title_page_questions[$this->activeone]['title'] ?? null;
            unset($this->title_page_questions[$this->activeone]);
            $this->title_page_questions[$this->activeone]['title'] = $oldtitle ?? null;
            $this->title_page_questions[$this->activeone]['response'] = $response;
            $this->title_page_questions[$this->activeone]['is_required'] = false;
            $this->title_page_questions[$this->activeone]['multi_select_multiple_choise'] = false;
            if (!array_key_exists('multiple_choice', $this->title_page_questions[$this->activeone])) {
                $this->title_page_questions[$this->activeone]['multiple_choice'] = [['title' => null, 'color' => '#13855f', 'font_color' => '#000000']];
            }
        } else {
            $oldtitle = $this->title_page_questions[$this->activeone]['title'] ?? null;
            unset($this->title_page_questions[$this->activeone]);
            $this->title_page_questions[$this->activeone]['title'] = $oldtitle ?? null;
            $this->title_page_questions[$this->activeone]['response'] = $response;
            $this->title_page_questions[$this->activeone]['is_required'] = false;
        }
        $this->updating();
    }

    public function EditMultipleChoiseOptionModal($option)
    {
        $oldtitle = $this->title_page_questions[$this->activeone]['title'] ?? null;
        unset($this->title_page_questions[$this->activeone]);
        $this->title_page_questions[$this->activeone]['title'] = $oldtitle ?? null;
        $this->title_page_questions[$this->activeone]['response'] = 7;
        $this->title_page_questions[$this->activeone]['is_required'] = false;
        $this->title_page_questions[$this->activeone]['multi_select_multiple_choise'] = false;
        $this->title_page_questions[$this->activeone]['multiple_choice'] = $this->common_multiple_choise_options[$option];
        $this->updating();
    }

    public function pageEditMultipleChoiseOptionModal($option)
    {
        $oldtitle = $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['title'] ?? null;
        unset($this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]);
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['title'] = $oldtitle ?? null;
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['response'] = 7;
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['is_required'] = false;
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multi_select_multiple_choise'] = false;
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice'] = $this->common_multiple_choise_options[$option];
        $this->updating();
    }

    public function PageSetResponseValue($response)
    {
        $arr = explode('_', $this->activeone);
        if ($response == 1) {
            $oldtitle = $this->pages[$arr[1]]['question'][$arr[2]]['title'] ?? null;
            unset($this->pages[$arr[1]]['question'][$arr[2]]);
            $this->pages[$arr[1]]['question'][$arr[2]]['title'] = $oldtitle ?? null;
            $this->pages[$arr[1]]['question'][$arr[2]]['response'] = $response;
            $this->pages[$arr[1]]['question'][$arr[2]]['is_required'] = false;
            $this->pages[$arr[1]]['question'][$arr[2]]['text_answer_format'] = 0;
        } elseif ($response == 2) {
            $oldtitle = $this->pages[$arr[1]]['question'][$arr[2]]['title'] ?? null;
            unset($this->pages[$arr[1]]['question'][$arr[2]]);
            $this->pages[$arr[1]]['question'][$arr[2]]['title'] = $oldtitle ?? null;
            $this->pages[$arr[1]]['question'][$arr[2]]['response'] = $response;
            $this->pages[$arr[1]]['question'][$arr[2]]['is_required'] = false;
            $this->pages[$arr[1]]['question'][$arr[2]]['docNum_format'] = '000001';
        } elseif ($response == 5) {
            $oldtitle = $this->pages[$arr[1]]['question'][$arr[2]]['title'] ?? null;
            unset($this->pages[$arr[1]]['question'][$arr[2]]);
            $this->pages[$arr[1]]['question'][$arr[2]]['title'] = $oldtitle ?? null;
            $this->pages[$arr[1]]['question'][$arr[2]]['response'] = $response;
            $this->pages[$arr[1]]['question'][$arr[2]]['is_required'] = false;
            $this->pages[$arr[1]]['question'][$arr[2]]['is_date'] = false;
            $this->pages[$arr[1]]['question'][$arr[2]]['is_time'] = false;
        } elseif ($response == 7) {
            $oldtitle = $this->pages[$arr[1]]['question'][$arr[2]]['title'] ?? null;
            unset($this->pages[$arr[1]]['question'][$arr[2]]);
            $this->pages[$arr[1]]['question'][$arr[2]]['title'] = $oldtitle ?? null;
            $this->pages[$arr[1]]['question'][$arr[2]]['response'] = $response;
            $this->pages[$arr[1]]['question'][$arr[2]]['is_required'] = false;
            $this->pages[$arr[1]]['question'][$arr[2]]['multi_select_multiple_choise'] = false;
            $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice'] = [['title' => null, 'color' => '#13855f', 'font_color' => '#000000']];
        } else {
            $oldtitle = $this->pages[$arr[1]]['question'][$arr[2]]['title'] ?? null;
            unset($this->pages[$arr[1]]['question'][$arr[2]]);
            $this->pages[$arr[1]]['question'][$arr[2]]['title'] = $oldtitle ?? null;
            $this->pages[$arr[1]]['question'][$arr[2]]['response'] = $response;
            $this->pages[$arr[1]]['question'][$arr[2]]['is_required'] = false;
        }
        $this->updating();
    }

    public function setResponseValueFromReadyOptions($responseid, $optionid)
    {
        $oldtitle = $this->title_page_questions[$this->activechangingresponse]['title'] ?? null;
        unset($this->title_page_questions[$this->activechangingresponse]);
        $this->title_page_questions[$this->activechangingresponse]['title'] = $oldtitle ?? null;
        $this->title_page_questions[$this->activechangingresponse]['is_required'] = false;
        $this->title_page_questions[$this->activechangingresponse]['multi_select_multiple_choise'] = false;
        $this->title_page_questions[$this->activechangingresponse]['response'] = $responseid;
        $this->title_page_questions[$this->activechangingresponse]['multiple_choice'] = $this->common_multiple_choise_options[$optionid];
        $this->updating();
    }

    public function PageSetResponseValueFromReadyOptions($pageSKey, $questionSKey, $responseid, $optionid)
    {
        $oldtitle = $this->pages[$pageSKey]['question'][$questionSKey]['title'] ?? null;
        unset($this->pages[$pageSKey]['question'][$questionSKey]);
        $this->pages[$pageSKey]['question'][$questionSKey]['title'] = $oldtitle ?? null;
        $this->pages[$pageSKey]['question'][$questionSKey]['is_required'] = false;
        $this->pages[$pageSKey]['question'][$questionSKey]['multi_select_multiple_choise'] = false;
        $this->pages[$pageSKey]['question'][$questionSKey]['response'] = $responseid;
        $this->pages[$pageSKey]['question'][$questionSKey]['multiple_choice'] = $this->common_multiple_choise_options[$optionid];
        $this->updating();
    }

    public function save_multiple_choise($questionKey)
    {
        foreach ($this->common_multiple_choise_options as $key => $value) {
            if ($value === $this->title_page_questions[$questionKey]['multiple_choice']) {
                array_splice($this->common_multiple_choise_options, $key, 1);
                array_push($this->common_multiple_choise_options, $this->title_page_questions[$questionKey]['multiple_choice']);
                $this->updating();
                break;
            } else {
                array_push($this->common_multiple_choise_options, $this->title_page_questions[$questionKey]['multiple_choice']);
                $this->updating();
                break;
            }
        }
    }

    public function page_save_multiple_choise($pageKey, $questionKey)
    {
        foreach ($this->common_multiple_choise_options as $key => $value) {
            if ($value === $this->pages[$pageKey]['question'][$questionKey]['multiple_choice']) {
                array_splice($this->common_multiple_choise_options, $key, 1);
                array_push($this->common_multiple_choise_options, $this->pages[$pageKey]['question'][$questionKey]['multiple_choice']);
                $this->updating();
                break;
            } else {
                array_push($this->common_multiple_choise_options, $this->pages[$pageKey]['question'][$questionKey]['multiple_choice']);
                $this->updating();
                break;
            }
        }
    }

    public function increment()
    {
        $this->activeone = $this->activeone + 1;
        $this->updating();
    }

    public function add_new_response($questionKey)
    {
        if (count($this->title_page_questions[$questionKey]['multiple_choice']) < 15)
            $this->title_page_questions[$questionKey]['multiple_choice'][] = ['title' => null, 'color' => '#13855f', 'font_color' => '#000000'];
        $this->updating();
    }

    public function page_add_new_response()
    {
        if (count($this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice']) < 15)
            $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice'][] = ['title' => null, 'color' => '#13855f', 'font_color' => '#000000'];
        $this->updating();
    }

    public function clear_new_response_option($questionKey)
    {
        $oldtitle = $this->title_page_questions[$questionKey]['title'] ?? null;
        unset($this->title_page_questions[$questionKey]);
        $this->title_page_questions[$questionKey]['title'] = $oldtitle ?? null;
        $this->title_page_questions[$questionKey]['is_required'] = false;
        $this->title_page_questions[$questionKey]['response'] = 1;
        $this->title_page_questions[$questionKey]['text_answer_format'] = 0;
        $this->updating();
    }

    public function page_clear_new_response_option()
    {
        $oldtitle = $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['title'] ?? null;
        unset($this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]);
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['title'] = $oldtitle ?? null;
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['is_required'] = false;
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['response'] = 1;
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['text_answer_format'] = 0;
        $this->updating();
    }

    public function title_page_add_question()
    {
        if ($this->activeone != null && $this->activeone != 'null') {
            if (str_contains($this->activeone, 'p_')) {
                $arr = explode('_', $this->activeone);
                $string = implode('_', array_slice($arr, 0, 3));
                array_splice($this->pages[$arr[1]]['question'], $arr[2] + 1, 0, [['response' => 1, 'is_required' => false, 'text_answer_format' => 0]]);
            } else {
                array_splice($this->title_page_questions, $this->activeone + 1, 0, [['response' => 1, 'is_required' => false, 'text_answer_format' => 0]]);
            }
        } else {
            array_splice($this->title_page_questions, 0, 0, [['response' => 1, 'is_required' => false, 'text_answer_format' => 0]]);
        }
        $this->updating();
    }

    public function title_page_delete_question()
    {
        if (count($this->title_page_questions) > 1) {
            array_splice($this->title_page_questions, $this->activeone, 1);
            $this->activeone = 0;
            $this->updating();
        }
    }

    public function add_page()
    {
        $this->pages[] = ['question' => [['response' => 1, 'is_required' => false, 'text_answer_format' => 0]]];
        $this->updating();
    }

    public function delete_page($key)
    {
        array_splice($this->pages, $key, 1);
        $this->updating();
    }

    public function changeindex($oldIndex, $newIndex)
    {
        $temp = $this->title_page_questions[$oldIndex];
        // $this->title_page_questions[$oldIndex] = $this->title_page_questions[$newIndex];
        // $this->title_page_questions[$newIndex] = $temp;
        array_splice($this->title_page_questions, $oldIndex, 1);
        array_splice($this->title_page_questions, $newIndex, 0, [$temp]);
        // dd($this->title_page_questions);
        if ($oldIndex == $this->activeone)
            $this->activeone = $newIndex;
        if ($newIndex == $this->activeone)
            $this->activeone = $oldIndex;
        $this->updating();
    }

    public function multiple_choise_changeindex($oldIndex, $newIndex)
    {
        $temp = $this->title_page_questions[$this->activeone]['multiple_choice'][$oldIndex];
        $this->title_page_questions[$this->activeone]['multiple_choice'][$oldIndex] = $this->title_page_questions[$this->activeone]['multiple_choice'][$newIndex];
        $this->title_page_questions[$this->activeone]['multiple_choice'][$newIndex] = $temp;
        $this->updating();
    }

    public function page_changeindex($oldIndex, $newIndex, $page)
    {
        $temp = $this->pages[$page]['question'][$oldIndex];
        $this->pages[$page]['question'][$oldIndex] = $this->pages[$page]['question'][$newIndex];
        $this->pages[$page]['question'][$newIndex] = $temp;
        $this->updating();
    }

    // public function change_active_one($newIndex)
    // {
    //     $this->activeone = $newIndex;
    //     $this->updating();
    // }

    public function normal_page_delete_question($pageKey, $questionKey)
    {
        if (count($this->pages[$pageKey]['question']) > 1) {
            array_splice($this->pages[$pageKey]['question'], $questionKey, 1);
            $this->updating();
        }
    }

    public function delete_image()
    {
        $this->icon = null;
        $this->updating();
    }

    public function give_active_one($value)
    {
        $this->activeone = $value;
        $this->updating();
    }


    public function delete_optional_image()
    {
        $this->optional_icon = null;
        $this->updating();
    }

    public function updatedIcon()
    {
        $this->uploading = true;
        $this->updating();
    }

    public function updatedOptionalIcon()
    {
        $this->optional_uploading = true;
        $this->updating();
    }

    public function title_page_delete_mc_choise($choiceKey)
    {
        if (count($this->title_page_questions[$this->activeone]['multiple_choice']) > 1) {
            array_splice($this->title_page_questions[$this->activeone]['multiple_choice'], $choiceKey, 1);
            $this->updating();
        }
    }

    public function delete_defualt_option($id)
    {
        array_splice($this->common_multiple_choise_options, $id, 1);
        $this->updating();
    }

    public function page_delete_mc_choise($choiceKey)
    {
        if (count($this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice']) > 1) {
            array_splice($this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice'], $choiceKey, 1);
            $this->updating();
        }
    }
    public function adjustBrightness($hexCode, $adjustPercent)
    {
        $hexCode = ltrim($hexCode, '#');
        if (strlen($hexCode) == 3) {
            $hexCode = $hexCode[0] . $hexCode[0] . $hexCode[1] . $hexCode[1] . $hexCode[2] . $hexCode[2];
        }
        $hexCode = array_map('hexdec', str_split($hexCode, 2));
        foreach ($hexCode as &$color) {
            $adjustableLimit = $adjustPercent < 0 ? $color : 255 - $color;
            $adjustAmount = ceil($adjustableLimit * $adjustPercent);
            $color = str_pad(dechex($color + $adjustAmount), 2, '0', STR_PAD_LEFT);
        }
        return '#' . implode($hexCode);
    }

    function color_blend_by_opacity($passedcolor)
    {
        // $split = str_split($passedcolor, 2);
        list($r, $g, $b) = sscanf($passedcolor, "#%02x%02x%02x");
        // $r = hexdec($split[0]);
        // $g = hexdec($split[1]);
        // $b = hexdec($split[2]);
        // return "rgba(" . $r . ", " . $g . ", " . $b . ", ".255.")";
        return "rgba(" . $r . ", " . $g . ", " . $b . ", " . 55 . ")";
    }

    public function updating()
    {
        $this->check_for_exist->title = $this->title ?? '';
        if ($this->icon == null)
            $this->check_for_exist->icon = null;
        if ($this->optional_icon == null)
            $this->check_for_exist->optional_icon = null;
        $this->check_for_exist->desc = $this->desc ?? '';
        $this->check_for_exist->title_page = $this->title_page_questions ?? [];
        $this->check_for_exist->title_page_title = $this->title_page_title ?? null;
        $this->check_for_exist->pages = $this->pages ?? [];
        $this->check_for_exist->common_multiple_choise_options = $this->common_multiple_choise_options ?? null;
        $this->check_for_exist->user_id = 1;
        if ($this->uploading == true) {
            $this->icon->storeAs('images', $this->icon->getClientOriginalName());
            $this->check_for_exist->icon = $this->icon->getClientOriginalName();
            $this->icon = $this->icon->getClientOriginalName();
        }
        if ($this->optional_uploading == true) {
            $this->optional_icon->storeAs('images', $this->optional_icon->getClientOriginalName());
            $this->check_for_exist->optional_icon = $this->optional_icon->getClientOriginalName();
            $this->optional_icon = $this->optional_icon->getClientOriginalName();
        }
        $this->check_for_exist->save();
        $this->uploading = false;
        $this->optional_uploading = false;
    }

    // public function render()
    // {
    //     return view('livewire.template.new-create');
    // }
}
