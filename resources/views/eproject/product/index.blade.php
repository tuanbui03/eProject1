@extends('masters.adminmaster')

@section('main')
  <div class="card-body">
      @include('partials.allmessage')
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Product Manager
      </div>
      <div class="card-body">
        <div class="dataTable-container">
          <table id="datatablesSimple" class="dataTable-table">
            <thead>
            <tr>
              <th data-sortable="" style="width: 28.9432%;"><a>Product Code</a></th>
              <th data-sortable="" style="width: 15.5337%;">Price(USD)</th>
              <th data-sortable="" style="width: 9.16091%;"><a type="button" class="btn btn-outline-info"
                                                               href="{{route('admin.createproduct')}}">New Product</a></th>
              <th data-sortable="" style="width: 9.16091%;">&nbsp;</th>
              <th data-sortable="" style="width: 9.16091%;">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product as $p)
                @php
                    $price = number_format($p->price);
                @endphp
              <tr>
                <td>{{$p->product_code}}</td>
                <td>{{$price}}</td>
                <td><a type="button" class="btn btn-info btn-sm"
                       href="{{route('admin.showproduct', ['id' => $p->CID])}}"
                  >Show</a> </td>
                <td><a type="button" class="btn btn-success btn-sm"
                       href="{{route('admin.editproduct', ['id' => $p->CID])}}"
                  >Edit</a></td>
                <td><a type="button" class="btn btn-danger btn-sm"
                       href="{{route('admin.confirmproduct', ['id' => $p->CID])}}"
                  >Delete</a></td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
