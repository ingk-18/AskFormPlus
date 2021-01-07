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
                    <form method="POST" action="{{url('ask/edit_confirm',['id' => $users->id])}}" >

                        <div class="form-group row text-md-right">
                            <label for="password" class="col-md-4 col-form-label">{{ __('氏名') }}</label>
                            <div class="col-md-4" style="text-align:left">
                                <input class="form-control" type="text" name="your_name" value="{{ $users->your_name}}">
                            </div>
                        </div>

                        <div class="form-group row text-md-right">
                            <label for="password" class="col-md-4 col-form-label">{{ __('マイナンバー') }}</label>
                            <div class="col-md-4" style="text-align:left">
                                <input class="form-control" type="text" name="my_number" value="{{ $users->my_number}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('暗証番号') }}</label>
                            <div class="col-md-4">
                                <input class="form-control" type="password" name="password" value="{{ $users->password}}">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('生年月日') }}</label>
                            <div class="col-md-4">
                                <input class="form-control" type="date" name="birthday" value="{{ $users->birthday}}">
                            </div>
                        </div>

                        <div class="form-group row text-md-right">
                            <label for="password" class="col-md-4 col-form-label">{{ __('住所') }}</label>
                            <div class="col-md-8" style="text-align:left">
                                <!-- <input type="text" name="address"> -->
                                <input class="form-control" type="text" name="address" value="{{ $users->address}}">
                            </div>
                        </div>

                        <div class="form-group row text-md-right">
                            <label for="password" class="col-md-4 col-form-label">{{ __('性別') }}</label>
                            <div class="col-md-4" style="text-align:left">
                                <input type="radio" name="gender" value="男性" @if($users->gender === "男性") checked @endif >男性 
                                <input type="radio" name="gender" value="女性" @if($users->gender === "女性") checked @endif >女性
                            </div>
                            
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('確認画面へ') }}
                                </button>
                            </div>
                        </div>
                        <input type="hidden" name="id" value= "{{ $users['id']}}" >
                        {{ csrf_field() }}
                    </form>
                </div>
                </div>
        </div>
    </div>
</div>
@endsection
