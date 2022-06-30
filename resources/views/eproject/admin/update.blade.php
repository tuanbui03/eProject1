@extends('masters.adminmaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Admin</h1>
    @include('partials.ErrorsAll')
    <form action="{{route('admin.updateadmin', ['username' => old('username')?? $admin->username])}}" method="post">
      @csrf
      <div class="card-body">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-table me-1"></i>
          </div>
          <div class="card-body">
            <div class="dataTable-container">
              <table id="datatablesSimple" class="dataTable-table">
                <thead>
                <tr>
                  <th><label for="username" class="font-weight-bold">Username</label>
                  <th><input type="text" name="username" value="{{old('username')?? $admin->username}}"></th>
                </tr>
                <tr>
                  <th><label for="title" class="font-weight-bold">Password</label></th>
                  <th><input type="password" class="form-control" id="password" name="password"
                             value="{{old('password')?? $admin->password}}"></th>
                </tr>
                <tr>
                  <th><label for="title" class="font-weight-bold">Name</label></th>
                  <th><input type="text" class="form-control" id="name" name="name"
                             value="{{old('name')?? $admin->name}}">
                </tr>
                <tr>
                  <th><label for="title" class="font-weight-bold">Date of birth</label></th>
                  <th><input type="text" class="form-control" id="dob" name="dob"
                             value="{{old('dob')?? $admin->dob}}">
                </tr>
                <tr>
                  <th><label for="title" class="font-weight-bold">Contact</label></th>
                  <th><input type="text" class="form-control" id="contact" name="contact"
                             value="{{old('contact')?? $admin->contact}}">
                </tr>
                <tr>
                  <th><label for="title" class="font-weight-bold">Email</label></th>
                  <th><input type="text" class="form-control" id="email" name="email"
                             value="{{old('email')?? $admin->email}}">
                </tr>
                </thead>
              </table>
              <button type="submit" class="btn btn-success">Submit</button>
              <a type="button" href="{{route('admin.adminindex')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection
