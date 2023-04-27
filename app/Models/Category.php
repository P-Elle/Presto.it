<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'name_en', 'name_es'];
    use HasFactory;
    
    public function announcements(){
        return $this->hasMany(Announcement::class);
    }
}
