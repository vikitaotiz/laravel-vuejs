<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReplyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'body' => $this->body,
            'question' => $this->question->title,
            'user' => $this->user->name,
            'path' => $this->path,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
