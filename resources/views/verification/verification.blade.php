<x-guest-layout>
<div style="background-image: url({{asset('bg.jpg')}});" class="fixed bg-no-repeat bg-cover"> 
    <div class="flex flex-col w-screen h-screen">
        <div class="flex flex-row w-full h-24">
            @include('layouts.nav')
        </div>
        <!--END OF NAV-->
            <div class="flex items-center justify-center px-20 pb-40 mx-64 mt-24 bg-white rounded-3xl pt-14">
                <div class="w-full h-12">
                    <h4 class="text-2xl">A verification email has been sent to your email address, please check your email. If you haven't receive and email please click here to resend <span class="text-purple-600"> email verificaiton. </span> </h4>
                </div>
            </div>
    </div>
</div>
</x-guest-layout>