<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Anime Database</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Signika Negative', sans-serif;
            background-image: url('https://th.bing.com/th/id/OIP.BoPfxtFmLKS1v6F_N3WcIwHaEK?rs=1&pid=ImgDetMain');
            color: #333;
            margin: 0;
            padding: 0;
        }
        .login-container {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px 40px;
            background: #fff6f9;
            border: 2px solid #9799f0;
            border-radius: 16px;
            box-shadow: 0 0 12px rgba(0,0,0,0.05);
        }

        h2 {
            text-align: center;
            margin-bottom: 24px;
            color: #202297;
        }

        label {
            font-weight: 500;
            display: block;
            margin-bottom: 6px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 18px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
        }

        button {
            width: 100%;
            background: ;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
        }

        button:hover {
            background: #202297;
        }

        .note {
            text-align: center;
            font-size: 13px;
            margin-top: 16px;
            color: #999;
        }

        .note a {
            color: #202297;
            text-decoration: none;
        }

        .note a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login ke Database Anime</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Email</label>
            @if ($errors->has('email'))
                <span class="text-red-500 text-xs">{{ $errors->first('email') }}</span>
            @endif
            <input type="email" name="email" id="email" required autocomplete="email">

            <label for="password">Kata Sandi</label>
            <input type="password" name="password" id="password" required autocomplete="current-password">

            <button type="submit">Masuk</button>
        </form>
        <div class="note">
            Belum punya akun? <a href='{{ route('register')}}'>Daftar di sini</a>
        </div>
    </div>

    @if ($errors->any())
    <ul class="mb-4 text-red-600 text-sm list-disc list-inside">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
</body>
</html>
