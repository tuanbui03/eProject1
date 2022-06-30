@extends('masters.adminmaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Create New Stylist</h1>
    @include('partials.ErrorsAll')
    <form action="{{route('admin.storestylist')}}" method="post" enctype="multipart/form-data">
      @csrf
      @include('eproject.stylist.StylistField')
      <button type="submit" class="btn btn-dark">Submit</button>
      <a href="{{route('admin.stylistindex')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
    </form>
  </div>
@endsection
