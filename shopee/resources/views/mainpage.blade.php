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
    <div class="flex justify-start items-start ">
        <div class="ml-44 min-w-[25vw]">
            <div class="flex justify-around my-5 mx-5 flex-row">
                @include('filter')
            </div>
        </div>
        <div>
            <div class="flex justify-self-start">
                @foreach ($products as $product)
                    @include('card')
                @endforeach
            </div>
        </div>
    </div>







</body>

</html>
