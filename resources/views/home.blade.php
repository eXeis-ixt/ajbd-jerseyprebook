

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('image/Anime-Jersey-200-color')}}" type="image/x-icon">
  <title>{{config('app.name')}}
    </title>
    <link rel="stylesheet" href="{{asset('build/assets/app-X_9efuxH.css')}}">
  {{-- @vite('resources/css/app.css') --}}
</head>
@if ($home->isNotEmpty())

@foreach ($home as $h)
<body class=" " style="background-color: {{$h->primary_color}}; --tw-bg-opacity: 1;">

    <section class="  min-h-screen flex flex-col items-center justify-center" id="form">

        <div class=" container">
            <h1 class="  text-3xl m-3 text-center font-bold md:text-8xl" style="color: {{$h->text_color}}">
                @if (session('success'))
                {{session('success')}}
                @else

                Welcome to Anime Jersey BD {{$h->title}} pre order page
                @endif

            </h1>
        </div>

  <!-- login container -->
  <div class=" mt-7  pb-6 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center" style="background-color: {{$h->secondary_color}}">
    <!-- form -->
    <div class="md:w-1/2 px-8 md:px-16">
      <h2 class="font-bold text-2xl " style="color: {{$h->text_color}}">Pre order</h2>
      <p class="text-xs mt-4 " style="color: {{$h->text_color}}">Pre order Batman Jersey</p>
      {{-- @if(session('success'))
      <div class=" flex justify-center items-center h-60 w-96 rounded-md bg-zinc-950">
          <h1 class=" text-center text-4xl text-white font-bold">

              {{session('success')}}

          </h1>
      </div>
    @endif --}}
<form action="{{route('store')}}" method="POST" class="flex flex-col gap-4">
        @csrf
        <input class="p-2 mt-8 rounded-xl border outline-none" type="text" name="name" placeholder="Name" required>
        <input class="p-2 rounded-xl border w-full outline-none" type="text" name="back_name" placeholder="Print name (back side)">
          <input class="p-2 rounded-xl border w-full outline-none" type="email" name="email" placeholder="email" required>
          <input class="p-2 rounded-xl border w-full outline-none" type="number" name="number" placeholder="Phone number" required>
          <input class="p-2 rounded-xl border w-full outline-none" type="text" name="address" placeholder="Street address">
          <input class="p-2 rounded-xl border w-full outline-none" type="text" name="city" placeholder="Thana and city">

          <div class="h-10 bg-gray-50 flex border  border-gray-200 rounded-xl items-center mt-1">
            {{-- <input name="country" id="country" placeholder="Size" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" /> --}}
            <select name="size" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="3XL">3XL</option>
                </select>


          </div>


          <div class="h-10 bg-gray-50 flex border  border-gray-200 rounded-xl items-center mt-1">
            <select name="jersey" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent">

                @foreach ($jersey as $j)

                <option value="{{$j->name}}">{{$j->name}}</option>
                @endforeach

                </select>


          </div>





          <div class="h-10 bg-gray-50 flex border  border-gray-200 rounded-xl items-center mt-1">
            {{-- <input name="country" id="country" placeholder="Size" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" /> --}}
            <select name="sleeve" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent">
                <option value="Full sleeve">Full sleeve</option>
                <option value="Half sleeve">Half sleeve</option>

                </select>


          </div>


        <button type="submit" class=" rounded-xl  py-2 hover:scale-105 duration-300" style="background-color: {{$h->text_color}}; color: {{$h->secondary_color}}">Place order</button>
    </form>






      <div class="mt-5 text-xs flex justify-between items-center " style="color: {{$h->text_color}}">
        <p>Having trouble? contact us exeis@animejerseybd.store</p>
      </div>
    </div>

    <!-- image -->
    <div class="md:block hidden w-1/2">
      <img class="rounded-2xl" src="{{asset('storage/'.$h->image)}}">
    </div>
  </div>
</section>


    </section>

    @endforeach


    @else


    <div class="container">
        <h1 class="text-3xl m-3 text-center font-bold md:text-8xl">
            Pre-order is not started yet. Please keep your eyes on our <a style="color: red;" href="https://www.facebook.com/animjerseybd">Facebook page</a>
        </h1>
    </div>

    @endif



    <script src="{{asset('build/assets/app-ecWDpuvf.js')}}"></script>
    <script src="{{asset('build/manifest.json')}}"></script>
</body>
</html>
