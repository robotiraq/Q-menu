<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-slate-800 py-4 font-mono max-w-[500px] m-auto">
<div class="text-white">
    <div class=" flex items-center justify-between px-4">
        <div class="flex flex-col text-center bg-gradient-to-tl from-blue-500/10 to-fuchsia-500/5 px-4 py-2 rounded m-auto w-3/4 border-8 border-transparent">
            <p class="font-black text-3xl">Gang</p>
            <p class="font-light">Gaming Center</p>
        </div>
    </div>
    <div dir="rtl" class="flex flex-col gap-4 py-10">
        @foreach($categories as $category)
            <h2 class="font-black text-center text-2xl">{{$category->name}}</h2>
            @foreach($category->products as $product)
              <div class="flex flex-col gap-2 px-4">
                  <div class="flex justify-between w-full items-center py-2 bg-gradient-to-tl from-fuchsia-800/10 to-blue-500/20 p-2 rounded shadow-2xl shadow-blue-600/20 border-white/10 border ">
                      <p class="font-medium text-white">{{$product->name}}</p>
                      <div class="px-2 py-1 border border-white rounded text-sm text-center">
                          <p>{{number_format($product->price)}} IQD</p>
                      </div>
                  </div>
                  <div class="">
                      <p class="font-light text-sm">{{$product->description}}</p>
                  </div>
              </div>
            @endforeach
        @endforeach
    </div>
</div>
</body>
</html>
