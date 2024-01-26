<?php

namespace App\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;
use App\Models\KategoriPoint;
use Livewire\WithPagination;

class Kategoricrud extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $kategoriid;
    public $nama,$keterangan,$judul,$keterpoint;
    public $currentPage = 1; // Current page number
    public $perPage = 10;    // Number of rows per page
    public $notif = true;
    public $kategoripoint,$arraypoint,$pointout;

    public function select($id)
    {
        $kategoripilih           = Kategori::find($id);
        $this->nama              = $kategoripilih->nama;
        $this->keterangan        = $kategoripilih->keterangan;
        $this->kategoripoint     = KategoriPoint::where('kategori_id',$id)->get();
        // dd($this->kategoripoint);
        $this->arraypoint        =  json_decode(json_encode($this->kategoripoint),TRUE);
         //dd($this->arraypoint);
    }

    public function resettext()
    {
        $this->nama         ="";
        $this->keterangan   ="";
        $this->judul        ="";
        $this->keterpoint   ="";
    }

    public function rules()
    {
        return[
            'nama'          => 'required',
            'keterangan'    => 'required',
            'judul'         => 'required',
            'keterpoint'    => 'requierd'
        ];
    }

    public function tambah()
    {
        
    }

    public function render()
    {

        $kategori = Kategori::latest()->paginate(10);
        return view('livewire.kategori.kategoricrud',['kategori' => $kategori]);
    }
}
