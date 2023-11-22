@extends('layouts.app')

@section('page-content')
<div class="bg-black text-white p-4 pt-16 flex items-left justify-left" style="margin-top: 30px;">
    <div class="flex flex-col items-left">
        <h1 class="text-4xl font-bold mb-8 ">History of Nikola Tesla</h1>

        <p class="mb-4">
            Nikola Tesla, born on July 10, 1856, in the village of Smiljan (modern-day Croatia), was a Serbian-American inventor, electrical engineer, and futurist. His contributions to the development of modern electrical systems and technology have left an indelible mark on the world.
        </p>
        <div class="flex">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Tesla_1879_teslauniverse.jpg/330px-Tesla_1879_teslauniverse.jpg" alt="Logo" class="w-full md:w-80 lg:w-96 object-cover rounded-xl border-4 border-white">
            <p class="ml-4 flex-grow">
                Tesla's early life saw his fascination with mechanics and engineering. After studying at the Technical University of Graz and the University of
                Prague, he worked in telephony and electrical engineering in Europe before moving to the United States in 1884. There, he collaborated briefly with
                Thomas Edison, but their differing views on electrical systems led to a parting of ways.<br><br>
                Tesla's groundbreaking work began with the development of alternating current (AC) electrical systems. His patents and innovations laid the foundation
                for the modern power distribution grid. The "War of Currents" between proponents of AC and direct current (DC) showcased Tesla's AC as the more
                efficient and practical solution.<br><br>
                In the late 19th century, Tesla's inventive genius flourished. He developed the Tesla Coil, a resonance transformer circuit that is still used in radio
                technology. He also explored wireless transmission of energy and communication, envisioning a world where power could be transmitted without wires. His
                dream of a global wireless communication system predates modern concepts of the internet and wireless technology.<br><br>
                Tesla's most ambitious project, Wardenclyffe Tower, aimed to demonstrate wireless transmission of power. Financial difficulties led to the project's
                abandonment, but Tesla's vision for wireless technology paved the way for the development of radio and laid the conceptual groundwork for technologies
                like Wi-Fi and mobile communication.<br><br>
                Despite his brilliance, Tesla faced financial challenges and lived out his later years in relative obscurity. He continued to work on various inventions,
                including turbine engines and renewable energy sources. He passed away on January 7, 1943, in New York City.<br><br>
            </p>
        </div>

        <p class="mt-4">
            Tesla's legacy gained recognition posthumously as his ideas and inventions became crucial to the development of the 20th-century technological landscape. His concepts of wireless communication, renewable energy, and the Tesla Coil continue to influence scientific and engineering fields. The unit of magnetic flux density, the tesla, was named in his honor.
        </p>

        <p class="mt-4">
            In popular culture, Tesla is often portrayed as a visionary and eccentric inventor. His life has inspired numerous books, documentaries, and even an electric car company, Tesla, Inc., which embraces his name to symbolize innovation in the 21st century.
        </p>

        <p>
            Nikola Tesla's life journey from a small village to a pioneering force in electrical engineering reflects a relentless pursuit of knowledge and a visionary approach to technology. His legacy endures as a testament to the power of imagination and innovation.
        </p>
    </div>
</div>
@endsection
