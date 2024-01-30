@extends('layouts.admin')

@section('content')

@livewire('sertifikat.viewsertifikat', ['id' => $dataid])

@endsection