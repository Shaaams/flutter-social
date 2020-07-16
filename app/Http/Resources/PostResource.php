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
            'post_id'      => $this->id,
            'post_author'  => new AuthorResource($this->author),
            'post_body'    => $this->body,
            'post_status'  => $this->status,
            'post_created' => $this->created_at->toDayDateTimeString(),
            'post_comment' => CommentResource::collection($this->comments)


        ];
    }
}
