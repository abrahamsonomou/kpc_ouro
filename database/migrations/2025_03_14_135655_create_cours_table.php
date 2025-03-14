<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description')->nullable();
            $table->string('short_description')->nullable();
            $table->foreignId('categorie_id')->constrained()->onDelete('cascade');
            $table->foreignId('niveau_id')->constrained()->onDelete('cascade');
            $table->foreignId('langue_id')->constrained()->onDelete('cascade');
            $table->decimal('prix', 10, 2)->nullable();
            $table->decimal('prix_promo', 10, 2)->nullable();
            $table->decimal('taux_reduction', 5, 2)->nullable();
            $table->foreignId('devise_id')->constrained()->onDelete('cascade');
            $table->integer('duree')->nullable();
            $table->integer('nombre_lesson')->nullable();
            $table->boolean('certificat')->default(false);
            $table->integer('nombre_quizz')->nullable();
            $table->text('objectifs')->nullable();
            $table->text('prerequis')->nullable();
            $table->string('image')->nullable();
            $table->string('url_video')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->boolean('active')->default(true);
            $table->enum('etat', ['pending', 'published', 'archived'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cours');
    }
};
