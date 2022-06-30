@extends('masters.adminmaster')
@section('main')

        <div class="container">
    @include('partials.allmessage')
    <section class="page-section" id="index">
      <div class="card-body">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Admin Manager
          </div>
          <div class="card-body" >
            <div class="dataTable-container">
              <table id="datatablesSimple" class="dataTable-table">
                <thead>
                <tr>
                  <th data-sortable="" style="width: 19.6495%;"><a>Username</a></th>
                  <th data-sortable="" style="width: 28.9432%;"><a>Name</a></th>
                  <th data-sortable="" style="width: 15.5337%;">&nbsp;</th>
                  <th data-sortable="" style="width: 9.16091%;">&nbsp;</th>
                </tr>
                </thead>
          <tbody>
          @foreach($admin as $a)
            <tr>
              <td>{{$a->username}}</td>
              <td>{{$a->name}}</td>
              <td><a type="button" class="btn btn-primary btn-sm"
                     href="{{route('admin.showadmin', ['username' => $a->username])}}">
                  Show</a>
              </td>
              <td><a type="button" class="btn btn-success btn-sm"
                     href="{{route('admin.editadmin', ['username' => $a->username])}}">
                  Edit
                </a></td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
          </div>
        </div>
      </div>
    </section>
    </div>
  </div>


@endsection
