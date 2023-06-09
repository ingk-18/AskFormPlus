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
                <h1>Welcome To Cityhall !!</h1>
                </div>
                </div>
                <main>

                <div class="row">
                <div class="middle-wrapper">
                <div class="container">
                <div class="col-md-12 offset-6">
                    <h1>窓口へお越しのお客様、</h1>
                    </br>
                    <h1>マイナンバーをご入力頂くと</h1>
                    </br>
                    <h1>担当者が参ります。</h1>
                    </div>
                    </div>
                    </div>
                    
                    
                    <div class="col-sm-3 col-xs-3  offset-3">
                    <div class="card text-center">
                    <div class="card-header">{{ __('受付') }}</div>
                    <form method="GET" action="{{url('ask/require')}}">
                            <div class="form-group row text-md-right">
                            <div class="col-md-10 offset-1">
                            <button type="submit" class="btn btn-primary col-md-12">{{ __('受付する') }}</button>
                            </div>
                            </div>
                        {{ csrf_field() }}
                    </form>
                    </div>
                    </div>
                    </div>
            </main>
            </div>
            </div>
            </div>
            <div class="bottom-container">
            <p>※コピーしてご利用ください。ユーザー　マイナンバー : 111111111111　暗証番号 : 1234</p>
            <p>管理者　ID : admin　パスワード : 1234</p>
            <p>CHATWORK ROOM : <a href= "https://www.chatwork.com/g/ask_form" target="_blank" >https://www.chatwork.com/g/ask_form</a></p>
            </div>

        </div>
    </div>
</div>
@endsection
