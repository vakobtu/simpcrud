<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="font-sans antialiased">
        <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100  sm:pt-0">

            <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">



                <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        <!-- Title -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="title">
                                Title
                            </label>

                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="title" placeholder="180" value="{{old('title')}}">
                            @error('title')
                            <span class="text-red-600 text-sm">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700" for="description">
                                Description
                            </label>
                            <textarea name="post_text"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                rows="4" placeholder="400"> {{{old('description')}}}</textarea>
                            @error('description')
                            <span class="text-red-600 text-sm">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <br>
                        <select name="category_id" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class="flex items-center justify-start mt-4">
                            <button type="submit"
                                class="inline-flex items-center px-6 py-2 text-sm font-semibold rounded-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

