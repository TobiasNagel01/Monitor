<div class="hidden w-28 bg-indigo-700 overflow-y-auto md:block">
    <div class="w-full py-6 flex flex-col items-center">
        <a href="#" class="flex flex-col items-center">
            <img class="h-8 w-auto invert mx-auto" src="{{asset('img/spine-logo.svg')}}" alt="Logo">
            <p class="text-white font-bold text-xl text-center">SPINE</p>
            <span class="inline-flex items-center rounded bg-white px-2 py-0.5 text-xs font-medium text-gray-800">BETA</span>
        </a>
        <div class="flex-1 mt-6 w-full px-2 space-y-1">
            <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-800 hover:text-white" -->
            <a href="#"
               class="text-indigo-100 hover:bg-indigo-800 hover:text-white group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
                <!--
                  Current: "text-white", Default: "text-indigo-300 group-hover:text-white"
                -->
                <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-300 group-hover:text-white h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span class="mt-2">Container</span>
            </a>
        </div>

        <a href="https://mintellity.com" class="items-center absolute bottom-0 pb-2">
            <p class="text-white text-xs text-center">powered by</p>
            <img class="h-5 w-auto" src="{{asset('img/mintellity-logo.png')}}" alt="Logo">
        </a>
    </div>
</div>
