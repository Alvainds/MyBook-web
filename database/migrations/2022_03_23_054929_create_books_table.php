<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->char('title')->unique();
            $table->unsignedBigInteger('author_id')->constrained('authors');
            $table->unsignedBigInteger('publisher_id')->constrained('publishers');
            $table->unsignedBigInteger('category_id')->constrained('categories');
            $table->date('date_of_issue');
            $table->mediumText('description');
            $table->string('cover');
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
        Schema::dropIfExists('books');
    }
}
