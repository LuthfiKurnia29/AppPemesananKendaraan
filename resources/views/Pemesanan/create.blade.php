@extends('Layout.main')
@section('content')
  <div class="p-4">
    <form class="row g-3" method="POST" action="/createPemesanan">
        @csrf
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Driver</label>
          <select class="form-select" aria-label="Default select example" name="driver_id">
            <option selected>Open this select menu</option>
            @foreach ($drivers as $item)
            <option value="{{$item->id}}">{{$item->nama_driver}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Kendaraan</label>
          <select class="form-select" aria-label="Default select example" name="kendaraan_id">
            <option selected>Open this select menu</option>
            @foreach ($kendaraans as $item)
            <option value="{{$item->id}}">{{$item->nama_kendaraan}}</option>
            @endforeach
          </select>        
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Penanggung Jawab</label>
          <select class="form-select" aria-label="Default select example" name="user_id">
            <option selected>Open this select menu</option>
            @foreach ($manajers as $item)
            <option value="{{$item->id}}">{{$item->username}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Tanggal Pinjam</label>
          <input type="date" class="form-control" id="inputAddress2" name="tanggal_pinjam">
        </div>
        <div class="col-12">
          <label for="inputCity" class="form-label">Tujuan</label>
          <input type="text" class="form-control" id="inputCity" name="tujuan">
        </div>  
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </form>
  </div>
@endsection