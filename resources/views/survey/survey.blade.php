<x-guest-layout>
<div style="background-image: url({{asset('Dunhill_background.jpg')}});" class="bg-no-repeat bg-cover"> 
    <div class="flex flex-col w-screen h-screen">
        <div class="flex flex-row w-full h-24">
            @include('layouts.nav')
        </div>
        <!--END OF NAV-->
        <div class="px-10 pt-4 pb-2 mx-64 mt-16 bg-white rounded-3xl">
            <div class="w-auto h-auto">
                <div class="flex flex-row justify-start w-full h-auto border-b-2">
                    <h4 class="text-xs font-bold text-indigo-600 uppercase"> Survey Form Sample </h4>
                </div>
                <div class="flex flex-col">
                    <div class="grid grid-cols-3 gap-6 mt-4 text-xs font-semibold text-indigo-600 uppercase">
                        <div>
                            <h1 class="pl-3"> Screen Name </h1>
                            <input type="text" placeholder="Enter your nickname" class="w-full px-6 py-2 bg-gray-100 border border-gray-200 rounded-full"> 
                        </div>
                        <div>
                            <h1 class="pl-3"> Email</h1>
                            <input type="text" placeholder="Enter your e-mail" class="w-full px-6 py-2 bg-gray-100 border border-gray-200 rounded-full"> 
                        </div>
                        <div>
                            <h1 class="pl-3"> Website (Optional)</h1>
                            <input type="text" placeholder="http://" class="w-full px-6 py-2 bg-gray-100 border border-gray-200 rounded-full"> 
                        </div>
                    </div>
                    <div class="mt-4 text-sm font-semibold text-indigo-600">
                        <h1> Your Message </h1>
                        <input type="text" placeholder="" class="w-full h-40 px-6 py-2 bg-gray-100 border border-gray-200 rounded-xl"> 
                    </div>
                    <div class="flex items-center justify-center">
                        <input type="submit" name="submit" id="submit" class="w-64 h-10 px-6 mt-5 text-sm text-white uppercase bg-indigo-600 rounded-full"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>