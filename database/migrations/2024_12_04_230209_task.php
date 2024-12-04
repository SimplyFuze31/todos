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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // Створює стовпець 'id' з автоінкрементом.
            $table->string('title'); // Створює стовпець 'title' типу VARCHAR.
            $table->string('type'); // Створює стовпець 'type' типу VARCHAR.
            $table->timestamps(); // Створює стовпці 'created_at' та 'updated_at'.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks'); // Видаляє таблицю 'tasks'.
    }
};
