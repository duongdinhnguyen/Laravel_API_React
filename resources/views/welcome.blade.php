<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <style>
        .room {
            display: flex;
            justify-content: space-evenly;
        }

        .score {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <div class="score">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email</label>
                <input id="email" name="email" type="text">
            </div>
            <div>
                <label for="password">Password</label>
                <input id="password" name="password" type="text">
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>

</body>
</html>
