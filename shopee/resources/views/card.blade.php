@if ($product->stocks == 0)
    <div id="card"
        class="flex flex-col border flex-wrap border-2 min-h-[36vh] rounded-md mt-8 p-3 mx-6 h-min cursor-pointer transition pointer-events-none opacity-50 disabled disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200">
    @else
        <a href="{{ route('products.show', $product->id) }}">
            <div id="card"
                class="flex flex-col justify-start items-start min-h-[38vh] align-start content-start flex-wrap border-2 m-2 rounded-md p-4 max-md:min-w-[30vw] max-md:max-w-[10vw] max-lg:min-w-[30vw] max-lg:max-w-[10vw] xl:min-w-[10vw] max-xl:mx-12  max-w-[10vw]">
@endif

<div class="relative">
    @if ($product->stocks == 0)
        <div class="absolute top-5 bottom-5 left-5 right-5 m-auto">
            <h1 class="text-slate-200 font-bold text-xl">SOLD OUT</h1>
        </div>
    @else
    @endif
    <img class="h-48 w-48 rounded-md mb-4 object-cover max-lg:h-24 max-lg:w-24" src={{ $product->image }} alt="">
</div>
<div>
    <p class="text-md font-semibold max-md:text-sm">{{ $product->name }}</p>
</div>
<div class="flex max-md:flex-col gap-2 justify-start items-center">
    <p class="line-through text-sm">₱2,999</p>
    <p class="font-bold text-md text-orange-600">₱{{ $product->price }}</p>
</div>
<div class="flex gap-1 my-3 justify-start items-center">
    <img class="h-2 w-2 max-md:hidden"
        src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png" alt="">
    <img class="h-2 w-2 max-md:hidden"
        src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png" alt="">
    <img class="h-2 w-2 max-md:hidden"
        src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png" alt="">
    <img class="h-2 w-2 max-md:hidden"
        src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png" alt="">
    <img class="h-2 w-2 max-md:hidden"
        src="https://static.vecteezy.com/system/resources/thumbnails/001/189/165/small/star.png" alt="">
    @if ($product->stocks == 0)
        <p class="text-sm"> Sold Out</p>
    @else
        <p class="text-sm"> Sold {{ $product->sold }}</p>
    @endif

</div>
<div class="hidden hover:block">
    <p class=" text-center">Find Similar</p>
</div>

</div>

</a>
