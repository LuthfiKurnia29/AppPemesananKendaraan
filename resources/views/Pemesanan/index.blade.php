@extends('Layout.main')
@section('content')
    <div class="p-4">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Penanggung Jawab</th>
                <th scope="col">Driver</th>
                <th scope="col">Kendaraan</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tujuan</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{$item->iteration}}</th>
                        <th scope="row">{{$item->user->username}}</th>
                        <th scope="row">{{$item->driver->nama_driver}}</th>
                        <th scope="row">{{$item->kendaraan->nama_kendaraan}}</th>
                        <th scope="row">{{$item->tanggal_pinjam}}</th>
                        <th scope="row">{{$item->tujuan}}</th>
                        <th scope="row">{{$item->status}}</th>
                        {{-- <td>{{$item->drivers->nama_driver}}</td> --}}
                        {{-- <td>@mdo</td> --}}
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection