<?php

namespace App\Livewire\Sertifikat;

use Livewire\Component;
use App\Models\Card;
use App\Models\Cdpoint;
use App\Models\kategori;
use App\Models\Kategoripoint;

class Viewsertifikat extends Component
{
    public $student;
    public $kategori;
    public $studentid,$kategorid;
    public $formsetup = false;
    public $studentfix,$kategorifix;
    public $cardpoint = [];
    public $tanggal,$note,$card; 
    public $toclass;



    public $id;

    public function mount($id)
    {
        $this->id = $id;
        $this->card = card::find($id);
        $this->tanggal = $this->card->tanggal;
        $this->note = $this->card->Note;
        $this->studentid = $this->card->student_id;
        $this->kategorid = $this->card->kategori_id;
        $this->toclass = Kategori::where('id',$this->card->toclass)->get();
        $point = Cdpoint::where('cards_id',$this->card->id)->get();
        $arraypoint = json_decode(json_encode($point),TRUE);
        
        //  dd($arraypoint);
        foreach($point as $data){
            $this->cardpoint[] =['point'=>$data['point'],'score'=>$data['score']];
        }
    }


    public function render()
    {
        return view('livewire.sertifikat.viewsertifikat');
    }
}
