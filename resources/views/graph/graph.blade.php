<x-guest-layout>
<div style="background-image: url({{asset('bg.jpg')}});" class="fixed bg-no-repeat bg-cover"> 
    <div class="w-full h-full">
            <div class="flex flex-col w-screen h-screen">
            <div class="flex flex-row w-full h-24 bg-black bg-opacity-50">
                <div class="flex-shrink-0 ml-12">
                    <a href="#">
                        <img src="{{asset('logo.png')}}" alt="" class="h-10 mt-8 w-60">
                    </a>
                </div>
                <!--NAV-->
                <div class="flex w-full h-8 mt-8 text-xs text-white uppercase border-b border-gray-200 border-opacity-25 ml-28 space-x-14">
                    <a href="#">Our Products</a>
                    <a href="#">Live</a>
                    <a href="#">Articles</a>
                    <a href="#">Surey</a>
                    <a href="#">About us</a>
                    <a href="#">Contact us</a>
                    <a href="#">Profile</a>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" class="pb-3">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>
                <!--END OF NAV-->
                <!-- GRAPH CONTAINER-->
                <div class="p-2 px-4 mx-64 mt-24 bg-gray-200">
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