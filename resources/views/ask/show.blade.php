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
                　<table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">項目</th>
                          <th scope="col">入力内容</th>
                        </tr>
                      </thead>
                      @foreach($users as $user)
                      <tr>
                      <th scope="col">氏名</th>
                      <td>{{ $user->your_name }}</td>
                      </tr>
                     

                      <tr>
                      <th scope="col">マイナンバー</th>
                      <td>{{ $user->my_number }}</td>
                      </tr>

                      <tr>
                      <th scope="col">暗証番号</th>
                      <td>{{ $user->password }}</td>
                      </tr>

                      <tr>
                      <th scope="col">生年月日</th>
                      <td>{{ $user->birthday }}</td>
                      </tr>

                      <tr>
                      <th scope="col">住所</th>
                      <td>{{ $user->address }}</td>
                      </tr>

                      <tr>
                      <th scope="col">性別</th>
                      <td>{{ $user->gender }}</td>
                      </tr>
                      @endforeach
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
