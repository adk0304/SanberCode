@extends('master')
@section('content')
      <div class="card-body">
          <div class="form-group">
            <h3>{{$detail->judul}} </h3>
            <p>{{$detail->isi}}</p>             
          </div>
      </div>
@endsection