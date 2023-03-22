@extends('layouts.logout')

@section('content')

{!! Form::open() !!}


<div class="login_item">

  <h2>新規ユーザー登録</h2>

  {{ Form::label('user name') }}
  {{ Form::text('username',null,['class' => 'input']) }}

  {{ Form::label('mail adress') }}
  {{ Form::text('mail',null,['class' => 'input']) }}

  {{ Form::label('password') }}
  {{ Form::text('password',null,['class' => 'input']) }}

  {{ Form::label('password comfirm') }}
  {{ Form::text('password-confirm',null,['class' => 'input']) }}

  {{ Form::submit('登録') }}

  <p><a href="/login">ログイン画面へ戻る</a></p>
</div>



{!! Form::close() !!}


@endsection
