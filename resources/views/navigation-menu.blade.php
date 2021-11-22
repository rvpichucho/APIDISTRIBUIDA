<div class="flex" style="font-family: Arial;" x-data="{ open: true }">
       
        <div class="w-full z-10">
            <div
                class="sticky top-0 bg-blue-900 header bg-white h-14 px-10 py-4 border-b-4 border-purple-900 flex items-center justify-between">
                <div class="flex items-center space-x-12 text-sm">
                    <i class="hover:text-purple text-xl fas fa-bars font-thin cursor-pointer text-white"
                        @click="open = !open"></i>
                    <a href=""
                        class="hover:text-purple-400 text-white  tracking-wider font-thin"><span>Dashboard</span></a>
                        <a href="{{ route('derivada') }}" :active="request()->routeIs('derivada')"
                            class="h-12 px-4 py-3 text-white tracking-wider block bg-red-600 font-thin border-b-2 border-purple-800 hover:text-purple-800 hover:bg-white">{{ __('Resolver Derivada') }}</a>
                        <a href="{{ route('ecuacion') }}" :active="request()->routeIs('ecuacion')"
                            class="h-12 px-4 py-3 text-white tracking-wider block bg-red-600 font-thin border-b-2 border-purple-800 hover:text-purple-800 hover:bg-white">{{ __('Resolver Ecuación') }}</a>
                </div>
                <div class="flex items-center space-x-8 text-gray-400 text-base px-4 py-2">
                    <span class="relative inline-block cursor-pointer">
                        <i class="fas fa-bell font-thin"></i>
                        <span
                            class="absolute top-0 right-0 inline-flex items-center justify-center px-1  py-0.5 text-xs font-thin leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">99</span>
                    </span>
                    <span class="relative inline-block cursor-pointer">
                        <i class="fas fa-list font-thin"></i>
                        <span
                            class="absolute top-0 right-0 inline-flex items-center justify-center px-1 py-0.5 text-xs font-thin leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-purple-600 rounded-full">99</span>
                    </span>
                    <span class="relative inline-block cursor-pointer">
                        <i class="fas fa-envelope font-thin"></i>
                        <span
                            class="absolute top-0 right-0 inline-flex items-center justify-center px-1 py-0.5 text-xs font-thin leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-yellow-600 rounded-full">9</span>
                    </span>
                    <i class="fas fa-user-circle fa-lg font-thin cursor-pointer"></i>
                    <i class="fas fa-cog fa-2x font-thin text-white cursor-pointer animate animate-spin hover:text-green-500"
                        style="animation-duration: 7000ms;"></i>
                </div>
            </div>
            
            
        </div>
    </div>