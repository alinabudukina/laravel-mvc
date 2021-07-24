<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<div class="bg-gray-200 h-screen overflow-hidden flex items-center justify-center">
    <div class="w-10/12 lg:w-9/12 xl:w-7/12 flex">
        <div class="w-full h-auto hidden lg:block lg:w-1/2 bg-cover rounded-lg lg:rounded-r-none"
            style="background-image: url('https://images.squarespace-cdn.com/content/v1/5cdd9cfdb7c92c72ce9614b3/1558032501091-U09MKFNFSGDCPLVV4JDE/076_COMMUNITY_CSD_AW1_PMS_OL.jpg?format=1000w')">
        </div>
        <div class="w-full lg:w-1/2 bg-white rounded-lg lg:rounded-l-none py-24 px-12">
            <h3 class="font-bold text-3xl text-red-600 text-center tracking-widest uppercase mb-4">Créer un post</h3>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form class="bg-white" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
              
            <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold" for="username">
                        Text
                    </label>
                    <input type="text" id="description" class="w-full p-3 text-md border rounded shadow focus:outline-none focus:shadow-outline" name="description" :value="old('name')" required autofocus />
                </div>
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold" for="validatedCustomFile">
                        Image
                    </label>
                    <input type="file" id="password" class="w-full p-3 text-md border rounded shadow focus:outline-none focus:shadow-outline" name="img_url" />
                </div>
                <div class="mb-4">
                    <button class="w-full p-3 font-bold text-white bg-red-500 rounded-full focus:outline-none" type="submit">
                        Partager
                    </button>
                </div>
                <hr class="mb-4 border-t" />
            </form>
        </div>
    </div>
</div> 

</body>
</html>


