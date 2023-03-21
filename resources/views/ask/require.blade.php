@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ご相談内容を選択してください。') }}</div>
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
               　　 <form method="GET" action="{{url('ask/login')}}">
                            <div class="form-group mb-8 text-md-center" >
                              <div class="col-md-11">
                                <button type="submit" class="btn btn-primary btn-lg  w-50">{{ __('相談する') }}</button>
                                </div>
                                </br>
                                <div class="col-md-11">
                                <button type="submit" class="btn btn-primary btn-lg w-50">{{ __('支払う') }}</button>
                                </div>
                                </br>
                                <div class="col-md-11">
                                <button type="submit" class="btn btn-primary btn-lg w-50">{{ __('口座情報の確認') }}</button>
                                </div>
                                </br>
                                <div class="col-md-11">
                                <button type="submit" class="btn btn-primary btn-lg w-50">{{ __('その他') }}</button>
                                </div>
                                </br>
                                <div class="col-md-11">
                                <button type="button" onclick="history.back()" class="btn btn-primary btn-lg w-50">{{ __('戻る') }}</button>
                                </div>
                                </br>
                              </div>
                            </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
            <br/>
            <br/>
            <div class="col-md-12" style="text-align:left">{{ __('CHATWORKルームリンク :  ') }}
            <a href= "https://www.chatwork.com/g/ask_form" target="_blank" >https://www.chatwork.com/g/ask_form</a>
            </div>
        </div>
    </div>
</div>
@endsection
