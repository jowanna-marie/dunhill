<x-guest-layout>
<div style="background-image: url({{asset('bg.jpg')}});" class="fixed bg-no-repeat bg-cover"> 
    <div class="flex flex-col w-screen h-screen">
        <div class="flex flex-row w-full h-24">
            @include('layouts.nav')
        </div>
        <!--END OF NAV-->
        <div class="flex flex-row items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" class="w-10 h-10 ml-32 mt-52">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <div class="flex items-center justify-center p-24 mx-16 mt-24 bg-white rounded-3xl">
                <div class="w-full h-12 px-20">
                    <h1 class="text-3xl font-bold">Article title place here</h1>
                    <h4>far from the countries Vokalia and Consonantia, there live the blind texts. </h4>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" class="w-10 h-10 mr-32 mt-52">
                <path strokeLinecap="round" strokeLinejoin="round" stroke-Width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>
        <div class="flex items-center justify-center">
            <button class="h-12 mt-16 text-3xl font-black text-blue-700 uppercase bg-white border-white rounded-full w-80">
                Join the raffle
            </button>
        </div>
    </div>
</div>
</x-guest-layout>