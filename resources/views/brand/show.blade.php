@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-md-8">
            <div class="card">
                <div class="card-header">Data Brand
                    <a href="{{route('brand.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Nama Brand</label>
                        <b>{{$brand->nama_brand}}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
