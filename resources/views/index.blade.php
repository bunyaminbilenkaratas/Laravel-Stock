@extends('layout.master')
@section('title', 'Stok Takip')
@section('content')
                    <div class="row">
                        <div class="col-lg-3 col-xl-3">
                            <div class="row">
                                <div class="col-md-12 col-xl-12" style="padding-bottom: 12px;">
                                    <a style="text-decoration:none;" href="{{route('customer.create')}}">
                                        <div class="card mb-1 widget-content bg-grow-early">
                                            <div class="widget-content-wrapper text-white">
                                                <div class="widget-numbers text-white" style=" font-size: 18px; ">
                                                    Müşteri Ekle</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-12 col-xl-12" style="padding-bottom: 12px;">
                                    <a style="text-decoration:none;" href="{{route('product.create')}}">
                                        <div class="card mb-1 widget-content bg-warning ">
                                            <div class="widget-content-wrapper text-white">
                                                <div class="widget-numbers text-white" style=" font-size: 18px; ">Ürün
                                                    Ekle</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-12 col-xl-12" style="padding-bottom: 12px;">
                                    <a style="text-decoration:none;" href="{{route('category.create')}}">
                                        <div class="card mb-1 widget-content bg-focus">
                                            <div class="widget-content-wrapper text-white">
                                                <div class="widget-numbers text-white" style=" font-size: 18px; ">
                                                    Kategori Ekle</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-xl-3">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-subheading">Toplam</div>
                                        <div class="widget-heading">Müşteri Hesabı</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-success">
                                        <span>{{$customers->count()}}</span></div>
                                    </div>
                                </div>
                            </div>


                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-subheading">Toplam</div>
                                        <div class="widget-heading">Ürün</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-warning">
                                        <span>{{$products->count()}}</span></div>
                                    </div>
                                </div>
                            </div>


                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-subheading">Toplam</div>
                                        <div class="widget-heading">Kategori</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers">
                                            <span>{{$categories->count()}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body ">
                                            <h5 class="card-title badge badge-success mr-1 ml-0 text-white">MÜŞTERİ</h5>

                                            <div class="row space-5">
                                                <div class="col-md-4"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px none; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe>

                                                </div> <!-- /.col-* -->
                                                <div class="col-md-12">
                                                    <div class="">
                                                        <small class="text-muted">Toplam</small>
                                                        <span><b> {{$customers->count()}} </b>
                                                    </span></div>
                                                    <div class="h-20"></div>
                                                </div> <!-- /.col-md-6 -->
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <small class="text-muted">Bugün Toplam</small>
                                                        <br>
                                                        <span class="ff-2 fs-14 bold"><b> <span>{{$customers->where('created_at', date('Y-m-d'))->count()}}</span></b></span>
                                                    </div>
                                                </div> <!-- /.col-md-6 -->
                                            </div> <!-- /.row -->
                                        </div> <!-- /.panel -->
                                    </div> <!-- /.panel -->
                                </div>
                                <div class="col-lg-12">

                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title badge badge-warning  mr-1 ml-0 text-white">ÜRÜN</h5>
                                            <div class="row">

                                                <div class="col-md-12"> <small class="text-muted">Toplam</small>
                                                    <span><b>  </b> </span></div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <small class="text-muted">Toplam değeri</small><br>
                                                    <span class="ff-2 fs-14 bold"> <b>{{$customers->sum('price')}} TL</b></span> </div>
                                                <div class="col-md-6 text-muted"><small class="text-muted">Ortalama
                                                        değeri</small><br>
                                                    <span class="ff-2 fs-14 bold"> <b>{{0+$customers->avg('price')}} TL</b></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Son 5 Müşteri
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Ad</th>
                                                <th>Soyad</th>
                                                <th>Telefon</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @php
                                        $lastFiveCustomers = $customers->sortByDesc('updated_at')->take(5);
                                        @endphp

                                        @foreach ($lastFiveCustomers as $customer)
                                        <tr role="row" class="odd">
                                                <td>{{$customer->id}}</td>
                                                <td>{{$customer->name}}</td>
                                                <td>{{$customer->surname}}</td>
                                                <td>{{$customer->phone}}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Son 5 Ürün
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Ürün Adı</th>
                                                <th>Kategori</th>
                                                <th>Satış Fiyatı</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @php
                                            $lastFiveProducts = $products->sortByDesc('updated_at')->take(5);
                                            @endphp

                                            @foreach ($lastFiveProducts as $product)
                                            <tr role="row" class="odd">
                                                <td>{{$product->id}}</td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->category}}</td>
                                                <td>{{$product->price}}</td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@stop