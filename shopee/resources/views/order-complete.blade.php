<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="" type="image/x-icon" src="{{ config('app.icon') }}">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
        }
    </style>
</head>

<body>
    @include('nav')
    <div class="flex justify-center items-start h-[50vh]">
        <div class="flex flex-col gap-4 justify-center items-center border-slate-200 border-2 p-10 rounded my-12">
            <h1 class="text-orange-600 font-bold text-4xl">Order Completed</h1>
            <img class="h-12"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Eo_circle_orange_checkmark.svg/2048px-Eo_circle_orange_checkmark.svg.png"
                alt="">
            <hr>
            <div class="flex flex-col ">
                <a href="{{ route('mainpage') }}"
                    class="px-8 py-2 text-orange-600 font-bold border-orange-600 hover:text-white hover:bg-orange-600 transition border-2 rounded-md">Go
                    back shopping</a>
            </div>
        </div>
    </div>
    @include('footer')
</body>

</html>
