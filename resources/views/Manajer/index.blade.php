@extends('Layout.main')
@section('content')
    <div class="p-4">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Driver</th>
                <th scope="col">Kendaraan</th>
                <th scope="col">Tanggal Mulai</th>
                <th scope="col">Tujuan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                  <td>{{$item->driver->nama_driver}}</td>
                  <td>{{$item->kendaraan->nama_kendaraan}}</td>
                  <td>{{$item->tanggal_pinjam}}</td>
                  <td>{{$item->tujuan}}</td>
                  <td>
                    <form action="/manajer/pesanan/{{ $item->id }}" method="post">
                        @csrf
                        <input type="hidden" name="status" value="Disetujui Manajer">
                        <button type="submit" class="btn btn-success">Setujui</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection