<x-guest-layout>
<div class="bg-cover bg-no-repeat h-screen w-screen flex" style="background-image: url({{asset('Dunhill_background.jpg')}});">
        <div class="flex flex-col w-full h-full justify-center items-center">
            <img src="{{asset('Dunhill_logo.png')}}" alt="logo" class="w-80 mb-2">
            <div class="h-96 w-96">
                <div class="grid grid-cols-2">
                    <button id="btnLogin" class="p-6 bg-white text-gray-800 flex items-center justify-center font-bold focus:outline-none" onclick="ChangeTabAuth('bodyLogin')">
                        LOGIN
                    </button>
                    <button id="btnRegister" class="p-6 bg-gray-800 text-white flex items-center justify-center font-bold focus:outline-none" onclick="ChangeTabAuth('bodyRegister')">
                        REGISTER
                    </button>
                </div>

                <div id="bodyLogin" class="block h-full bg-white rounded-b-xl">
                    <div class="flex flex-col justify-center items-center">
                         <br>
                         <input type="text" name="Email" id="email" placeholder="Email" class="form-input p-2 block w-80 border border-gray-900 placeholder-gray-900"> 
                         <br>
                         <input type="password" placeholder="Password" class="form-input p-2 block w-80 border border-gray-900 placeholder-gray-900">
                     </div>
                
                     <div class="flex flex-col justify-center items-center mt-6 bg-gray-800 w-80 mx-8 p-2">
                         <a href="#" class="text-white"> ENTER </a>
                     </div>
                
                     <div class="flex flex-col justify-center items-center mt-4">
                         <a href="#"> Forgot Password? </a>
                     </div>
                </div>

                <div id="bodyRegister" class="hidden">
                    <div class="flex flex-col justify-center items-center h-full bg-white rounded-b-xl">
                        <input type="text" name="name" id="name" placeholder="Name" class="mt-2 form-input p-2 block w-80 border border-gray-900 placeholder-gray-900"> 
                        <input type="text" name="email" id="email" placeholder="Email Address" class=" form-input p-2 block w-80 border border-gray-900 placeholder-gray-900"> 
                        <input type="text" name="cnumber" id="cnum" placeholder="Contact Number" class=" form-input p-2 block w-80 border border-gray-900 placeholder-gray-900">
                        <input type="text" name="add" id="add" placeholder="Address" class=" form-input p-2 block w-80 border border-gray-900 placeholder-gray-900"> 
                        <input type="date" name="bday" id="bday" placeholder="Birthdate" class=" form-input p-2 block w-80 border border-gray-900 placeholder-gray-900"> 
                        <input type="password" placeholder="Password" class=" form-input p-2 block w-80 border border-gray-900 placeholder-gray-900">
                        <input type="password" placeholder="Repeat Password" class=" form-input p-2 block w-80 border border-gray-900 placeholder-gray-900">
                        <div class="flex flex-col justify-center items-center mt-2 bg-gray-800 w-80 mx-8 p-2">
                            <a href="#" class="text-white"> REGISTER </a>
                        </div>
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox">
                            <span class="ml-2">I agree to the terms & conditions </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function ChangeTabAuth(collapseID)
        {
            if(collapseID == 'bodyLogin')
            {
                document.getElementById('btnLogin').classList.remove('bg-gray-800','text-white');
                document.getElementById('btnLogin').classList.add('bg-white','text-gray-800');
                document.getElementById('btnRegister').classList.add('bg-gray-800','text-white');
                document.getElementById('btnRegister').classList.remove('bg-white','text-gray-800');
                document.getElementById(collapseID).classList.remove('hidden');
                document.getElementById(collapseID).classList.add('block');
                document.getElementById('bodyRegister').classList.remove('block');
                document.getElementById('bodyRegister').classList.add('hidden');
            } else {
                document.getElementById('btnRegister').classList.remove('bg-gray-800','text-white');
                document.getElementById('btnRegister').classList.add('bg-white','text-gray-800');
                document.getElementById('btnLogin').classList.add('bg-gray-800','text-white');
                document.getElementById('btnLogin').classList.remove('bg-white','text-gray-800');
                document.getElementById(collapseID).classList.remove('hidden');
                document.getElementById(collapseID).classList.add('block');
                document.getElementById('bodyLogin').classList.remove('block');
                document.getElementById('bodyLogin').classList.add('hidden');
            }
            
        }
    </script>
</x-guest-layout>