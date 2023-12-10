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
    <footer class="py-6 flex justify-center items-center bg-orange-600">
        <h1 class="text-white text-sm font-semibold">ivandev.com &copy;</h1>
    </footer>
</body>

</html>
