<?php

namespace App\Livewire\Sertifikat;

use Livewire\Component;
use App\Models\Card;
use App\Models\Cdpoint;
use App\Models\Student;
use App\Models\Kategori;
use App\Models\Kategoripoint;
use Illuminate\Http\Request;



class EditSertifikat extends Component
{
    public $student;
    public $kategori;
    public $studentid,$kategorid;
    public $formsetup = false;
    public $studentfix,$kategorifix;
    public $cardpoint = [];
    public $tanggal,$note,$card; 



    public $id;

    public function mount($id)
    {
        $this->id = $id;
        $this->card = card::find($id);
        $this->tanggal = $this->card->tanggal;
        $this->note = $this->card->Note;
        $this->studentid = $this->card->student_id;
        $this->kategorid = $this->card->kategori_id;

        $point = Cdpoint::where('cards_id',$this->card->id)->get();
        $arraypoint = json_decode(json_encode($point),TRUE);
        
        //  dd($arraypoint);
        foreach($point as $data){
            $this->cardpoint[] =['point'=>$data['point'],'score'=>$data['score']];
        }
    }

    public function update()
    {
       
        if($this->id) {

            $card = Card::find($this->id);
            
            if($card) {
                $card->update([
                    'tanggal'           => $this->tanggal,
                    'Note'              => $this->note,
                    'student_id'        => $this->studentid,
                    'kategori_id'       => $this->kategorid,
                ]);
            }

            $kategoripoint = Cdpoint::where('cards_id', $this->id)->delete();
            foreach ($this->cardpoint as $key => $value) {
                Cdpoint::create([
                    'score'     => $this->cardpoint[$key]['score'],
                    'point'     => $this->cardpoint[$key]['point'],
                    'cards_id'  => $card->id
                ]);
            }
        }
        session()->flash('message', 'Sertifikat berhasil Update.');
        $this->redirect('/admin/sertifikat'); 
    }
    
    public function render()
    {
        return view('livewire.sertifikat.edit-sertifikat');
    }
}