@extends('layouts/app')
@section('title','- Create Memo')
@section('content')
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
              <div class="col-lg-12 mb-5">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">New Memo</h3>
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal" action="/view" method="post">
                    {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nama Proyek*</label>
                        <div class="col-md-9">
                          <input name="nama_proyek" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">PIC</label>
                        <div class="col-md-9">
                          <input name="pic" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Vendor*</label>
                        <div class="col-md-9">
                          <input name="vendor" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">RFQ*</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal</label>
                        <div class="col-md-9">
                          <input name="tgl_rfq" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nomor</label>
                        <div class="col-md-9">
                          <input name="no_rfq" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">RFP*</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal</label>
                        <div class="col-md-9">
                          <input name="tgl_rfp" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nomor</label>
                        <div class="col-md-9">
                          <input name="no_rfp" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">History</label>
                        <div class="col-md-9">
                          <input name="history_rfp" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">NEGOSIASI*</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal</label>
                        <div class="col-md-9">
                          <input name="tgl_mp" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">History</label>
                        <div class="col-md-9">
                          <input name="history_mp" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">MEMO PENGAJUAN*</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nomor</label>
                        <div class="col-md-9">
                          <input name="no_mp" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal</label>
                        <div class="col-md-9">
                          <input name="tgl_mp" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Judul</label>
                        <div class="col-md-9">
                          <input name="judul_mp" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">History</label>
                        <div class="col-md-9">
                          <input name="history_mp" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Budget</label>
                        <div class="col-md-9">
                          <input name="budget" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">BUDGET*</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">POS</label>
                        <div class="col-md-9">
                          <input name="pos_bud" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">WBS ID</label>
                        <div class="col-md-9">
                          <input name="wbsid_bud" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">IDR/USD</label>
                        <div class="col-md-9">
                          <input name="idr_usd_bud" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nilai</label>
                        <div class="col-md-9">
                          <input name="nilai_bud" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">RCC</label>
                        <div class="col-md-9">
                          <input name="rcc_bud" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">LOI*</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal</label>
                        <div class="col-md-9">
                          <input name="tgl_loi" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nomor</label>
                        <div class="col-md-9">
                          <input name="no_loi" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">PKS*</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal</label>
                        <div class="col-md-9">
                          <input name="tgl_pks" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nomor</label>
                        <div class="col-md-9">
                          <input name="no_pks" type="number" min="0" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Judul PKS</label>
                        <div class="col-md-9">
                          <input name="judul_pks" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Status</label>
                        <div class="col-md-9">
                          <input name="status_pks" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Target Delivery</label>
                        <div class="col-md-9">
                          <input name="target_deliv" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Real Delivery Date</label>
                        <div class="col-md-9">
                          <input name="real_deliv_date" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal BAST*</label>
                        <div class="col-md-9">
                          <input name="tgl_bast" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">INVOICE BAST</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal Diterima</label>
                        <div class="col-md-9">
                          <input name="tgl_diterima_invbast" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">History</label>
                        <div class="col-md-9">
                          <input name="history_invbast" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal BA Instalasi*</label>
                        <div class="col-md-9">
                          <input name="tgl_ba_instalasi" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">Invoice Instalasi</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Tanggal Diterima</label>
                        <div class="col-md-9">
                          <input name="tgl_trm_invinst" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">History</label>
                        <div class="col-md-9">
                          <input name="history_invinst" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <h3 class="h5 text-uppercase mb-4">Tanggal Maintenance*</h3>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Strat</label>
                        <div class="col-md-9">
                          <input name="start_maintenance" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">End</label>
                        <div class="col-md-9">
                          <input name="end_maintenance" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-md-9 ml-auto">
                          <button type="button" class="btn btn-secondary" onClick="window.location.href=window.location.href">Cancel</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
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