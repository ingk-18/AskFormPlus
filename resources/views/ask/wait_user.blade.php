@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('お待ちのお客様') }}</div>
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
                      <th scope="col">ID</th>
                      <th scope="col">マイナンバー</th>
                      <th scope="col">お名前</th>
                      <th scope="col">詳細</th>

                    </tr>
                  </thead>
                  <tbody>
                  @foreach($edit_users as $edit_user)
                  <tr>
                  <th>{{ $edit_user->id }}</th>
                  <th>{{ $edit_user->my_number }}</th>
                  <th>{{ $edit_user->your_name }}</th>
                  <th><a href="{{url('ask/show_detail',['id' => $edit_user->id])}}">対応する</a></th>
                  </tr>
                  @endforeach
                  </tbody>

                　</table>

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
