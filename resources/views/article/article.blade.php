<x-guest-layout>
<div style="background-image: url({{asset('bg.jpg')}});" class="fixed bg-no-repeat bg-cover">
    <div class="flex flex-col w-screen h-screen">
        <div class="flex flex-row w-full h-24">
            @include('layouts.nav')
        </div>
        <!--END OF NAV-->
        <div class="flex flex-col items-center justify-center w-auto h-auto pb-20 mx-40 mt-6">
            <div class="w-full text-white rounded-sm h-72" style="background-image: url('watch.jpg')">
                <div class="flex flex-col justify-end w-full h-full bg-indigo-600 bg-opacity-75">
                    <div class="flex flex-col justify-end w-screen h-screen">
                        <h2 class="pl-6 text-2xl font-bold pr-96 mr-72">
                            Behind the word mountains, far from the
                            countries Vokalia and Consonantia, there
                            live the blind texts.
                        </h2>
                        <span class="pt-10 pb-1 pl-6 text-xs">
                            credits to the owner
                        </span>
                    </div>
                </div>
            </div>
            <div class="flex flex-row w-auto h-auto font-semibold text-white">
                <div class="w-60 h-44" style="background-image: url('buildings.jpeg')">
                    <div class="flex flex-col justify-end w-full h-full bg-indigo-600 bg-opacity-75">
                        <div class="flex flex-col justify-end w-64 h-64 pb-5 pl-10">
                            Text Here
                        </div>
                    </div>
                </div>
                <div class="w-60 h-44" style="background-image: url('buildings.jpeg')">
                    <div class="flex flex-col justify-end w-full h-full bg-indigo-600 bg-opacity-75">
                        <div class="flex flex-col justify-end w-64 h-64 pb-5 pl-10">
                            Text Here
                        </div>
                    </div>
                </div>
                <div class="w-60 h-44" style="background-image: url('buildings.jpeg')">
                    <div class="flex flex-col justify-end w-full h-full bg-indigo-600 bg-opacity-75">
                        <div class="flex flex-col justify-end w-64 h-64 pb-5 pl-10">
                            Text Here
                        </div>
                    </div>
                </div>
                <div class="w-60 h-44" style="background-image: url('buildings.jpeg')">
                    <div class="flex flex-col justify-end w-full h-full bg-indigo-600 bg-opacity-75">
                        <div class="flex flex-col justify-end w-64 h-64 pb-5 pl-10">
                            Text Here
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>