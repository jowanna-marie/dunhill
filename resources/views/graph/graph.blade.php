<x-guest-layout>
<div style="background-image: url({{asset('Dunhill_background.jpg')}});" class="fixed bg-no-repeat bg-auto"> 
        <div class="bg-indigo-600 bg-opacity-75">
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
                <!-- GRAPH CONTAINER-->
                <div class="bg-gray-200 mx-64 px-4 p-2 mt-24">
                    <div class="grid grid-cols-2 gap-5">
                        <div class="shadow">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                        <div class="shadow">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                    </div>
                </div>
                <!--END GRAPH CONTAINER-->
            </div>            
        </div>
    </div>
</x-guest-layout>