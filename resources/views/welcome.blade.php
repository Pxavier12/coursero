<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Coursero</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <svg width="744px" height="213px" viewBox="0 0 744 213" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Slice</title>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-family="Helvetica" font-size="200" font-weight="normal" letter-spacing="-15">
                    <text id="Coursero.">
                        <tspan x="0.4375" y="167" fill="#000000">Coursero</tspan>
                        <tspan x="702.996094" y="167" fill="#C60A0A">.</tspan>
                    </text>
                </g>
            </svg>
        </div>

        <form method="POST" onsubmit="{{route('submit')}}" enctype="multipart/form-data">
            @csrf
            <div class="flex justify-center ">
                <select name="language" onchange="exerciseOn()" class="language block w-52 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500">
                    <option value="">
                        Select a language
                    </option>
                    <option value="c">
                        c
                    </option>
                    <option value="python">
                        Python
                    </option>
                </select>

                <select disabled="disabled"  name="exercise" onchange="showExercise()" class="exercise block w-52 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 ml-4">
                    <option value="">
                        Choose an exercise
                    </option>
                    <option value="1" >
                        ex. 1
                    </option>
                </select>

            </div>

            <div class="hidden hiExercise flex justify-center mt-6 text-gray-500">
                Write a code to print this sentence : "Hello world"
            </div>

            <div name="answer" class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg shadow-2xl">
                <div class="editor"></div>
            </div>

            <div class="flex justify-center mt-4 ">
                <button type="submit" class="bg-red-700 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-red-900 hover:border-blue-500 rounded">
                    Submit
                </button>
            </div>
        </form>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center">
                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>

                    <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                        Shop
                    </a>

                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                        <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>

                    <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                        Sponsor
                    </a>
                </div>
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>

    </div>

</div>

<script defer>
    function exerciseOn(){
        let select =  document.querySelector('.exercise')
        let optionsArr = Array.prototype.slice.call( select.getElementsByTagName('option'), 0 )
        for (var option in optionsArr){
            if (document.querySelector('.language').value==''){
                document.querySelector('.exercise').setAttribute('disabled','disabled')
            }else {
                document.querySelector('.exercise').removeAttribute('disabled')
            }
        }
    }
    function showExercise(){

        if(document.querySelector('.exercise').value!==""){
            document.querySelector('.hiExercise').classList.remove('hidden')
        }else {
            document.querySelector('.hiExercise').classList.add('hidden')
        }
    }
</script>
</body>
</html>
