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
                      <td>{{ $users->your_name}}</td>
                      </tr>

                      <tr>
                      <th scope="col">マイナンバー</th>
                      <td>{{ $users->my_number}}</td>
                      </tr>

                      <tr>
                      <th scope="col">暗証番号</th>
                      <td>{{ $users->password}}</td>
                      </tr>

                      <tr>
                      <th scope="col">生年月日</th>
                      <td>{{ $users->birthday}}</td>
                      </tr>

                      <tr>
                      <th scope="col">住所</th>
                      <td>{{ $users->address}}</td>
                      </tr>

                      <tr>
                      <th scope="col">性別</th>
                      <td>{{ $users->gender }}</td>
                      </tr>
                      </table>
                           <!-- <div class="form-inline"> -->
                      　　 <form method="GET" class=”form-inline” action="{{url('ask/edit',['id'=>$users->id])}}">
                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">{{ __('変更する') }}</button>
                                <button type="button" onclick="history.back()" class="btn btn-primary">{{ __('戻る') }}</button>
                                </div>
                            </form>
                          </br>
                           <form method="POST" class=”form-inline” action="{{url('ask/destroy',['id'=>$users->id])}}" id="delete_{{ $users->id}}">
                              <div class="col-md-12">
                              <a href="#" class="btn btn-warning" data-id="{{ $users->id }}" onclick="deletePost(this);" >{{ __('削除する') }}</a>
                              </div>
                                  {{ csrf_field() }}
                            </form>
                            <!-- </div> -->
                            </div>
                            
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>

<script>
<!--
/************************************
削除ボタンを押してすぐにレコードが削除
されるのも問題なので、一旦javascriptで
確認メッセージを流します。
*************************************/
//-->
function deletePost(e) {
    'use strict';
    if (confirm('本当に削除していいですか?')) {
    document.getElementById('delete_' + e.dataset.id).submit();
    }
}
</script>


@endsection
