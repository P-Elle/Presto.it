<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','price'];

    public function category(){
        $this->belongsTo(Category::class);
    }

    public function user(){
        $this->belongsTo(User::class);
    }
}
