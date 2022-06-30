<dl class="row">
  <div class="col-sm-6">
    <dt class="col-sm-3">SID</dt>
    <dd class="col-sm-9">{{ $stylist->SID }}</dd>

    <dt class="col-sm-3">Stylist name</dt>
    <dd class="col-sm-9">{{ $stylist->name }}</dd>

    <dt class="col-sm-3">dob</dt>
    <dd class="col-sm-9">{{ $stylist->dob }}</dd>

    <dt class="col-sm-3">contact</dt>
    <dd class="col-sm-9">{{$stylist->contact }}</dd>

    <dt class="col-sm-3">email</dt>
    <dd class="col-sm-9">{{$stylist->email }}</dd>

    <dt class="col-sm-3">history</dt>
    <dd class="col-sm-9">{{$stylist->history }}</dd>
  </div>
  <div class="col-sm-6">
    <img src="{{asset($stylist->urlimg)}}" width="400" height="500">
  </div>



</dl>
