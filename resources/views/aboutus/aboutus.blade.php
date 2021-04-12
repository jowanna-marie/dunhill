<x-guest-layout>
<div style="background-image: url({{asset('Dunhill_background.jpg')}});" class="fixed bg-no-repeat bg-cover"> 
        <div class="bg-indigo-600 bg-opacity-75 h-full w-full">
            <div class="h-screen w-screen flex flex-col">
                <div class="flex flex-row h-24 w-full">
                    <div class="flex-shrink-0 ml-12">
                        <a href="#">
                            <img src="{{asset('Dunhill_logo.png')}}" alt="" class="w-60 h-10 mt-8">
                        </a>
                    </div>
                    <!--NAV-->
                    <div class="uppercase flex ml-28 space-x-14 mt-8 text-white text-xs border-b border-gray-200 border-opacity-25 h-8 w-full">
                        <a href="#">Dashboard</a>
                        <a href="#">Profile</a>
                        <a href="#">Live</a>
                        <a href="#">Articles</a>
                        <a href="#">Survey</a>
                        <a href="#">About us</a>
                        <a href="#">Contact us</a>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" class="pb-3">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                          </svg>
                    </div>
                </div>
                <!--END OF NAV-->
                <div class="pb-20 h-auto w-auto flex flex-col justify-center items-center mx-40">
                    <div class="h-72 w-full text-white rounded-sm" style="background-image: url('watch.jpg')">
                        <div class="bg-indigo-600 bg-opacity-75 h-full w-full flex flex-col justify-end">
                            <div class="w-screen h-screen flex flex-col justify-end">
                                <h2 class="font-bold text-2xl pl-6 pr-96 mr-72">
                                    Behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there
                                    live the blind texts.
                                </h2>
                                <span class="pl-6 pb-1 pt-10 text-xs">
                                    credits to the owner
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 text-white font-semibold">
                        <div class="h-44 w-auto" style="background-image: url('buildings.jpeg')">
                            <div class="bg-indigo-600 bg-opacity-75 h-full w-full flex flex-col justify-end">
                                <div class="w-64 h-64 flex flex-col justify-end pl-10 pb-5">
                                    Text Here
                                </div>
                            </div>
                        </div>
                        <div class="h-44 w-auto" style="background-image: url('buildings.jpeg')">
                            <div class="bg-indigo-600 bg-opacity-75 h-full w-full flex flex-col justify-end">
                                <div class="w-64 h-64 flex flex-col justify-end pl-10 pb-5">
                                    Text Here
                                </div>
                            </div>
                        </div>
                        <div class="h-44 w-auto" style="background-image: url('buildings.jpeg')">
                            <div class="bg-indigo-600 bg-opacity-75 h-full w-full flex flex-col justify-end">
                                <div class="w-64 h-64 flex flex-col justify-end pl-10 pb-5">
                                    Text Here
                                </div>
                            </div>
                        </div>
                        <div class="h-44 w-auto" style="background-image: url('buildings.jpeg')">
                            <div class="bg-indigo-600 bg-opacity-75 h-full w-full flex flex-col justify-end">
                                <div class="w-64 h-64 flex flex-col justify-end pl-10 pb-5">
                                    Text Here
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>
   
</x-guest-layout>