@extends('layouts.app')

@section('content')

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
                      <th scope="col">マイナンバー</th>
                      <th scope="col">お名前</th>
                      <th scope="col">生年月日</th>
                      <th scope="col">生年月日</th>
                      <th scope="col">生年月日</th>
                      <th scope="col">生年月日</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($inputs as $input)
                  <tr>
                  <th>{{ $input->your_name }}</th>
                  <th>{{ $input->my_number }}</th>
                  <th>{{ $input->password }}</th>
                  <th>{{ $input->birthday }}</th>
                  <th>{{ $input->address }}</th>
                  <th>{{ $input->gender }}</th>
                  </tr>
                  @endforeach
                  </tbody>
                　</table>
            <div class="col-md-12" style="text-align:left">{{ __('CHATWORKルームリンク :  ') }}
            <a href= "https://www.chatwork.com/g/ask_form" target="_blank" >https://www.chatwork.com/g/ask_form</a>
            </div>
        </div>
    </div>
</div>
@endsection
