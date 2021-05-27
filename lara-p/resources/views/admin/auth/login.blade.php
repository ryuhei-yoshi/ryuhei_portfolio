@extends('layouts.admin_app')

@section('admin_content')
    <div class="container mt-5">
        <div class="card">
            <div class="form-wrap col-xs-6 col-lg-4">
                <div class="form-group text-center">
                    <h2 class="logo-img mx-auto">
                        管理者ログイン
                    </h2>
                    {{-- @include('commons.error_card_list') --}}
                </div>
                {!! Form::open(['route'=>'admin.login']) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'メールアドレス']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'パスワード']) !!}
                    </div>

                    <div class="actions text-center">
                        {!! Form::submit('ログインする', ['class' => 'btn btn-danger w-auto']) !!}
                    </div>
                {!! Form::close() !!}
                <br>

                <p class="devise-link">
                    アカウントをお持ちでないですか？
                    <a href="{{ route('admin_auth.register') }}">
                        新規登録する
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
