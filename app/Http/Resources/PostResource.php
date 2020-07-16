<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'post_id'     => $this->id,
            'author_id'   => $this->user_id,
            'post_body'   => $this->body,
            'post_status' => $this->status,
            'post_comment' => CommentResource::collection($this->comments)


        ];
    }
}
