<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // todosテーブルの作成
        Schema::create('todos', function (Blueprint $table) {
            $table->id(); // 自動インクリメントの主キー
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('content', 20); // タスクの内容
            $table->timestamps(); // created_atとupdated_atカラム
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // todosテーブルの削除
        Schema::dropIfExists('todos');
    }
}
