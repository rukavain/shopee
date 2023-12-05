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

<body>
    {{-- CONTENT GOES HERE --}}
    <a href="{{ route('mainpage') }}"
        class="bg-orange-600 m-12 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded transition">
        Go to shopee
    </a>
    <a href="{{ route('goto.create') }}"
        class="bg-green-600 m-12 hover:opacity-75 text-white font-bold py-2 px-4 rounded transition">
        Add product
    </a>
    <a href="{{ route('products.list') }}"
        class="bg-green-600 m-12 hover:opacity-75 text-white font-bold py-2 px-4 rounded transition">
        View Products
    </a>
</body>

</html>
