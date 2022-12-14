<?php

namespace App\Http\Livewire\Template;

use App\Models\NewTemplate;
use Livewire\Component;
use Livewire\WithFileUploads;
use phpDocumentor\Reflection\Types\Integer;

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
    // public $sectionactiveone;
    public $sectionquestionactiveone;
    public $pageactiveone;
    public $pagequestionactiveone;
    public $option;
    public $check_for_exist;
    public $uploading;
    public $optional_uploading;
    public $new_template;
    public $current_multiple_choise;
    public $inspection_title_format = [['key' => null, 'value' => null]];
    protected $queryString = ['activeone', 'sectionquestionactiveone', 'pageactiveone', 'pagequestionactiveone', 'template_id', 'new_template'];
    protected $listeners = [
        'changeindex', 'change_active_one', 'multiple_choise_changeindex', 'page_changeindex','section_changeindex', 'updating'
    ];

    public function mount()
    {
        $this->activeone = 'null';
        // $this->sectionactiveone = 'null';
        $this->sectionquestionactiveone = 'null';
        $this->pageactiveone = 'null';
        $this->pagequestionactiveone = 'null';
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
        $this->title_page_questions[] = ['title' => null, 'response' => 1, 'is_section' => false, 'is_required' => false, 'text_answer_format' => 0];
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
            $this->inspection_title_format = $last->inspection_title_format;
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
                'inspection_title_format' => $this->inspection_title_format ?? [['key' => null, 'value' => null]],
                'title_page_title' => $this->title_page_title ?? null,
                'pages' => $this->pages ?? [],
                'common_multiple_choise_options' => $this->option,
                'user_id' => 1,
            ]);
            $this->template_id = $template->new_template_id;
            $this->check_for_exist = NewTemplate::find($template->new_template_id);
        }
        $this->custom_updating();
    }

    public function test()
    {
        dd($this->inspection_title_format);
    }

    public function set_inspection_title_format($inspection_title_format_key, $title_page_key)
    {
        if ($this->inspection_title_format[$inspection_title_format_key]['key'] == null && $this->inspection_title_format[$inspection_title_format_key]['value'] == null) {
            $this->inspection_title_format[$inspection_title_format_key] = [
                'key' => $title_page_key,
                'value' => $this->title_page_questions[$title_page_key]['title']
            ];
            // if(count($this->inspection_title_format)!=count($this->title_page_questions))
            $this->inspection_title_format[] = ['key' => null, 'value' => null];
        } else {
            $this->inspection_title_format[$inspection_title_format_key] = [
                'key' => $title_page_key,
                'value' => $this->title_page_questions[$title_page_key]['title']
            ];
        }
        $this->custom_updating();
    }

    public function delete_inspection_title_format($inspection_title_format_key)
    {
        if (count($this->inspection_title_format) > 1)
            array_splice($this->inspection_title_format, $inspection_title_format_key, 1);
        $this->custom_updating();
    }

    public function empty_inspection_title_format()
    {
        $this->inspection_title_format = [['key' => null, 'value' => null]];
        $this->custom_updating();
    }

    public function setResponseValue($response)
    {
        $oldtitle = $this->title_page_questions[$this->activeone]['title'] ?? null;
        if ($this->sectionquestionactiveone == null || $this->sectionquestionactiveone == 'null') {
            unset($this->title_page_questions[$this->activeone]);
            $this->title_page_questions[$this->activeone]['title'] = $oldtitle ?? null;
            $this->title_page_questions[$this->activeone]['response'] = $response;
            $this->title_page_questions[$this->activeone]['is_required'] = false;
            $this->title_page_questions[$this->activeone]['is_section'] = false;
            if ($response == 1) {
                $this->title_page_questions[$this->activeone]['text_answer_format'] = 0;
            } elseif ($response == 2) {
                $this->title_page_questions[$this->activeone]['docNum_format'] = '000001';
            } elseif ($response == 5) {
                $this->title_page_questions[$this->activeone]['is_date'] = false;
                $this->title_page_questions[$this->activeone]['is_time'] = false;
            } elseif ($response == 7) {
                $this->title_page_questions[$this->activeone]['multi_select_multiple_choise'] = false;
                if (!array_key_exists('multiple_choice', $this->title_page_questions[$this->activeone])) {
                    $this->title_page_questions[$this->activeone]['multiple_choice'] = [['title' => null, 'color' => '#13855f', 'font_color' => '#000000']];
                }
            }
        } else {
            $oldtitle = $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['title'] ?? null;
            unset($this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]);
            $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['title'] = $oldtitle ?? null;
            $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['response'] = $response;
            $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['is_required'] = false;
            $this->title_page_questions[$this->activeone]['is_section'] = true;
            if ($response == 1) {
                $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['text_answer_format'] = 0;
            } elseif ($response == 2) {
                $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['docNum_format'] = '000001';
            } elseif ($response == 5) {
                $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['is_date'] = false;
                $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['is_time'] = false;
            } elseif ($response == 7) {
                $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['multi_select_multiple_choise'] = false;
                if (!array_key_exists('multiple_choice', $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone])) {
                    $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['multiple_choice'] = [['title' => null, 'color' => '#13855f', 'font_color' => '#000000']];
                }
            }
        }
        $this->custom_updating();
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
        $this->current_multiple_choise = $this->title_page_questions[$this->activeone]['multiple_choice'];
        $this->custom_updating();
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
        $this->current_multiple_choise = $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice'];
        $this->custom_updating();
    }

    public function PageSetResponseValue($response)
    {
        $oldtitle = $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['title'] ?? null;
        unset($this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]);
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['title'] = $oldtitle ?? null;
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['response'] = $response;
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['is_required'] = false;
        if ($response == 1) {
            $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['text_answer_format'] = 0;
        } elseif ($response == 2) {
            $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['docNum_format'] = '000001';
        } elseif ($response == 5) {
            $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['is_date'] = false;
            $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['is_time'] = false;
        } elseif ($response == 7) {
            $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multi_select_multiple_choise'] = false;
            $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice'] = [['title' => null, 'color' => '#13855f', 'font_color' => '#000000']];
        }
        $this->custom_updating();
    }

    public function setResponseValueFromReadyOptions($responseid, $optionid)
    {
        if ($this->sectionquestionactiveone == null || $this->sectionquestionactiveone == 'null') {
            $oldtitle = $this->title_page_questions[$this->activeone]['title'] ?? null;
            unset($this->title_page_questions[$this->activeone]);
            $this->title_page_questions[$this->activeone]['title'] = $oldtitle ?? null;
            $this->title_page_questions[$this->activeone]['is_required'] = false;
            $this->title_page_questions[$this->activeone]['is_section'] = false;
            $this->title_page_questions[$this->activeone]['multi_select_multiple_choise'] = false;
            $this->title_page_questions[$this->activeone]['response'] = $responseid;
            $this->title_page_questions[$this->activeone]['multiple_choice'] = $this->common_multiple_choise_options[$optionid];
        } else {
            $oldtitle = $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['title'] ?? null;
            unset($this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]);
            $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['title'] = $oldtitle ?? null;
            $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['is_required'] = false;
            $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['is_section'] = true;
            $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['multi_select_multiple_choise'] = false;
            $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['response'] = $responseid;
            $this->title_page_questions[$this->activeone]['question'][$this->sectionquestionactiveone]['multiple_choice'] = $this->common_multiple_choise_options[$optionid];
        }
        $this->custom_updating();
    }

    public function PageSetResponseValueFromReadyOptions($responseid, $optionid)
    {
        $oldtitle = $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['title'] ?? null;
        unset($this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]);
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['title'] = $oldtitle ?? null;
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['is_required'] = false;
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multi_select_multiple_choise'] = false;
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['response'] = $responseid;
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice'] = $this->common_multiple_choise_options[$optionid];
        $this->custom_updating();
    }

    public function save_multiple_choise($questionKey)
    {
        foreach ($this->common_multiple_choise_options as $key => $value) {
            if ($value === $this->title_page_questions[$questionKey]['multiple_choice']) {
                array_splice($this->common_multiple_choise_options, $key, 1);
            }
            array_push($this->common_multiple_choise_options, $this->title_page_questions[$questionKey]['multiple_choice']);
            $this->custom_updating();
            break;
        }
    }

    public function page_save_multiple_choise()
    {
        foreach ($this->common_multiple_choise_options as $key => $value) {
            if ($value === $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice']) {
                array_splice($this->common_multiple_choise_options, $key, 1);
                array_push($this->common_multiple_choise_options, $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice']);
                $this->custom_updating();
                break;
            } else {
                array_push($this->common_multiple_choise_options, $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice']);
                $this->custom_updating();
                break;
            }
        }
    }

    public function edit_save_multiple_choise($questionKey)
    {
        $key = array_search($this->current_multiple_choise, $this->common_multiple_choise_options);
        $this->common_multiple_choise_options[$key] = $this->title_page_questions[$questionKey]['multiple_choice'];
        $this->custom_updating();
    }

    public function page_edit_save_multiple_choise()
    {
        $key = array_search($this->current_multiple_choise, $this->common_multiple_choise_options);
        $this->common_multiple_choise_options[$key] = $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice'];
        $this->custom_updating();
    }

    public function increment()
    {
        $this->activeone = $this->activeone + 1;
        $this->custom_updating();
    }

    public function add_new_response($questionKey)
    {
        if (count($this->title_page_questions[$questionKey]['multiple_choice']) < 15)
            $this->title_page_questions[$questionKey]['multiple_choice'][] = ['title' => null, 'color' => '#13855f', 'font_color' => '#000000'];
        $this->custom_updating();
    }

    public function page_add_new_response()
    {
        if (count($this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice']) < 15)
            $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice'][] = ['title' => null, 'color' => '#13855f', 'font_color' => '#000000'];
        $this->custom_updating();
    }

    public function clear_new_response_option($questionKey)
    {
        $oldtitle = $this->title_page_questions[$questionKey]['title'] ?? null;
        unset($this->title_page_questions[$questionKey]);
        $this->title_page_questions[$questionKey]['title'] = $oldtitle ?? null;
        $this->title_page_questions[$questionKey]['is_required'] = false;
        $this->title_page_questions[$questionKey]['response'] = 1;
        $this->title_page_questions[$questionKey]['text_answer_format'] = 0;
        $this->custom_updating();
    }

    public function page_clear_new_response_option()
    {
        $oldtitle = $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['title'] ?? null;
        unset($this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]);
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['title'] = $oldtitle ?? null;
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['is_required'] = false;
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['response'] = 1;
        $this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['text_answer_format'] = 0;
        $this->custom_updating();
    }

    public function focus_on_this_question($question_key, $sectionquestionactiveone, $pageactiveone, $pagequestionactiveone)
    {
        $this->activeone = $question_key;
        // $this->sectionactiveone = $sectionactiveone;
        $this->sectionquestionactiveone = $sectionquestionactiveone;
        $this->pageactiveone = $pageactiveone;
        $this->pagequestionactiveone = $pagequestionactiveone;
    }

    public function title_page_add_question()
    {
        if ($this->activeone != null && $this->activeone != 'null' || $this->activeone == 0) {
            if (($this->sectionquestionactiveone == null || $this->sectionquestionactiveone == 'null') && $this->sectionquestionactiveone != 0) {
                array_splice($this->title_page_questions, $this->activeone + 1, 0, [['title' => null, 'response' => 1, 'is_section' => false, 'is_required' => false, 'text_answer_format' => 0]]);
                $this->activeone = $this->activeone + 1;
            } elseif ($this->sectionquestionactiveone != null || $this->sectionquestionactiveone != 'null') {
                array_splice($this->title_page_questions[$this->activeone]['question'], $this->sectionquestionactiveone + 1, 0, [['title' => null, 'response' => 1, 'is_section' => false, 'is_required' => false, 'text_answer_format' => 0]]);
                $this->sectionquestionactiveone = $this->sectionquestionactiveone + 1;
            }
        } else {
            if ($this->pageactiveone != 'null' && $this->pagequestionactiveone != 'null') {
                array_splice($this->pages[$this->pageactiveone]['question'], $this->pagequestionactiveone + 1, 0, [['title' => null, 'response' => 1, 'is_section' => false, 'is_required' => false, 'text_answer_format' => 0]]);
                $this->pagequestionactiveone = $this->pagequestionactiveone + 1;
            } else {
                array_splice($this->title_page_questions, 0, 0, [['title' => null, 'response' => 1, 'is_section' => false, 'is_required' => false, 'text_answer_format' => 0]]);
                $this->activeone = 0;
            }
        }
        $this->custom_updating();
    }

    public function title_page_delete_question($question_key)
    {
        if (count($this->title_page_questions) > 1) {
            array_splice($this->title_page_questions, $question_key, 1);
            if ($question_key == 0)
                $this->activeone = 0;
            else
                $this->activeone = $question_key - 1;
            $this->custom_updating();
        }
    }

    public function section_delete_question($question_key, $sectionquestion)
    {
        if (count($this->title_page_questions[$question_key]['question']) > 1) {
            array_splice($this->title_page_questions[$question_key]['question'], $sectionquestion, 1);
            if ($sectionquestion == 0)
                $this->sectionquestionactiveone = 0;
            else
                $this->sectionquestionactiveone = $sectionquestion - 1;
            $this->custom_updating();
        }
    }

    public function add_page()
    {
        $this->pages[] = ['question' => [['title' => null, 'response' => 1, 'is_section' => false, 'is_required' => false, 'text_answer_format' => 0]]];
        $this->custom_updating();
    }

    public function add_section()
    {
        if ($this->activeone != null && $this->activeone != 'null' || $this->activeone == 0) {
            array_splice($this->title_page_questions, $this->activeone + 1, 0, [['title' => null, 'response' => null, 'is_section' => true, 'is_required' => null, 'text_answer_format' => null, 'question' => [['title' => null, 'response' => 1, 'is_required' => false, 'text_answer_format' => 0]]]]);
            $this->activeone = $this->activeone + 1;
        } else {
            if ($this->pageactiveone != 'null' && $this->pagequestionactiveone != 'null') {
                array_splice($this->pages[$this->pageactiveone]['question'], $this->pagequestionactiveone + 1, 0, [['title' => null, 'response' => null, 'is_section' => true, 'is_required' => null, 'text_answer_format' => null, 'question' => [['title' => null, 'response' => 1, 'is_required' => false, 'text_answer_format' => 0]]]]);
                $this->pagequestionactiveone = $this->pagequestionactiveone + 1;
            } else {
                array_splice($this->title_page_questions, 0, 0, [['title' => null, 'response' => null, 'is_section' => true, 'is_required' => null, 'text_answer_format' => null, 'question' => [['title' => null, 'response' => 1, 'is_required' => false, 'text_answer_format' => 0]]]]);
                $this->activeone = 0;
            }
        }
        $this->custom_updating();
    }

    public function delete_page($key)
    {
        array_splice($this->pages, $key, 1);
        $this->pageactiveone = 'null';
        $this->pagequestionactiveone = 'null';
        $this->custom_updating();
    }

    public function changeindex($oldIndex, $newIndex)
    {
        $temp = $this->title_page_questions[$oldIndex];
        array_splice($this->title_page_questions, $oldIndex, 1);
        array_splice($this->title_page_questions, $newIndex, 0, [$temp]);
        switch ($this->activeone) {
            case $oldIndex:
                $this->activeone = $newIndex;
                break;
            case $newIndex:
                if ($oldIndex > $this->activeone)
                    $this->activeone = $newIndex + 1;
                if ($oldIndex < $this->activeone)
                    $this->activeone = $newIndex - 1;
                break;
            default:
                if (($oldIndex > $this->activeone) && ($newIndex > $this->activeone)) {
                } elseif (($oldIndex < $this->activeone) && ($newIndex < $this->activeone)) {
                } elseif ($oldIndex > $this->activeone)
                    $this->activeone = $this->activeone + 1;
                elseif ($oldIndex < $this->activeone)
                    $this->activeone = $this->activeone - 1;
                break;
        }
        $this->custom_updating();
    }

    public function section_changeindex($activeone,$oldIndex, $newIndex)
    {
        $temp = $this->title_page_questions[$activeone]['question'][$oldIndex];
        array_splice($this->title_page_questions[$activeone]['question'], $oldIndex, 1);
        array_splice($this->title_page_questions[$activeone]['question'], $newIndex, 0, [$temp]);
        switch ($this->sectionquestionactiveone) {
            case $oldIndex:
                $this->sectionquestionactiveone = $newIndex;
                break;
            case $newIndex:
                if ($oldIndex > $this->sectionquestionactiveone)
                    $this->sectionquestionactiveone = $newIndex + 1;
                if ($oldIndex < $this->sectionquestionactiveone)
                    $this->sectionquestionactiveone = $newIndex - 1;
                break;
            default:
                if (($oldIndex > $this->sectionquestionactiveone) && ($newIndex > $this->sectionquestionactiveone)) {
                } elseif (($oldIndex < $this->sectionquestionactiveone) && ($newIndex < $this->sectionquestionactiveone)) {
                } elseif ($oldIndex > $this->sectionquestionactiveone)
                    $this->sectionquestionactiveone = $this->sectionquestionactiveone + 1;
                elseif ($oldIndex < $this->sectionquestionactiveone)
                    $this->sectionquestionactiveone = $this->sectionquestionactiveone - 1;
                break;
        }
        $this->custom_updating();
    }

    public function page_changeindex($oldIndex, $newIndex, $page)
    {
        $temp = $this->pages[$page]['question'][$oldIndex];
        array_splice($this->pages[$page]['question'], $oldIndex, 1);
        array_splice($this->pages[$page]['question'], $newIndex, 0, [$temp]);
        switch ($this->pagequestionactiveone) {
            case $oldIndex:
                $this->pagequestionactiveone = $newIndex;
                break;
            case $newIndex:
                if ($oldIndex > $this->pagequestionactiveone)
                    $this->pagequestionactiveone = $newIndex + 1;
                if ($oldIndex < $this->pagequestionactiveone)
                    $this->pagequestionactiveone = $newIndex - 1;
                break;
            default:
                if (($oldIndex > $this->pagequestionactiveone) && ($newIndex > $this->pagequestionactiveone)) {
                } elseif (($oldIndex < $this->pagequestionactiveone) && ($newIndex < $this->pagequestionactiveone)) {
                } elseif ($oldIndex > $this->pagequestionactiveone)
                    $this->pagequestionactiveone = $this->pagequestionactiveone + 1;
                elseif ($oldIndex < $this->pagequestionactiveone)
                    $this->pagequestionactiveone = $this->pagequestionactiveone - 1;
                break;
        }
        $this->custom_updating();
    }

    public function multiple_choise_changeindex($oldIndex, $newIndex)
    {
        $temp = $this->title_page_questions[$this->activeone]['multiple_choice'][$oldIndex];
        $this->title_page_questions[$this->activeone]['multiple_choice'][$oldIndex] = $this->title_page_questions[$this->activeone]['multiple_choice'][$newIndex];
        $this->title_page_questions[$this->activeone]['multiple_choice'][$newIndex] = $temp;
        $this->custom_updating();
    }

    // public function change_active_one($newIndex)
    // {
    //     $this->activeone = $newIndex;
    //     $this->custom_updating();
    // }

    public function normal_page_delete_question($pageKey, $questionKey)
    {
        if (count($this->pages[$pageKey]['question']) > 1) {
            array_splice($this->pages[$pageKey]['question'], $questionKey, 1);
            if ($questionKey == 0)
                $this->pagequestionactiveone = 0;
            else
                $this->pagequestionactiveone = $questionKey - 1;
            $this->custom_updating();
        }
    }

    public function delete_image()
    {
        $this->icon = null;
        $this->custom_updating();
    }

    public function give_active_one($value)
    {
        $this->activeone = $value;
        $this->sectionquestionactiveone = $value;
        $this->pageactiveone = $value;
        $this->pagequestionactiveone = $value;
        $this->custom_updating();
    }

    public function page_give_active_one($value)
    {
        $this->activeone = $value;
        $this->pageactiveone = $value;
        $this->pagequestionactiveone = $value;
        $this->custom_updating();
    }

    public function delete_optional_image()
    {
        $this->optional_icon = null;
        $this->custom_updating();
    }

    public function updatedIcon()
    {
        $this->uploading = true;
        $this->custom_updating();
    }

    public function updatedOptionalIcon()
    {
        $this->optional_uploading = true;
        $this->custom_updating();
    }

    public function title_page_delete_mc_choise($choiceKey)
    {
        if (count($this->title_page_questions[$this->activeone]['multiple_choice']) > 1) {
            array_splice($this->title_page_questions[$this->activeone]['multiple_choice'], $choiceKey, 1);
            $this->custom_updating();
        }
    }

    public function delete_defualt_option($id)
    {
        array_splice($this->common_multiple_choise_options, $id, 1);
        $this->custom_updating();
    }

    public function page_delete_mc_choise($choiceKey)
    {
        if (count($this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice']) > 1) {
            array_splice($this->pages[$this->pageactiveone]['question'][$this->pagequestionactiveone]['multiple_choice'], $choiceKey, 1);
            $this->custom_updating();
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

    public function custom_updating()
    {
        $this->check_for_exist->title = $this->title ?? '';
        if ($this->icon == null)
            $this->check_for_exist->icon = null;
        if ($this->optional_icon == null)
            $this->check_for_exist->optional_icon = null;
        $this->check_for_exist->desc = $this->desc ?? '';
        $this->check_for_exist->title_page = $this->title_page_questions ?? [];
        $this->check_for_exist->inspection_title_format = $this->inspection_title_format ?? [['key' => null, 'value' => null]];
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
        $this->dispatchBrowserEvent('updatedstart');
    }

    public function dehydrate(){
        $this->custom_updating();
    }
    // public function render()
    // {
    //     return view('livewire.template.new-create');
    // }
}
