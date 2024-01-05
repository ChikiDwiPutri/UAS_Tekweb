<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('search') }}" method="GET" class="mb-4">
                        <div class="flex items-center">
                            <input type="text" name="query" placeholder="Cari hewan/artikel" class="rounded-l-lg p-2 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white">
                            <button type="submit" class="px-8 rounded-r-lg bg-blue-500 text-white border border-blue-500 border-r-0 border-t border-b hover:bg-blue-400">Cari</button>
                        </div>
                    </form>

                    <!-- Gambar di Dashboard dengan Deskripsi -->
                    <div class="flex items-center mt-4">
                        <div class="w-80 mr-4">
                            <img src="images/artikel 1.png" alt="click for more article" class="w-full">
                        </div>
                        <p class="text-brown-900"> Discover the world of animals
through our collection of articles.
Let's explore interesting stories,
animal care tips,
and the latest information about adoption.
Happy reading!</p>
                    </div>


                    <div class="flex items-center mt-4">
                        <div class="w-60 mr-4">
                            <img src="images/artikel 2.png" alt="click for more article" class="w-full">
                        </div>
                        <p class="text-brown-900 mt-2">5 Tips for Choosing Cat Food According to Your Needs and Content.
 Don't be careless!</p>
                    </div>


                    <!-- Daftar Fitur -->
                    <ul class="mt-4">
                        <!-- Daftar Fitur -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
