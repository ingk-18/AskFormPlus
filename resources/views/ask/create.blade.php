@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ユーザー登録') }}</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{url('ask/store')}}" >

                        <div class="form-group row text-md-right">
                            <label for="password" class="col-md-4 col-form-label">{{ __('氏名') }}</label>
                            <div class="col-md-4" style="text-align:left">
                                <input class="form-control" type="text" name="your_name">
                            </div>
                        </div>

                        <div class="form-group row text-md-right">
                            <label for="password" class="col-md-4 col-form-label">{{ __('マイナンバー') }}</label>
                            <div class="col-md-4" style="text-align:left">
                                <input class="form-control" type="text" name="my_number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('暗証番号') }}</label>
                            <div class="col-md-4">
                                <input class="form-control" type="password" name="password">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('生年月日') }}</label>
                            <div class="col-md-4">
                                <input class="form-control" type="date" name="birthday">
                            </div>
                        </div>

                        <div class="form-group row text-md-right">
                            <label for="password" class="col-md-4 col-form-label">{{ __('住所') }}</label>
                            <div class="col-md-8" style="text-align:left">
                                <!-- <input type="text" name="address"> -->
                                <input class="form-control" type="text" name="address">
                            </div>
                        </div>

                        <div class="form-group row text-md-right">
                            <label for="password" class="col-md-4 col-form-label">{{ __('性別') }}</label>
                            <div class="col-md-4" style="text-align:left">
                                <input type="radio" name="gender" value="0">男性</input> 
                                <input type="radio" name="gender" value="1">女性</input>
                            </div>
                            
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('登録') }}
                                </button>
                            </div>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
            <br/>
            <br/>
            <div class="col-md-12" style="text-align:left">{{ __('サンプルユーザーをコピーしてご利用ください。マイナンバー : 111111111111　暗証番号 : 1234') }}</div>
            <br/>
            <div class="col-md-12" style="text-align:left">{{ __('CHATWORKルームリンク :  ') }}
            <a href= "https://www.chatwork.com/g/ask_form" target="_blank" >https://www.chatwork.com/g/ask_form</a>
            </div>

        </div>
    </div>
</div>
@endsection
