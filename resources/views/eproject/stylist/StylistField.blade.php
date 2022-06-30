<div class="card-body">
  <div class="card mb-4">
    <div class="card-header">
      <i class="fas fa-table me-1"></i>

    </div>
    <div class="card-body">
      <div class="dataTable-container">
        <table id="datatablesSimple" class="dataTable-table">
          <thead>
          <tr><th><input type="hidden" name="id" value="{{old('id')?? $stylist->SID?? null}}">
              <label for="title" class="font-weight-bold">Stylist Name</label></th>
            <th><input type="text" class="form-control" id="name" name="name" value="{{old('name')?? $stylist->name}}"></th>
          </tr>
          <tr>
            <th><label for="author" class="font-weight-bold">dob</label></th>
            <th><input type="date" class="form-control" id="dob" name="dob" value="{{old('dob')?? $stylist->dob}}"></th>
          </tr>
          <tr>
            <th><label for="pages" class="font-weight-bold">contact</label></th>
            <th><input type="text" class="form-control" id="contact" name="contact"
                       value="{{old('contact')?? $stylist->contact}}"></th>
          </tr>
          <tr>
            <th><label for="pages" class="font-weight-bold">email</label></th>
            <th><input type="email" class="form-control" id="email" name="email"
                       value="{{old('email')?? $stylist->email}}"></th>
          </tr>
          <tr>
            <th><label for="pages" class="font-weight-bold">history</label></th>
            <th><input type="text" class="form-control" id="history" name="history"
                       value="{{old('history')?? $stylist->history}}"></th>
          </tr>
          <tr>
            <th><label for="pages" class="font-weight-bold">urlimg</label></th>
            <th><input type="text" class="form-control" id="urlimg" name="urlimg"
                       value="{{old('urlimg')?? $stylist->urlimg}}"><input type="file" name="image"></th>
          </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>
