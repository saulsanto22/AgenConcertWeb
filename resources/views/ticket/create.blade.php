


    @extends('layouts.app')


    @section('content')

 


    <h1 style="text-align: center;">Pemesanan Tiket Konser</h1>

  
    @if(session('success'))
        <div style="color: green text-align: center;">{{ session('success') }}</div>
    @endif

    
    <form method="POST" action="{{ route('ticket.store') }}" class="tiket-create">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text"   name="name"class="form-control" id="name" placeholder="Enter your name" required >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Nomor Telepon:</label>
    <input type="text" class="form-control"  name="phone" id="name" placeholder="Enter your phonel" required>
  </div>
  <div class="mb-3">
    <label for="quantity" class="form-label">Jumlah Tiket</label>
    <input type="number"   class="form-control" name="quantity" min="1" required > 
  </div>
  <button type="submit" class="btn btn-primary mb-3">Submit</button>
</form>



  
 
<!-- 
        <label for="email">Email:</label>
        <input type="email" name="email" required><br> -->

        <!-- <label for="phone">Nomor Telepon:</label>
        <input type="text" name="phone" required><br> -->

        <!-- <label for="quantity">Jumlah Tiket:</label>
        <input type="number" name="quantity" min="1" required><br>

        <button type="submit">Pesan Tiket</button> -->
    </form>
    @endsection
