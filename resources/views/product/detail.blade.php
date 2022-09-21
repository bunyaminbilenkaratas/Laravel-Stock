@extends('layout.master')
@section('title', 'Stok Takip')
@section('content')
<div class="col-md-12">
    <div class="main-card mb-3 card">
        <h5 class="card-header text-white bg-slick-carbon">GÖRÜNTÜLE</h5>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="position-relative form-group col-md-3">
                        <label for="productCode" class="">Ürün Kodu</label>
                        <input disabled="" id="productCode" name="productCode" value="{{$product->id}}" maxlength="11" type="text" class="form-control" required="">
                    </div>
                    <div class="position-relative form-group col-md-6">
                        <label for="productName" class="">Ürün Adı</label>
                        <input disabled="" id="productName" name="productName" value="{{$product->name}}" type="text" class="form-control" required="">
                    </div>
                    <div class="position-relative form-group col-md-3">
                        <label for="productCategory" class="">Kategori</label>
                        <input disabled="" id="productCategory" name="productCategory" value="{{$categories->where('id', $product->category_id)->first()->name}}" type="number" class="form-control" required="">
                    </div>
                </div>

                <div class="row">
                    <div class="position-relative form-group col-md-3">
                        <label for="productBuyPrice" class="">Alış Fiyatı</label>
                        <input disabled="" id="productBuyPrice" name="productBuyPrice" value="{{$product->buy_price}}" type="number" class="form-control" required="">
                    </div>
                    <div class="position-relative form-group col-md-3">
                        <label for="productSellPrice" class="">Satış Fiyatı</label>
                        <input disabled="" id="productSellPrice" name="productSellPrice" value="{{$product->sell_price}}" type="number" class="form-control" required="">
                    </div>
                    <div class="position-relative form-group col-md-3">
                        <label for="productTaxRate" class="">Vergi</label>
                        <input disabled="" id="productTaxRate" name="productTaxRate" value="{{$product->tax_rate}}" type="number" class="form-control" required="">
                    </div>
                    <div class="position-relative form-group col-md-3">
                        <label for="productQuantity" class="">Ürün Miktarı</label>
                        <input disabled="" id="productQuantity" name="productQuantity" value="{{$product->quantity}}" type="number" class="form-control" required="">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
