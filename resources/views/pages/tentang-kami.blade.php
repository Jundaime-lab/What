@extends('layouts.template')

@section('title', 'tentang-kami')

@section('content')
    <h1>Tentang Kami</h1>
    <p>Ini adalah halaman tentang kami yang juga menggunakan layout yang sama.</p>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">Visi Kami</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">Misi Kami</div>
            </div>
        </div>
    </div>
@endsection