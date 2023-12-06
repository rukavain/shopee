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

    <!-- component -->
    <div class="bg-slate-200 flex justify-center items-center min-h-screen p-2">
        <div class="md:w-3/5 w-3/4 px-10 flex flex-col gap-2 p-5 bg-gray-800 text-white">
            <h1 class="py-5 text-lg">Reviews</h1>
            <div class="flex bg-gray-600 bg-opacity-20 border border-gray-200 rounded-md">
                <ion-icon class="py-4 p-3" name="search-outline"></ion-icon>
                <input placeholder="Search Review" class="p-2 bg-transparent focus:outline-none">
            </div>

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
            <div class="flex flex-col gap-3 mt-14">
                <div class="flex flex-col gap-4 bg-gray-700 p-4">
                    <!-- Profile and Rating -->
                    <div class="flex justify justify-between">
                        <div class="flex gap-2">
                            <div class="w-7 h-7 text-center rounded-full bg-red-500">J</div>
                            <span>Jess Hopkins</span>
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
                        Gorgeous design! Even more responsive than the previous version. A pleasure to use!
                    </div>

                    <div class="flex justify-between">
                        <span>Feb 13, 2021</span>
                        <button class="p-1 px-2 bg-gray-900 hover:bg-gray-950 border border-gray-950 bg-opacity-60">
                            <ion-icon name="share-outline"></ion-icon> Share</button>
                    </div>
                </div>

                <div class="flex flex-col gap-4 bg-gray-700 p-4">
                    <!-- Profile and Rating -->
                    <div class="flex justify justify-between">
                        <div class="flex gap-2">
                            <div class="w-7 h-7 text-center rounded-full bg-yellow-500">A</div>
                            <span>Alice Banks</span>
                        </div>
                        <div class="flex p-1 gap-1 text-orange-300">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>

                        </div>
                    </div>

                    <div>
                        The device has a clean design and the metal housing feels sturdy in my hands. Soft rounded
                        corners make it a pleasure to look at.
                    </div>

                    <div class="flex justify-between">
                        <span>Feb 13, 2021</span>
                        <button class="p-1 px-2 bg-gray-900 hover:bg-gray-950 border border-gray-950 bg-opacity-60">
                            <ion-icon name="share-outline"></ion-icon> Share</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

</body>


</html>
