@extends('layouts.admin')

@section('content')

@livewire('student-crud')

@endsection


@section('script')
<script>
    window.addEventListener('close-modal', event => {
        $('#studentModal').modal('hide');
        $('#updateStudentModal').modal('hide');
        $('#deleteStudentModal').modal('hide');
    })
</script>
@endsection