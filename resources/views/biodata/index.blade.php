@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Biodata List</div>

                @if (session('pesan'))
                    <div class="alert alert-info">
                        <b>Berhasil</b> : {{ session('pesan') }}
                    </div>
                @endif

                <div class="card-body">
                <a href="{{ route('biodata.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                   <table class="table table-bordered table-hover table-striped">
                       <tr>
                           <th>No</th>
                           <th>Nama</th>
                           <th>Alamat</th>
                           <th>Pekerjaan</th>
                           <th colspan="2">Aksi</th>
                       </tr>
                       @php
                        $number=1;   
                       @endphp
                       @foreach ($biodata as $item)
                        <tr>
                            <td>{{ $number }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->pekerjaan }}</td>
                            <td>
                                <a href="{{ route('biodata.edit',$item->id) }}" class="btn btn-info btn-sm">Update</a>
                                <form method="POST" action="{{ route('biodata.destroy',$item->id) }}">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $number++
                        @endphp
                       @endforeach
                   </table>
                   {{ $biodata->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
