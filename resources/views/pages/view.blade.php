@extends('layouts/index')

@section('design')
    <link rel="stylesheet" href="assets/css/view.css">
    {{-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> --}}
    <script type="text/javascript" src="/assets/js/pagination.class.js"></script>
    <script type="text/javascript" src="/assets/js/script.js" defer></script>
    <script type="text/javascript" src="/assets/js/view.js"></script>
@endsection

@section('content')
<div id="tableWrapper">
    <table class="mytables" id="datatable">
        <thead>
        <tr>
            <th rowspan="2">NO</th>
            <th rowspan="2">NAMA PROYEK*</th>
            <th rowspan="2">PIC</th>
            <th rowspan="2">VENDOR*</th>
            <th colspan="2">RFQ*</th>
            <th colspan="3">RFP*</th>
            <th colspan="2">NEGOSIASI*</th>
            <th colspan="4">MEMO PENGAJUAN*</th>
            <th rowspan="2">BUDGET</th>
            <th colspan="5">BUDGET*</th>
            <th colspan="2">LOI*</th>
            <th colspan="4">PKS*</th>
            <th rowspan="2">TARGET DELIVERY*</th>
            <th rowspan="2">REAL DELIVERY DATE</th>
            <th rowspan="2">TANGGAL BAST*</th>
            <th colspan="2">INVOICE BAST</th>
            <th rowspan="2">TANGGAL BA INSTALASI*</th>
            <th colspan="2">INVOICE INSTALASI</th>
            <th colspan="2">TANGGAL MAINTENANCE*</th>
            <th rowspan="2"></th>
        </tr>
        <TR>
            <th>TANGGAL</th>
            <th>NOMOR</th>
            <th>TANGGAL</th>
            <th>NOMOR</th>
            <th>history</th>
            <th>TANGGAL</th>
            <th>HISTORY</th>
            <th>NOMOR</th>
            <th>TANGGAL</th>
            <th>JUDUL*</th>
            <th>HISTORY</th>
            <th>POS</th>
            <th>WBS ID</th>
            <th>IDR/USD</th>
            <th>NILAI</th>
            <th>RCC</th>
            <th>TANGGAL</th>
            <th>NOMOR</th>
            <th>TANGGAL</th>
            <th>NOMOR</th>
            <th>Judul PKS</th>
            <th>STATUS</th>
            <th>TANGGAL DITERIMA</th>
            <th>HISTORY</th>
            <th>TANGGAL DITERIMA</th>
            <th>HISTORY</th>
            <th>Start</th>
            <th>End</th>
        </TR>
        </thead>

        <tbody id="body">
        @foreach ($memos as $index=>$memo)
            <tr>
                <th>{{++$index}}</th>
                <th>{{$memo->nama_proyek}}</th>
                <th>{{$memo->pic}}</th>
                <th>{{$memo->vendor}}</th>
                <th>{{$memo->tgl_rfq}}</th>
                <th>{{$memo->no_rfq}}</th>
                <th>{{$memo->tgl_rfp}}</th>
                <th>{{$memo->no_rfp}}</th>
                <th>{{$memo->history_rfp}}</th>
                <th>{{$memo->tgl_nego}}</th>
                <th>{{$memo->history_nego}}</th>
                <th>{{$memo->no_mp}}</th>
                <th>{{$memo->tgl_mp}}</th>
                <th>{{$memo->judul_mp}}</th>
                <th>{{$memo->history_mp}}</th>
                <th>{{$memo->budget}}</th>
                <th>{{$memo->pos_bud}}</th>
                <th>{{$memo->wbsid_bud}}</th>
                <th>{{$memo->idr_usd_bud}}</th>
                <th>{{$memo->nilai_bud}}</th>
                <th>{{$memo->rcc_bud}}</th>
                <th>{{$memo->tgl_loi}}</th>
                <th>{{$memo->no_loi}}</th>
                <th>{{$memo->tgl_pks}}</th>
                <th>{{$memo->no_pks}}</th>
                <th>{{$memo->judul_pks}}</th>
                <th>{{$memo->status_pks}}</th>
                <th>{{$memo->target_deliv}}</th>
                <th>{{$memo->real_deliv_date}}</th>
                <th>{{$memo->tgl_bast}}</th>
                <th>{{$memo->tgl_diterima_invbast}}</th>
                <th>{{$memo->history_invbast}}</th>
                <th>{{$memo->tgl_ba_instalasi}}</th>
                <th>{{$memo->tgl_trm_invinst}}</th>
                <th>{{$memo->history_invinst}}</th>
                <th>{{$memo->start_maintenance}}</th>
                <th>{{$memo->end_maintenance}}</th>
                <th><a id="upordel" href="/edit/{{$memo->no}}">UPDATE </a><a id="upordel" class="del" href="/delete/{{$memo->no}}">DELETE</a></th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div id="pagination" class="pagination">
        <p class="pagination-label">
            {{-- Viewing <span>1-10</span> of <span>36</span> --}}
        </p>
        <a href="#" class="previous round">&#8249;</a>
        <a href="#" class="next round">&#8250;</a>
    </div>
</div>


<div id="deleteAlertBox">
    <div {{-- style="display: none; position: fixed; top: 50%; right: 50%;" --}} class="deleteAlert" id="alert" >
        <div id="alert-title">Are You Sure Want to Delete?</div>
        <div id="btnBox">
            <span id="btn-background-size-yes"><a id="btnYes" class="alert-text">Yes</a></span>
            <span id="btn-background-size-no"><a id="btnNo" class="alert-text">No</a></span>
        </div>
    </div>
</div>
@endsection