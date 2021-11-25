<div class="flex" style="font-family: Arial;" x-data="{ open: true }">

    <div class="w-full z-10">
        <div class="sticky top-0 bg-blue-900 header bg-white h-14 px-10 py-4 border-b-4 border-purple-900 flex items-center justify-between">
            <div class="flex items-center space-x-12 text-sm">
                <i class="hover:text-purple text-xl fas fa-bars font-thin cursor-pointer text-white" @click="open = !open"></i>
                <a href="" class="hover:text-purple-400 text-white  tracking-wider font-thin"><span>Dashboard</span></a>
                <a href="{{ route('derivada') }}" :active="request()->routeIs('derivada')" class="h-12 px-4 py-3 text-white tracking-wider block bg-red-600 font-thin border-b-2 border-purple-800 hover:text-purple-800 hover:bg-white">{{ __('Resolver Derivada') }}</a>
                <a href="{{ route('ecuacion') }}" :active="request()->routeIs('ecuacion')" class="h-12 px-4 py-3 text-white tracking-wider block bg-red-600 font-thin border-b-2 border-purple-800 hover:text-purple-800 hover:bg-white">{{ __('Resolver Ecuación') }}</a>
            </div>
            <img src="{{ asset('images/img.png') }}" class="h-24 mx-auto md:h-13 md:-mt-5" alt="">
        </div>
    </div>
</div>