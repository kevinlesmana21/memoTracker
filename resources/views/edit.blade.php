@extends('layouts/app')
@section('title','- Edit Memo')
@section('edit')
<li class="sidebar-list-item"><a href="{{ request()->path }}" class="sidebar-link text-muted active"><i class="o-paperwork-1 mr-3 text-gray"></i><span>Edit Memo</span></a></li> 
@endsection
@section('content')
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
              <div class="col-lg-12 mb-5">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Edit Memo</h3>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal" action="/update/{{$memo->no}}" method="POST">
                    @method('PUT')
                    {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nama Proyek*</label>
                        <div class="col-md-9">
                          <input name="nama_proyek" value="{{old('nama_proyek', $memo->nama_proyek)}}" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">PIC</label>
                        <div class="col-md-9">
                          <input name="pic" value = "{{old('pic', $memo->pic)}}" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Vendor*</label>
                        <div class="col-md-9">
                          <input name="vendor" value = "{{old('vendor', $memo->vendor)}}" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">RFQ*</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal</label>
                        <div class="col-md-9">
                          <input name="tgl_rfq" value = "{{old('tgl_rfq', $memo->tgl_rfq)}}" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nomor</label>
                        <div class="col-md-9">
                          <input name="no_rfq" value = "{{old('no_rfq', $memo->no_rfq)}}" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">RFP*</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal</label>
                        <div class="col-md-9">
                          <input name="tgl_rfp" value = "{{old('tgl_rfp', $memo->tgl_rfp)}}" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nomor</label>
                        <div class="col-md-9">
                          <input name="no_rfp" value = "{{old('no_rfp', $memo->no_rfp)}}" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">History</label>
                        <div class="col-md-9">
                          <input name="history_rfp" value = "{{old('history_rfp', $memo->history_rfp)}}" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">NEGOSIASI*</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal</label>
                        <div class="col-md-9">
                          <input name="tgl_mp" value = "{{old('tgl_mp', $memo->tgl_mp)}}" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">History</label>
                        <div class="col-md-9">
                          <input name="history_mp" value = "{{old('history_mp', $memo->history_mp)}}" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">MEMO PENGAJUAN*</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nomor</label>
                        <div class="col-md-9">
                          <input name="no_mp" value = "{{old('no_mp', $memo->no_mp)}}" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal</label>
                        <div class="col-md-9">
                          <input name="tgl_mp" value = "{{old('tgl_mp', $memo->tgl_mp)}}" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Judul</label>
                        <div class="col-md-9">
                          <input name="judul_mp" value = "{{old('judul_mp', $memo->judul_mp)}}" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">History</label>
                        <div class="col-md-9">
                          <input name="history_mp" value = "{{old('history_mp', $memo->history_mp)}}" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Budget</label>
                        <div class="col-md-9">
                          <input name="budget" value = "{{old('budget', $memo->budget)}}" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">BUDGET*</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">POS</label>
                        <div class="col-md-9">
                          <input name="pos_bud" value = "{{old('pos_bud', $memo->pos_bud)}}" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">WBS ID</label>
                        <div class="col-md-9">
                          <input name="wbsid_bud" value = "{{old('wbsid_bud', $memo->wbsid_bud)}}" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">IDR/USD</label>
                        <div class="col-md-9">
                          <input name="idr_usd_bud" value = "{{old('idr_usd_bud', $memo->idr_usd_bud)}}" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nilai</label>
                        <div class="col-md-9">
                          <input name="nilai_bud" value = "{{old('nilai_bud', $memo->nilai_bud)}}" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">RCC</label>
                        <div class="col-md-9">
                          <input name="rcc_bud" value = "{{old('rcc_bud', $memo->rcc_bud)}}" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">LOI*</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal</label>
                        <div class="col-md-9">
                          <input name="tgl_loi" value = "{{old('tgl_loi', $memo->tgl_loi)}}" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nomor</label>
                        <div class="col-md-9">
                          <input name="no_loi" value = "{{old('no_loi', $memo->no_loi)}}" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">PKS*</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal</label>
                        <div class="col-md-9">
                          <input name="tgl_pks" value = "{{old('tgl_pks', $memo->tgl_pks)}}" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nomor</label>
                        <div class="col-md-9">
                          <input name="no_pks" value = "{{old('no_pks', $memo->no_pks)}}" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Judul PKS</label>
                        <div class="col-md-9">
                          <input name="judul_pks" value = "{{old('judul_pks', $memo->judul_pks)}}" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Status</label>
                        <div class="col-md-9">
                          <input name="status_pks" value = "{{old('status_pks', $memo->status_pks)}}" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Target Delivery</label>
                        <div class="col-md-9">
                          <input name="target_deliv" value = "{{old('target_deliv', $memo->target_deliv)}}" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Real Delivery Date</label>
                        <div class="col-md-9">
                          <input name="real_deliv_date" value = "{{old('real_deliv_date', $memo->real_deliv_date)}}" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal BAST*</label>
                        <div class="col-md-9">
                          <input name="tgl_bast" value = "{{old('tgl_bast', $memo->tgl_bast)}}" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">INVOICE BAST</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal Diterima</label>
                        <div class="col-md-9">
                          <input name="tgl_diterima_invbast" value = "{{old('tgl_diterima_invbast', $memo->tgl_diterima_invbast)}}" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">History</label>
                        <div class="col-md-9">
                          <input name="history_invbast" value = "{{old('history_invbast', $memo->history_invbast)}}" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal BA Instalasi*</label>
                        <div class="col-md-9">
                          <input name="tgl_ba_instalasi" value = "{{old('tgl_ba_instalasi', $memo->tgl_ba_instalasi)}}" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">Invoice Instalasi</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal Diterima</label>
                        <div class="col-md-9">
                          <input name="tgl_trm_invinst" value = "{{old('tgl_trm_invinst', $memo->tgl_trm_invinst)}}" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">History</label>
                        <div class="col-md-9">
                          <input name="history_invinst" value = "{{old('history_invinst', $memo->history_invinst)}}" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">Tanggal Maintenance*</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Strat</label>
                        <div class="col-md-9">
                          <input name="start_maintenance" value = "{{old('start_maintenance', $memo->start_maintenance)}}" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">End</label>
                        <div class="col-md-9">
                          <input name="end_maintenance" value = "{{old('end_maintenance', $memo->end_maintenance)}}" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-md-9 ml-auto">
                          <button type="button" class="btn btn-secondary" onClick="window.location.href=window.location.href">Cancel</button>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
@endsection