@extends('frontend.layout.signIn_singUp_master')

@section('page-css')
@endsection

@section('content')
    <section class="top-login-form">
        <h1>Login</h1>
        <form action="" method="post">
            <div class="">
                <h4>E-mail</h4>
                <div class="username-input">
                    <i class="fa-solid fa-envelope icone-u"></i>
                    <input type="email" placeholder="Type your E-mail" name="email" id="email">
                </div>
                <h4>Password</h4>
                <div class="password-input">
                    <i class="fas fa-lock icone-u"></i>
                    <input type="password" placeholder="Type your password" name="password" id="password">
                </div>
                <p><a href="#">Forgot password?</a></p>
            </div>
            <button type="submit" class="btn btn-primary submit_btn login-btn" name="submit">lOGIN</button>
        </form>
        <div class="alternative-signup">
{{--            <p>Not a member? <span><a href="signup.php">signUp</a></span></p>--}}
        </div>
    </section>
@endsection
