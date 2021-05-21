{{-- プラン登録画面 --}}
@extends('layout.app')
@section('content')
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

    <br><br>
    
    <div align="left" class="label">
        <h3>プランを作成する</h3><br>
    </div>
    <div class="main">
        <label for="plan_name" class="form-label">プラン名</label>
        <form  action="" method="POST">
            @csrf
            <div class="mb-3, mr-auto">
                    
                <div align="center">
                    <input type="text" class="form-control" id="plan_name" name="plan_name" placeholder="例）【記念日におすすめ】1泊朝食＋スパークリングワイン（モスカート・ペタロ）"><br>
                </div>
                <label for="plan_name" class="form-label">内容</label>
                <div align="center">
                    <textarea class="form-control" placeholder="詳細内容を入力（説明文・ご案内・注意事項など）" id="comment" name="comment" rows="15" style="border: 1px #DDDDDD solid;"></textarea>
                </div>
                {{-- <p style="color: gray;"><font size="2">※</font></p> --}}
                <div  align="right">
                <button type="submit" class="btn btn-primary w-auto" style="margin-top: 20px">作成</button>
                </div>
            </div>
        </form>
    </div>
@endsection