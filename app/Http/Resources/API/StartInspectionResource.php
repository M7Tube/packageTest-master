<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class StartInspectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->new_template_id ?? 0,
            'title' => $this->title == "" ? 'Untitled Template' : $this->title,
            'desc' => $this->desc == "" ? 'Empty Description' : $this->desc,
            'icon' => 'https://c-rpt.com/storage/app/public/images/' . $this->icon,
            'data' => [
                'title_page'=>$this->title_page ?? [],
                'pages'=>$this->pages ?? [],
            ],
            'user' => $this->user->first_name ?? 'Unknown',
            'created_at' => $this->created_at,
            'last_update' => $this->updated_at,
        ];
    }
}
