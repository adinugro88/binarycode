<?php

namespace App\Livewire\Sertifikat;

use Livewire\Component;
use App\Models\Card;
use App\Models\Cdpoint;
use App\Models\Student;
use App\Models\Kategori;
use App\Models\Kategoripoint;

class CreateSertifikat extends Component
{
    public $student;
    public $kategori;
    public $studentid,$kategorid;
    public $formsetup = false;
    public $studentfix,$kategorifix;
    public $cardpoint = [];
    public $tanggal,$note;
    public $notif = false;
    
    public function mount()
    {
        $this->student  = Student::all();
        $this->kategori = Kategori::all();
        $studentpilih = Student::first();
        $this->studentid = $studentpilih->id;
        $kategoripilih = Kategori::first();
        $this->kategorid = $kategoripilih->id;
        // dd( $this->studentid,$this->kategorid);
    }


    public function setting()
    {
        $this->kategorifix = Kategori::find($this->kategorid);
        $this->studentfix = Student::find($this->studentid);
        //dd($this->kategorifix->id,$this->studentfix->nonik );
            if( $this->studentfix->nonik == 0  && $this->kategorifix->id != 3 )
        {
            
            $this->notif = true;
            session()->flash('message', 'Sertifikat tidak bisa dibuat karena nonik student belum ada.');
            $this->resetall();   
        }
        else 
        {
            $this->resetErrorBag();
            $this->cardpoint = [];
            $this->formsetup = true;
            $point = Kategoripoint::where('kategori_id',$this->kategorid)->get();
            $arraypoint = json_decode(json_encode($point),TRUE);
            //dd($this->kategorifix->id);
            if($this->kategorifix->id == 3)
            {
                foreach($point as $data){
                    $this->cardpoint[] =['point'=>$data['judul'],'score'=>'','detail'=>''];
                }
            }
            else 
            {
                foreach($point as $data){
                    $this->cardpoint[] =['point'=>$data['judul'],'score'=>''];
                }
            }
        }
    }
       
    

    public function closenotif(){
        $this->notif = false;
    }

    public function resetall()
    {
        $this->formsetup = false;
        $this->studentfix = '';
        $this->kategorifix = '';
        $this->resetErrorBag();
        
    }

    protected function rules()
    {
        if($this->kategorifix->id == 3)
        {
            return [
                'tanggal'                => 'required',
                'note'                   => 'required',
                'cardpoint'              => 'required|array|min:1',
                'cardpoint.*.score'      => 'required|numeric',
                'cardpoint.*.detail'      => 'required'
            ];
        }

        else
        {
            return [
                'tanggal'                => 'required',
                'note'                   => 'required',
                'cardpoint'              => 'required|array|min:1',
                'cardpoint.*.score'      => 'required|numeric'
            ];
        }


        
    }

    public function simpan()
    {
        $this->validate();
        $card = Card::Create([
            'tanggal'           => $this->tanggal,
            'Note'              => $this->note,
            'student_id'        => $this->studentid,
            'kategori_id'       => $this->kategorid,
        ]);
        if($this->kategorifix->id == 3)
        {
            foreach ($this->cardpoint as $key => $value) {
                Cdpoint::create([
                    'score'     => $this->cardpoint[$key]['score'],
                    'point'     => $this->cardpoint[$key]['point'],
                    'detail'    => $this->cardpoint[$key]['detail'],
                    'cards_id'  => $card->id
                ]);
            }
        }
        else 
        {
            foreach ($this->cardpoint as $key => $value) {
                Cdpoint::create([
                    'score'     => $this->cardpoint[$key]['score'],
                    'point'     => $this->cardpoint[$key]['point'],
                    'cards_id'  => $card->id
                ]);
            }
        }
        
        session()->flash('message', 'Sertifikat berhasil ditambahkan.');
        $this->redirect('/admin/sertifikat'); 
    }

    public function render()
    {
        return view('livewire.sertifikat.create-sertifikat');
    }
}
