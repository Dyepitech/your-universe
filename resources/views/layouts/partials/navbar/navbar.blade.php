<div class="containerLeft">
            <header>
                <div class="headerTop">
                    <img src="../../img/Logo_fond_fonce.png" alt="Une manette jeu en logo">
                    <h1 class="fontTitle">Your Universes</h1>
                </div>
                    <nav>
                        <ul class="menu">
                            <a href="{{ route('home.index') }}"><li><i class="fa-solid fa-house"></i>Accueil</li></a>
                            <li><i class="fa-solid fa-star"></i>Avis</li>
                            <li><i class="fa-solid fa-hand-spock"></i>Actualités</li>
                            <li><i class="fa-solid fa-fire"></i>Bons plans</li>
                        </ul>
                        @auth
                            {{auth()->user()->name}}
                            <a href="{{ route('logout.perform') }}"><input class="connected" type="submit" value="Déconnexion"></a>
                        @endauth
                        @guest
                            <a href="{{ route('login.perform') }}"><input class="connected" type="submit" value="Connexion"></a>
                            <a href="{{ route('register.perform') }}"><input class="connected" type="submit" value="Incription"></a>
                        @endguest
                    </nav>
                    
            </header>
        </div>
</div>