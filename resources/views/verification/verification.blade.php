<x-guest-layout>
<div style="background-image: url({{asset('Dunhill_background.jpg')}});" class="fixed bg-no-repeat bg-cover"> 
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
                    <div class="bg-white flex justify-center items-center mx-64 rounded-3xl px-20 pt-14 pb-40 mt-24">
                        <div class="w-full h-12">
                            <h4 class="text-2xl">A verification email has been sent to your email address, please check your email. If you haven't receive and email please click here to resend <span class="text-purple-600"> email verificaiton. </span> </h4>
                        </div>
                    </div>

            
            </div>            
        </div>
    </div>
</x-guest-layout>