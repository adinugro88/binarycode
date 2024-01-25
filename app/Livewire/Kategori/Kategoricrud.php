<?php

namespace App\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;
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

    public function select($id)
    {
        $kategori           = Kategori::find($id);
        $this->nama         = $kategori->nama;
        $this->keterangan   = $kategori->keterangan;
    }

    public function resettext()
    {
        $this->nama         ="";
        $this->keterangan   ="";
        $this->judul        ="";
        $this->keterpoint   ="";
    }

    public function render()
    {
        $kategori = Kategori::latest()->paginate(10);
        return view('livewire.kategori.kategoricrud',['kategori' => $kategori]);
    }
}
