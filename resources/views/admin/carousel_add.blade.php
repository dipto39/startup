@extends('admin.main')
@section('content')
    <div class="main-panel">
        <div class="text-center">{{ $title }}</div>
        <form action="{{ url($url) }}" method="POST" class="p-5" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{(isset($carouselData)) ? $carouselData['id'] : ""}}">
            <div class="row">
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Main Heading</label>
                    <input type="text" name="mh" class="form-control" value="{{(isset($carouselData)) ? $carouselData['h1'] : ""}}">
                    @if ($errors->first('mh'))
                    <span class="text-danger">{{ $errors->first('mh') }}</span>
                @endif
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label"> Sub Heading </label>
                    <input type="text" name="sh" class="form-control" value="{{(isset($carouselData)) ? $carouselData['h2'] : ""}}">
                    @if ($errors->first('sh'))
                    <span class="text-danger">{{ $errors->first('sh') }}</span>
                @endif
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Background Image</label>
                    <input type="file" name="img" class="form-control" >
                    @if ($errors->first('img'))
                    <span class="text-danger">{{ $errors->first('img') }}</span>
                @endif
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
