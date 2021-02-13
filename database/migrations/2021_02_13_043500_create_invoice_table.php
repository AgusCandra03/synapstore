<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_invoice', function (Blueprint $table) {
            $table->id();

            $table->decimal("jumlah_transaksi",9,2);
            $table->string("kode_transaksi");
            $table->string("metode_pembayaran");
            $table->string("kurir")->nullable();
            $table->decimal("ongkir",9,2);
            $table->integer("id_keranjang")->nullable();
            $table->string("no_resi")->nullable();
            $table->datetime("waktu_sampai")->nullable();
            $table->integer("id_customer");
            $table->integer("created_by");
            $table->integer("updated_by");
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
        Schema::dropIfExists('foto_invoice');
    }
}
