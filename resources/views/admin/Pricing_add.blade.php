@extends('admin.main')
@section('content')
    <div class="main-panel">
        <div class="text-center">{{ $title }}</div>
        <form action="{{ url($url) }}" method="POST" class="p-5" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ isset($pricingData) ? $pricingData['id'] : '' }}">
            <div class="row">
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Prising Name </label>
                    <input type="text" name="name" class="form-control"
                        value="{{ isset($pricingData) ? $pricingData['pname'] : '' }}">
                    @if ($errors->first('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label"> Prising Title </label>
                    <input type="text" name="ptitle" class="form-control"
                        value="{{ isset($pricingData) ? $pricingData['title'] : '' }}">
                    @if ($errors->first('ptitle'))
                        <span class="text-danger">{{ $errors->first('ptitle') }}</span>
                    @endif
                </div>
                <div class="mb-3 ">
                    <label for="exampleInputName1" class="form-label">Cost</label>
                    <input type="number" name="cost" class="form-control"
                        value="{{ isset($pricingData) ? $pricingData['amount'] : '' }}">
                    @if ($errors->first('cost'))
                        <span class="text-danger">{{ $errors->first('cost') }}</span>
                    @endif
                </div>
                <div class="">
                    <label>HTML5 & CSS3</label>
                    <input type="checkbox" name="html">
                </div>
                <div class="">
                    <label>Bootstrap v5</label>
                    <input type="checkbox" name="boot">
                </div>
                <div class="">
                    <label>Responsive Layout</label>
                    <input type="checkbox" name="res">
                </div>
                <div class="">
                    <label>Cross-browser Support</label>
                    <input type="checkbox" name="cross">
                </div>

            </div>
            <button type="submit" class="btn btn-primary">{{ $btn }}</button>
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
