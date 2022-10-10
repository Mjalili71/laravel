<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;
    protected $casts = [ 'image'=>'array'];
    protected $fillable = ['name', 'description','slug' , 'image', 'status', 'tags'];
}
