{{-- プラン編集画面 --}}
@extends('layout.app')
@section('content')
<br>
<form action="">
    @csrf
    <div class="mb-3">
      <label for="plan_name" class="form-label">プラン名</label>
      <input type="text" class="form-control" id="plan_name" name="plan_name" >
    </div>
    <div class="mb-3">
        <label for="plan_description" class="form-label">説明</label>
        <textarea class="form-control" id="plan_description" name="plan_description" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">登録する</button>
</form>
@endsection