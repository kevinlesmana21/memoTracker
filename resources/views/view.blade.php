@extends('layouts/app')
@section('title','- View Memo')
@section('style')
<style type="text/css">
.data {
  font-family: sans-serif !important;
  font-size: 12px
}
</style>
@endsection
@section('content')
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
              <div class="col-lg-12 mb-5">
                <div class="card">
                  <div class="card-body">
                    @if ($message = Session::get('red'))
                      <div class="alert alert-danger fade show">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        {{ $message }}
                      </div>
                    @endif
                    @if ($message = Session::get('green'))
                      <div class="alert alert-success fade show">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        {{ $message }}
                      </div>
                    @endif
                    @if ($message = Session::get('blue'))
                      <div class="alert alert-info fade show">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        {{ $message }}
                      </div>
                    @endif
                    <table class="table table-striped table-bordered data">
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
                              <th rowspan="2">ACTION</th>
                          </tr>
                          <tr>
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
                          </tr>
                        </thead>
                        <tbody>
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
                              <th>
                                <div class="btn-group btn-group-sm">
                                  <a class="btn btn-info py-1" href="/edit/{{$memo->no}}">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                  </a>
                                  <a class="btn btn-danger delete" href="/delete/{{$memo->no}}">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                  </a>
                                </div>
                              </th>
                            </tr>
                          @endforeach
                        </tbody>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
@endsection
@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.data').DataTable({
        "scrollX": true
      });
      $('.dataTables_length').addClass('bs-select');
    });

    $('.delete').confirm({
        theme: 'modern',
        icon: 'fa fa-trash',
        title: 'Are You Sure?',
        content: 'Something went downhill, this may be serious',
        type: 'red',
        typeAnimated: true,
        buttons: {
            DELETE: {
                text: 'DELETE',
                btnClass: 'btn-red',
                action: function(){
                  location.href = this.$target.attr('href');
                }
            },
            close: function () {
            }
        }
    });
    
  </script>
@endsection