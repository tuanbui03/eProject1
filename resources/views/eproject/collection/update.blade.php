@extends('masters.adminmaster')
  @section('main')
    <div class="container">
      <h1 class="display-4">Update An Existing Collection</h1>
      @include('partials.ErrorsAll')
      <form action="{{route('admin.updatecollection',['id'=> old('id')?? $collection->CollectionID])}}" method="post" enctype="multipart/form-data">
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
                  <tr><th><input type="hidden" name="id" value="{{old('id')?? $collection->CollectionID}}">
                      <label for="name">Name Collection</label>
                    <th><input type="text" class="form-control" name="name" id="name"
                               value="{{old('name')?? $collection->name}}"></th>
                  </tr>
                  <tr>
                    <th><label for="Introduce">Introduce</label></th>
                    <th><input type="text" class="form-control" name="introduce" id="introduce"
                               value="{{old('introduce')?? $collection->introduce}}"></th>
                  </tr>
                  <tr>
                    <th><label for="urlimg">Url Img</label></th>
                    <th><input type="text" class="form-control" name="urlimg" id="urlimg"
                               value="{{old('urlimg')?? $collection->urlimg}}"><input type="file" name="image"></th>
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
