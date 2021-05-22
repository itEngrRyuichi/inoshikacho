@extends('layout.app')
@section('content')

<div class="container content show-user-container pb-4">

    <p class="pt-4 text-center title">会員情報</p>

    <div class="row">
        @include('commons.usercontents')

        <div class="btn-group col-2 offset-5 py-4" role="group">
            <button type="submit" class="btn btn-success">編集する</button>
            <button type="submit" class="btn btn-danger ">退会させる</button>
        </div>
    </div>
</div>
@endsection
