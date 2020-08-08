@extends('master')
@section('content')
			<div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card product_item_list">
                    <div class="body table-responsive">
                        
                        <button type="button" class="btn btn-info waves-effect m-r-20" >Tambah Pertanyaan</button>
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
                                <tr>
                                    <?php $no=0; ?>
                                    @foreach ($pertanyaan as $p)
                                    @php
                                    $no++;
                                    @endphp
                                    <tr>
                                        <th scope="row">{{$no}}</th>
                                        {{-- <td>{{$p->id}}</td> --}}
                                        <td>{{$p ->judul}}</td>
                                        <td>{{$p ->isi}}</td>
                                        {{-- <td>{{$p ->nominal_promo}}</td> --}}
                                        <td>

                                        
                                    </tr>
                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection