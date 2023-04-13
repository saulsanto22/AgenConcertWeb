<!-- Menginculde  -->
@extends('layouts.admin')


@section('content')
<!-- semua yang ditaro disini,akan ditampilkan di admin.blade -->
<div class="card">
    <div class="card-header">
        Biodata Pemilik Tiket
    </div>
    <div class="card-body">
        <p><strong>Nama:</strong> {{ $ticket->name }}</p>
        <p><strong>Email:</strong> {{ $ticket->email }}</p>
        <p><strong>No. HP:</strong> {{ $ticket->phone }}</p>
    </div>
</div>

<!-- /.container-fluid -->

@endsection