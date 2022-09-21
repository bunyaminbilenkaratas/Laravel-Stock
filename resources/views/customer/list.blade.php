@extends('layout.master')
@section('title', 'Stok Takip')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <h5 class="card-header text-white  bg-malibu-beach ">Müşteriler</h5>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ad</th>
                            <th>Soyad</th>
                            <th>Telefon</th>
                            <th>Detaylar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr role="row" class="odd">
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->surname}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>
                                <div class="d-flex">
                                    <form action="{{route('customer.show', ['id'=>$customer->id])}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-sm btn-icon-split p-1">
                                            Görüntüle
                                        </button>
                                    </form>
                                    <form class="mx-1" action="{{route('customer.delete', ['id'=>$customer->id])}}"
                                        method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm btn-icon-split pr-3 pl-3">
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
