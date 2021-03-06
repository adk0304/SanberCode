@extends('master')
@section('content')
<form action="/pertanyaan" method="POST">\
  @csrf
			<div class="card-body">
                  <div class="form-group">
                    <label>Judul Pertanyaan</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="judul Pertanyaan" value="{{old('judul','')}}">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Isi</label>
                    <input type="text" class="form-control" name="isi" id="isi" placeholder="Isi Pertanyaan" value="{{old('isi','')}}">
                  @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>                
              </div>
</form>
@endsection