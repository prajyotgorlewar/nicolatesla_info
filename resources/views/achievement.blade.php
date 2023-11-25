@extends('layouts.app')

@section('page-content')
<div class="bg-white text-black p-4 pt-16 flex items-center justify-center">
    <div class="flex flex-col items-center w-full max-w-5xl">
        <!-- Nikola Tesla's Contributions -->
        <section class="mb-8 mt-8 ">
            <h2 class="text-3xl font-bold mb-4">Contributions</h2>
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-10">
                <!-- Image and brief description for each contribution -->
                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://waveguide.blog/wp-content/uploads/2018/05/tesla-conical-electrical-transformer-patent-1897-1-768x639.png" alt="Contribution 1" class="w-full h-40 object-cover mb-2 rounded">
                    <p class="text-sm">AC Power Transmission</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/62/Teslacoil.jpg" alt="Contribution 1" class="w-full h-40 object-cover mb-2 rounded">
                    <p class="text-sm">Tesla Coil and Radio Waves</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://pbs.twimg.com/media/Ez8CQ18WEAoLu2c?format=jpg&name=small" alt="Contribution 1" class="w-full h-40 object-cover mb-2 rounded">
                    <p class="text-sm">X-rays</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://www.bluebird-electric.net/Bluebird_Boats_Ships_Systems/Autonomous_Robotic_Systems_Pictures/tesla-radio-controlled-boat-nikola-1898-patent-invention.jpg" alt="Contribution 1" class="w-full h-40 object-cover mb-2 rounded">
                    <p class="text-sm">Remote Control</p>
                </div>
                <!-- Repeat for other contributions -->
            </div>
        </section>

        <!-- Nikola Tesla's Inventions -->
        <section class="mb-8">
            <h2 class="text-3xl font-bold mb-4">Inventions</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-20">
                <!-- Image and brief description for each invention -->
                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRF5sj6bd_f5MnWqQPePx8ArAptBOs6xH5t-A&usqp=CAU" alt="Invention 1" class="w-full  h-40 object-cover mb-2 rounded">
                    <p class="text-sm">Alternating Current</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src = "{{asset('images/tesla.jpeg')}}"class = "w-full h-40 object-cover mb-2 rounded">
                    <p class="text-sm">Tesla Coil</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://lirp.cdn-website.com/dccc2399/dms3rep/multi/opt/nikola+tesla-s+induction+motor-640w.jpg" alt="Invention 3" class="w-full h-40 object-cover mb-2 rounded">
                    <p class="text-sm">Induction Motor</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkTSnO1yvCcGkdStqblUa9PcRq6xJw5w8ptQ&usqp=CAU" alt="Invention 1" class="w-full h-40 object-cover mb-2 rounded">
                    <p class="text-sm">Tesla Turbine</p>
                </div>
                <!-- Repeat for other inventions -->
            </div>
        </section>

        <!-- Nikola Tesla's Awards -->
        <section class="mb-8">
            <h2 class="text-3xl font-bold mb-4">Awards</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-20">
                <!-- Image and brief description for each award -->
                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src = "{{asset('images/edisonmedal.png')}}"class = " w-full h-50 object-cover mb-2 rounded">
                    <p class="text-md"><br>Edison Medal<br> (1917)</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src = "{{asset('images/eagle.png')}}"class = " w-full h-45 object-cover mb-2 rounded">
                    <p class="text-md mt-4">Order of the White Eagle <br>(Serbia, 1892)</p>
                </div>
                <!-- Repeat for other awards -->
            </div>
        </section>

    </div>
</div>
@endsection


