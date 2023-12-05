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


    <div class="flex flex-col justify-center items-start">
        @foreach ($products as $product)
            <div class="flex m-12 border border-2 border-blue-600">
                <p>Product ID: {{ $product->id }} </p>
                <p>Product Name: {{ $product->name }} </p>
            </div>
        @endforeach
    </div>



</body>

</html>
