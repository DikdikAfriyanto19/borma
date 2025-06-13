 <nav class="bg-gray-800" x-data="{ isOpen: false }">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="shrink-0">
              <img class="size-8" src="img/borma.jpg" alt="Your Company">
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <x-link  href="/" :active="request()->is('/')">Home</x-link>
                <x-link  href="promosi" :active="request()->is('promosi')">Promosi  </x-link>
                <x-link  href="/event" :active="request()->is('event')">Event</x-link>
                <x-link  href="/layanan" :active="request()->is('layanan')">Layanan</x-link>
                <x-link  href="/tentang" :active="request()->is('tentang')">Tentang Kami</x-link>

                @if (Route::has('login'))
              
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                           
                        >
                            Dashboard
                        </a>
                    @else
                           
                       <div class=" ml-130 flex ">
                         <x-link href="{{ route('login') }}">Login</x-link>

                        @if (Route::has('register'))

                          <x-link href="{{ route('register') }}"> Register</x-link>      
                               
                        @endif
                       </div>
                       
                    @endauth
                
            @endif

                 
                
              </div>
              
            </div>
          </div>
          
          <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu button -->
            <button @click="isOpen = !isOpen" type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!-- Menu open: "hidden", Menu closed: "block" -->
              <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!-- Menu open: "block", Menu closed: "hidden" -->
              <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
  
      <!-- Mobile menu, show/hide based on menu state. -->
      <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <x-nav-link  href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-link  href="/promosi" :active="request()->is('promosi')">Promosi</x-link>
                <x-link  href="/event" :active="request()->is('event')">Event</x-link>
                <x-link  href="/layanan" :active="request()->is('layanan')">Layanan</x-link>
                <x-link  href="/tentang" :active="request()->is('tentang')">Tentang Kami</x-link>
          
        </div>
        
      </div>
    </nav>