@extends('masters.adminmaster')

@section('main')
  <div class="container">
    @include('eproject.stylist.detail')
    <a href="{{route('admin.stylistindex')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
  </div>
@endsection
