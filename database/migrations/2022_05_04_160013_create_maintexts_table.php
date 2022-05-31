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

    // ::create - только создание
    // ::table - может заменять
    public function up() //схема по которой создается таблица
    {
        Schema::create('maintexts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();// nullable() - разрешаем вставку пустоты
            $table->text('body')->nullable();
            $table->string('URL');
            $table->enum('lang',['ru','en'])->default('ru');
            $table->timestamps(); // - дата создания и дата обновления (2 поля)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //схема покоторой удаляется таблица
    {
        Schema::dropIfExists('maintexts');
    }
};
