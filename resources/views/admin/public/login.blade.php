<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            color: var(--light);
            font-size: 18px;
        }

        .head,
        .foot {
            min-width: 100%;
        }

        .head {
            height: 4rem;
            padding: 0 0 0 4rem;
            font-weight: bolder;
            display: flex;
            align-items: center;
        }

        .foot {
            position: absolute;
            bottom: 0;
            height: 3rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loginContent {
            margin-top: 5rem;
            border: 2px solid #fff;
            border-radius: 1%;
            background-color: rgba(65, 115, 189, 0.3);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-group {
            display: flex;
            padding: 0 5rem;
        }

        .form-group .form-control {
            width: 15rem;
        }

        .form-group.remember,
        .form-group.button {
            justify-content: center;
        }

        .alert {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 20rem;
        }

        @media(max-width:767px) {
            .form-group {
                padding: 0 10px;
            }

            .alert {
                width: 15rem;
            }
        }
    </style>
    <title>XX後台系統</title>
</head>

<body>
    <div class="container-fluid">
        <div class="header">
            <div class="row">
                <div class="head bg-dark h2">後台登入系統</div>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="loginContent mx-auto">
                    <form action="/admin/public/check" method="post">
                        @csrf
                        <div class="form-group mt-5">
                            <div>
                                <label for="inputAccount" class="col-form-label">名稱：</label>
                            </div>
                            <div>
                                <input type="text" name="username" class="form-control" id="inputAccount"
                                    placeholder="請輸入名稱" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="inputPassword" class="col-form-label">密碼：</label>
                            </div>
                            <div>
                                <input type="password" name="password" class="form-control" id="inputPassword"
                                    placeholder="請輸入密碼">
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <div class="g-recaptcha" data-sitekey="{{ config('captcha.sitekey') }}"></div>
                        </div>
                        <div class="form-group remember">
                            <div>
                                <input class="form-check-input" type="checkbox" name="online" id="online"
                                    value="1">
                            </div>
                            <div>
                                <label class="form-check-label" for="online">
                                    記住我的登入狀態
                                </label>
                            </div>
                        </div>
                        <div class="form-group button">
                            <div class="mr-5">
                                <button type="submit" class="btn btn-dark">登入</button>
                            </div>
                            <div>
                                <button type="reset" class="btn btn-light">取消</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="row">
                <div class="foot bg-dark">Copyright &copy; XXXXXX by Winho</div>
            </div>
        </div>
        @if (count($errors) > 0)
            <div class="row">
                <div class="alert alert-danger mx-auto">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>
</body>

</html>
