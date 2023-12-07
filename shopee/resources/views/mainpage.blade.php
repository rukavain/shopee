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
    <div class="flex flex-col justify-start items-around ">
        <div class="flex justify-around items-start mx-24 max-lg:mx-0">
            <div class="min-w-[25vw] max-lg:hidden">
                <div class="flex justify-around my-5 flex-row ">
                    @include('filter')
                </div>
            </div>
            <div class="flex flex-col flex-wrap justify-center items-center ">
                <div class="flex flex-wrap justify-center items-center ">
                    @foreach ($products as $product)
                        @include('card')
                    @endforeach

                </div>
                <div class="my-12 mx-12">

                </div>

            </div>
        </div>
        <section class="mx-44 my-12">{{ $products->links() }}
        </section>
    </div>

</body>

</html>
