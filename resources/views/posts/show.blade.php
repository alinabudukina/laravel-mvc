
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
  <!-- wrapper -->
<section class="m-2 font-sans leading-normal flex">

  <!-- card container -->
  <div class="max-w-lg shadow-lg rounded overflow-hidden m-4 sm:flex">
    <div class="h-48 sm:h-full:w-64 md:w-64 flex-none bg-cover bg-center rounded rounded-t sm:rounded sm:rounded-l text-center overflow-hidden" style="background-image: url('https://unsplash.it/804/800')">
    </div>
    
    <!-- card-content -->
     <div class="px-6 py-4">
      <h2 class="mb-2 font-black">{{$post->user->name}}</h2>
      <p class="mb-4 text-grey-dark text-sm">
      {{$post->description}}
       </p>
       
    </div>

  </div>
  
</section>
</body>
</html>