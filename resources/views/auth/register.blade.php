@extends('layouts.logout')

@section('content')

{!! Form::open() !!}


<div class="login_item">

  <h2>新規ユーザー登録</h2>

  {{ Form::open(array('route' => 'user.store')) }}

  {{ Form::label('user name') }}
  {{ Form::text('username', old('username'), ['class' => 'input', 'required' => 'required', 'minlength' => 2, 'maxlength' => 12]) }}

  {{ Form::label('mail adress') }}
  {{ Form::email('mail', old('mail'), ['class' => 'input', 'required' => 'required', 'minlength' => 5, 'maxlength' => 40]) }}

  {{ Form::label('password') }}
  {{ Form::password('password', ['class' => 'input', 'required' => 'required', 'minlength' => 8, 'maxlength' => 20, 'pattern' => '[A-Za-z0-9]+']) }}

  {{ Form::label('password comfirm') }}
  {{ Form::password('password_confirmation', ['class' => 'input', 'required' => 'required', 'minlength' => 8, 'maxlength' => 20, 'pattern' => '[A-Za-z0-9]+', 'name' => 'password_confirmation']) }}

  @if ($errors->has('password_confirmation'))
  <span class="help-block">
    <strong>{{ $errors->first('password_confirmation') }}</strong>
  </span>
  @endif

  {{ Form::submit('登録', ['class' => 'btn btn-primary']) }}

  {{ Form::close() }}

  <p><a href="/login">ログイン画面へ戻る</a></p>
</div>

{!! Form::close() !!}
@endsection
