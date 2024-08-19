<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCommentToCommentTable extends Migration
{
    public function up()
    {
        Schema::table('comment', function (Blueprint $table) {
            $table->text('comment')->after('id'); // Menambahkan kolom comment
        });
    }

    public function down()
    {
        Schema::table('comment', function (Blueprint $table) {
            $table->dropColumn('comment'); // Menghapus kolom comment jika migrasi dibatalkan
        });
    }
}