<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use PDF;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Fungsi eloquent menampilkan data menggunakan pagination
        
        $produce = Product::where([
            ['Nama', '!=', Null],
            [function ($query) use ($request){
                if(($term = $request->term)){
                    $query->orWhere('Nama', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy('Id', 'desc')
            ->paginate(5);
        return view('produce.index', compact('produce'));
        with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function create()
     {
    return view('produce.create');
    }
    public function store(Request $request)
    {
        //melakukan validasi data
            $request->validate([
                'Id' => 'required',
                'Nama' => 'required',
                'image' => 'required',
                'Jumlah' => 'required',
                
    ]);
    $Product = new Product;
    $Product-> Id = $request->get('Id');
    $Product-> Nama = $request->get('Nama');
    if ($request->file('image')) {
        $image_name = $request->file('image')->store('images', 'public');
    }
    $Product->photo = $image_name;
    $Product-> Jumlah = $request->get('Jumlah');
    $Product->save();
    //fungsi eloquent untuk menambah data
    
    //jika data berhasil ditambahkan, akan kembali ke halaman utama
    return redirect()->route('produce.index')
        ->with('success', 'Product Berhasil Ditambahkan');
 }
    public function show($Id)
    {
    //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Product = Product::find($Id);
        return view('produce.detail', compact('Product'));
    }

    public function edit($Id)
    {
    //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Product = Product::find($Id);
        return view('produce.edit', compact('Product'));
    }

    public function update(Request $request, $Id)
    {
      //melakukan validasi data
        $request->validate([
            'Id' => 'required',
            'Nama' => 'required',
            'Jumlah' => 'required',
    ]);
   //fungsi eloquent untuk mengupdate data inputan kita
        $Product = new Product;
        $Product-> Id = $request->get('Id');
        $Product-> Nama = $request->get('Nama');
        if($Product->photo && file_exists('app/public/' . $Product->photo)) {
            \Storage::delete('public/' . $Product->photo);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $Product->photo = $image_name;
        $Product-> Jumlah = $request->get('Jumlah');
        $Product->save();

    
   //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('produce.index')
                ->with('success', 'Product Berhasil Diupdate');
    }
        public function destroy( $Id)

    {
   //fungsi eloquent untuk menghapus data
         Product::find($Id)->delete();
        return redirect()->route('produce.index')
        -> with('success', 'Product Berhasil Dihapus');
    }
    public function cetak_khs(){ 
        $Product = Product::all(); 
        $pdf = PDF::loadview('produce.cetak_khs',['produce'=>$Product]); 
        return $pdf->stream(); 
    }
 };  
    


