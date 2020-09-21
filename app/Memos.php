<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memos extends Model
{
    protected $guarded = ['no','nama_proyek','pic','vendor','tgl_rfq','no_rfq','tgl_rfp','no_rfp','history_rfp','tgl_nego','history_nego','no_mp','tgl_mp','judul_mp','history_mp','budget','pos_bud','wbsid_bud','idr_usd_bud','nilai_bud','rcc_bud','tgl_loi','no_loi','tgl_pks','no_pks','judul_pks','status_pks','target_deliv','real_deliv_date','tgl_bast','tgl_diterima_invbast','history_invbast','tgl_ba_instalasi','tgl_trm_invinst','history_invinst','start_maintenance','end_maintenance','created_at','updated_at'];
    protected $primaryKey = 'no';
}
