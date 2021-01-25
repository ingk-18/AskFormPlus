@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

                @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @endif
                
                
                <div class="top-wrapper">
                <div class="container">
                <h1>市役所へようこそ！！</h1>
                </div>
                </div>
                <main>
                <div class="middle-wrapper">
                <div class="container">

                    <h1>窓口へお越しのお客様、</h1>
                    </br>
                    <h1>マイナンバーをご入力頂くと担当者が参ります。</h1>
                    
                    <div class="row justify-content-center">
                    <div class="col-md-8">
                    <div class="card">
                    <div class="card-header">
                    <form method="POST" action="{{url('ask/show')}}" >
                        <div class="form-group row text-md-right">
                            <label for="password" class="col-md-4 col-form-label">{{ __('マイナンバー（12桁）') }}</label>
                            <div class="col-md-4" style="text-align:left">
                                <input type="text" class="form-control" name="my_number">
                            </div>
                        </div>
                        <div class="form-group row text-md-right">
                            <label for="password" class="col-md-4 col-form-label">{{ __('暗証番号（４桁）') }}</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control" name="password">
                            </div>
                            </div>
                            <div class="form-group row text-md-right">
                            <button type="submit" class="btn btn-primary col-md-4">
                                    {{ __('ログイン') }}
                            </button>
                            </div>
                        </div>
                        {{ csrf_field() }}
                    </form>
            </main>
            </div>
            </div>
            </div>
            <div class="bottom-container">
            <p>サンプルユーザーをコピーしてご利用ください。マイナンバー : 111111111111　暗証番号 : 1234</p>
            <p>CHATWORKルームリンク : <a href= "https://www.chatwork.com/g/ask_form" target="_blank" >https://www.chatwork.com/g/ask_form</a></p>
            </div>

        </div>
    </div>
</div>
@endsection
