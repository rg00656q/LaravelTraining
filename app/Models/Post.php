<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body']; // will make only those two able to be mass assigned
    // protected $guarded = ['user_id'] guarded will specify which field should not be filled (so the opposite)

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function addComment($body){
        // Comment::create([
        //    'body' => $body,
        //    'post_id' => $this->id
        // ]);

        // $this->comments()->create(['body'=>$body]);

        $this->comments()->create(compact('body'));
    }
}
