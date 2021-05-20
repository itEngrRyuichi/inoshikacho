@extends('layout.app')
@section('content')
{{-- サイト管理ユーザーの場合　会員詳細画面 --}}
{{-- 店の管理ユーザー、会員ユーザーの場合　プロフィール --}}
<h1>会員情報</h1>
idは{{$user->id}}
@endsection