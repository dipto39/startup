@extends('admin.main')
@section('content')
<div class="main-panel">   
  <div class="table-responsive">
    <div class="addbutton">
      <a name="" id="" class="btn btn-primary" href="{{route('carousel.add')}}" role="button">Add New</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Main Heading</th>
          <th scope="col">Sub Heading</th>
          <th scope="col">Img</th>

          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach ($carousel as $item)
        <tr>
          <th>{{$item['id']}}</th>
          <td>{{$item['h1']}}</td>
          <td>{{$item['h2']}}</td>
          <td>{{$item['img']}}</td>
          <td><a href="{{route('carousel.edit',$item["id"])}}" class="btn btn-primary">edit</a> <a href="{{url('admin/carousel-delete/'.$item['id'])}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>     

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