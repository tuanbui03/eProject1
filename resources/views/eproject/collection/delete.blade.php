@extends('masters.adminmaster')
@section('main')
  <div class="container">
    <form action="{{route('admin.deletecollection', ['id' => $collection->CollectionID])}}" method="post">
      @csrf
      <dl class="row">
        <div class="col-sm-6">
          <dt class="col-sm-3">ID</dt>
          <dd class="col-sm-9">{{ $collection->CollectionID }}</dd>

          <dt class="col-sm-3">Name</dt>
          <dd class="col-sm-9">{{ $collection->name }}</dd>

          <dt class="col-sm-3">Introduce</dt>
          <dd class="col-sm-9">{{$collection->introduce }}</dd>

          <dt class="col-sm-3">Stylist name</dt>
          <dd class="col-sm-9">{{$collection->SID }}</dd>
        </div>
        <div class="col-sm-6">
          <img src="{{asset($collection->urlimg)}}" width="500" height="600">
        </div>
      </dl>

      <input type="hidden" name="id" value="{{$collection->CollectionID}}">
      <input type="submit" class="btn btn-danger" value="Delete">
      <a type="button" href="{{route('admin.collectionindex')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
    </form>

  </div>
@endsection
