<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css ">
</head>
<body>


<div class="w-full dark:bg-slate-800 h-screen flex items-center justify-center">
    <form class="bg-white shadow-md  px-16 pt-16 pb-12 mb-4 rounded-md" action="{{route('login')}}" method="POST">
        @csrf

        <h1 class="text-3xl text-center mb-6">Login</h1>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Username
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="username" type="text" placeholder="Username" name="username">
        </div>
        <div class="mb-6 relative">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input
                class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="password" type="password" placeholder="Password" name="password">
            <span class="absolute inset-y-0 right-0 flex items-center pr-3 pt-4 cursor-pointer toggle-password"
                  onclick="togglePasswordVisibility()">
        <i class="far fa-eye text-gray-600"></i>
    </span>
        </div>

        @if ($errors->any())
            <div class="text-red-500 mb-2 ">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="flex items-center justify-between">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            >
                Sign In
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                Forgot Password?
            </a>
        </div>
    </form>

</div>


<script>

    function togglePasswordVisibility(){
        let passwordInput = document.getElementById('password');
        let toggleButton = document.getElementById('.toggle-password i')

        if(passwordInput.type==='password')
            passwordInput.type="text"
        else
            passwordInput.type="password"
    }

</script>


</body>
</html>
