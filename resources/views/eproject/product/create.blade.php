@extends('masters.adminmaster')

@section('main')
  <div class="container">
    @include('partials.ErrorsAll')
    <h1 class="display-4">Create New Product</h1>

    <form action="{{route('admin.storeproduct')}}" method="post" enctype="multipart/form-data">
      @csrf
      @include('eproject.product.productFields')
      <button type="submit" class="btn btn-success">Submit</button>
      <a type="button" href="{{route('admin.productindex')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
    </form>
  </div>
@endsection
