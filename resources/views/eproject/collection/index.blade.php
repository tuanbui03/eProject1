@extends('masters.adminmaster')
@section('main')
    @include('partials.allmessage')
  <div class="card-body">
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Collection Manager
      </div>
      <div class="card-body">
        <div class="dataTable-container">
          <table id="datatablesSimple" class="dataTable-table">
            <thead>
            <tr>
              <th data-sortable="" style="width: 28.9432%;"><a>Name</a></th>
              <th data-sortable="" style="width: 9.16091%;"><a type="button" class="btn btn-outline-info"
                                                               href="{{route('admin.createcollection')}}">New Collection</a>
              </th>
              <th data-sortable="" style="width: 9.16091%;">&nbsp;</th>
              <th data-sortable="" style="width: 9.16091%;">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($collection as $c)
              <tr>
                <td>{{$c->name}}</td>
                <td><a type="button" class="btn btn-info btn-sm"
                       href="{{route('admin.showcollection', ['id'=> $c->CollectionID])}}"
                  >Show</a> </td>
                <td><a type="button" class="btn btn-success btn-sm"
                       href="{{route('admin.editcollection', ['id'=> $c->CollectionID])}}"
                  >Edit</a> </td>
                <td><a type="button" class="btn btn-danger btn-sm"
                       href="{{route('admin.confirmcollection', ['id'=> $c->CollectionID])}}"
                  >Delete</a> </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
