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
                                        class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-center">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-slate-800">
                                @foreach ($products as $product)
                                    <tr>
                                        <td
                                            class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                            {{ $product->id }}</td>
                                        <td
                                            class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                            {{ $product->name }}</td>
                                        <td
                                            class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                            <!-- Add your action buttons here -->
                                            <button
                                                class="mx-5 bg-white hover:bg-orange-600 border border-3 transition hover:text-white px-8 py-2 text-black hover:bg border-orange-600 rounded-md">Edit</button>
                                            <button
                                                class="mx-5 bg-white hover:bg-orange-600 border border-3 transition hover:text-white px-8 py-2 text-black hover:bg border-orange-600 rounded-md">Delete</button>
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


</body>

</html>
