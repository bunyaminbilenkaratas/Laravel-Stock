@extends('layout.master')
@section('title', 'Stok Takip')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <h5 class="card-header text-white  bg-malibu-beach ">Kategoriler</h5>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori Adı:</th>
                            <th>Ürün Sayısı:</th>
                            <th>Detaylar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr role="row" class="odd">
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->count()}}</td>
                            <td>
                                <div class="d-flex">
                                    <form class="mx-1" action="{{route('category.delete', ['id'=>$category->id])}}" method="POST">
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
