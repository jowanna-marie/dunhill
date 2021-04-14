<x-guest-layout>
    <div style="background-image: url({{asset('bg.jpg')}});" class="fixed bg-no-repeat bg-cover"> 
        <div class="flex flex-col w-screen h-screen">
            <div class="flex flex-row w-full h-24">
                @include('layouts.nav')
            </div>
            <!--END OF NAV-->
                <div class="flex items-center justify-center px-12 pb-20 mx-64 mt-24 bg-white rounded-3xl pt-14">
                    <div class="w-full h-12">
                        <h4 class="text-3xl font-bold text-center text-blue-900 uppercase"> Thank you for joining.</h4>
                        <h4 class="text-3xl font-bold text-center text-blue-900 uppercase"> Your raffle entry has been received. </h4>
                    </div>
                </div>
        </div>
    </div>
    </x-guest-layout>