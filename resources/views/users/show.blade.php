@extends('layout.app')
@section('content')

<div class="container content show-user-container pb-4">

    @if ($page == 'profile')
        <p class="pt-4 text-center title">プロフィール</p>
    @endif
    @if ($page == 'show')
        <p class="pt-4 text-center title">会員情報</p>
    @endif

    <div class="row">

    <div class="mb-3 row justify-content-center">
        <img src="{{ asset('storage/'.$image->url) }}" class="rounded-circle" alt="user-image">
        <span class="text-muted user-type text-center type">
            <td>
                @if ($user->type == 1)
                サイト管理
                @endif
                @if ($user->type == 2)
                店舗管理
                @endif
                @if ($user->type == 3)
                会員
                @endif
            </td>
        </span>
    </div>
    <div class="mb-3 col-6 offset-3 row">
        <label for="name" class="form-label">名前</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}" readonly>
    </div>

    <div class="mb-3 col-3 offset-3">
        <label for="birthday" class="form-label">生年月日</label>
        <input type="date" name="birthday" id="birthday" class="form-control" value="{{$user->birthday}}" readonly>
    </div>

    <div class="mb-3 col-3">
        <label for="phone" class="form-label">電話番号</label>
        <input type="text" name="phone" id="phone" class="form-control" value="{{$user->phone}}" readonly>
    </div>

    <div class="mb-3 col-6 offset-3">
        <label for="address" class="form-label">住所</label>
        <input type="text" name="address" id="address" class="form-control" value="{{$user->address}}" readonly>
    </div>

    <div class="mb-3 col-6 offset-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" readonly>
    </div>

        <div class="btn-group col-2 offset-5 py-4" role="group">
            @if ($page == 'profile')
                <a href="{{route('profile.edit', $user->id)}}" type="submit" class="btn btn-outline-success">編集する</a>
                <a href="#"  class="btn btn-outline-danger" id="btn_delete_user" >退会する</a>
            @endif
            @if ($page == 'show')
            <a href="{{route('users.edit', $user->id)}}" type="submit" class="btn btn-outline-success">編集する</a>
                <a href="#"  class="btn btn-outline-danger" id="btn_delete_user" >退会させる</a>
            @endif
            <form action="{{ route('users.destroy', $user->id) }}" method="post" id="delete-form">
                @csrf
                @method('delete')
            </form>
            @if ($page == 'profile')
                <script type="text/javascript">

                        const delete_btn = document.getElementById('btn_delete_user');
                        const delete_form = document.getElementById('delete-form');
                        delete_btn.addEventListener('click', (e) => {
                            e.preventDefault();
                            if(window.confirm('本当に退会しますか？')){
                            delete_form.submit();
                        }
                        });
                </script>
            @endif
            @if ($page == 'show')
                <script type="text/javascript">

                    const delete_btn = document.getElementById('btn_delete_user');
                    const delete_form = document.getElementById('delete-form');
                    delete_btn.addEventListener('click', (e) => {
                        e.preventDefault();
                        if(window.confirm('本当にユーザ削除しますか？')){
                        delete_form.submit();
                    }
                    });
                </script>
            @endif

        </div>
    </div>
</div>
@endsection
