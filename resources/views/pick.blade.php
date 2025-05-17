<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="{{ asset('style_pick.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400..700;1,400..700&family=Inter:wght@100..900&family=Nunito+Sans:opsz,wght@6..12,500&family=Poppins:wght@300&display=swap" rel="stylesheet"></head>
</head>
<body>
    <h2>What is your role?</h2>
    <div class="role-container">
        <a href="{{ route('form') }}" class="role-box">Client</a>
        <a href="{{ route('form2') }}" class="role-box">Lawyer</a>
    </div>
</body>
</html>