@extends('layouts/index')

@section('design')
    <link rel="stylesheet" href="assets/css/create.css">
@endsection

@section('content')
    <form action="/view" method="post">
        {{ csrf_field() }}
        <div class="field">
            <div class="field-title">Nama Proyek*: </div>
            <input name="nama_proyek" type="text">
        </div>
        <div class="field">
            <div class="field-title">PIC: </div>
            <input name="pic" type="text">
        </div>
        <div class="field">
            <div class="field-title">Vendor*: </div>
            <input name="vendor" type="text">
        </div>

        <div id="title">RFQ*</div>
        <div class="field">
            <div class="field-title">Tanggal: </div>
            <input name="tgl_rfq" type="date">
        </div>
        <div class="field">
            <div class="field-title">Nomor: </div>
            <input name="no_rfq" type="number">
        </div>

        <div id="title">RFP*</div>
        <div class="field">
            <div class="field-title">Tanggal: </div>
            <input name="tgl_rfp" type="date">
        </div>
        <div class="field">
            <div class="field-title">Nomor: </div>
            <input name="no_rfp" type="number">
        </div>
        <div class="field">
            <div class="field-title">History: </div>
            <input name="history_rfp" type="text">
        </div>

        <div id="title">NEGOSIASI*</div>
        <div class="field">
            <div class="field-title">Tanggal: </div>
            <input name="tgl_mp" type="date">
        </div>
        <div class="field">
            <div class="field-title">History: </div>
            <input name="history_mp" type="text">
        </div>

        <div id="title">MEMO PENGAJUAN*</div>
        <div class="field">
            <div class="field-title">Nomor: </div>
            <input name="no_mp" type="number">
        </div>
        <div class="field">
            <div class="field-title">Tanggal: </div>
            <input name="tgl_mp" type="date">
        </div>
        <div class="field">
            <div class="field-title">Judul: </div>
            <input name="judul_mp" type="text">
        </div>
        <div class="field">
            <div class="field-title">History: </div>
            <input name="history_mp" type="text">
        </div>

        <div class="field">
            <div class="field-title">Budget: </div>
            <input name="budget" type="number">
        </div>

        <div id="title">BUDGET*</div>
        <div class="field">
            <div class="field-title">POS: </div>
            <input name="pos_bud" type="number">
        </div>
        <div class="field">
            <div class="field-title">WBS ID: </div>
            <input name="wbsid_bud" type="number">
        </div>
        <div class="field">
            <div class="field-title">IDR/USD: </div>
            <input name="idr_usd_bud" type="number">
        </div>
        <div class="field">
            <div class="field-title">Nilai: </div>
            <input name="nilai_bud" type="number">
        </div>
        <div class="field">
            <div class="field-title">RCC: </div>
            <input name="rcc_bud" type="number">
        </div>
        
        <div id="title">LOI*</div>
        <div class="field">
            <div class="field-title">Tanggal: </div>
            <input name="tgl_loi" type="date">
        </div>
        <div class="field">
            <div class="field-title">Nomor: </div>
            <input name="no_loi" type="number">
        </div>

        <div id="title">PKS*</div>
        <div class="field">
            <div class="field-title">Tanggal: </div>
            <input name="tgl_pks" type="date">
        </div>
        <div class="field">
            <div class="field-title">Nomor: </div>
            <input name="no_pks" type="number">
        </div> 
        <div class="field">
            <div class="field-title">Judul PKS: </div>
            <input name="judul_pks" type="text">
        </div>
        <div class="field">
            <div class="field-title">Status: </div>
            <input name="status_pks" type="text">
        </div>

        <div class="field">
            <div class="field-title">Target Delivery*: </div>
            <input name="target_deliv" type="text">
        </div>

        <div class="field">
            <div class="field-title">Real Delivery Date: </div>
            <input name="real_deliv_date" type="date">
        </div>

        <div class="field">
            <div class="field-title">Tanggal BAST*: </div>
            <input name="tgl_bast" type="date">
        </div>

        <div id="title">Invoice BAST</div>
        <div class="field">
            <div class="field-title">Tanggal Diterima: </div>
            <input name="tgl_diterima_invbast" type="date">
        </div>
        <div class="field">
            <div class="field-title">History: </div>
            <input name="history_invbast" type="text">
        </div>

        <div class="field">
            <div class="field-title">Tanggal BA Instalasi*: </div>
            <input name="tgl_ba_instalasi" type="date">
        </div>

        <div id="title">Invoice Instalasi</div>
        <div class="field">
            <div class="field-title">Tanggal Diterima: </div>
            <input name="tgl_trm_invinst" type="date">
        </div>
        <div class="field">
            <div class="field-title">History: </div>
            <input name="history_invinst" type="text">
        </div>

        <div id="title">Tanggal Maintenance*</div>
        <div class="field">
            <div class="field-title">Start: </div>
            <input name="start_maintenance" type="date">
        </div>
        <div class="field">
            <div class="field-title">End: </div>
            <input name="end_maintenance" type="date">
        </div>
        <button id="submit-btn">
            Submit
        </button>
    </form>
@endsection