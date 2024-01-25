@extends('layouts.admin')

@section('content')

@livewire('kategori.kategoricrud')

@endsection


@section('script')
<script>
    window.addEventListener('close-modal', event => {
        $('#kategoriviewModal').modal('hide');
        $('#kategoriModal').modal('hide');
        $('#updatekategoriModal').modal('hide');
        $('#deletekategoriModal').modal('hide');
    })
</script>
@endsection