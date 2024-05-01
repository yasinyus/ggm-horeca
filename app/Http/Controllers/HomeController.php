<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use App\Models\Outlet;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{

    public function login() {
        return view("home.login");
    }

    public function register() {
        return view("home.register");
    }

    public function lupa() {
        return view("home.lupa");
    }

    public function reset() {
        return view("home.reset");
    }

    public function home() {
        if(auth()->user()->roles == 'BUYERS') {
            $merch = Merchandise::all();
            return view("home.home", compact('merch'));
        } else {
            return redirect('/keluar');
        }
        
    }

    public function detail($id) {
        $merch = Merchandise::findOrFail($id);
        return view("home.detail", compact('merch'));
    }

    public function profile() {
        return view("home.profile");
    }

    public function lengkapi() {
        return view("home.lengkapi");
    }

    public function stample() {
        $transaction = Transaction::join('outlets', 'outlets.unicode', '=', 'transactions.outlet_id')->where('user_id', auth()->user()->id)->
        where('stampel', 0)->get();
        // select('transactions.created_at as tangal_claim')
        // 'transactions.created_at as tanggal_claim', 'outlets.outlet as outlets'

        // $transaction = Transaction::first();
        return view("home.stample", compact('transaction'));
    }

    public function klaim() {
        return view("home.klaim");
    }

    public function redeem() {
        return view("home.redeem");
    }

    public function hasilClaim(Request $request) {
        $cek = Outlet::where('unicode', $request->outlet_id)->first();

        if($cek) {
            Transaction::create([
                'outlet_id' => $request->outlet_id,
                'user_id' => auth()->user()->id,
            ]);
            $user = User::findOrFail(auth()->user()->id);
            // $outlet = Outlet::findOrFail($request->outlet_id);
            // $transaction = $outlet->transaction;
            $stample = $user->stample;
            $transaction = $user->transaction;
            $transaction_outlet = $cek->transaction;
            $cek->update([
                'transaction' => $transaction_outlet + 1,
            ]);
            $user->update([
                'stample' => $stample + 1,
                'transaction' => $transaction + 1,
            ]);
            return redirect('/home')->with('success1', 'JOSSSSSS');
        } else {
            return redirect('/home')->with('gagal1', 'GAGAL');
        }
    }

    public function aksiRedeem(Request $request) {
        $cek = Outlet::where('unicode', $request->outlet_id)->first();
        $merch = Merchandise::where('id', $request->merch)->first();
        $nilai = $merch->value;

        if($cek) {
            $trans = Transaction::where('outlet_id', $request->outlet_id)->where('stampel', 0)->limit($nilai);
            $trans->update([
                'stampel' => 2,
            ]);
            $user = User::findOrFail(auth()->user()->id);
            // $outlet = Outlet::findOrFail($request->outlet_id);
            // $transaction = $outlet->transaction;
            $stample = $user->stample;
            $redeem = $user->redeem;
            $reedem_outlet = $cek->reedem;
            $cek->update([
                'reedem' => $reedem_outlet + 1,
            ]);
            $user->update([
                'stample' => $stample - $nilai,
                'redeem' => $redeem + 1,
            ]);
            return redirect('/home')->with('success2', 'JOSSSSSS');
        } else {
            return redirect('/home')->with('gagal2', 'GAGAL');
        }
    }
}
