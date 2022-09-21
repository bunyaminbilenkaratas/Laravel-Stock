@extends('layout.master')
@section('title', 'Stok Takip')
@section('content')
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <h5 class="card-header text-white bg-slick-carbon">MÜŞTERİ KAYIT</h5>
            <div class="card-body">
                <form action="{{route('customer.save')}}" method="POST" enctype="multipart/form-data" data-parsley-validate="">
                    @csrf
                    <div class="row">
                        <div class="position-relative form-group col-md-6">
                            <label for="inputName" class="">Ad:</label>
                            <input name="name" id="inputName" type="text" class="form-control" required="" minlength="1" maxlength="32">
                        </div>


                        <div class="position-relative form-group col-md-6">
                            <label for="inputSurname" class="">Soyad:</label>
                            <input name="surname" id="inputSurname" type="text" class="form-control" required="" minlength="1" maxlength="32">
                        </div>
                    </div>
                    <div class="row">
                        <div class="position-relative form-group col-md-6">
                            <label for="inputAddress" class="">Adres:</label>
                            <input name="address" id="inputAddress" type="text" class="form-control" required="" minlength="1" maxlength="160">
                        </div>
                        <div class="position-relative form-group col-md-6">
                            <label for="inputEmail" class="">E -Posta:</label>
                            <input name="email" type="email" id="inputEmail" class="form-control" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="position-relative form-group col-md-6">
                            <label for="inputIdentificationNumber" class="">Vergi No / Tc No</label>
                            <input name="identificationNumber" id="inputIdentificationNumber" type="number" class="form-control" required="" minlength="11" maxlength="11">
                        </div>
                        <div class="position-relative form-group col-md-6">
                            <div class="row">
                                <div class="position-relative form-group col-md-12">
                                    <label for="inputPhone" class="">Cep Telefon</label>
                                    <input name="phone" id="inputPhone" type="number" class="form-control" required="" placeholder="05555555555" minlength="11" maxlength="11">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="addcustomer" class="btn btn-primary">Ekle</button>
                </form>
            </div>
        </div>
    </div>
@stop
