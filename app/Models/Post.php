<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded =['id'];
    protected $with =['author', 'category'];

    /**
     * Get the user that owns the                                                                              Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the user that owns the Post
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
