@extends('layouts.app')
<div class="container_login">
<div class="logo"><img src="{{ asset('image/logo1.png') }}" alt="logo"></div>
</div>
<body class="bgImg">
@section('content')
<div class="login">
<div class="signinPage">
 <div class="container_login">
   <h2 class="text-center title">アカウント作成</h2>
   <div class="text-center m-3">or</div>
   <div class="text-center">
     <p class="acountPage_link"><a href="{{ route('login') }}">アカウントにサインイン</a></p>
   </div>
   
     <form class="new_user" id="new_user" action="{{ route('register') }}" accept-charset="UTF-8" method="post">
       {{ csrf_field() }}
       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
         <label for="user_name">お名前</label>
         <input class="form-control" placeholder="名前を入力してください" type="text" name="name" value="{{ old('name') }}" required autofocus>

         @if ($errors->has('name'))
           <span class="help-block">
             <strong>{{ $errors->first('name') }}</strong>
           </span>
         @endif
       </div>
       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="user_email">メールアドレス</label>
         <input class="form-control" placeholder="emailを入力してください" autocomplete="email" type="email" name="email" value="{{ old('email') }}" required>
           @if ($errors->has('email'))
             <span class="help-block">
               <strong>{{ $errors->first('email') }}</strong>
             </span>
           @endif
       </div>
       <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
         <label for="user_password">パスワード</label>
         <em>(6文字以上入力してください)</em>
         <br>
         <input class="form-control" placeholder="パスワードを入力してください" autocomplete="off" type="password" name="password" required>
           @if ($errors->has('password'))
             <span class="help-block">
               <strong>{{ $errors->first('password') }}</strong>
             </span>
           @endif
       </div>
       <div class="form-group">
         <label for="user_password_confirmation">パスワード確認</label>
         <input class="form-control" placeholder="パスワードを再度入力してください" autocomplete="off" type="password" name="password_confirmation" required>
       </div>
       <div class="text-center">
         <input type="submit" name="commit" value="アカウントを作成" class="loginBtn" data-disable-with="アカウントを作成">
       </div>
   </form>
</div>
</div>
</div>
</div>
@endsection
</body>