
<?php

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
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->string('asset_tag', 13);
            $table->string('games_name');
            $table->string('cover_url');
            $table->unsignedInteger('quantity');
            $table->float('price');
            $table->string('description');
            $table->boolean('status')->default(true);
            $table->timestamps();

            // $table->index(['item_name', 'isbn']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apps');
    }
};
