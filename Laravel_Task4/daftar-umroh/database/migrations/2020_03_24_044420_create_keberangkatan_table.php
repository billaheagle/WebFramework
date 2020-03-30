    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeberangkatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keberangkatan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_paket', 100);
            $table->date('keberangkatan');
            $table->date('kepulangan');
            $table->string('hotel_makkah', 100);
            $table->string('hotel_madinah', 100);
            $table->string('pesawat', 100);
            $table->double('harga');
            $table->integer('id_admin')->unsigned();
            $table->foreign('id_admin')->references('id')->on('admin');
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
        Schema::dropIfExists('keberangkatan');
    }
}
