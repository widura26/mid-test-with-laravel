@extends('layouts.mainLayout')

@section('container')
  <div class="container mt-5">
    <div class="row">
      @foreach ($allBarang as $key => $barang)
        <div class="col-md-4 mb-3">
          <div class="card">
              <img src="{{ asset('images/'. $barang->photo) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $barang->namaBarang }}</h5>
              <p class="card-text">Rp {{ number_format($barang->harga, 2, ',', '.') }}</p>
              <p class="card-text text-align-center"> stok : {{ $barang->stok }}</p>
              <a href="{{ route('view_barang', $barang->id) }}" class="btn btn-primary">Lihat Barang</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection