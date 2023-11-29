<header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md">
    <div class="flex-1 flex justify-between items-center">
        <a href="#" class="text-xl">Platform-Management-Events-Reservation</a>
    </div>

    <label for="menu-toggle" class="pointer-cursor md:hidden block">
      <svg class="fill-current text-gray-900"
        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
        <title>Jobs-Events</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />

    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
        <nav>
            <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
            @auth
                <li><a href="{{ route('home') }}" class="md:mr-5 py-2 md:py-0">Mon compte</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:text-green-400 ">Se déconnecter</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @else
                <li><a class="md:p-4 py-3 px-0 block" href="/index">Acceuil</a></li>
                <li><a class="md:p-4 py-3 px-0 block" href="#">A propos</a></li>
                <li><a class="md:p-4 py-3 px-0 block" href="#">Nos événements</a></li>
                <li><a class="md:p-4 py-3 px-0 block md:mb-0 mb-2" href="#">Contact Us</a></li>
                <li><a href="{{ route('login') }}" class="md:mr-5 py-2 md:py-0">Se connecter</a></li>
                <li><a href="{{ route('register') }}" class="md:mr-5 py-2 md:py-0">S'enregistrer</a></li>
            @endauth
            </ul>
        </nav>
    </div>
</header>
   