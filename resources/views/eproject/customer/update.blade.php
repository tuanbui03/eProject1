@extends('masters.adminmaster')
{{--daxong--}}
@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Customer</h1>
    @include('partials.ErrorsAll')

    <form action="{{route('admin.updatecustomer', ['id' => old('id')?? $customer->CusID])}}" method="post">
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
                <tr><th><input type="hidden" name="id" value="{{old('id')?? $customer->CusID}}">
                    <label for="name" class="font-weight-bold">Customer Name</label>
                  <th><input type="text" class="form-control" id="name" name="name"
                             value="{{old('name')?? $customer->name}}"></th>
                </tr>
                <tr>
                  <th><label for="dob" class="font-weight-bold">dob</label></th>
                  <th><input type="date" class="form-control" id="dob" name="dob"
                             value="{{old('dob')?? $customer->dob}}"></th>
                </tr>
                <tr>
                  <th><label for="contact" class="font-weight-bold">contact</label></th>
                  <th> <input type="text" class="form-control" id="contact" name="contact"
                              value="{{old('contact')?? $customer->contact}}" ></th>
                </tr>
                <tr>
                  <th><label for="email" class="font-weight-bold">email</label></th>
                  <th><input type="email" class="form-control" id="email" name="email"
                             value="{{old('email')?? $customer->email}}" ></th>
                </tr>
                <tr>
                  <th><label for="address" class="font-weight-bold">address</label></th>
                  <th><input type="text" class="form-control" id="address" name="address"
                             value="{{old('address')?? $customer->address}}" ></th>
                </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </form>
    <button type="submit" class="btn btn-dark">Submit</button>
    <a type="button" href="{{route('admin.customerindex')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
  </div>
@endsection
