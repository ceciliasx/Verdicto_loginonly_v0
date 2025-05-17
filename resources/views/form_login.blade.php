<html>
    @if(session('success'))
        <div style="color: green; background-color: #FBF9FA; padding: 10px; border-radius: 5px;">{{ session('success') }}</div>
    @endif

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verdicto</title>

    <link rel="stylesheet" href="{{ asset('style_login_login.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400..700;1,400..700&family=Inter:wght@100..900&family=Nunito+Sans:opsz,wght@6..12,500&family=Poppins:wght@300&display=swap" rel="stylesheet"></head>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="navbar-logo">
                <img class="navbar-img" src="{{ asset('assets/logo_white_blue.png') }}" alt="Logo">
            </div>
            <div id="links">
                <ul class="direct">
                        <li><a href="">Home</a></li>
                        <li><a href="">Lawyer</a></li>
                        <li><a href="">Article</a></li>
                        <div class="bord">
                            <li><a type="submit" class="curr" href="{{ route('pick') }}">Register</a></li>
                        </div>
                </ul>
            </div>
        </nav>
    </header>

    <div class="login-form">
        <div class="register-title">
            <h3>Welcome Back!</h3>
        </div>
        <div class="login-form-form">
            <form method="POST" action="{{ route('login.submit') }}">
                @csrf
        
                <label for="username">Username</label>
                <input id="username" type="text" name="username" value="{{ old('username') }}">
                @error('username') <div style="color: red">{{ $message }}</div> @enderror

                <label for="password">Password</label>
                <input id="password" type="password" name="password" id="password" value="{{ old('password')}}">
                @error('password') <div style="color: red">{{ $message }}</div> @enderror
                @if($errors->has('login'))
                    <div style="color: red;">
                        {{ $errors->first('login') }}
                    </div>
                @endif
                <div class="pw-c-wrap">
                    <input type="checkbox" id="pw-c" onclick="visibility()">
                    <label for="pw-c">Show Password</label>
                </div>

                <div class="wrap">
                    <button type="submit" value="Submit">LOGIN</button>
                </div>
            </form>

            <div class="have-acc-div">
                <a href="{{ route('pick') }}">Do not yet have an account?</a>
            </div>
        </div>
    </div>
    <footer>
        <div class="copyright">
            <p>Copyright © 2025 Verdicto. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="{{ asset('togglevisibilityscript.js') }}"></script>
</body>
</html>