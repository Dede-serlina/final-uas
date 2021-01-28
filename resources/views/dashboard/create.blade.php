@extends('dashboard.layout')
  
@section('content')
   

<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah Berita
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
            <form method="post" action="{{ route('dashboard.store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" name="title" class="form-control" id="title" aria-describedby="title" placeholder="Masukkan Judul">
                </div>
                <div class="form-group">
                    <label for="deskripsion">Keterangan</label>
                    <textarea type="text" name="deskripsion" class="form-control" id="deskripsion" aria-describedby="deskripsion" placeholder="Masukkan keterangan" rows="3"></textarea>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection