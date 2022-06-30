@extends('masters.adminmaster')
@section('main')
  <div class="container">
    <h1 class="display-4">Create New Collection</h1>
    @include('partials.ErrorsAll')
    <form action="{{route('admin.storecollection')}}" method="post" enctype="multipart/form-data">
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
                <tr><th><input type="hidden" name="id" value="{{old('id')?? $product->CID ?? null}}">
                    <label for="name">Name</label>
                  <th><input class="form-control" name="name" id="name" type="text" value="{{old('name')}}"></th>
                </tr>
                <tr>
                  <th><label for="urlimg">URL Img</label></th>
                  <th><input class="form-control" name="urlimg" id="urlimg" type="text" value="{{old('urlimg')}}"><input type="file" name="image"></th>
                </tr>
                <tr>
                  <th><label for="introduce">Introduce</label></th>
                  <th><input class="form-control" name="introduce" id="introduce" type="text" value="{{old('introduce')}}"></th>
                </tr>

                @php
                  $sid = old('SID') ??  null;
                @endphp
                <tr>

                </tr>
                <tr>
                  <th><label for="stylist" class="font-weight-bold">Stylist</label></th>
                  <th><select name="stylist" class="form-control" id="stylist" required>
                      <option value="0">Please select a stylist :)</option>
                      @foreach($stylist as $s)
                        <option value="{{ $s->SID }}"
                          {{ ($sid != null && $s->SID == $sid) ? 'selected' : '' }}
                        >{{ $s->name }}</option>
                      @endforeach
                    </select></th>
                </tr>
                </thead>
              </table>
              <button type="submit" class="btn btn-success">Submit</button>
              <a type="button" href="{{route('admin.collectionindex')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection
