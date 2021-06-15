@extends('produce.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail product
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Id: </b>{{$Product->Id}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$Product->Nama}}</li>
                    <li class="list-group-item"><b>Photo: </b><img width="150px" src="{{asset('storage/'.$Product->photo)}}"></li>
                    <li class="list-group-item"><b>Jumlah: </b>{{$Product->Jumlah}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('produce.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection