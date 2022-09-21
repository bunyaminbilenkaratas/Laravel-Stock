@extends('layout.master')
@section('title', 'Stok Takip')
@section('content')
<div class="col-md-12">
    <div class="main-card mb-3 card">
        <h5 class="card-header text-white bg-slick-carbon">Görüntüle</h5>
        <div class="card-body">
            <form>
                <div class="row">

                    <div class="position-relative form-group col-md-2">
                        <label for="customerCode" class="">Müşteri Kodu </label>
                        <input disabled="" name="customerCode" maxlength="10ml" id="customerCode" type="text" class="form-control" required="" value="{{$customer->id}}">
                    </div>

                    <div class="position-relative form-group col-md-5">
                        <label for="customerName" class="">Ad</label>
                        <input disabled="" name="customerName" id="customerName" type="text" value="{{$customer->name}}" class="form-control" required="">
                    </div>
                    <div class="position-relative form-group col-md-5">
                        <label for="customerSurname" class="">Soyad</label>
                        <input disabled="" name="customerSurname" id="customerSurname" type="text" value="{{$customer->surname}}" class="form-control" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="position-relative form-group col-md-6">
                        <label for="customerAddress" class="">Adres</label>
                        <input disabled="" name="customerAddress" id="customerAddress" type="text" class="form-control" value="{{$customer->address}}" required="">
                    </div>
                    <div class="position-relative form-group col-md-6">
                        <label for="customerEmail" class="">E -Posta </label>
                        <input disabled="" name="customerEmail" type="email" id="customerEmail" class="form-control" value="{{$customer->email}}" required="">
                    </div>
                </div>

                <div class="row">
                    <div class="position-relative form-group col-md-6">
                        <label for="customerVatNumber" class="">Vergi No / Tc No</label>
                        <input disabled="" name="customerVatNumber" id="customerVatNumber" maxlength="11" value="{{$customer->identification_number}}" type="number" class="form-control" required="">
                    </div>
                    <div class="position-relative form-group col-md-6">
                        <div class="row">
                            <div class="position-relative form-group col-md-12">
                                <label for="customerPhone" class="">Telefon</label>
                                <input disabled="" name="customerPhone" id="customerPhone" type="number"
                                    class="form-control" value="{{$customer->phone}}" required="">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
