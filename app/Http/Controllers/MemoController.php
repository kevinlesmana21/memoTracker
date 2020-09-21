<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Memos;
use \Carbon\Carbon;
use Session;

class MemoController extends Controller
{

    public function index(){
        $new = Memos::whereDate('created_at', Carbon::today())->count();
        $open = Memos::whereNotNull('tgl_rfq')
                ->whereNull('end_maintenance')
                ->count();
        $finish = Memos::whereNotNull('end_maintenance')->count();
        $all = Memos::count();
        return view('index', compact('new','open','finish','all'));
    }

    public function view(){
        $memos = Memos::get();
        return view('view', compact('memos'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $memos = new Memos;
        $memos->nama_proyek = $request->input('nama_proyek');
        $memos->pic = $request->input('pic');
        $memos->vendor = $request->input('vendor');
        $memos->tgl_rfq = $request->input('tgl_rfq');
        $memos->no_rfq = $request->input('no_rfq');
        $memos->tgl_rfp = $request->input('tgl_rfp');
        $memos->no_rfp = $request->input('no_rfp');
        $memos->history_rfp = $request->input('history_rfp');
        $memos->tgl_nego = $request->input('tgl_nego');
        $memos->history_nego = $request->input('history_nego');
        $memos->no_mp = $request->input('no_mp');
        $memos->tgl_mp = $request->input('tgl_mp');
        $memos->judul_mp = $request->input('judul_mp');
        $memos->history_mp = $request->input('history_mp');
        $memos->budget = $request->input('budget');
        $memos->pos_bud = $request->input('pos_bud');
        $memos->wbsid_bud = $request->input('wbsid_bud');
        $memos->idr_usd_bud = $request->input('idr_usd_bud');
        $memos->nilai_bud = $request->input('nilai_bud');
        $memos->rcc_bud = $request->input('rcc_bud');
        $memos->tgl_loi = $request->input('tgl_loi');
        $memos->no_loi = $request->input('no_loi');
        $memos->tgl_pks = $request->input('tgl_pks');
        $memos->no_pks = $request->input('no_pks');
        $memos->judul_pks = $request->input('judul_pks');
        $memos->status_pks = $request->input('status_pks');
        $memos->target_deliv = $request->input('target_deliv');
        $memos->real_deliv_date = $request->input('real_deliv_date');
        $memos->tgl_bast = $request->input('tgl_bast');
        $memos->tgl_diterima_invbast = $request->input('tgl_diterima_invbast');
        $memos->history_invbast = $request->input('history_invbast');
        $memos->tgl_ba_instalasi = $request->input('tgl_ba_instalasi');
        $memos->tgl_trm_invinst = $request->input('tgl_trm_invinst');
        $memos->history_invinst = $request->input('history_invinst');
        $memos->start_maintenance = $request->input('start_maintenance');
        $memos->end_maintenance = $request->input('end_maintenance');

        $memos->save();
        Session::flash('green','Create Success!');
        return redirect()->route('view');
    }

    public function edit($no){
        $memo = Memos::findOrFail($no);
        return view('edit', compact('memo'));
    }

    public function delete($no){
        $memos = Memos::findOrFail($no);
        $memos->delete();
        Session::flash('red','Delete Success!');
        return redirect()->route('view');
    }

    public function update(Request $request, $no){
        $memos = Memos::findOrFail($no);
        $memos->nama_proyek = $request->input('nama_proyek');
        $memos->pic = $request->input('pic');
        $memos->vendor = $request->input('vendor');
        $memos->tgl_rfq = $request->input('tgl_rfq');
        $memos->no_rfq = $request->input('no_rfq');
        $memos->tgl_rfp = $request->input('tgl_rfp');
        $memos->no_rfp = $request->input('no_rfp');
        $memos->history_rfp = $request->input('history_rfp');
        $memos->tgl_nego = $request->input('tgl_nego');
        $memos->history_nego = $request->input('history_nego');
        $memos->no_mp = $request->input('no_mp');
        $memos->tgl_mp = $request->input('tgl_mp');
        $memos->judul_mp = $request->input('judul_mp');
        $memos->history_mp = $request->input('history_mp');
        $memos->budget = $request->input('budget');
        $memos->pos_bud = $request->input('pos_bud');
        $memos->wbsid_bud = $request->input('wbsid_bud');
        $memos->idr_usd_bud = $request->input('idr_usd_bud');
        $memos->nilai_bud = $request->input('nilai_bud');
        $memos->rcc_bud = $request->input('rcc_bud');
        $memos->tgl_loi = $request->input('tgl_loi');
        $memos->no_loi = $request->input('no_loi');
        $memos->tgl_pks = $request->input('tgl_pks');
        $memos->no_pks = $request->input('no_pks');
        $memos->judul_pks = $request->input('judul_pks');
        $memos->status_pks = $request->input('status_pks');
        $memos->target_deliv = $request->input('target_deliv');
        $memos->real_deliv_date = $request->input('real_deliv_date');
        $memos->tgl_bast = $request->input('tgl_bast');
        $memos->tgl_diterima_invbast = $request->input('tgl_diterima_invbast');
        $memos->history_invbast = $request->input('history_invbast');
        $memos->tgl_ba_instalasi = $request->input('tgl_ba_instalasi');
        $memos->tgl_trm_invinst = $request->input('tgl_trm_invinst');
        $memos->history_invinst = $request->input('history_invinst');
        $memos->start_maintenance = $request->input('start_maintenance');
        $memos->end_maintenance = $request->input('end_maintenance');

        $memos->save();
        Session::flash('blue','Update Success!');
        return redirect()->route('view');
    }

}
