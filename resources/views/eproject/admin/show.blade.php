@extends('masters.adminmaster')
@section('main')
  <div class="container">
    <dl class="row">
      <dt class="col-sm-3">User name</dt>
      <dd class="col-sm-9">{{ $admin->username }}</dd>

      <dt class="col-sm-3">Name</dt>
      <dd class="col-sm-9">{{ $admin->name }}</dd>

      <dt class="col-sm-3">Date of birth</dt>
      <dd class="col-sm-9">{{ $admin->dob }}</dd>

      <dt class="col-sm-3">Contact</dt>
      <dd class="col-sm-9">{{ $admin->contact }}</dd>

      <dt class="col-sm-3">Email</dt>
      <dd class="col-sm-9">{{ $admin->email }}</dd>

    </dl>

    <a type="button" href="{{route('admin.adminindex')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
  </div>
@endsection
