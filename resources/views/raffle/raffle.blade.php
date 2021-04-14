<x-guest-layout>
    <div style="background-image: url({{asset('bg.jpg')}});" class="fixed bg-no-repeat bg-cover"> 
        <div class="flex flex-col w-screen h-screen">
            <div class="flex flex-row w-full h-24">
                @include('layouts.nav')
            </div>
            <!--END OF NAV-->
                <div class="flex items-center justify-center mt-24 bg-white mx-96 rounded-3xl">
                    <div class="flex-row w-auto h-auto pb-16">
                        <x-jet-input id="transactionNum" class="block mt-1" type="text" name="transNum" :value="old('text')" placeholder="Transaction Number" class="block placeholder-gray-900 bg-gray-300 border border-gray-300 rounded-full mt-14 form-input w-96" required autofocus />
                        <x-jet-input id="uploadReciept" class="block mt-1" type="text" name="upload" :value="old('text')" placeholder="Upload Reciept" class="block mt-10 placeholder-gray-900 bg-gray-300 border border-gray-300 rounded-full form-input w-96" required autofocus />
                        <button class="h-10 font-bold text-white uppercase bg-indigo-400 rounded-full mt-14 w-96">
                            Join Now
                        </button>
                    </div>
                </div>
        </div>
    </div>
    </x-guest-layout>