<html>
    @if(session('success'))
        <div style="color: green; background-color: #FBF9FA; padding: 10px; border-radius: 5px;">{{ session('success') }}</div>
    @endif

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verdicto</title>

    <link rel="stylesheet" href="{{ asset('style_login.css') }}">

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
            <h3>Register as Client</h3>
        </div>
        <div class="login-form-form">
            <form method="POST" action="{{ route('form.submit') }}">
                @csrf
        
                <label for="username">Username</label>
                <input id="username" type="text" name="username" value="{{ old('username') }}">
                @error('username') <div style="color: red">{{ $message }}</div> @enderror

                <label for="email">Email</label>
                <input id="email" type="text" name="email" value="{{ old('email') }}">
                @error('email') <div style="color: red">{{ $message }}</div> @enderror

                <label for="phone">Phone Number</label>
                <input id="phone" type="text" name="phone" value="{{ old('phone') }}">
                @error('phone') <div style="color: red">{{ $message }}</div> @enderror
                
                <label for="password">Password</label>
                <input id="password" type="password" name="password" id="password" value="{{ old('password')}}">
                @error('password') <div style="color: red">{{ $message }}</div> @enderror
                <div class="pw-c-wrap">
                    <input type="checkbox" id="pw-c" onclick="visibility()">
                    <label for="pw-c">Show Password</label>
                </div>

                <label class="password_confirmation-class" for="password_confirmation">Confirm Password</label>
                <input itemid="password_confirmation" type="password" id="password_confirmation" name="password_confirmation">
                <div class="pw-c-wrap">
                    <input type="checkbox" id="pw-c-1" onclick="visibility1()">
                    <label for="pw-c-1">Show Password</label>
                </div>
        
                <label class="password_confirmation-class" for="gender">Gender</label>
                <div class="gender-input-1">
                    <input type="radio" name="gender" class="first" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}> Female
                    <input type="radio" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}> Male
                    <input type="radio" name="gender" value="other" {{ old('gender') == 'other' ? 'checked' : '' }}> Others
                    @error('gender') <div style="color: red">{{ $message }}</div> @enderror
                </div>

                <div class="tac password_confirmation-class">    
                    <input class="checkbox-tac" type="checkbox" id="terms" required>
                    <label for="terms" class="tac-label">I understand and accept the terms and conditions.</label>
                </div>

                <div class="wrap">
                    <button type="submit" value="Submit">REGISTER</button>
                </div>
            </form>

            <div class="have-acc-div">
                <a href="{{ route('login') }}">Already have an account?</a>
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