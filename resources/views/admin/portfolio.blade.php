@extends('admin.main')
@section('content')
    <div class="main-panel">
        <div class="text-center">{{ $title }}</div>
        <form action="{{ url($url) }}" method="POST" class="p-5" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{(isset($portfolio)) ? $portfolio[0]['id'] : ""}}">
            <div class="row">
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Happy Clients</label>
                    <input type="text" name="hc" class="form-control" value="{{(isset($portfolio)) ? $portfolio[0]['hc'] : ""}}">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Projects Done</label>
                    <input type="text" name="pd" class="form-control" value="{{(isset($portfolio)) ? $portfolio[0]['pd'] : ""}}">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Win Award</label>
                    <input type="text" name="wa" class="form-control" value="{{(isset($portfolio)) ? $portfolio[0]['wa'] : ""}}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">{{$btn}}</button>
        </form>
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a
                        href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from
                    BootstrapDash.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights
                    reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
