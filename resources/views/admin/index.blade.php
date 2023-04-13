<!-- Menginculde  -->
@extends('layouts.admin')


@section('content')
<!-- semua yang ditaro disini,akan ditampilkan di admin.blade -->

  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">List Tiket</h1>

    </a>
</div>
@if (session('succes'))
<div class="alert alert-success">
    {{ session('succes') }}
</div>
@elseif (session('update'))
<div class="alert alert-info">
    {{ session('update') }}
</div>
@elseif (session('delete'))
<div class="alert alert-danger">
    {{ session('delete') }}
</div>
@endif
<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                
                <thead>

                  
                    <tr>
                        <td>No</td>
                       <td>Nama</td>
                       <td>Email</td>
                       <td>Phone</td>
                       <td>Quantity</td>
                       <td>ID Tiket</td>
                </tr>
                 
                </thead>
                 <tbody>
                     @forelse ($tickets as $item)
                     <tr>
             
                        <td>{{ $item->nama}}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->quantity }}</td>     
                        <td>{{ $item->ticket_id}}</td>               
                              
                    
                        <td>
                            <a href="" class="btn btn-info ">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                        
                            <form action="" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger delete" data-id="
                            ">
                                <i class="fa fa-trash">
                                </i>
                            </button>
                            </form>
                            </td>
                 </tr>
                     @empty
                         <tr>
                             <td colspan="7" class="text-center">Data Kosong</td>
                         </tr>
                     @endforelse
                 </tbody>
            
            </table>
        </div>
    </div>
</div>


</div>
<!-- /.container-fluid -->


@endsection