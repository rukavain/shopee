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
    {{-- <div class="flex justify-center flex-col items-center">
        <table class="table-auto border border-2 rounded">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>
                            <!-- Add your action buttons here -->
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div> --}}

    @if ($editing ?? false)
        <div class="flex flex-col justify-center items-center border border-2 p-5 rounded-md">
            <div class="flex justify-center items-center w-max h-max">
                <form class="w-full max-w-lg" method="POST" action="{{ route('products.update', $product->id) }}">
                    @csrf
                    @method('put')
                    <h1 class="font-semibold text-lg my-12">
                        Edit a product</h1>
                    <div class="flex flex-wrap gap-4">
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Product Name
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="Playstation 5" name="name"
                                value="{{ $product->name }}">
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Price
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="₱29,999" name="price"
                                value="{{ $product->price }}">
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Description
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text"
                                placeholder="The PlayStation 5 (PS5) is Sony's latest gaming console, released in November 2020. It features advanced hardware for 4K gaming, rapid loading times with an SSD, and an innovative DualSense controller for immersive gameplay. The PS5 offers a diverse library of games, including exclusive titles, making it a flagship device for cutting-edge gaming experiences."
                                name="description" value="{{ $product->description }}">
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Stocks
                            </label>
                            <input value="{{ $product->stocks }}"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="999" name="stocks">
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Sold
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                value="{{ $product->sold }}" id="grid-last-name" type="text" placeholder="999"
                                name="sold" value="0">
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Image
                            </label>
                            <input autocomplete="off"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white
                                 focus:border-gray-500"
                                value="{{ $product->image }}" id="grid-last-name" type="url" placeholder="Doe"
                                name="image" required>
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <button
                                class="flex grow border-2 px-12 py-2 font-semibold rounded-md border-orange-600 hover:bg-orange-600 hover:text-white transition">Publish
                                update</button>
                            <div class="flex flex-col">
                                <a class="flex grow border-2 px-12 py-2 font-semibold rounded-md border-orange-600 hover:bg-orange-600 hover:text-white transition text-center my-6"
                                    href="{{ route('products.list') }}">Go Back</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @else
        <div class="flex justify-center items-center mt-12">
            <div class="mt-4 -mb-3 min-w-[30vw]">
                <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800/25">
                    <div style="background-position:10px 10px"
                        class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))] dark:bg-grid-slate-700/25 dark:[mask-image:linear-gradient(0deg,rgba(255,255,255,0.1),rgba(255,255,255,0.5))]">
                    </div>
                    <div class="relative rounded-xl overflow-auto">
                        <div class="shadow-sm overflow-hidden my-8">
                            <table class="border-collapse table-auto w-full text-sm">
                                <thead>
                                    <tr>
                                        <th
                                            class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                            Product ID</th>
                                        <th
                                            class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-center">
                                            Product Name</th>
                                        <th
                                            class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-center">
                                            Stocks Left</th>
                                        <th
                                            class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-center">
                                            Update</th>
                                        <th
                                            class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-center">
                                            Delete</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-slate-800">
                                    @foreach ($products as $product)
                                        <tr class="border-3">
                                            <td
                                                class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                                {{ $product->id }}</td>
                                            <td
                                                class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                                {{ $product->name }}</td>
                                            <td
                                                class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                                {{ $product->stocks }}</td>
                                            <td
                                                class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                                <a href="{{ route('products.edit', $product->id) }}"
                                                    class="mx-5 bg-white hover:bg-orange-600 border border-3 transition hover:text-white px-8 py-2 text-black hover:bg border-orange-600 rounded-md">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('products.destroy', $product->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button
                                                        class="mx-5 bg-white hover:bg-orange-600 border border-3 transition hover:text-white px-8 py-2 text-black hover:bg border-orange-600 rounded-md">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endif

</body>

</html>
