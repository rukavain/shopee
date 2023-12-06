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
                {{-- {{ $feedback->feedback }} --}}
            </div>

            <div class="flex justify-between">
                {{-- <span>{{ $review->created_at }}</span> --}}
                <button class="p-1 px-2 bg-gray-900 hover:bg-gray-950 border border-gray-950 bg-opacity-60">
                    <ion-icon name="share-outline"></ion-icon> Share</button>
            </div>
        </div>

    </div>
    {{-- @endforeach --}}

</body>


</html>
