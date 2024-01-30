@extends('layouts.admin')

@section('content')

@livewire('sertifikat.sertifikatcrud')

@endsection


@section('script')
<script>
    window.addEventListener('close-modal', event => {
        $('#deletesertifikatModal').modal('hide');
    })
</script>
@endsection