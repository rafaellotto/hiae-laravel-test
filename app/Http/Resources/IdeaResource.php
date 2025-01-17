<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IdeaResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'user' => $this->user->name,
            'category' => $this->category->name,
            'status' => $this->status->name,
            'comments' => $this->comments_count,
            'votes' => $this->votes_count,
            'createdAt' => $this->created_at,
        ];
    }
}
