@extends('layout.app')
@section('content')

<form  action="" method="POST">
    @csrf
    <div class="mb-3">
        <br>
        <label for="comment" class="form-label">コメント</label>
        <textarea class="form-control" id="comment" name="comment" rows="10"></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">コメントする</button>
    </div>
</form>
{{-- <div class="mb-3"> --}}
<a href="/">戻る</a>
{{-- </div> --}}
@endsection