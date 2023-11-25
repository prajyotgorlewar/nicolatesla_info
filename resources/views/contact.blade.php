@extends('layouts.app')

@section('page-content')
<div class="bg-gray-100 text-black p-20 mt-40 mb-20">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <div class="flex items-center justify-center mb-8">
            <img src="https://3.bp.blogspot.com/-HVynNkwHDoM/V-X5e6ehmMI/AAAAAAAALJQ/KTEYl_1WgUk0boE5pmnRfXPTvNHWtBAVgCLcB/s1600/nikola_tesla_last_image.jpg" alt="Nikola Tesla" class="w-32 h-32 rounded-full mr-4">
            <div>
                <h1 class="text-4xl font-bold">Nikola Tesla</h1>
                <p class="text-gray-600">Inventor, Electrical Engineer, Futurist</p>
            </div>
        </div>

        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="h-6 w-6 text-gray-500 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 14l9-5-9-5-9 5 9 5z"></path>
        </svg>
        <p class="text-gray-700">New York City, United States</p>
    </div>

    <div class="flex items-center mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
        class="h-6 w-6 text-gray-500 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M12 14l9-5-9-5-9 5 9 5z"></path>
    </svg>
    <p class="text-gray-700">Nikola Tesla Museum, Belgrade, Serbia</p>
</div>

<div class="flex items-center mb-6">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
    class="h-6 w-6 text-gray-500 mr-2">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
    d="M12 14l9-5-9-5-9 5 9 5z"></path>
</svg>
<p class="text-gray-700">Parish hall, Croatia</p>
</div>

<div class="flex items-center justify-center">
    <a href="https://en.wikipedia.org/wiki/Nikola_Tesla" class="text-blue-500 hover:underline">
        Visit Tesla's Wekipedia page
    </a>
</div>
</div>
</div>
@endsection
