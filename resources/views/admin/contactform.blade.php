@extends('admin.main')
@section('content')
    <div class="main-panel">
        <div class="text-center">{{ $title }}</div>
        <form action="{{ url($url) }}" method="POST" class="p-5" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{(isset($contactdata)) ? $contactdata[0]['id'] : ""}}">
            <div class="row">
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Location </label>
                    <input type="text" name="location" class="form-control" value="{{(isset($contactdata)) ? $contactdata[0]['location'] : ""}}">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Phone </label>
                    <input type="text" name="phone" class="form-control" value="{{(isset($contactdata)) ? $contactdata[0]['phone'] : ""}}">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Mail </label>
                    <input type="text" name="email" class="form-control" value="{{(isset($contactdata)) ? $contactdata[0]['email'] : ""}}">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Facebook</label>
                    <input type="url" name="fb" class="form-control" value="{{(isset($contactdata)) ? $contactdata[0]['fb'] : ""}}">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Insta</label>
                    <input type="url" name="in" class="form-control" value="{{(isset($contactdata)) ? $contactdata[0]['in'] : ""}}">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Twitter</label>
                    <input type="url" name="tw" class="form-control" value="{{(isset($contactdata)) ? $contactdata[0]['tw'] : ""}}">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Linkedin</label>
                    <input type="url" name="li" class="form-control" value="{{(isset($contactdata)) ? $contactdata[0]['li'] : ""}}">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Youtube</label>
                    <input type="url" name="yo" class="form-control" value="{{(isset($contactdata)) ? $contactdata[0]['yo'] : ""}}">
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
