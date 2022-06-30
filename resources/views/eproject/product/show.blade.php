@extends('masters.adminmaster')
@section('main')
  <div class="container">
    @include('eproject.product.productDetails')
    <a type="button" href="{{route('admin.productindex')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
  </div>
@endsection
