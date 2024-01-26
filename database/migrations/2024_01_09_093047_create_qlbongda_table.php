<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Qlbongda;
class CreateQlbongdaTable extends Migration
{
    public function up()
    {
        Schema::create('qlbongdas', function (Blueprint $table) {
            $table->id();
            $table->string('tendoibong');
            $table->string('bietdanh');
            $table->string('thanhtich');
            $table->string('hinhanh');
            $table->string('quocgia');
            $table->integer('sannha');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('qlbongdas');
    }
}
  

