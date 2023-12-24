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

    public function render()
    {
        $student = Student::latest()->paginate(10);
        return view('livewire.student-crud', ['student' => $student]);
    }


    public function reset()
    {
        $nonik      = "";
        $name       = "";
        $kelas      = "";
        $sekolah    = "";
        $alamat     = "";
        $phone      = "";
    }

    public function tambah ()
    {
        
    }
}
