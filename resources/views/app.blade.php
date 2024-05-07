<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qiymət İzləmə Tətbiqi</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Add this line to the <head> section of your HTML template -->
    <link rel="icon" href="/gerb.jpeg" type="image/x-icon" />
    <link rel="stylesheet" href="/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('setting.js')}}"></script>
</head>
<body>

<nav class=" border-gray-200 bg-gray-900 mb-7">
    <div class=" max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="/gerb.jpeg" class="h-14  rounded-md" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">QIT</span>
        </div>
        <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg text-white md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0   dark:border-gray-700">
                <li>
                    <a href="{{route('home')}}"
                       class="block py-2 px-3  bg-blue-700 rounded md:hover:text-blue-700 md:bg-transparent {{ request()->fullUrl()==route('home') ? 'text-blue-500' : ""}} md:p-0 dark:text-white md:dark:text-blue-500"
                       aria-current="page">Əsas Səhifə</a>
                </li>
                <li>
                    <a href="{{route('users')}}"
                       class="block py-2 px-3  rounded hover:bg-gray-100 md:hover:bg-transparent {{ request()->fullUrl()==route('users') ? 'text-blue-500' : ""}} md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">İstifadəçilər</a>
                </li>
                <li>
                    <a href="{{route('products')}}"
                       class="block py-2 px-3  rounded hover:bg-gray-100 md:hover:bg-transparent {{ request()->fullUrl()==route('products') ? 'text-blue-500' : ""}} md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Məhsullar</a>
                </li>
                <li>
                    <a href="{{route('setting')}}"
                       class="block py-2 px-3  rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Tənzimləmələr</a>
                </li>

                <li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button
                            class="block py-2 px-3  rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>

                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')




<script src="{{asset('product.js')}}"></script>
{{--<script src="{{asset('setting.js')}}"></script>--}}
<script>

    let showDXGProd = document.querySelector('#showDXGProd')
    // console.log(showDXGProd)
</script>

</body>
</html>
