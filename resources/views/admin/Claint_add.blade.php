@extends('admin.main')
@section('content')
    <div class="main-panel">
        <div class="text-center">{{ $title }}</div>
        <form action="{{ url($url) }}" method="POST" class="p-5" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{(isset($claintData)) ? $claintData['id'] : ""}}">
            <div class="row">
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Name </label>
                    <input type="text" name="name" class="form-control" value="{{(isset($claintData)) ? $claintData['name'] : ""}}">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Profession </label>
                    <input type="text" name="Profession" class="form-control" value="{{(isset($claintData)) ? $claintData['pro'] : ""}}">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Image </label>
                    <input type="file" name="img" class="form-control">
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Quote</label>
                    <textarea name="quote" class="form-control" id="exampleFormControlTextarea1" rows="3">{{(isset($claintData)) ? $claintData['qu'] : ""}}</textarea>
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