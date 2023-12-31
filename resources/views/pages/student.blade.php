@extends('layouts.admin')

@section('content')

@livewire('student-crud')

@endsection


@section('script')
<script>
    window.addEventListener('closeModal', event => {

        $('#showmodal').modal('hide');
        // $('#updateStudentModal').modal('hide');
        // $('#deleteStudentModal').modal('hide');
    })
</script>
@endsection