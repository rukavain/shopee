<div id="card" class="flex flex-col border border-2 min-h-[36vh] rounded-md mt-8 p-3 mx-6 max-w-[10vw] h-min hover:">
    <div>
        <img class="h-48 w-48" src={{ $product->image }} alt="">
    </div>
    <div>
        <p class="text-sm">{{ $product->name }}</p>
    </div>
    <div class="flex gap-2 justify-start items-center">
        <p class="line-through text-sm">₱2,999</p>
        <p class="font-bold text-md text-orange-600">₱{{ $product->price }}</p>
    </div>
    <div class="flex gap-1 my-3 justify-start items-center">
        <img class="h-2 w-2" src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
            alt="">
        <img class="h-2 w-2" src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
            alt="">
        <img class="h-2 w-2" src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
            alt="">
        <img class="h-2 w-2" src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
            alt="">
        <img class="h-2 w-2" src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png"
            alt="">
        <p> Sold {{ $product->sold }}</p>
    </div>
</div>
