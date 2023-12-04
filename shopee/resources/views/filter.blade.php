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
    {{-- start of by category section --}}
    <div class="flex flex-col my-4">
        <div class="">
            <h1 class="font-semibold text-center">SEARCH FILTER</h1>
        </div>
        <div class="mt-5 mb-3">
            <p>By Category</p>
        </div>
        <div class="flex flex-col gap-4">
            <div>
                <input type="checkbox" id="mouse" name="vehicle1" value="Bike">
                <label for="vehicle1"> Mouse (12K+)</label><br>
            </div>
            <div>
                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                <label for="vehicle2"> Gaming Keyboards (12K+)</label><br>
            </div>
            <div>
                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                <label for="vehicle2"> Computer Accessories / Others (3K+)</label><br>
            </div>
            <div>
                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                <label for="vehicle3"> Mouse Keyboard Bundles (12K+)</label><br><br>
            </div>
        </div>
        {{-- end of by category section --}}
        <hr>
        <div class="flex flex-col gap-3 my-5">
            <div>
                <h1>Rating</h1>
            </div>
            <div class="flex gap-1">
                <img class="h-4 w-4"
                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                    alt="">
                <img class="h-4 w-4"
                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                    alt="">
                <img class="h-4 w-4"
                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                    alt="">
                <img class="h-4 w-4"
                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                    alt="">
                <img class="h-4 w-4"
                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                    alt="">
            </div>
            <div class="flex gap-1">
                <img class="h-4 w-4"
                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                    alt="">
                <img class="h-4 w-4"
                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                    alt="">
                <img class="h-4 w-4"
                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                    alt="">
                <img class="h-4 w-4"
                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                    alt="">
            </div>
            <div class="flex gap-1">
                <img class="h-4 w-4"
                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                    alt="">
                <img class="h-4 w-4"
                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                    alt="">
                <img class="h-4 w-4"
                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                    alt="">
            </div>
            <div class="flex gap-1">
                <img class="h-4 w-4"
                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                    alt="">
                <img class="h-4 w-4"
                    src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
                    alt="">
            </div>
        </div>
        <hr>
        <div class="my-5">
            <div class="mb-3">
                <h1>Price Range</h1>
            </div>
            <div class="flex justify-around">
                <input class="border max-w-[5vw] px-1" type="text" placeholder="₱ MIN">
                <p>---</p>
                <input class="border max-w-[5vw] px-1" type="text" placeholder="₱ MAX">
            </div>
            <button class=" mt-4 py-1 px-12 font-semibold bg-orange-600 text-white">APPLY</button>
        </div>
        <hr>
        <div class="flex flex-col h-96 my-4">
            <div class="">
                <h1 class="font-semibold">Shipped From</h1>
            </div>
            <div class="mt-5 mb-3">
                <p>By Category</p>
            </div>
            <div class="flex flex-col gap-4">
                <div>
                    <input type="checkbox" id="mouse" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Mouse (12K+)</label><br>
                </div>
                <div>
                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2"> Gaming Keyboards (12K+)</label><br>
                </div>
                <div>
                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2"> Computer Accessories / Others (3K+)</label><br>
                </div>
                <div>
                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3"> Mouse Keyboard Bundles (12K+)</label><br><br>
                </div>
            </div>
            <button class=" mt-4 py-1 px-12 font-semibold bg-orange-600 text-white">CLEAR ALL</button>
</body>

</html>
