@extends('masters.adminmaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Are you sure you want to delete?</h1>
    @include('eproject.stylist.detail')
    <form action="{{route('admin.deletestylist', ['id' =>$stylist->SID])}}" method="post">
      @csrf
      <input type="hidden" name="SID" value="{{$stylist->SID}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('admin.stylistindex')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
    </form>
  </div>
@endsection
