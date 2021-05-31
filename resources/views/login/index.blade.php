@extends('layout.app')
@section('content')

<div class="container content login-container">
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="row">
            <p class="py-4 text-center title">ログイン</p>
            <div class="col-4 offset-4">
                <div class="my-3">
                    <label class="form-label" id="name">名前</label>
                    <input type="text" class="form-control col-8" aria-describedby="name" value="{{ old('name') }}" name="name" required>
                </div>
                <div class="my-3">
                    <label class="form-label" id="password">パスワード</label>
                    <input type="password" class="form-control col-8" aria-describedby="password" value="" name="password" required>
                </div>
                <input type="hidden" name="url" value="{{$url}}">
            </div>
            <div class="col-2 offset-5 my-4">
                <button class="btn btn-outline-primary w-100" type="submit">ログイン</button>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        ScrollReveal().reveal('.login-container', {
            duration: 1600,
            origin: 'right',
            distance: '150px',
        });
    </script>
</div>
@endsection
