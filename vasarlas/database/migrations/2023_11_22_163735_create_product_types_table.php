<?php
use App\Models\Product_type;
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
        Schema::create('product_types', function (Blueprint $table) {
            $table->id('type_id');
            $table->string('name');
            $table->string('description');
            $table->integer('cost');

            $table->timestamps();
        });

        Product_type::create([
            'name' => 'Pzt', 
            'description' => 'intelligens vasaló',
            'cost'=>'35000'
        ],
        [
            'name'=>'Lmn',
            'description' => 'intelligens porszivó',
            'cost'=>'55000'
        ],
        [
            'name'=>'Vzs',
            'description' => 'intelligens konyhagép',
            'cost'=>'65000'
        ]
    );
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_types');
    }
};
