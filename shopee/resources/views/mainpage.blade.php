<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
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
@include('nav')

<body>
    <div class="flex justify-around items-start">
        <div class="ml-44 min-w-[25vw]">
            <div class="flex justify-around my-5 flex-row">
                @include('filter')
            </div>
        </div>
        <div class="mr-52 pr-26">
            <div class="flex justify-self-start flex-wrap">
                @foreach ($products as $product)
                    @include('card')
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
