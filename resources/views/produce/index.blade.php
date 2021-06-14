@extends('produce.layout')
0
@include('layouts.header')
@include('layouts.header1')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Input Product </h2>
        </div>
        <div class="float-right my-2">
        <div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ route('produce.index') }}" method="GET" role="search">

                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search names">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search names" id="term">
                        <a href="{{ route('produce.index') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

            <a class="btn btn-success" href="{{ route('produce.create') }}"> Tambahkan product</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Jumlah</th>

        <th width="280px">Action</th>
    </tr>
    @foreach ($produce as $Product)
    <tr>
    <td>{{ $Product->Id}}</td>
        <td>{{ $Product->Nama}}</td>
        <td>{{ $Product->Jumlah }}</td>
       
        <td>
            <form action="{{ route('produce.destroy',$Product->Id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('produce.show',$Product->Id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('produce.edit',$Product->Id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class= "d-flex">
 {{$produce->links() }}
</div>
@endsection