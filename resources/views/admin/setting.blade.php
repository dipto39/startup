@extends('admin.main')
@section('content')
<div class="main-panel">        
    <form class="p-5" action="{{url('/admin/update-setting')}}"  method="post" enctype="multipart/form-data">
      @csrf
        <div class="form-row">
          <div class="form-group ">
            <label for="inputEmail4">Name *</label>
            <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Enter site name" value="{{isset($setting[0]) ? $setting[0]['name'] : ''}}">
          </div>
        </div>
        <div class="form-group">
          <label for="des">Description</label>
          <textarea class="form-control" name="des" id="des" rows="3" > {{isset($setting[0]) ? $setting[0]['dis'] : ''}}</textarea>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Phone *</label>
                <input type="text" class="form-control" name="phone" id="inputPhone" placeholder="" value="{{isset($setting[0]) ? $setting[0]['phone'] : ''}}">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPhone2">Phone 2</label>
                <input type="text" class="form-control" name="phone2" id="inputAddress2" placeholder="" value="{{isset($setting[0]) ? $setting[0]['phone2'] : ''}}">
              </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Email *</label>
                <input type="email" class="form-control" name="email" id="inputEmail" value="{{isset($setting[0]) ? $setting[0]['email'] : ''}}">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail2">Email 2</label>
                <input type="email" class="form-control" name="email2" id="inputAddress2" value="{{isset($setting[0]) ? $setting[0]['email2'] : ''}}">
              </div>
        </div>

        <div class="form-group">
            <label for="inputPhone2">Address *</label>
            <input type="text" class="form-control" name="address" id="inputAddress2" value="{{isset($setting[0]) ? $setting[0]['address'] : ''}}">
          </div> 
          {{-- <div class="row">
            <div class="form-group col-md-6">
                <label for="slogo">Social icon 1</label>
                <input type="file" class="form-control" name="slogo1" id="slogo" placeholder="" aria-describedby="fileHelpId">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPhone2">Social Url</label>
                <input type="url" class="form-control" name="url1" id="inputAddress2" >
              </div> 
          </div>
          
          <div class="row">
            <div class="form-group col-md-6">
                <label for="slogo">Social icon 2</label>
                <input type="file" class="form-control" name="slogo2" id="slogo" placeholder="" aria-describedby="fileHelpId">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPhone2">Social Url 2</label>
                <input type="url" class="form-control" name="url2" id="inputAddress2" >
              </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
                <label for="slogo">Social icon 3</label>
                <input type="file" class="form-control" name="slogo3" id="slogo" placeholder="" aria-describedby="fileHelpId">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPhone2">Social Url 3</label>
                <input type="url" class="form-control" name="url3" id="inputAddress2" >
              </div>
          </div> --}}
          

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
      </div>
    </footer>
    <!-- partial -->
  </div>
@endsection