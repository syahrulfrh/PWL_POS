<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KategoriController extends Controller
{
public function index(KategoriDataTable $dataTable)
{
    return $dataTable->render('kategori.index');
}
public function create()
{
    return view('kategori.create');
}
public function store(request $request) 
{
    $validated = $request->validate([
        'kategori_kode' => 'required',
        'kategori_nama' => 'required',

    ]);


return redirect('/kategori');

}
public function edit($id)
{
$user = KategoriModel::find($id);
return view('kategori/edit', ['data' => $user]);
}
public function edit_save($id, Request $request)
{
$kategori = KategoriModel::find($id);
$kategori->kategori_kode = $request->kodeKategori;
$kategori->kategori_nama = $request->namaKategori;
$kategori->save();
return redirect('/kategori');
}
public function hapus($id)
{
$kategori = KategoriModel::find($id);
$kategori ->delete();
return redirect('/kategori');
}


}
