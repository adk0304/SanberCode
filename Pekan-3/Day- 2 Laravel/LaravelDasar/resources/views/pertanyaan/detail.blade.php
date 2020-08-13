@extends('master')
@section('content')
      <div class="card-body">
          <div class="form-group">
            <h3>{{$pertanyaan->judul}} </h3>
            <p>{{$pertanyaan->isi}}</p>             
          </div>
      </div>
@endsection