@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('お客様の情報') }}</div>
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
                　<table class="table">
                  <thead>
                    <tr>
                      <th scope="col">マイナンバー</th>
                      <th scope="col">お名前</th>
                      <th scope="col">生年月日</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $user)
                  <tr>
                  <th>{{ $user->my_number }}</th>
                  <th>{{ $user->your_name }}</th>
                  <th>{{ $user->birthday }}</th>
                  </tr>
                  @endforeach
                  </tbody>
                　</table>
               　　 <form method="POST" action="{{url('ask/consult')}}">
                            <div class="form-group row mb-8" >
                              <div class="col-md-11" style="text-align:left">
                                <button type="submit" class="btn btn-primary">{{ __('担当者を呼び出す') }}</button>
                                <button type="button" onclick="history.back()" class="btn btn-primary">{{ __('戻る') }}</button>
                              </div>
                            </div>
                        <input type="hidden" name="my_number" value= "{{ $user->my_number }}" >
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
