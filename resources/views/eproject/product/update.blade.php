@extends('masters.adminmaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Product</h1>
    @include('partials.ErrorsAll')

    <form action="{{route('admin.updateproduct', ['id' => old('id')?? $product->CID])}}" method="post" enctype="multipart/form-data">
      @csrf
      @include('eproject.product.productFields')

      <button type="submit" class="btn btn-success">Submit</button>
      <a href="{{route('admin.productindex')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
    </form>
  </div>
@endsection
