@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
  <div class="col-md-8">
  <h1>お客様の情報</h1>
  @if(count($errors) >0)
  <div class="alert alert-danger"> //bootstrap 警告表示
  @foreach($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
  </div>
  @endif

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
  <button type="submit">相談する</button>
  {{ csrf_field() }}
  </form>


  </div>
  </div>
@endsection
