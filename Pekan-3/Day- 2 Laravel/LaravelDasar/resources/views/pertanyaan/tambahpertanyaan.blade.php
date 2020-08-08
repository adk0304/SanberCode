@extends('master')
@section('content')
			<div class="card-body">
                  <div class="form-group">
                    <label>Judul Pertanyaan</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="judul Pertanyaan">
                  </div>
                  <div class="form-group">
                    <label>Isi</label>
                    <input type="text" class="form-control" name="isi" id="isi" placeholder="Isi Pertanyaan">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>                
              </div>
@endsection