@extends('layouts.logout')

@section('content')

{!! Form::open() !!}

<div class="login_item">

  <p>AtlasSNSへようこそ</p>

  {{ Form::label('mail adress') }}
  {{ Form::text('mail',null,['class' => 'input']) }}
  {{ Form::label('password') }}
  {{ Form::password('password',['class' => 'input']) }}

  {{ Form::submit('ログイン') }}

  <p><a href="/register">新規ユーザーの方はこちら</a></p>

  {!! Form::close() !!}
</div>

@endsection
