



        <!-- Menginculde  --> @extends('layouts.admin')


@section('content')
<!-- semua yang ditaro disini,akan ditampilkan di admin.blade -->

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Check In</h1>
    </div>


</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
         
        @endforeach
    </ul>
</div>
    
@endif

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('kehadiran.checkTicket') }}" method="post">
        @csrf
        <div class="form-group">
        <label for="ticket_id">ID Tiket:</label>
            <input type="text" name="ticket_id" class="form-control" placeholder="ID Ticket" value="{{ old('id_ticket')}}" require>
        </div>
  

    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
    
    </form>
    </div>
</div>


</div>
<!-- /.container-fluid -->

@endsection