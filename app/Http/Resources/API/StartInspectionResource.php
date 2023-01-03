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
        // $title_page_array=['question'=>$this->title_page];
        return [
            'id' => $this->new_template_id ?? 0,
            'title' => $this->title == "" ? 'Untitled Template' : $this->title,
            'desc' => $this->desc == "" ? 'Empty Description' : $this->desc,
            'icon' => 'https://c-rpt.com/storage/app/public/images/' . $this->icon,
            'data' => array_merge([['question'=>$this->title_page,'title'=>$this->title_page_title ?? null]],$this->pages ?? []),
            'user' => $this->user->first_name ?? 'Unknown',
            'created_at' => $this->created_at,
            'last_update' => $this->updated_at,
        ];
    }
}
