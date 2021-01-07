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
                      <td>{{ $inputs['your_name']}}</td>
                      </tr>

                      <tr>
                      <th scope="col">マイナンバー</th>
                      <td>{{ $inputs['my_number']}}</td>
                      </tr>

                      <tr>
                      <th scope="col">暗証番号</th>
                      <td>{{ $inputs['password']}}</td>
                      </tr>

                      <tr>
                      <th scope="col">生年月日</th>
                      <td>{{ $inputs['birthday']}}</td>
                      </tr>

                      <tr>
                      <th scope="col">住所</th>
                      <td>{{ $inputs['address']}}</td>
                      </tr>

                      <tr>
                      <th scope="col">性別</th>
                      <td>{{ $inputs['gender']}}</td>
                      </tr>
                      </table>
                      　　 <form method="POST" action="{{url('ask/update',['id'=>$inputs->id])}}">
                            <div class="form-group row mb-8" >
                              <div class="col-md-11" style="text-align:left">
                                <button type="submit" class="btn btn-primary">{{ __('更新する') }}</button>
                                <button type="button" onclick="history.back()" class="btn btn-primary">{{ __('戻る') }}</button>
                              </div>
                            </div>
                        
                        <input type="hidden" name="your_name" value= "{{ $inputs['your_name']}}" >
                        <input type="hidden" name="my_number" value= "{{ $inputs['my_number']}}" >
                        <input type="hidden" name="password" value= "{{ $inputs['password']}}" >
                        <input type="hidden" name="birthday" value= "{{ $inputs['birthday']}}" >                        
                        <input type="hidden" name="address" value= "{{ $inputs['address']}}" >
                        <input type="hidden" name="gender" value= "{{ $inputs['gender']}}" >
                        {{ csrf_field() }}
                    </form>

                </div>
                </div>
        </div>
    </div>
</div>
@endsection
