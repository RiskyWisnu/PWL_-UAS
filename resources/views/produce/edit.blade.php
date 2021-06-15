@extends('produce.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Mahasiswa
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('produce.update', $Product->Id) }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Id">Id</label>
                        <input type="text" name="Id" class="form-control" id="Id" value="{{ $Product->Id }}" aria-describedby="Id">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $Product->Nama }}" aria-describedby="Nama">
                    </div>
                    <div class="form-group">
                        <label for="image">Foto</label>
                        <input type="file" class="form-control" required="required" name="image" value="{{$Product->photo}}"></br>
                        <img width="150px" src="{{asset('storage/'.$Product->photo)}}">
                    </div>
                    <div class="form-group">
                        <label for="Jumlah">Jumlah</label>
                        <input type="text" name="Jumlah" class="form-control" id="Jumlah" value="{{ $Product->Jumlah }}" aria-describedby="Jumlah">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection