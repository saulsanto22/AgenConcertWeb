@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Laporan Konser
        </div>
        <div class="card-body">
            <h4>Tiket Sudah Digunakan</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID Tiket</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. HP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($attendedAttendances as $index => $attendance)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $attendance->ticket_id }}</td>
                            <td>{{ $attendance->ticket->name }}</td>
                            <td>{{ $attendance->ticket->email }}</td>
                            <td>{{ $attendance->ticket->phone }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <hr>

            <h4>Tiket Belum Digunakan</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID Tiket</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. HP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($unattendedAttendances as $index => $attendance)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $attendance->ticket_id }}</td>
                            <td>{{ $attendance->ticket->name }}</td>
                            <td>{{ $attendance->ticket->email }}</td>
                            <td>{{ $attendance->ticket->phone }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection