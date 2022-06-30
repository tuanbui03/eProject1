  @extends('masters.adminmaster')
  
  @section('main')
    <div class="container">
      <dl class="row">
        <dt class="col-sm-3">CusID</dt>
        <dd class="col-sm-9">{{$customer->CusID }}</dd>
  
        <dt class="col-sm-3">Customer name</dt>
        <dd class="col-sm-9">{{$customer->name }}</dd>
  
        <dt class="col-sm-3">dob</dt>
        <dd class="col-sm-9">{{$customer->dob }}</dd>
  
        <dt class="col-sm-3">contact</dt>
        <dd class="col-sm-9">{{$customer->contact }}</dd>
  
        <dt class="col-sm-3">email</dt>
        <dd class="col-sm-9">{{$customer->email }}</dd>
  
        <dt class="col-sm-3">address</dt>
        <dd class="col-sm-9">{{$customer->address }}</dd>
  
      </dl>
  
      <a type="button" href="{{route('admin.customerindex')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
    </div>
  @endsection
