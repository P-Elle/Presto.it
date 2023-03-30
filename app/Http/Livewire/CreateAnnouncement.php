<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateAnnouncement extends Component
{   public $title;
    public $description;
    public $price;
    public $category;

    //regole di validazione
    protected $rules = [
        'title' => 'required|min:3|max:50',
        'description' => 'required|min:8',
        'category'=> 'required',
        'price' => 'required|numeric',
    ];

    //messaggi personalizzati di errore
    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio.',
        'min' => 'Il campo :attribute deve contenere almeno :min caratteri',
        'max' => 'Il campo :attribute può contenere al massimo :max caratteri',
        'numeric' => 'Il campo :attribute deve essere numerico',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    //salvatggio dell'annuncio all'interno del database
    public function store()
    {   
        $this->validate();

        $category = Category::find($this->category);
        
        $announcement = Announcement::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
        ]);

        Auth::user()->announcements()->save($announcement);

        session()->flash('message', 'Annuncio inserito con successo.');

        $this->cleanForm();
    }

    
    //pulire il form dopo il salvataggio dell'annuncio
    public function cleanForm(){
        $this->title = '';
        $this->description = '';
        $this->price = '';
        $this->category = '';
    }

    //renderizzazione della view
    public function render()
    {
        return view('livewire.create-announcement');
    }
}
