<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memos', function (Blueprint $table) {
            $table->bigIncrements('no');
            $table->string('nama_proyek')->nullable();
            $table->string('pic')->nullable();
            $table->string('vendor')->nullable();
            $table->date('tgl_rfq')->nullable();
            $table->bigInteger('no_rfq')->nullable();
            $table->date('tgl_rfp')->nullable();
            $table->bigInteger('no_rfp')->nullable();
            $table->text('history_rfp')->nullable();
            $table->date('tgl_nego')->nullable();
            $table->text('history_nego')->nullable();
            $table->bigInteger('no_mp')->nullable();
            $table->date('tgl_mp')->nullable();
            $table->string('judul_mp')->nullable();
            $table->string('history_mp')->nullable();
            $table->bigInteger('budget')->nullable();
            $table->bigInteger('pos_bud')->nullable();
            $table->bigInteger('wbsid_bud')->nullable();
            $table->bigInteger('idr_usd_bud')->nullable();
            $table->bigInteger('nilai_bud')->nullable();
            $table->bigInteger('rcc_bud')->nullable();
            $table->date('tgl_loi')->nullable();
            $table->bigInteger('no_loi')->nullable();
            $table->date('tgl_pks')->nullable();
            $table->bigInteger('no_pks')->nullable();
            $table->string('judul_pks')->nullable();
            $table->string('status_pks')->nullable();
            $table->string('target_deliv')->nullable();
            $table->date('real_deliv_date')->nullable();
            $table->date('tgl_bast')->nullable();
            $table->date('tgl_diterima_invbast')->nullable();
            $table->string('history_invbast')->nullable();
            $table->date('tgl_ba_instalasi')->nullable();
            $table->date('tgl_trm_invinst')->nullable();
            $table->text('history_invinst')->nullable();
            $table->date('start_maintenance')->nullable();
            $table->date('end_maintenance')->nullable();
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
        Schema::dropIfExists('memos');
    }
}
