<x-guest-layout>
<div style="background-image: url({{asset('Dunhill_background.jpg')}});" class="bg-no-repeat bg-cover"> 
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
                <div class="bg-white mx-64 rounded-3xl px-10 pt-4 pb-2 mt-16">
                    <div class="w-auto h-auto">
                        <div class="border-b-2 flex flex-row justify-start w-full h-auto">
                            <h4 class="text-indigo-600 text-xs font-bold uppercase"> Survey Form Sample </h4>
                        </div>
                        <div class="flex flex-col">
                            <div class="grid grid-cols-3 gap-6 text-indigo-600 uppercase text-xs font-semibold mt-4">
                                <div>
                                    <h1 class="pl-3"> Screen Name </h1>
                                    <input type="text" placeholder="Enter your nickname" class="w-full border border-gray-200 rounded-full py-2 px-6 bg-gray-100"> 
                                </div>
                                <div>
                                    <h1 class="pl-3"> Email</h1>
                                    <input type="text" placeholder="Enter your e-mail" class="w-full border border-gray-200 rounded-full py-2 px-6 bg-gray-100"> 
                                </div>
                                <div>
                                    <h1 class="pl-3"> Website (Optional)</h1>
                                    <input type="text" placeholder="http://" class="w-full border border-gray-200 rounded-full py-2 px-6 bg-gray-100"> 
                                </div>
                            </div>
                            <div class="mt-4 text-indigo-600 font-semibold text-sm">
                                <h1> Your Message </h1>
                                <input type="text" placeholder="" class="border border-gray-200 rounded-xl py-2 px-6 bg-gray-100 w-full h-40"> 
                            </div>
                            <div class="flex justify-center items-center">
                                <input type="submit" name="submit" id="submit" class="bg-indigo-600 text-white text-sm rounded-full uppercase w-64 h-10 mt-5 px-6"> 
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>            
        </div>
    </div>
</x-guest-layout>