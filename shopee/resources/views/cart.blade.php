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
    <div class="flex justify-around items-center border-2 py-4">
        <div class="flex justify-center items-center">
            <a href="{{ route('mainpage') }}">
                <img class="object-fit h-14 w-12 max-lg:h-8 max-lg:w-6"
                    src="https://www.freepnglogos.com/uploads/shopee-logo-png/shopee-logo-shop-with-the-gentlemen-collection-and-win-the-shopee-0.png"
                    alt="">
            </a>

            <h1 class="text-orange-600 text-center text-3xl px-2 max-lg:text-lg">Shopee | Shopping cart</h1>
        </div>
        <div class="w-[35vw]"> {{-- start of search div --}}
            <form method="GET" action="{{ route('products.cart') }}" class="pt-2 relative mx-auto text-gray-600">
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
            </form>
        </div> {{-- end of search div --}}
</nav>

<body>
    <div class="flex flex-col justify-start items-center bg-slate-100 h-auto py-4 max-lg:">
        <div class="border-2 border-yellow-200 bg-white rounded min-w-[75vw] py-2 px-4 max-lg:min-w-[30vw]">
            <p class="text-sm py-2">Select free shipping voucher below to enjoy shipping discount</p>
        </div>
        <div class="flex justify-between bg-white rounded min-w-[75vw] py-4 px-4 my-4 max-lg:min-w-[10vw] border">
            <div class="flex grow-1 ">
                <input name="product" id="product" type="checkbox" class="text-sm py-2">
                <label class="text-slate-800 px-4" for="product">Product</label>
            </div>
            <div class="flex gap-4 justify-center items-center">
                <p class="text-slate-700 text-sm px-20 max-lg:px-2 max-lg:text-xs">Quantity</p>
                <p class="text-slate-700 text-sm px-20 max-lg:px-2 max-lg:text-xs">Unit Price</p>
                <p class="text-slate-700 text-sm px-20 max-lg:px-2 max-lg:text-xs">Total Price</p>
                <p class="text-slate-700 text-sm px-20 max-lg:px-2 max-lg:text-xs">Actions</p>
            </div>
        </div>
        <div class="my-4 p-8 max-lg:min-w-[10vw] max-lg:p-0">
            @if (session('success'))
                <div
                    class="bg-white border-2 border-orange-600 text-slate-800 font-semibold text-md placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500">

                    <button class="close-alert " onclick="closeAlert(this)">
                        {{ session('success') }}
                    </button>
                </div>
            @endif
            @forelse ($cartItems as $cartItem)
                <div class="flex flex-col max-lg:min-w-[35vw]">
                    <div class="">
                        <div
                            class="flex justify-between bg-white rounded-lg min-w-[75vw] max-lg:min-w-[35vw] py-4 px-4 my-6 border-2 border-slate-200 max-lg:px-2 py-2">
                            <div class="flex grow-1 max-lg:grow-0">
                                <input type="checkbox" class="mx-6 max-lg:mx-2">
                                <a href="{{ route('products.show', $cartItem->product->id) }}">
                                    <img class="h-32 w-32 object-cover max-lg:h-24 max-lg:w-24"
                                        src="{{ $cartItem->product->image }}" alt="{{ $cartItem->product->name }}">
                                </a>
                                <div class="mx-8 max-lg:mx-2">
                                    <h1 class=""> {{ $cartItem->product->name }} </h1>
                                </div>
                            </div>
                            <div class="flex gap-4 justify-center items-center max-lg:gap-0">
                                <p class="text-slate-700 text-md px-20 max-lg:px-4 max-lg:text-xs">
                                    {{ $cartItem->quantity }}</p>
                                <p class="text-slate-700 text-md px-20 max-lg:px-4 max-lg:text-xs">
                                    ₱{{ $cartItem->product->price }}</p>
                                <p class="text-orange-600 text-md px-20 max-lg:px-4 max-lg:text-xs">
                                    ₱{{ $cartItem->totalPrice() }}</p>

                                <a href="{{ route('products.checkout', $cartItem->product->id) }}"
                                    class="text-slate-700 text-sm px-20 py-2 px-8 bg-red-700 text-sm text-white rounded mx-4 border-2 border-red-700 transition hover:bg-white border-2 border-red-700 hover:text-red-700 font-semibold cursor-pointer max-lg:px-2 max-lg:text-xs text-center max-lg:py-2 max-lg:mx-2">Check
                                    out</a>
                                <form method="POST" action="{{ route('cart.destroy', $cartItem->product->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button
                                        class="text-slate-700 text-sm px-20 py-2 px-8 bg-red-700 text-sm text-white rounded mx-4 border-2 border-red-700 transition hover:bg-white border-2 border-red-700 hover:text-red-700 font-semibold cursor-pointer max-lg:px-2 max-lg:text-xs text-center max-lg:py-2 max-lg:mx-2">Remove
                                        from cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>Your cart is empty.</p>
            @endforelse
        </div>
        <div
            class="sticky bottom-0 bg-white flex flex-col border-2 border-slate-200 w-screen max-w-[75vw] rounded-md shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px]">
            <div class="flex flex-row-reverse gap-28 py-2 px-4">
                <h1>Select or enter code</h1>
                <h1>Plaform Voucher</h1>
            </div>
            <div class="flex flex-row-reverse border-y border-dashed px-4">
                <div class="flex gap-28 my-4 px-4">
                    <input type="checkbox" disabled>
                    <h1 class="text-slate-500" @disabled(true)>Shopee Coins</h1>
                    <h1>No item selected</h1>
                    <p class="text-slate-300">-₱0</p>
                </div>
            </div>
            <div class="flex justify-around my-6 px-4">
                <div class="flex justify-center items-center gap-8">
                    <input type="checkbox">
                    <h1>Select All (12)</h1>
                    <h1>Delete</h1>
                    <h1>Remove inactive products</h1>
                    <h1>Move to My Likes</h1>
                </div>
                <div class="flex justify-center items-center gap-12">
                    <h1>Total (0 item): </h1>
                    <h1>₱0</h1>
                    <button
                        class="text-white py-2 px-12 bg-orange-600 hover:bg-white hover:text-orange-600 border border-orange-600 transition">Check
                        Out</button>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    <script>
        function closeAlert(element) {
            element.parentElement.style.display = 'none';
        }
    </script>
</body>

</html>
