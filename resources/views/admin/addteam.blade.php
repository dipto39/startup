@extends('admin.main')
@section('content')
    <div class="main-panel">
        <div class="text-center">{{ $title }}</div>
        <form action="{{ url($url) }}" method="POST" class="p-5" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{(isset($teamdata)) ? $teamdata['name'] : ""}}">
                    @if ($errors->first('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Designation</label>
                    <input type="text" name="desi" class="form-control" value="{{(isset($teamdata)) ? $teamdata['desi'] : ""}}">
                    @if ($errors->first('desi'))
                    <span class="text-danger">{{ $errors->first('desi') }}</span>
                @endif
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Images</label>
                    <input type="file" name="img" class="form-control">
                    @if ($errors->first('img'))
                    <span class="text-danger">{{ $errors->first('img') }}</span>
                @endif
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Facebook</label>
                    <input type="url" name="fb" class="form-control" value="{{(isset($teamdata)) ? $teamdata['fb'] : ""}}">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Insta</label>
                    <input type="url" name="in" class="form-control" value="{{(isset($teamdata)) ? $teamdata['in'] : ""}}">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Twitter</label>
                    <input type="url" name="tw" class="form-control" value="{{(isset($teamdata)) ? $teamdata['tw'] : ""}}">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Linkedin</label>
                    <input type="url" name="li" class="form-control" value="{{(isset($teamdata)) ? $teamdata['li'] : ""}}">
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
