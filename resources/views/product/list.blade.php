@extends('layout.master')
@section('title', 'Stok Takip')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <h5 class="card-header text-white  bg-slick-carbon">ÜRÜNLER</h5>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Ürün Adı</th>
                            <th>Kategori</th>
                            <th>Ürün Adedi</th>
                            <th>Alış Fiyatı</th>
                            <th>Satış Fiyatı</th>
                            <th>Vergi</th>
                            <th>Detaylar</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($products as $product)
                        <tr role="row" class="odd">
                            <td>{{$product->name}}</td>
                            <td>{{$categories->where('id', $product->category_id)->first()->name}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->buy_price}}</td>
                            <td>{{$product->sell_price}}</td>
                            <td>{{$product->tax_rate}}</td>
                            <td>
                                <div class="d-flex">
                                    <form class="mx-1" action="{{route('customer.show', ['id'=>$product->id])}}" method="POST">
                                        <button type="submit" class="btn btn-primary btn-sm btn-icon-split p-1">
                                            Görüntüle
                                        </button>
                                    </form>
                                    <form class="mx-1" action="{{route('customer.delete', ['id'=>$product->id])}}" method="POST">
                                        <button type="submit" class="btn btn-danger btn-sm btn-icon-split pl-3 pr-3">
                                            Sil
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
