@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
  <div class="col-md-8">
  <h1>ログイン</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
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
