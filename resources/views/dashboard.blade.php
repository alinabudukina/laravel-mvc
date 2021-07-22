<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>home</title>
</head>
<body class="text-gray-700 bg-white antialiased" style="font-family: 'Roboto', sans-serif">
  
  <!--Nav-->
    <nav class="flex items-center justify-between flex-wrap p-6">
        
        <div class="flex items-center flex-shrink-0 text-dark md:text-right mr-6">
          <span class="font-semibold text-xl tracking-tight hover:text-green-800"><a href="#">BLOG</a></span>
        </div>
        
        <div class="block lg:hidden">
          <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
                  <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
            </svg>
          </button>
        </div>
        
      <div id="nav-content" class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0 md:text-right">
        <div class="text-sm lg:flex-grow">
            <a href="{{ route('posts.create') }}" class="block mt-1 lg:inline-block lg:mt-0 text-dark-200 hover:text-teal-800 mr-4m"> Créer un post </a>
            <a href="#responsive-header" class="block mt-1 lg:inline-block lg:mt-0 text-dark-200 hover:text-teal-800 mr-4">Sign In</a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-teal-800 mr-4">Subscribe</a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-teal-800 mr-4">Contact</a>
         </div>
       </div>
        
    </nav>
          
          <!-- Features -->
          <section class="container mx-auto px-6 p-10">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Listes des posts</h2>
            @foreach($posts as $post)
            <div class="flex items-center flex-wrap mb-20">
              <div class="w-full md:w-1/2 pl-10">
                <h4 class="text-3xl text-gray-800 font-bold mb-3">{{$post->description}}</h4>
                <p class="text-gray-600 mb-8">We'll never get it out now. So certain are you. Always with you it cannot be done. Hear you nothing that I say? Master, moving stones around is one thing. This is totally different. No! No different!</p>
              </div>
              <div class="w-full md:w-1/2">
                <img class="rounded-lg"  src="picture.jpg" />
              </div>
            </div>
              @endforeach
            </div>
          </section>
        </body>
  <script>
      // javascript to toggle the menu
    document.getElementById('nav-toggle').onclick = function(){
    document.getElementById("nav-content").classList.toggle("hidden");
    }
  </script>
    
</body>
</html>



