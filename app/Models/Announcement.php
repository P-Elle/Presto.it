<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','price'];

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    // (vedi RevisorController)
    public function setAccepted($value){
        /* va a prendere l'annuncioe e al campo is_accepted assegna
        il valore true o false scelto nel RevisorController */
        $this->is_accepted =$value;
        // salva questa modifica
        $this->save();
        // e restituisce un true di conferma
        return true;
    }

    // questo metodo conta gli annunci in coda, ovvero da revisionare (navbar)
    public static function toBeRevisionedCount(){
        
        // che corrispondono a quelli che nella colonna is_accepted hanno un valore null
        return Announcement::where('is_accepted', null)->count();
    }
    
}
