<nav class="flex flex-col w-screen bg-orange-600 py-4">
    <div class="flex justify-around items-start w-full my-3 max-md:hidden">
        <div class="flex text-sm text-white gap-4 w-50">
            <a href="{{ route('products.list') }}">Products List |</a>
            <a>Start Selling |</a>
            <a>Download |</a>
            <a>Follow us on </a>
        </div>
        <div class="flex text-md flex-evenly gap-4 w-50 text-white">
            <a>Notifications |</a>
            <a>Help |</a>
            <a>English |</a>
            <a>vainnnnnnnnn </a>
        </div>
    </div>
    <div class="flex justify-around items-center">
        <div class="flex justify-center items-center">
            <a href="{{ route('mainpage') }}">
                <img class="object-fit h-24 w-24 max-md:h-12 max-md:w-12"
                    src="https://i.pinimg.com/originals/6d/b9/31/6db931827443a7455a4b805fe5829820.png" alt="">
            </a>
            <a href="{{ route('goto.create') }}">
                <h1 class="text-white text-center text-4xl  max-md:text-lg">Shopee</h1>
            </a>

        </div>
        <div class="w-[50vw] max-md:hidden"> {{-- start of search div --}}
            <div class="pt-2 relative mx-auto text-gray-600">
                <input
                    class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none w-[50vw]"
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
        <div>
            <a href="{{ route('products.cart') }}">
                <img class="h-12 w-12  max-md:h-8 max-md:w-8"
                    src="https://cdn-icons-png.flaticon.com/512/263/263142.png" alt="">
            </a>
        </div>
        <div>
            <a href="{{ route('products.cart') }}">
                <img class="hidden h-12 w-12  max-md:h-8 max-md:w-8 max-md:block "
                    src="https://t3.ftcdn.net/jpg/02/36/03/66/360_F_236036622_ctUjaJTkIANvk9pJh0s5ZJRDWbM8ggT9.jpg"
                    alt="">
            </a>
        </div>

    </div>
    <div class="flex gap-5 justify-center text-white text-sm max-lg:hidden"> {{-- start of 3rd of nav --}}
        <h1>Logitech Mouse</h1>
        <h1>Logitech Webcam</h1>
        <h1>Logitech Wireless Gaming Mouse</h1>
        <h1>Mouse</h1>
        <h1>Kingstone Flashdrive</h1>
        <h1>Logitech Speaker</h1>
        <h1>Type C Hub</h1>
        <h1>Ergonomic Mouse</h1>
    </div>
    <div id="dropdownNavbar"
        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
            </li>
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
            </li>
        </ul>
        <div class="py-1">
            <a href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                out</a>
        </div>
    </div>
</nav>
