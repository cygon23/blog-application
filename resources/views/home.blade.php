<x-app-layout title="Home Page">


  @section('hero')
  <div class="relative w-full text-center py-24 overflow-hidden">
    <!-- Animated Gradient Background -->
    <div class="absolute inset-0 bg-gradient-to-r from-custom-pink via-gray-50 to-pink-200 animate-gradient"></div>

    <!-- Floating Decorative Circles -->
    <div class="absolute top-10 left-10 w-24 h-24 bg-custom-pink rounded-full opacity-40 animate-float"></div>
    <div class="absolute bottom-20 right-20 w-20 h-20 bg-pink-300 rounded-full opacity-40 animate-float"></div>
    <div class="absolute top-1/2 left-1/4 w-14 h-14 bg-pink-500 rounded-full opacity-30 animate-float"></div>

    <!-- Hero Content -->
    <div class="relative z-10">
        <h1 class="text-3xl md:text-4xl font-extrabold lg:text-6xl text-gray-800 leading-tight">
            Welcome to <span class="text-custom-pink">Career</span> <span class="text-gray-900">News</span>
        </h1>
        <p class="text-gray-600 text-lg md:text-xl mt-3 lg:mt-5 max-w-xl mx-auto">
            Tanzania's top blog on <span class="font-semibold text-gray-800">Career Growth</span>,
            <span class="font-semibold text-custom-pink">Innovation</span>, and
            <span class="font-semibold text-gray-700">Gender Equality</span>
        </p>
        <a class="px-6 py-3 mt-6 inline-block text-lg text-white font-medium rounded-full bg-custom-pink hover:bg-pink-700 transition-all duration-300 shadow-lg"
        wire:navigate href="{{ route('posts.index') }}">
            Start Reading
        </a>
    </div>
</div>

  @endsection



<div class="mb-10 w-full">
    <div class="mb-16">
        <h2 class="mt-16 mb-5 text-3xl text-custom-pink  font-bold">Featured Posts</h2>
        <div class="w-full">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($featuredPosts as $post)
                     <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3" />
             @endforeach

            </div>
        </div>
        <a class="mt-10 block text-center text-lg text-custom-pink  font-semibold"
        wire:navigate  href="{{ route('posts.index') }}">More
            Posts</a>
    </div>
    <hr>

    <h2 class="mt-16 mb-5 text-3xl text-custom-pink  font-bold">Latest Posts</h2>
    <div class="w-full mb-5">
        <div class="grid grid-cols-3 gap-10 w-full">
      @foreach ($latestPosts as $post)

        <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3" />

      @endforeach
    </div>
    <a class="mt-10 block text-center text-lg text-custom-pink  font-semibold"
    wire:navigate  href="{{ route('posts.index') }}">More
        Posts</a>
</div>

</x-app-layout>
