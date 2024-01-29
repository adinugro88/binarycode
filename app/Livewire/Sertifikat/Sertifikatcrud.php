<?php

namespace App\Livewire\Sertifikat;
use App\Models\Card;
use App\Models\Cdpoint;
use Livewire\WithPagination;
use Livewire\Component;


class Sertifikatcrud extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $no = 1;
    public $studentid;
    public $tanggal,$note,$class,$student,$kategori,$cdpoint =[];
    public $currentPage = 1; // Current page number
    public $perPage = 10;    // Number of rows per page
    public $notif = true;


    public function render()
    {
        $card = Card::latest()->paginate(10);
        return view('livewire.sertifikat.sertifikatcrud', ['card' => $card]);
    }
}
