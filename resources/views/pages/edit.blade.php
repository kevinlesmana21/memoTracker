@extends('layouts/index')

@section('design')
    <link rel="stylesheet" href="{{asset('/assets/css/edit.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/index.css')}}">
@endsection

@section('content')
    <form action="/update/{{$memo->no}}" method="POST">
        @method('PUT')
        {{ csrf_field() }}
        <div class="field">
            <div class="field-title">Nama Proyek*: </div>
            <input name="nama_proyek" type="text" value="{{old('nama_proyek', $memo->nama_proyek)}}"> 
        </div>
        <div class="field">
            <div class="field-title">PIC: </div>
            <input name="pic" value = "{{old('pic', $memo->pic)}}" type="text">
        </div>
        <div class="field">
            <div class="field-title">Vendor*: </div>
            <input name="vendor" value = "{{old('vendor', $memo->vendor)}}" type="text">
        </div>

        <div id="title">RFQ*</div>
        <div class="field">
            <div class="field-title">Tanggal: </div>
            <input name="tgl_rfq" value = "{{old('tgl_rfq', $memo->tgl_rfq)}}" type="date">
        </div>
        <div class="field">
            <div class="field-title">Nomor: </div>
            <input name="no_rfq" value = "{{old('no_rfq', $memo->no_rfq)}}" type="number">
        </div>

        <div id="title">RFP*</div>
        <div class="field">
            <div class="field-title">Tanggal: </div>
            <input name="tgl_rfp" value = "{{old('tgl_rfp', $memo->tgl_rfp)}}" type="date">
        </div>
        <div class="field">
            <div class="field-title">Nomor: </div>
            <input name="no_rfp" value = "{{old('no_rfp', $memo->no_rfp)}}" type="number">
        </div>
        <div class="field">
            <div class="field-title">History: </div>
            <input name="history_rfp" value = "{{old('history_rfp', $memo->history_rfp)}}" type="text">
        </div>

        <div id="title">NEGOSIASI*</div>
        <div class="field">
            <div class="field-title">Tanggal: </div>
            <input name="tgl_mp" value = "{{old('tgl_mp', $memo->tgl_mp)}}" type="date">
        </div>
        <div class="field">
            <div class="field-title">History: </div>
            <input name="history_mp" value = "{{old('history_mp', $memo->history_mp)}}" type="text">
        </div>

        <div id="title">MEMO PENGAJUAN*</div>
        <div class="field">
            <div class="field-title">Nomor: </div>
            <input name="no_mp" value = "{{old('no_mp', $memo->no_mp)}}" type="number">
        </div>
        <div class="field">
            <div class="field-title">Tanggal: </div>
            <input name="tgl_mp" value = "{{old('tgl_mp', $memo->tgl_mp)}}" type="date">
        </div>
        <div class="field">
            <div class="field-title">Judul: </div>
            <input name="judul_mp" value = "{{old('judul_mp', $memo->judul_mp)}}" type="text">
        </div>
        <div class="field">
            <div class="field-title">History: </div>
            <input name="history_mp" value = "{{old('history_mp', $memo->history_mp)}}" type="text">
        </div>

        <div class="field">
            <div class="field-title">Budget: </div>
            <input name="budget" value = "{{old('budget', $memo->budget)}}" type="number">
        </div>

        <div id="title">BUDGET*</div>
        <div class="field">
            <div class="field-title">POS: </div>
            <input name="pos_bud" value = "{{old('pos_bud', $memo->pos_bud)}}" type="number">
        </div>
        <div class="field">
            <div class="field-title">WBS ID: </div>
            <input name="wbsid_bud" value = "{{old('wbsid_bud', $memo->wbsid_bud)}}" type="number">
        </div>
        <div class="field">
            <div class="field-title">IDR/USD: </div>
            <input name="idr_usd_bud" value = "{{old('idr_usd_bud', $memo->idr_usd_bud)}}" type="number">
        </div>
        <div class="field">
            <div class="field-title">Nilai: </div>
            <input name="nilai_bud" value = "{{old('nilai_bud', $memo->nilai_bud)}}" type="number">
        </div>
        <div class="field">
            <div class="field-title">RCC: </div>
            <input name="rcc_bud" value = "{{old('rcc_bud', $memo->rcc_bud)}}" type="number">
        </div>
        
        <div id="title">LOI*</div>
        <div class="field">
            <div class="field-title">Tanggal: </div>
            <input name="tgl_loi" value = "{{old('tgl_loi', $memo->tgl_loi)}}" type="date">
        </div>
        <div class="field">
            <div class="field-title">Nomor: </div>
            <input name="no_loi" value = "{{old('no_loi', $memo->no_loi)}}" type="number">
        </div>

        <div id="title">PKS*</div>
        <div class="field">
            <div class="field-title">Tanggal: </div>
            <input name="tgl_pks" value = "{{old('tgl_pks', $memo->tgl_pks)}}" type="date">
        </div>
        <div class="field">
            <div class="field-title">Nomor: </div>
            <input name="no_pks" value = "{{old('no_pks', $memo->no_pks)}}" type="number">
        </div> 
        <div class="field">
            <div class="field-title">Judul PKS: </div>
            <input name="judul_pks" value = "{{old('judul_pks', $memo->judul_pks)}}" type="text">
        </div>
        <div class="field">
            <div class="field-title">Status: </div>
            <input name="status_pks" value = "{{old('status_pks', $memo->status_pks)}}" type="text">
        </div>

        <div class="field">
            <div class="field-title">Target Delivery*: </div>
            <input name="target_deliv" value = "{{old('target_deliv', $memo->target_deliv)}}" type="text">
        </div>

        <div class="field">
            <div class="field-title">Real Delivery Date: </div>
            <input name="real_deliv_date" value = "{{old('real_deliv_date', $memo->real_deliv_date)}}" type="date">
        </div>

        <div class="field">
            <div class="field-title">Tanggal BAST*: </div>
            <input name="tgl_bast" value = "{{old('tgl_bast', $memo->tgl_bast)}}" type="date">
        </div>

        <div id="title">Invoice BAST</div>
        <div class="field">
            <div class="field-title">Tanggal Diterima: </div>
            <input name="tgl_diterima_invbast" value = "{{old('tgl_diterima_invbast', $memo->tgl_diterima_invbast)}}" type="date">
        </div>
        <div class="field">
            <div class="field-title">History: </div>
            <input name="history_invbast" value = "{{old('history_invbast', $memo->history_invbast)}}" type="text">
        </div>

        <div class="field">
            <div class="field-title">Tanggal BA Instalasi*: </div>
            <input name="tgl_ba_instalasi" value = "{{old('tgl_ba_instalasi', $memo->tgl_ba_instalasi)}}" type="date">
        </div>

        <div id="title">Invoice Instalasi</div>
        <div class="field">
            <div class="field-title">Tanggal Diterima: </div>
            <input name="tgl_trm_invinst" value = "{{old('tgl_trm_invinst', $memo->tgl_trm_invinst)}}" type="date">
        </div>
        <div class="field">
            <div class="field-title">History: </div>
            <input name="history_invinst" value = "{{old('history_invinst', $memo->history_invinst)}}" type="text">
        </div>

        <div id="title">Tanggal Maintenance*</div>
        <div class="field">
            <div class="field-title">Start: </div>
            <input name="start_maintenance" value = "{{old('start_maintenance', $memo->start_maintenance)}}" type="date">
        </div>
        <div class="field">
            <div class="field-title">End: </div>
            <input name="end_maintenance" value = "{{old('end_maintenance', $memo->end_maintenance)}}" type="date">
        </div>
        <button id="submit-btn" type="submit">
            Update
        </button>
    </form>
@endsection