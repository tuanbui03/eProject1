@extends('masters.adminmaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Stylist</h1>

    @include('partials.ErrorsAll')

    <form action="{{route('admin.updatestylist', ['id' => old('id')?? $stylist->SID])}}" method="post" enctype="multipart/form-data">
      @csrf
      @include('eproject.stylist.StylistField')

      <button type="submit" class="btn btn-dark">Submit</button>
      <a href="{{route('admin.stylistindex')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
    </form>
  </div>
@endsection
