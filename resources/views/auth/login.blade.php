<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>登录 - 阳光幼儿园</title>
    <link rel="stylesheet" href="{{ asset('css/base/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/base/kid.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pages/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/base/uikit.min.css') }}" />


    <!--END UK PAGE-->
</head>
<body style="background: #fff;" >
<div class="uk-login">
    <div class="form-login uk-margin-auto">
        <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="uk-card uk-card-default uk-card-large uk-card-body " uk-scrollspy="cls: uk-animation-slide-top; repeat: true">

                <h3 class="uk-card-title">账号登录</h3>
                <span class="uk-card-badge"> 阳光幼儿园——<img src="{{ asset('img/ws-task.png') }}" /> </span>
                <hr />
                <div class="uk-margin ">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                        <input class="uk-input " type="email" name="email" placeholder="邮箱">
                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="uk-margin">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon " uk-icon="icon: lock"></span>
                        <input class="uk-input" type="password" name="password" placeholder="密码">
                    </div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="uk-margin">
                    <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" >登录</button>
                    <a href="{{ route('register') }}" class="uk-button uk-button-secondary uk-width-1-1 uk-margin-small-bottom" type="submit">注册</a>
                </div>
            </div>

        </form>
    </div>
</div>


<div class="ds-ft">
    <!--FOOTER 制作-->
    <footer>
        <div class="sum-footer">
            <p class="fooer-left">
                Copyright©  - DingXin
            </p>
            <p class="fooer-right">
                版权所有：阳光幼儿园
            </p>
        </div>
    </footer>

</div>
<script type="text/javascript" src="{{ asset('js/base/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/base/swiper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/base/uikit.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/base/uikit-icons.js') }}"></script>
</body>
</html>

