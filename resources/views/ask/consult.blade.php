@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
  <div class="col-md-8">
  <h2>担当者が参ります少々おまちください。</h2>
  @if(count($errors) >0)
  <div class="alert alert-danger"> //bootstrap 警告表示
  @foreach($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
  </div>
  @endif
  </div>
  </div>
@endsection
