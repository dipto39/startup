@extends('admin.main')
@section('content')
<div class="main-panel">   
  <div class="table-responsive">
    <div class="addbutton">
      <a name="" id="" class="btn btn-primary" href="{{route('team.add')}}" role="button">Add New</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Designation</th>
          <th scope="col">facebok</th>
          <th scope="col">insta</th>
          <th scope="col">twitter</th>
          <th scope="col">linkedin</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach ($team as $item)
        <tr>
          <th>{{$item['id']}}</th>
          <td>{{$item['name']}}</td>
          <td>{{$item['desi']}}</td>
          <td>{{$item['fb']}}</td>
          <td>{{$item['in']}}</td>
          <td>{{$item['tw']}}</td>
          <td>{{$item['li']}}</td>
          <td><a href="{{url('admin/getupdate/'.$item['id'])}}" class="btn btn-primary">edit</a> <a href="{{url('admin/teamdelete/'.$item['id'])}}" class="btn btn-danger">Delete</a></td>
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