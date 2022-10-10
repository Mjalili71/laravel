<?php

namespace App\Models\content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // public function sluggable(): array
    // {
    //     return[
    //         'slug' =>[
    //             'source' => 'title'
    //         ]
    //     ];
    // }

    // public $timestamps = false;

//    protected $casts = ['image' => 'array'];
    

    // فیلد هایی که باید پر شوند 
    // protected $fillable = ['title', 'summary', 'slug', 'image', 'status', 'tags', 'body', 'published_at', 'author_id', 'category_id', 'commentable'];

    
    protected $fillable = ['title','body','summary','image','tags','category_id','published_at','commentable','status'];
    
    // این داره میگه ی ارتباطی بین دسته بندی ها و پست ها میباشد 
    // public function postCategory()
    // {
    //     return $this->belongsTo(PostCategory::class, 'category_id');
    //     //  BelongsTo == متعلق است به 
    // }


    // public function comments(){
    //     // اصل کار این را در کامنت ها نوشتیم 
    //     return $this->morphMany('App\Models\content\comment','commentable');
    //     // هر پست میتونه میتونه چندین کامنت داشته باشه و هر کامنت میتونه متعلق به چندین پست باشه
    // }

}