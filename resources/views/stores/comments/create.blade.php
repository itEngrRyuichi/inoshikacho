@extends('layout.app')
<style>
.main{
    border: 1px #CCCCCC solid;
    width: 50%;
    margin: 0 auto;
    padding: 10px;
}
.label{
    width: 50%;
    margin: 0 auto;
}
</style>
@section('content')
<br><br>

<div align="left" class="label">
    <h3>コメントを書く</h3><br>
</div>
<div class="main">
    <label for="comment" class="form-label">コメント</label>
    <form  action="" method="POST">
        @csrf
        <div class="mb-3, mr-auto">
            <div align="center">
                <textarea class="form-control" placeholder="コメントを入力" id="comment" name="comment" rows="4" style="background-color: #FAFAFA; border: 1px #DDDDDD solid;"></textarea>
            </div>
            <p style="color: gray;"><font size="2">※氏名・メールアドレスなどの個人情報は記載しないでください。</font></p>
            <div  align="right">
            <button type="submit" class="btn btn-primary w-auto" style="margin-top: 20px">投稿</button>
            </div>
        </div>
    </form>
</div>


@endsection