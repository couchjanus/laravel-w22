<!--Nav-->
<nav id="header" class="w-full z-30 top-0 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" width="20" height="20"><use xlink:href="#menu"/></svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{route('home')}}">Shop</a></li>
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="#">About</a></li>
                    </ul>
                </nav>
            </div>

            <div class="order-1 md:order-2">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
                    <svg class="fill-current text-gray-800 mr-2" width="24" height="24"><use xlink:href="#flat-bag"/></svg>
                    SHOPAHOLIC
                </a>
            </div>

            

            <div class="order-2 md:order-3 flex items-center" id="nav-content">
            @if (Route::has('login'))
                @auth
                    <a class="inline-block no-underline hover:text-black" href="{{ url('/dashboard') }}">
                        <svg class="fill-current hover:text-black" width="24" height="24"><use xlink:href="#dashboard"/></svg>
                    </a>
                   
                @else                      
                    <a class="inline-block no-underline hover:text-black" href="{{ route('login') }}">
                        <svg class="fill-current hover:text-black" width="24" height="24"><use xlink:href="#sign-in"/></svg>
                    </a>
                @endauth
            @endif
                <a class="pl-3 inline-block no-underline hover:text-black" href="{{route('cart.index')}}">
                    <svg class="fill-current hover:text-black" width="24" height="24"><use xlink:href="#shopping-cart"/></svg>
                </a>

            </div>
        </div>
    </nav>