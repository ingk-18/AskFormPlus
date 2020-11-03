@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header"></div> -->
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
                        <div class="form-group row">
                            <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('担当者が参ります。少々おまちください。') }}</label>
                        </div>
                        <a href="{{action('AskFormController@index')}}"><button type="button" class="btn btn-primary">TOPに戻る</button></a>
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