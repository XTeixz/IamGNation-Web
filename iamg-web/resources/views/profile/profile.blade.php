@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="ml-2">
                <h1>Profil</h1>
                <a href="#" class="btn btn-success mt-1 mb-3">Edit profil</a>
            </div>
            <table class="table mx-3">
                <tbody>
                  <tr>
                    <th>Nama Depan :</th>
                    <td>{{Auth::user()->nama_depan}}</td>
                  </tr>
                  <tr>
                    <th>Nama Belakang :</th>
                  <td>{{Auth::user()->nama_belakang}}</td>
                  </tr>
                  <tr>
                    <th>Email :</th>
                    <td>{{Auth::user()->email}}</td>
                  </tr>
                  <tr>
                    <th>No Telp :</th>
                    <td>{{Auth::user()->no_telp}}</td>
                  </tr>
                </tbody>
              </table>
        </div>

        <div class="col-md-12">
            <div class="ml-2">
                <h1>Alamat</h1>
                <a href="#" class="btn btn-success mt-1 mb-3">Tambah alamat</a>
            </div>
        </div>
    </div>
    <div class="row" id="form_alamat">
      @foreach ($addresses as $address)
        <div class="col-lg-4 mt-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Rumah</h4> 
              <p class="card-text">
                  Cakra Wisnu Murthy <br>
                  Jl. Nusantara, Aren Jaya, Kota Bekasi, Jawa Barat, Indonesia <br>
                  Bekasi Timur <br>
                  Kota Bekasi <br>
                  Jawa Barat <br>
                  17111 <br>
              </p>
              <a href="#" class="btn btn-danger">Hapus</a>
              <a href="#" class="btn btn-success">Edit</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
</div>
@endsection
