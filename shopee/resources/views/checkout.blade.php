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
    <nav class="flex flex-col bg-white">
        <div class="flex justify-around items-start w-full py-3 bg-orange-600 max-lg:text-xs max-lg:py-2">
            <div class="flex self-start text-sm text-white gap-4 w-50 max-lg:text-xs max-lg:hidden">
                <a>Seller Centre |</a>
                <a>Start Selling |</a>
                <a>Download |</a>
                <a>Follow us on </a>
            </div>
            <div class="flex text-md flex-evenly gap-4 w-50 text-white text-sm max-lg:text-xs">
                <a>Notifications |</a>
                <a>Help |</a>
                <a>English |</a>
                <a>vainnnnnnnnn </a>
            </div>
        </div>
        <div class="flex justify-around items-center border-y py-4">
            <div class="flex justify-center items-center">
                <a href="{{ route('mainpage') }}">
                    <img class="object-fit h-14 w-12 max-lg:h-8 max-lg:w-6"
                        src="https://www.freepnglogos.com/uploads/shopee-logo-png/shopee-logo-shop-with-the-gentlemen-collection-and-win-the-shopee-0.png"
                        alt="">
                </a>

                <h1 class="text-orange-600 text-center text-3xl px-2 max-lg:text-lg">Shopee | Checkout</h1>
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
    <div class="flex justify-center items-center">
        <div class="flex flex-col justify-center items-center max-w-[75vw]">
            <div class="flex flex-col items-start justify-start px-12 border-2 border-dashed my-4 py-6 gap-4 w-full">
                <h1 class="text-orange-600 font-semibold text-xl">Delivery Address</h1>
                <div class="flex gap-4 justify-start items-center">
                    <h1 class="font-bold">John Ivan Magtoto (+63) 9123456789</h1>
                    <h1>123, Sample Street., Baranggay Baranggay, Mabalacat, North Luzon, Quezon City 2010</h1>
                    <button class="text-xs border-orange-600 text-orange-600 border px-2">Default</button>
                    <h1 class="text-blue-500">Change</h1>
                </div>
            </div>
            <div
                class="flex flex-col items-start justify-start px-12 border-2 border-slate-200 my-4 py-6 gap-4 min-w-[50vw] px-12">
                <div class="flex justify-between gap-4 w-full">
                    <h1 class="text-xl">Products Ordered</h1>
                    <div class="flex gap-28 text-xs justify-center items-center text-slate-600">
                        <h1>Unit Price</h1>
                        <h1>Amount</h1>
                        <h1>Item Subtotal</h1>
                    </div>
                </div>
                <div class="flex gap-4 justify-start items-center">
                    <h1 class="font-semibold">Store name</h1>
                    |
                    <h1 class="text-xs text-green-600">chat now</h1>
                </div>
                <div class="flex justify-between items-center w-full border-dashed border-y px-12 py-4">
                    <div class="flex justify-between items-center gap-12">
                        <a href="{{ route('products.show', $product->id) }}"><img
                                class="h-28 w-28 object-cover border-2 rounded border-slate-200 hover:border-orange-600 transition"
                                src="{{ $product->image }}" alt=""></a>

                        <h1>{{ $product->name }}</h1>
                    </div>
                    <div class="flex justify-center items-center gap-32">
                        <h1>₱{{ $product->price }}</h1>
                        <h1>₱{{ $product->quantity }}</h1>
                        <h1>₱{{ $product->price }}</h1>
                    </div>
                </div>
                <div class="flex justify-start gap-8 items-center w-full border-dashed border-y px-12 py-4">
                    <img class="h-4"
                        src="https://static.vecteezy.com/system/resources/previews/005/895/281/original/voucher-icon-style-vector.jpg"
                        alt="">
                    <h1 class="text-sm ">Add ₱1 more to get ₱5 off
                    </h1>
                    <h1 class="text-blue-600 text-sm">More Vouchers</h1>
                </div>
                <div class="flex justify-start gap-8 items-center w-full border-dashed border-y px-12 py-4">
                    <img class="h-8"
                        src="https://icones.pro/wp-content/uploads/2021/11/icone-vert-de-camion-d-expedition-et-de-livraison.png"
                        alt="">
                    <h1 class="text-sm ">₱50 off shipping with min order of ₱0

                    </h1>
                    <h1 class="text-blue-600 text-sm">Learn more</h1>
                </div>
                <div class="flex justify-start gap-8 items-center w-full border-dashed border-y px-12 py-4">
                    <div class="flex gap-2  border-x border-dashed px-6">
                        <h1 class="text-slate-600">Message for sellers:</h1>
                        <input class="px-8 py-2 border-2" type="text" placeholder="">
                    </div>
                    <div class="flex justify-evenly gap-28">
                        <h1 class="text-sm text-green-500">Shipping Option:</h1>
                        <div class="">
                            <h1 class="text-sm">Overseas Shipping</h1>
                            <h1 class="text-xs">Standard International</h1>
                            <h1 class="text-xs text-slate-600">Receive by 15 - 19 Dec</h1>
                        </div>
                        <h1 class="text-sm text-blue-600">CHANGE</h1>
                        <h1>₱{{ $product->price }}</h1>
                    </div>
                </div>
            </div>
            <div class="flex flex-col border-2 px-8 border-slate-100 py-4 gap-8  w-full my-12">
                <div class="flex gap-8 justify-between items-center min-w-[50vw]">
                    <div class="flex gap-8 justify-center items-center">
                        <img class="h-4"
                            src="https://static.vecteezy.com/system/resources/previews/005/895/281/original/voucher-icon-style-vector.jpg"
                            alt="">
                        <h1 class="text-lg">Shopee Voucher</h1>
                    </div>
                    <div>
                        <h1 class="text-blue-600 font-semibold">Select Voucher</h1>
                    </div>
                </div>
                <hr>
                <div class="flex justify-between min-w-[50vw]">
                    <div class="flex gap-4 justify-center items-center">
                        <img class="h-6"
                            src="data:image/png;base64,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"
                            alt="">
                        <h1 class="text-lg">Shopee Coins</h1>
                        <h1 class="text-xs text-slate-400 font-bold">Coins cannot be redeemed</h1>
                    </div>
                    <div class="flex gap-2">
                        <h1 class="text-slate-400">
                            [-₱0]</h1>
                        <input type="checkbox">
                    </div>
                </div>

            </div>
            <div class="flex flex-col border border-slate-200 my-12  w-full">
                <div class="flex justify-between items center py-4 min-w-[50vw]">
                    <div class="mx-4">
                        <h1 class="text-xl">Payment Method</h1>
                    </div>
                    <div class="mx-4 flex gap-12 justify-center items-center text-center">
                        <h1 class="text-sm">Cash on Delivery</h1>
                        <h1 class="font-bold text-blue-600 text-sm">CHANGE</h1>
                    </div>
                </div>
                <hr>
                <div class="flex flex-row-reverse my-6">
                    <div class="flex  flex-col gap-8"> {{-- 2nd div --}}

                        <div class="mx-4">
                            <div class="flex gap-4 justify-between">
                                <h1 class="text-slate-600">Merchandise Subtotal: </h1>
                                <h1 class="">₱{{ $product->price }}</h1>
                            </div>
                        </div>

                        <div class="mx-4">
                            <div class="flex gap-4 justify-between">
                                <h1 class="text-slate-600">Shipping Total: </h1>
                                <h1 class="">₱60</h1>
                            </div>
                        </div>

                        <div class="mx-4">
                            <div class="flex gap-4 justify-between">
                                <h1 class="text-slate-600">Total Payment: </h1>
                                <h1 class="text-3xl font-bold text-orange-600">₱349</h1>
                            </div>
                        </div>

                    </div> {{-- end of2nd div --}}
                </div>

                <hr>
                <div class="my-8 mx-4"> {{-- 3rd div --}}
                    <div class="flex flex-row-reverse">
                        {{-- <form method="POST" action="">
                            @csrf --}}
                        <a href="{{ route('products.complete', $product->id) }}"
                            class="px-12 py-2 text-white bg-orange-600 font-semibold hover:bg-white hover:text-orange-600 border border-orange-600 transition">Place
                            Order</a>
                        {{-- </form> --}}

                    </div>
                </div> {{-- end of 3rd div --}}
            </div>
        </div>
    </div>

    @include('footer')

</body>

</html>
