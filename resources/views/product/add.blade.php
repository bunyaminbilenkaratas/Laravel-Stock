@extends('layout.master')
@section('title', 'Stok Takip')
@section('content')
<div class="col-md-12">
    <div class="main-card mb-3 card">
        <h5 class="card-header text-white bg-slick-carbon">ÜRÜN KAYIT</h5>
        <div class="card-body">
            <form action="{{route('product.save')}}" method="POST" enctype="multipart/form-data" data-parsley-validate="">
                <div class="row">
                    <div class="position-relative form-group col-md-6">
                        <label for="inputProductName" class="">Ürün Adı:</label>
                        <input name="productName" id="inputProductName" type="text" class="form-control" required="" minlength="1" maxlength="32">
                    </div>
                    <div class="position-relative form-group col-md-6">
                        <label for="cars" class="">Kategori:</label>
                        <select name="categorySelect" class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" required="">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="position-relative form-group col-md-3">
                        <label for="inputQuantity" class="">Adet:</label>
                        <input name="quantity" id="inputQuantity" type="number" class="form-control" required="" min="0" max="1000000000">
                    </div>
                    <div class="position-relative form-group col-md-3">
                        <label for="inputBuyPrice" class="">Alış Fiyatı:</label>
                        <input name="buyPrice" id="inputBuyPrice" type="number" class="form-control" required="" min="0" max="1000000000">
                    </div>
                    <div class="position-relative form-group col-md-3">
                        <label for="inputSellPrice" class="">Satış Fiyatı:</label>
                        <input name="sellPrice" id="inputSellPrice" type="number" class="form-control" required="" min="0" max="1000000000">
                    </div>
                    <div class="position-relative form-group col-md-3">
                        <label for="inputTaxRate" class="">Vergi Oranı</label>
                        <input name="taxRate" id="inputTaxRate" type="number" class="form-control" required="" min="0" max="100">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ekle</button>
            </form>
        </div>
    </div>
</div>
@stop
