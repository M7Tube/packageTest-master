<?php

namespace App\Http\Livewire\Template;

use App\Models\NewTemplate;
use App\Models\Response;
use App\Models\Template;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\WithFileUploads;
use Livewire\Component;

class Index extends Component
{
    use LivewireWithPagination;

    public function render()
    {
        return view(
            'livewire.template.index',
            [
                'data' => NewTemplate::with('user')->paginate(25, ['new_template_id', 'title', 'desc', 'user_id', 'created_at','updated_at', 'pages']),
            ]
        );
    }
}
