<x-guest-layout>
    <div style="background-image: url({{asset('bg.jpg')}});" class="fixed bg-no-repeat bg-cover"> 
        <div class="flex flex-col w-screen h-screen">
            <div class="flex flex-row w-full h-24">
                @include('layouts.nav')
            </div>
            <!--END OF NAV-->
                <div class="flex items-center justify-center px-20 py-40 mx-64 mt-24 bg-white rounded-3xl">
                    <div class="flex items-center justify-center w-full h-24 font-black text-blue-700 uppercase">
                        <h4 class="text-2xl"> Video Placeholder </h4>
                    </div>
                </div>
        </div>
    </div>
    </x-guest-layout>