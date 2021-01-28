@extends('dashboard.layout')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Buku
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('dashboard.update',$items->id) }}" id="myForm">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $items->title }}" aria-describedby="title" placeholder="Masukkan Judul Buku">
                </div>
                <div class="form-group">
                    <label for="deskripsion">Keterangan</label>
                    <input type="text" name="deskripsion" class="form-control" id="deskripsion" value="{{ $items->deskripsion }}" aria-describedby="deskripsion" placeholder="Masukkan Nama Penulis">
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection