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
                      <tr>
                      <th scope="col">氏名</th>
                      <td>{{ $users['your_name']}}</td>
                      </tr>

                      <tr>
                      <th scope="col">マイナンバー</th>
                      <td>{{ $users['my_number']}}</td>
                      </tr>

                      <tr>
                      <th scope="col">暗証番号</th>
                      <td>{{ $users['password']}}</td>
                      </tr>

                      <tr>
                      <th scope="col">生年月日</th>
                      <td>{{ $users['birthday']}}</td>
                      </tr>

                      <tr>
                      <th scope="col">住所</th>
                      <td>{{ $users['address']}}</td>
                      </tr>

                      <tr>
                      <th scope="col">性別</th>
                      <td>{{ $users['gender']}}</td>
                      </tr>
                      </table>
                      　　 <form method="POST" action="{{url('ask/update',['id' => $users->id])}}">
                            <div class="form-group row mb-8" >
                              <div class="col-md-11" style="text-align:left">
                                <button type="submit" class="btn btn-primary">{{ __('更新する') }}</button>
                                <button type="button" onclick="history.back()" class="btn btn-primary">{{ __('戻る') }}</button>
                              </div>
                            </div>
                        <input type="hidden" name="your_name" value= "{{ $users['your_name']}}" >
                        <input type="hidden" name="my_number" value= "{{ $users['my_number']}}" >
                        <input type="hidden" name="password" value= "{{ $users['password']}}" >
                        <input type="hidden" name="birthday" value= "{{ $users['birthday']}}" >                        
                        <input type="hidden" name="address" value= "{{ $users['address']}}" >
                        <input type="hidden" name="gender" value= "{{ $users['gender']}}" >
                        {{ csrf_field() }}
                    </form>
                </div>
                </div>
        </div>
    </div>
</div>
@endsection
