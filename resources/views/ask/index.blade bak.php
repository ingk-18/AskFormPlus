@extends('layouts.app')

@section('content')
<body background="{{ asset('/image/AdobeStock.jpg') }}" alt="サンプル画像" width="800" height="400">
<div class="container">
    <div class="row justify-content-center">

                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @endif
                    <form method="POST" action="{{url('ask/show')}}" >
                        <div class="form-group row text-md-right">
                            <label for="password" class="col-md-4 col-form-label">{{ __('マイナンバー') }}</label>
                            <div class="col-md-4" style="text-align:left">
                                <input type="text" class="form-control" name="my_number">
                            </div>
                        </div>
                        <div class="form-group row text-md-right">
                            <label for="password" class="col-md-4 col-form-label">{{ __('暗証番号') }}</label>

                            <div class="col-md-4">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ログイン') }}
                                </button>
                            </div>
                        </div>
                        {{ csrf_field() }}
                    </form>
                
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
