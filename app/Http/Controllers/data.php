<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use App\Models\pembayaran;
use App\Models\product;

class data extends Controller
{
    //tabel mahasiswa
    public function index(){
        $Mahasiswa = mahasiswa::paginate(5);
        return view('mahasiswa.index', compact('Mahasiswa'));
    }

    public function createMHS()
    {
        return view('mahasiswa.addMHS');
    }

    public function storeMHS(Request $mhs){
        mahasiswa::create([
            'nama' => $mhs->nama,
            'nbi' => $mhs->nbi
        ]);

        return redirect('/');
    }

    public function editMHS(string $id){
        $mahasw = mahasiswa::findorfail($id);
        return view('mahasiswa.editMHS', compact('mahasw'));
    }

    public function updateMHS(Request $req, string $id){
        $mahasw = mahasiswa::findorfail($id);
        $mahasw->update($req->all());
        return redirect('/');
    }

    public  function destroyMHS(string $id){
        $mahasw = mahasiswa::findorfail($id);
        $mahasw->delete();
        return back();
    }


    //tabel product
    public function product(){
        $Product = product::latest()->get();
        $Product = product::paginate(5);
        return view('product.product', compact('Product'));
    }

    public function createPRDK(){
        return view('product.addPRDK');
    }

    public function storePRDK(Request $request){
        $nm = $request->gambar;
        $namaFile =$nm->getClientOriginalName();

            $dtUpload = new product;
            $dtUpload->product = $request->product;
            $dtUpload->harga = $request->harga;
            $dtUpload->gambar = $namaFile;

            $nm->move(public_path().'/gambar-produk', $namaFile);
            $dtUpload->save();

            return redirect('/product');
    }

    public function editPRDK(string $id){
        $prdk = product::findorfail($id);
        return view('product.editPRDK', compact('prdk'));
    }

    public function updatePRDK(Request $req, string $id){
        $ubah = product::findorfail($id);
        $awal = $ubah->gambar;

        $prdk =[
            'product' =>$req['product'],
            'harga' =>$req['harga'],
            'gambar' => $awal
        ];
        $req->gambar->move(public_path().'/gambar-produk', $awal);
        $ubah->update($prdk);

        return redirect('/product');
    }


    public  function destroyPRDK(string $id){
        $prdk = product::findorfail($id);
        $prdk->delete();
        return back();
    }

    //tabel product
    public function pembayaran(){
        $Pembayaran = pembayaran::latest()->get();
        $Pembayaran = pembayaran::paginate(5);
        return view('transaksi.pembayaran', compact('Pembayaran'));
    }

    public function createBYR(){
        $Pembayaran = product::paginate(5);
        return view('transaksi.addBYR', compact('Pembayaran'));
    }
    
    public function storeBYR(Request $byr){
        pembayaran::create([
            'id_product' => $byr->id_product,
            'quantity' => $byr->quantity
        ]);

        return redirect('/pembayaran');
    }

    public function editBYR(string $id){
        $bayar = pembayaran::findorfail($id);
        return view('transaksi.editBYR', compact('bayar'));
    }

    public function updateBYR(Request $req, string $id){
        $bayar = pembayaran::findorfail($id);
        $bayar->update($req->all());
        return redirect('/');
    }

    public  function destroyBYR(string $id){
        $bayar = pembayaran::findorfail($id);
        $bayar->delete();
        return back();
    }
}
