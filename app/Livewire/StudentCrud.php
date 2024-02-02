<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;
use App\Models\Card;


class StudentCrud extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $no = 1;
    public $studentid;
    public $nonik,$name,$kelas,$sekolah,$alamat,$phone;
    public $currentPage = 1; // Current page number
    public $perPage = 10;    // Number of rows per page
    public $notif = true;
    


    public function resettext()
    {
        $this->nonik      = "";
        $this->name       = "";
        $this->kelas      = "";
        $this->sekolah    = "";
        $this->alamat     = "";
        $this->phone      = "";
        $this->studentid  = "";
    }

    public function closenotif()
    {
        $this->notif = false;
    }

    public function rules()
    {
        return [
            'nonik'     => 'required|numeric',
            'name'      => 'required',
            'kelas'     => 'required',
            'sekolah'   => 'required',
            'phone'     => 'required'
        ];
    }

    public function tambah ()
    {
       
        $this->validate();
        Student::Create([
            'nonik'     => $this->nonik,
            'name'      => $this->name,
            'kelas'     => $this->kelas,
            'sekolah'   => $this->sekolah,
            'alamat'    => $this->alamat,
            'phone'     => $this->phone,
        ]);
        session()->flash('message','Berhasil menambahkan murid ');
        $this->resettext();
        $this->dispatch('close-modal');
        $this->notif = true;
    }

    public function edit($id)
    {
        
        $student = Student::find($id);
        if($student) {
            $this->studentid    = $student->id;
            $this->nonik        = $student->nonik;
            $this->name         = $student->name;
            $this->kelas        = $student->kelas;
            $this->sekolah      = $student->sekolah;
            $this->alamat       = $student->alamat;
            $this->phone        = $student->phone;
        }
             
       
    }

    public function update()
    {
        $this->validate();
        if($this->studentid) {

            $student = Student::find($this->studentid);
            
            if($student) {
                $student->update([
                    'nonik'     => $this->nonik,
                    'name'      => $this->name,
                    'kelas'     => $this->kelas,
                    'sekolah'   => $this->sekolah,
                    'alamat'    => $this->alamat,
                    'phone'     => $this->phone,
                ]);
            }
        }
        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');
        $this->resettext();
        $this->dispatch('close-modal');
        $this->notif = true;
    }

    public function delete()
    {
       
        $cek = Card::where('student_id',$this->studentid)->get();
        // dd($cek);

        if($cek)
        {
            $this->notif = true;
            session()->flash('message', 'Data tidak dihapus karena telah koneksi ke data lain.');
            $this->resettext();
            $this->dispatch('close-modal');
        }
        else 
        {
            $student = Student::find($this->studentid);
            if($student)
            {
                $student->delete();
            }
            $this->notif = true;
            session()->flash('message', 'Data Berhasil dihapus.');
            $this->resettext();
            $this->dispatch('close-modal');
        }


       
       
    }

    public function render()
    {
        $student = Student::latest()->paginate(10);
        return view('livewire.student.student-crud', ['student' => $student]);
    }


}
