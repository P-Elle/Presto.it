<?php

namespace App\Models;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    public function announcement(){
        return $this->belongsTo(Announcement::class);
    }

    //con le seguenti funzioni andiamo a stabilire la destinazione in cui deve essere salvata l'immagine croppata
    public static function getUrlByFilePath($filePath, $w = null, $h = null ){
        //se non passiamo nessuna modifica 
        if (!$w && !$h){
            //salvami l'immagine originale
            return Storage::url($filePath);
        }
        
        //altrimenti
        $path = dirname($filePath);
        $fileName = basename($filePath);
        $file = "{$path}/crop_{$w}x{$h}_{$fileName}";
        //altrimenti salva l’immagine croppata
        return Storage::url($file);
    }

    public function getUrl($w = null, $h = null ){
        return Image::getUrlByFilePath($this->path,$w, $h);
    }
    

}
