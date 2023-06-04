<?php

use App\Models\Url;
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
        Schema::create('screenshots', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->foreignIdFor(Url::class)->constrained();
            $table->string('image_path');
            $table->timestamps();
            $table->softDeletes();

            $table->primary(['id','url_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('screenshots');
    }
};
