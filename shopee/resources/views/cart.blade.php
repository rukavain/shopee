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
<nav class="flex flex-col bg-white">
    <div class="flex justify-around items-start w-full py-3 bg-orange-600">
        <div class="flex text-sm text-white gap-4 w-50">
            <a>Seller Centre |</a>
            <a>Start Selling |</a>
            <a>Download |</a>
            <a>Follow us on </a>
        </div>
        <div class="flex text-md flex-evenly gap-4 w-50 text-white text-sm">
            <a>Notifications |</a>
            <a>Help |</a>
            <a>English |</a>
            <a>vainnnnnnnnn </a>
        </div>
    </div>
    <div class="flex justify-around items-center border-2 py-4">
        <div class="flex justify-center items-center">
            <a href="{{ route('mainpage') }}">
                <img class="object-fit h-14 w-12"
                    src="https://www.freepnglogos.com/uploads/shopee-logo-png/shopee-logo-shop-with-the-gentlemen-collection-and-win-the-shopee-0.png"
                    alt="">
            </a>

            <h1 class="text-orange-600 text-center text-3xl px-2">Shopee | Shopping cart</h1>
        </div>
        <div class="w-[35vw]"> {{-- start of search div --}}
            <div class="pt-2 relative mx-auto text-gray-600">
                <input
                    class="border-2 border-orange-600 bg-white h-10 px-5 pr-16 rounded-sm text-sm focus:outline-none w-[35vw]"
                    type="search" name="search" placeholder="Search">
                <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                        xml:space="preserve" width="512px" height="512px">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
            </div>
        </div> {{-- end of search div --}}
</nav>

<body>

    <div class="flex flex-col justify-start items-center bg-slate-100 h-auto py-4">
        <div class="border-2 border-yellow-200 bg-white rounded min-w-[75vw] py-2 px-4">
            <p class="text-sm py-2">Select free shipping voucher below to enjoy shipping discount</p>
        </div>
        <div class="flex justify-between bg-white rounded min-w-[75vw] py-4 px-4 my-4">
            <div class="flex grow-1 ">
                <input name="product" id="product" type="checkbox" class="text-sm py-2">
                <label class="text-slate-800 px-4" for="product">Product</label>
            </div>
            <div class="flex gap-4 justify-center items-center">
                <p class="text-slate-700 text-sm px-20">Quantity</p>
                <p class="text-slate-700 text-sm px-20">Unit Price</p>
                <p class="text-slate-700 text-sm px-20">Total Price</p>
                <p class="text-slate-700 text-sm px-20">Actions</p>
            </div>
        </div>
        <div class="bg-slate-200 my-4 p-8 ">
            @foreach ($products as $product)
                <div class="flex flex-col">
                    <div>
                        <div
                            class="flex justify-between bg-white rounded-lg min-w-[75vw] py-4 px-4 my-6 border-2 border-slate-200">
                            <div class="flex grow-1 ">
                                <input type="checkbox" class="mx-6">
                                <img class="h-32 w-32 object-cover" src="{{ $product->image }}" alt="">
                                <div class="mx-8">
                                    <h1 class=""> {{ $product->name }} </h1>
                                </div>
                            </div>
                            <div class="flex gap-4 justify-center items-center">
                                <p class="text-slate-700 text-md px-20">9</p>
                                <p class="text-slate-700 text-md px-20">₱{{ $product->price }}</p>
                                <p class="text-orange-600 text-md px-20">₱227</p>
                                <a
                                    class="text-slate-700 text-sm px-20 py-2 px-8 bg-red-700 text-sm text-white rounded mx-4 border-2 border-red-700 transition hover:opacity-75 cursor-pointer">Check
                                    out</a>
                            </div>

                        </div>
                        <div>
                            <div class="border p-4 bg-slate-50 flex justify-start items-center">
                                <img class="h-4"
                                    src="https://static.vecteezy.com/system/resources/previews/005/895/281/original/voucher-icon-style-vector.jpg"
                                    alt="">
                                <h1 class="text-sm text-blue-700 px-4">Add shop voucher code</h1>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
