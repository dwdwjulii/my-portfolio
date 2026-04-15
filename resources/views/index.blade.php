{{-- WAJIB TAMBAHKAN BARIS INI DI PALING ATAS --}}
@extends('layouts.app')

@section('content')
    {{-- Memanggil section Hero --}}
    @include('sections.hero')

    @include('sections.about')

    @include('sections.projects')

    @include('sections.experience')

    @include('sections.certificate')

    @include('sections.contact')
@endsection