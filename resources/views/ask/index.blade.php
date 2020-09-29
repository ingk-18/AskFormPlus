@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
  <div class="col-md-8">
  <h1>ログイン</h1>
  @if(count($errors) >0)
  <div class="alert alert-danger"> //bootstrap 警告表示
  @foreach($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
  </div>
  @endif
  <form method="POST" action="{{url('ask/show')}}">
  <div class="form-group">
  <label for="password">マイナンバー</lavel>
  <input type="password" name="my_number">
  </div>
  <div class="form-group">
  <label for="password">暗証番号</label>
  <input type="pussword" name="password">
  </div>
  <button type="submit" >ログイン</button>
  {{ csrf_field() }}
  </form>
  </div>
  </div>
@endsection
