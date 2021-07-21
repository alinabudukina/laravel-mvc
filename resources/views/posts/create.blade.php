<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="card-header">Créer un post</div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name"> Description </x-label>
                <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('name')" required autofocus />
            </div>

            <!-- Ajouter une photo -->
            <div class="form-group">
                <div class="custom-file">
                <input type="file" name="img_url" class="custom-file-input" id="validatedCustomFile">
                <label class="custom-file-label" for="validatedCustomFile">Choisir une image</label>
            </div>

            <!-- Button -->
            <x-button type="submit" class="btn btn-primary">
                Partager
            </x-button>

        </form>
    </x-auth-card>
</x-guest-layout>