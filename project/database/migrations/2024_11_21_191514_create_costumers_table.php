<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
	public function up()
	{
		Schema::create('costumers', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->integer('level')->default(0); // Para el nivel entre 0 a 5
			$table->string('address');
			$table->softDeletes(); // Soft delete
			$table->timestamps();
		});
	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costumers');
    }
};
