<nav :class="{ 'flex': open, 'hidden': !open } " 
    class=" flex z-1  w-full flex-row items-center justify-between gap-4 border-b border-gray-100 bg-[#1f2225] py-4 px-20">
    
    <div class="flex items-center w-full">

        <button @click="open = !open"
            class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    

        <div class="flex items-center align md:space-x-4  w-full justify-between">
            <div class="p-3 flex flex-row text-white items-center gap-3">
                <img src="{{ url('/images/logo.svg') }}" class="h-[2rem] filter invert-[60%] sepia-[100%] saturate-[800%] hue-rotate-[175deg]" alt="Image" />
                <h1 class="text-[24px]">FreeAppz</h1>
            </div>


            <x-tutorial.channelName.alert />
        </div>
    </div>



</nav>

