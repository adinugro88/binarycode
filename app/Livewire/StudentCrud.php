<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;


class StudentCrud extends Component
{
    use WithPagination;
    public $no = 1;
    public $nonik,$name,$kelas,$sekolah,$alamat,$phone;



    
    public function resettext()
    {
        $this->nonik      = "";
        $this->name       = "";
        $this->kelas      = "";
        $this->sekolah    = "";
        $this->alamat     = "";
        $this->phone      = "";
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
    }

    public function render()
    {
        $student = Student::latest()->paginate(10);
        return view('livewire.student.student-crud', ['student' => $student]);
    }


}
