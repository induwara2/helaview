@extends('includes.design')

@section('body')
<br>
<div class="row">
    <div class="col-md-12">
        <h3 class="headline margin-top-0 margin-bottom-40">
            <strong class="headline-with-separator">How It Works?</strong>
        </h3>
    </div>
    <div class="col-md-5">
        <a href="{{('hotellogin#')}}" class="icon-box-v3">
            <div class="ibv3-icon">
                <i class="im im-icon-Add-User"></i>
            </div>
            <div class="ibv3-content">
                <h4>Creata an Account</h4>
                <p>Integer dapibus purus sit amet metus scelerisque hendrerit non a urna</p>
            </div>
        </a>
        <a href="#" class="icon-box-v3">
            <div class="ibv3-icon">
                <i class="im im-icon-Add-File"></i>
            </div>
            <div class="ibv3-content">
                <h4>Add Listings</h4>
                <p>Phasellus id nulla id tortor laoreet tempor et non risus class aptent taciti</p>
            </div>
        </a>
        <a href="#" class="icon-box-v3">
            <div class="ibv3-icon">
                <i class="im im-icon-Queen"></i>
            </div>
            <div class="ibv3-content">
                <h4>Get Exposure</h4>
                <p>Vestibulum pretium massa in bibendum nam mollis quam et feugiat consectetur</p>
            </div>
        </a>
    </div>
    <div class="col-md-7">
        <div class="svg-alignment">
            <img src="images/image_placeholder.svg" style="width: 60%;" alt="">
        </div>
    </div>
</div>
<br>

@endsection