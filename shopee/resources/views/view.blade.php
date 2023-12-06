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


        <div class="flex justify-center items-center">
            <div class="flex justify-around items-center bg-slate-100 py-8 rounded-md m-12 min-w-[75vw]">
                <div class="flex justify-start items-center"> {{-- - start of img container - --}}
                    <div class="mx-12">
                        <img class="h-96 w-96 rounded-md object-cover" src="{{ $product->image }}" alt="">
                    </div>
                    <div class="flex flex-col self-start items-start">
                        <h1 class="font-semibold text-3xl">{{ $product->name }}</h1>
                        <div>
                            <div class="flex gap-1 my-3 justify-start items-center">
                                <img class="h-6 w-6"
                                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                                    alt="">
                                <img class="h-6 w-6"
                                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                                    alt="">
                                <img class="h-6 w-6"
                                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                                    alt="">
                                <img class="h-6 w-6"
                                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                                    alt="">
                                <img class="h-6 w-6"
                                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                                    alt="">
                                @if ($product->stocks == 0)
                                    <p class="text-md mx-4"> Out of Stock </p>
                                @else
                                    <p class="text-md mx-4"> Stocks {{ $product->stocks }}</p>
                                @endif

                                |
                                <div class="mx-4 font-semibold">
                                    <h1>3.8K Ratings</h1>
                                </div>
                                |
                                <div class="mx-4 font-semibold">
                                    <h1>Sold {{ $product->sold }}</h1>
                                </div>
                            </div>
                            <div class="py-1 bg-orange-600">
                                <div>
                                    <h1 class="text-yellow-400 text-xl font-bold px-4">MAS MURA</h1>
                                </div>
                                <div>
                                    <h1 class="text-white text-xl font-bold px-4">TODAY</h1>
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
                            <form method="POST" action="{{ route('products.purchase', $product->id) }}">
                                @csrf
                                <label for="quantity">Quantity:</label>
                                <input class="py-2 px-4 font-semibold border-2" type="number" name="quantity"
                                    min="1" max="{{ $product->stocks }}" value="1">
                                <button
                                    class="py-2 px-8 bg-red-100 text-sm mx-4 border rounded border-red-600 transition hover:opacity-75">Add
                                    to cart</button>
                                <a
                                    class="py-2 px-8 bg-red-700 text-sm text-white rounded mx-4 border-2 border-red-700 transition hover:opacity-75">Buy
                                    now</a>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="flex justify-center items-center flex-col max-w-[50vw]"> {{-- start of review section --}}

            <!-- component -->
            <div class="bg-slate-200 flex justify-center items-center min-h-screen p-2">
                <div class="md:w-3/5 w-3/4 px-10 flex flex-col gap-2 p-5 bg-gray-800 text-white">
                    <h1 class="py-5 text-lg">Reviews</h1>
                    <h1>Leave a review</h1>
                    <form method="POST" action="{{ route('create.review', $product->id) }}">
                        @csrf
                        <div class="flex justify-between bg-gray-600 bg-opacity-20 border border-gray-200 rounded-md">
                            <input type='text' placeholder="Review" name="feedback"
                                class="p-2 bg-transparent focus:outline-none">
                            <button class="px-4">Submit</button>
                        </div>

                    </form>
                    <!-- Tags -->
                    <div class="flex flex-wrap gap-2 w-full py-2">
                        <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30">Experience</span>
                        <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30">Quality</span>
                        <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30">Design</span>
                        <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30">Size</span>
                        <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30">Features</span>
                        <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30">Value</span>
                        <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30">Relplacement</span>
                    </div>

                    <!-- Item Container -->
                    @include('reviews')
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
