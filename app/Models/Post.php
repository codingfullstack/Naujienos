<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comments;
use App\Models\Category;
use post_category;

class Post extends Model
{
    protected $fillable = [ 'title', 'text'];
    use HasFactory;
    public function categories(){
        return $this->belongsToMany(Category::class, 'post_category', 'post_id', 'category_id');
    }

    public function comment()
    {
        return $this->hasMany(Comments::class, 'post_id');
    }
}
