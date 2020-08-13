@extends('master')
@section('content')
			<div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card product_item_list">
                    <div class="body table-responsive">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}                            
                        </div>
                        @endif
                        <a href="/pertanyaan/create" class="btn btn-info my-2 mx-2 " >Tambah</a>
                        <table class="table table-hover m-b-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    {{-- <th>ID Promo</th> --}}
                                    <th>Judul</th>
                                    <th>Isi Pertanyaan</th>
                                    <th data-breakpoints="sm xs md">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pertanyaan as $key => $p)
                                  <tr>
                                    <td> {{$key  +1 }}</td>
                                    <td>{{$p -> judul}}</td>
                                    <td>{{$p -> isi}}</td>
                                    <td style="display: flex;"><a href="/pertanyaan/{{$p->id}}" class="btn btn-primary ml-1">Detail</a>
                                        <a href="/pertanyaan/{{$p->id}}/edit" class="btn btn-info ml-1">Edit</a>
                                        <form action="/pertanyaan/{{$p->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" name="delete" value="delete" class="btn btn-danger ml-1">
                                            
                                        </form>
                                    </td>
                                  </tr>
                                  @empty
                                  <tr>No data</tr>
                                @endforelse 

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection