<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Edit') }}
        </h2>
    </x-slot>

    <div >
        <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100  sm:pt-0">
          <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
            <div class="mb-4">

            </div>

            <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
              <form method="POST" action="{{ route('categories.update', $category) }}">
                <!-- Title -->
                @method('PUT')
                  @csrf
                <div>
                  <label class="block text-sm font-bold text-gray-700" for="title">
                    Name
                  </label>

                  <input
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    type="text" name="name" placeholder="180" value="{{ $category->name }}" />
                </div>

                <!-- Description -->

                <div class="flex items-center justify-start mt-4 gap-x-2">
                  <button type="submit"
                    class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300" type="submit">
                    Update
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>
