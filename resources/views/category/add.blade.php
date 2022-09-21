@extends('layout.master')
@section('title', 'Stok Takip')
@section('content')
<div class="col-md-12">
    <div class="main-card mb-3 card">
        <h5 class="card-header text-white bg-slick-carbon">KATEGORİ KAYIT</h5>
        <div class="card-body">
            <form action="{{route('category.save')}}" method="POST" enctype="multipart/form-data" data-parsley-validate="">
                @csrf
                <div class="row">
                    <div class="position-relative form-group col-md-6">
                        <label for="inputCategory" class="">Kategori Adı:</label>
                        <input name="categoryName" id="inputCategory" type="text" class="form-control" required="" minlength="1" maxlength="32">
                    </div>
                </div>
                <button type="submit" name="addcategory" class="btn btn-primary">Ekle</button>
            </form>
        </div>
    </div>
</div>
@stop
