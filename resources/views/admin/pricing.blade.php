@extends('admin.main')
@section('content')
<div class="main-panel">   
  <div class="table-responsive">
    <div class="addbutton">
      <a name="" id="" class="btn btn-primary" href="{{route('pricing.add')}}" role="button">Add New</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Plan Name</th>
          <th scope="col">Title</th>
          <th scope="col">Price</th>
          <th scope="col">Html5 and css3</th>
          <th scope="col">Bootstrap</th>
          <th scope="col">Responsive Design</th>
          <th scope="col">cross Support</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach ($pricing as $item)
        <tr>
          <th>{{$item['id']}}</th>
          <td>{{$item['pname']}}</td>
          <td>{{$item['title']}}</td>
          <td>{{$item['amount']}}</td>
          <td>{{$item['html']}}</td>
          <td>{{$item['boot']}}</td>
          <td>{{$item['res']}}</td>
          <td>{{$item['cross']}}</td>
          <td><a href="{{route('pricing.edit',$item["id"])}}" class="btn btn-primary">edit</a> <a href="{{url('admin/pricing-delete/'.$item['id'])}}" class="btn btn-danger">Delete</a></td>
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