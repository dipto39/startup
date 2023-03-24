@extends('admin.main')
@section('content')
    <div class="main-panel">
        <div class="text-center">{{ $title }}</div>
        <form action="{{ url($url) }}" method="POST" class="p-5" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Title </label>
                    <input type="text" name="title" class="form-control" value="{{(isset($blogdata)) ? $blogdata['title'] : ""}}">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Author </label>
                    <input type="text" name="auth" class="form-control" value="{{(isset($blogdata)) ? $blogdata['auth'] : ""}}">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Image</label>
                    <input type="file" name="img" class="form-control" >
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="">Category</label>
                        <select class="form-select" aria-label="Default select example" name="cata" id="">
                         @foreach ($category as $item)
                             <option value="{{$item['id']}}">{{$item['cname']}}</option>
                         @endforeach
                          
                        </select>
                      </div>
                </div>

                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Details</label>
                    <textarea name="details" class="form-control" id="exampleFormControlTextarea1" rows="3">{{(isset($blogdata)) ? $blogdata['details'] : ""}}</textarea>
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
