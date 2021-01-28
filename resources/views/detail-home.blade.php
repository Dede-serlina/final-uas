@extends('dashboard.layout')
  
@section('content')

<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Berita
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Judul: </b>{{$items->title}}</li>
                    <li class="list-group-item"><b>Keterangan: </b>{{$items->deskripsion}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection