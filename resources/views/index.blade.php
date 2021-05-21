@extends('layout.app')
@section('content')
<div class="home-container">
    <div class="main-container row mx-0">
        <div class="col-5 offset-7 inoshikacho-wrapper">
            <h1><span class="span1">猪鹿蝶</span><span class="span2">.travel</span></h1>
            <div class="row mx-0">
                <div class="col-4 inoshikacho-item">
                    <i class="fas fa-search pb-4 w-100"></i>
                    <label class="w-100" for="">Search<br><span>Hotels</span></label>
                </div>
                <div class="col-4 inoshikacho-item">
                    <i class="fas fa-user pb-4 w-100"></i>
                    <label class="w-100" for="">Register<br><span>Account</span></label>
                </div>
                <div class="col-4 inoshikacho-item">
                    <i class="fas fa-hotel pb-4 w-100"></i>
                    <label class="w-100" for="">Open<br><span>Hotel</span></label>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
