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
    <div class="flex flex-col justify-center items-center">
        <div class="flex justify-center items-centermax-lg:p-0">
            <div
                class="flex justify-center items-center bg-slate-100 py-8 border-2 rounded-md m-12 min-w-[75vw]
                    max-md:min-w-[35vw] max-md:px-12
                    ">
                <div></div>
                <div></div>
                <div class="flex max-md:flex-col justify-start items-center"> {{-- - start of img container - --}}
                    <div class="mx-12">
                        <img class="h-96 w-96 rounded-md object-cover max-md:w-54 max-md:h-54 max-md:w-screen max-md:mb-8"
                            src="{{ $product->image }}" alt="">
                    </div>
                    <div class="flex flex-col self-start items-start">
                        <h1 class="font-semibold text-3xl">{{ $product->name }}</h1>
                        <div>
                            <div class="flex gap-1 my-3 justify-start items-center">
                                <img class="h-6 w-6 max-lg:h-2 max-lg:w-2"
                                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                                    alt="">
                                <img class="h-6 w-6 max-lg:h-2 max-lg:w-2"
                                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                                    alt="">
                                <img class="h-6 w-6 max-lg:h-2 max-lg:w-2"
                                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                                    alt="">
                                <img class="h-6 w-6 max-lg:h-2 max-lg:w-2"
                                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                                    alt="">
                                <img class="h-6 w-6 max-lg:h-2 max-lg:w-2"
                                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                                    alt="">
                                @if ($product->stocks == 0)
                                    <p class="text-md mx-4 max-lg:text-sm"> Out of Stock </p>
                                @else
                                    <p class="text-md mx-4 max-lg:text-sm"> Stocks {{ $product->stocks }}</p>
                                @endif

                                |
                                <div class="mx-4 font-semibold max-lg:text-sm">
                                    <h1>3.8K Ratings</h1>
                                </div>
                                |
                                <div class="mx-4 font-semibold max-lg:text-sm">
                                    <h1>Sold {{ $product->sold }}</h1>
                                </div>
                            </div>
                            <div class="py-1 bg-orange-600 max-lg:text-md">
                                <div>
                                    <h1 class="text-yellow-400 text-xl font-bold px-4 max-lg:text-sm">MAS MURA</h1>
                                </div>
                                <div>
                                    <h1 class="text-white text-xl font-bold px-4 max-lg:text-sm">TODAY</h1>
                                </div>
                            </div>
                            <div class="my-4 flex items-center">
                                <p class="line-through text-slate-500 font-semibold">₱899</p>
                                <p class="ml-12 text-3xl font-semibold text-red-700">₱{{ $product->price }}</p>
                            </div>
                            <div class="flex ">
                                <h1 class="mr-8 text-slate-500">Shipping</h1>
                                <h1 class="text-slate-500">Shipping Discount</h1>
                            </div>
                            <div class="my-6 max-w-[30vw]">
                                <p class="text-slate-500">Description:</p>
                                <h1 class="font-semibold">{{ $product->description }}</h1>
                            </div>
                            <div class="my-4">
                                @if (session('success'))
                                    <div
                                        class="bg-green-50 border border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500">

                                        <button class="close-alert " onclick="closeAlert(this)">
                                            {{ session('success') }}
                                        </button>
                                    </div>
                                @endif
                            </div>

                            <form method="POST" action="{{ route('purchase', $product->id) }}">

                                @csrf
                                <label for="quantity">Quantity:</label>
                                <input class="py-2 px-4 font-semibold border-2 max-md:py-0 max-md:px-2 max-md:m-4"
                                    type="number" name="quantity" min="1" max="{{ $product->stocks }}"
                                    value="1">
                                <button value="cart" type="submit" name="action"
                                    class="py-2 px-8 bg-red-100 text-sm mx-4 border rounded border-red-600 transition hover:opacity-75 max-md:text-xs max-md:px-4">Add
                                    to cart</button>
                                <button value="buy" type="submit" name="action"
                                    class="py-2 px-8 bg-red-700 text-sm text-white rounded mx-4 border-2 border-red-700 transition hover:opacity-75 max-md:text-xs max-md:px-4">Buy
                                    now</button>

                            </form>


                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script>
        function closeAlert(element) {
            element.parentElement.style.display = 'none';
        }
    </script>
</body>

</html>
