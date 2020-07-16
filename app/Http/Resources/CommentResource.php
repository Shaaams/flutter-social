<?php

namespace App\Http\Resources;

use App\Comment;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
        $comment = [
            'comment_id'      => $this->id,
            'comment_author'  => new AuthorResource($this->author),
            'comment_likes'   => $this->likes,
            'comment_created' => $this->created_at->toDayDateTimeString(),
            'comment_body'    => $this->body,
        ];

        if($this->comments->count() > 0)
        {
            $comment['replay_comments'] = CommentResource::collection($this->comments);
        }
        return $comment;
    }
}
