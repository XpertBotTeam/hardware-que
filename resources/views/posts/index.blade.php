<x-layout>
  <x-categories-list/>
  <div class="container mid flex">
    
    <x-post-card :post="$posts[0]"/>
    <x-post-card :post="$posts[1]"/>
    
  </div>

  <div class="container mid">
    <div class="row else flex">

        {{-- here you can loop from flex width --}}
        @foreach($posts->skip(1)->skip(2) as $post)
        <x-post-grid :post="$post"/>
        @endforeach
        {{-- here you can loop from flex width --}}
        {{-- <x-post-grid :post="$post"/> --}}
      
  
  </div>
</x-layout>
