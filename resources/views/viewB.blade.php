@extends('layouts.mainLayout')

@section('container')
    <div class="wrapper">
        <div class="row border mt-5">
          <div class="col float-none">
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                      <td>Produk</td>
                      <td>: {{ $satuBarang->namaBarang }}</td>
                    </tr>
                    <tr>
                      <td>Harga</td>
                      <td>: Rp {{ number_format($satuBarang->harga, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                      <td>Sistem Operasi</td>
                      <td>: {{ $satuBarang->sistem }}</td>
                    </tr>
                    <tr>
                      <td>Ram / SSD</td>
                      <td>: {{ $satuBarang->prosesor }}</td>
                    </tr>
                    <tr>
                      <td>Prosesor</td>
                      <td>: {{ $satuBarang->memory }}</td>
                    </tr>
                    <tr>
                      <td>Ulasan</td>
                      <td>: {{ $satuBarang->ulasan }}</td>
                    </tr>
                </table>
            </div>
          </div>
          <div class="col float-none mt-4">
                <img src="{{ asset('images/'. $satuBarang->photo) }}" class="card-img-top" alt="...">
          </div>
        </div>
    </div>
@endsection
