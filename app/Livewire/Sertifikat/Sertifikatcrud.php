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
    public $modaldelete = false;
    public $data;
    public $sertifid;
 

    public function closenotif()
    {
        $this->notif = false;
    }

    public function select($id)
    {   

        $this->modaldelete = true;
        $this->sertifid = $id;
        $this->data = card::find($id);
        $this->kategori = $this->data->Kategori->nama;
        $this->student = $this->data->Student->name;
        
    }

    public function hapus()
    {
        $sertifikat = Card::find($this->sertifid);
        if($sertifikat) 
        {
            $sertifikat->delete();
            $sertifikatpoint = Cdpoint::where('cards_id', $this->sertifid)->delete(); 
        }
        session()->flash('message', 'Data Berhasil dihapus.');
        $this->resettext();
        $this->dispatch('close-modal');
    }

    public function resettext()
    {
        $this->sertifid = '';
        $this->data = '';
        $this->modaldelete = false;
    }
    
    public function render()
    {
        $card = Card::latest()->paginate(10);
        return view('livewire.sertifikat.sertifikatcrud', ['card' => $card]);
    }
}
