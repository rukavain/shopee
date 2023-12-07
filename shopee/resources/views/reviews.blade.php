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

<body>

    {{-- @foreach ($reviews as $review) --}}
    <div class="flex flex-col gap-3 mt-14">
        <div class="flex flex-col gap-4 bg-gray-700 p-4">
            <!-- Profile and Rating -->
            <div class="flex justify justify-between">
                <div class="flex gap-2">
                    <div class="w-7 h-7 text-center rounded-full bg-red-500">J</div>
                    <span>Name Placeholder</span>
                </div>
                <div class="flex p-1 gap-1 text-orange-300">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon>
                </div>
            </div>

            <div>
                {{-- {{ $review->feedback }} --}}
            </div>

            <div class="flex justify-between">
                {{-- <span>{{ $review->created_at }}</span> --}}
                <button class="p-1 px-2 bg-gray-900 hover:bg-gray-950 border border-gray-950 bg-opacity-60">
                    <ion-icon name="share-outline"></ion-icon> Share</button>
            </div>
        </div>

    </div>
    {{-- @endforeach --}}
    {{-- <div class="flex justify-center items-center flex-col max-w-[50vw]">


        <div class="bg-slate-200 flex justify-center items-center min-h-screen p-2">
            <div class="md:w-3/5 w-3/4 px-10 flex flex-col gap-2 p-5 bg-gray-800 text-white">
                <h1 class="py-5 text-lg">Reviews</h1>
                <h1>Leave a review</h1>
                <form method="POST" action="">
                    @csrf
                    <div class="flex justify-between bg-gray-600 bg-opacity-20 border border-gray-200 rounded-md">
                        <input type='text' placeholder="Review" name="feedback"
                            class="p-2 bg-transparent focus:outline-none">
                        <button class="px-4">Submit</button>
                    </div>

                </form>

                <div class="flex flex-wrap gap-2 w-full py-2">
                    <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30">Experience</span>
                    <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30">Quality</span>
                    <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30">Design</span>
                    <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30">Size</span>
                    <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30">Features</span>
                    <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30">Value</span>
                    <span class="px-2 p-1 hover:bg-blue-400 bg-gray-950 bg-opacity-30">Relplacement</span>
                </div>


            </div>
        </div>


    </div> --}}
</body>


</html>
