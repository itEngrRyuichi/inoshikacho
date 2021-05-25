@extends('layout.app')
@section('content')

<div class="container content show-user-container pb-4">

    <p class="pt-4 text-center title">プロフィール</p>

    <div class="row">
       
    <div class="mb-3 row justify-content-center">
        <img src="{{asset('images/users/shikamaru.jpg')}}" class="rounded-circle" alt="user-image">
        <span class="text-muted user-type text-center">
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
        <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
    </div>

    <div class="mb-3 col-3 offset-3">
        <label for="birthday" class="form-label">生年月日</label>
        <input type="date" name="birthday" id="birthday" class="form-control" value="{{$user->birthday}}">
    </div>

    <div class="mb-3 col-3">
        <label for="phone" class="form-label">電話番号</label>
        <input type="text" name="phone" id="phone" class="form-control" value="{{$user->phone}}">
    </div>

    <div class="mb-3 col-6 offset-3">
        <label for="address" class="form-label">住所</label>
        <input type="text" name="address" id="address" class="form-control" value="{{$user->address}}">
    </div>

    <div class="mb-3 col-6 offset-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
    </div>

        <div class="btn-group col-2 offset-5 py-4" role="group">
            

            <a href="{{route('users.edit', $user->id)}}" type="submit" class="btn btn-outline-success">編集する</a>
            <a href="#"  class="btn btn-outline-danger" id="btn_delete_user" >退会するする</a>
            <form action="{{ route('users.destroy', $user->id) }}" method="post" id="delete-form">
                @csrf 
                @method('delete')
            </form>
            <script type="text/javascript">    
                    const delete_btn = document.getElementById('btn_delete_user');
                    const delete_form = document.getElementById('delete-form');
                    delete_btn.addEventListener('click', (e) => {
                        e.preventDefault();
                        if(window.confirm('本当に削除しますか？')){
                        delete_form.submit();
                    }     
                    });
            </script>
                
        </div>
    </div>
</div>
@endsection
