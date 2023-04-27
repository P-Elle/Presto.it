<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            // inserisco campo categoria
            $table->string('name')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_es')->nullable();

            $table->timestamps();
        });

        $categories = ['Motori', 'Informatica', 'Elettrodomestici', 'Libri', 'Giochi',
        'Sport', 'Immobili','Telefoni', 'Arredamento'];
        $categories_en = ['Motors', 'IT', 'Home appliances', 'Books', 'Games', 'Sport', 'Real estates', 'Mobiles', 'Furniture'];
        $categories_es = ['Motores', 'Informática', 'Electrodomésticos', 'Libros', 'Juegos', 'Deportes', 'Immuebles', 'Moviles', 'Mobiles'];

    
        for($i = 0; $i < 9; $i++){
            Category::create([
                'name' => $categories[$i],
                'name_es' => $categories_es[$i],
                'name_en' => $categories_en[$i]
            ]);
        }
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
