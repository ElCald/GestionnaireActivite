<!DOCTYPE html>
<html>

<head>
  <title>@yield('titre')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

  <nav class="navbar has-shadow">
    <div class="navbar-brand">
      <a href="#" class="navbar-item">
        <p class="has-text-link has-text-weight-bold">LOGO</p>
      </a>
      <a class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </div>
    <div class="navbar-menu is-active" id="navMenu">
      <div class="navbar-start">
        <!--<a href="/" class="navbar-item">Connexion</a>
        <a href="/register" class="navbar-item">Inscription</a>-->
        <a href="{{url('/')}}" class="navbar-item">Accueil</a>
      </div>
      {{-- @yield('navbar') --}}
      <div class="navbar-end mr-6">
        <div class="navbar-item has-dropdown is-hoverable">
    
            <div class="navbar-link">Mon Compte @auth {{@Auth::user()->name}} @endauth</div>
        
    
            <div class="navbar-dropdown">
    
                <form id="formLogout" action="{{url('/logout')}}" method="POST">@csrf</form>
    
                <div>
                    <span class="is-flex is-justify-content-left is-flex-wrap-wrap">
                        @auth
                        <button type="submit" form="formLogout" class="button is-white">
                            Déconnexion
                        </button>
    
                        @else
                        <a href="{{ url('/login') }}" class="button is-white">
                            Connexion
                        </a>
                        <a href="{{ url('/register') }}" class="button is-white">
                            Création d'un compte
                        </a>
                        @endauth
    
                        @auth
                        <!-- Ajouter activite enfant pour ADMIN -->
                        @if(Auth::user()->admin==true)
                        <!-- Ajouter activite pour ADMIN -->
                        <button class="button is-white" type="submit">
                            <a href="{{route('activite.create')}}" class="has-text-black">
                                Ajouter une activité
                            </a>
                        </button>
                        @endif
                        <!-- Ajouter enfant pour ADMIN -->
                        <button class="button is-white" type="submit">
                            <a href="{{route('enfant.create')}}" class="has-text-black">
                                Ajouter un enfant
                            </a>
                        </button>
                        @endauth

                        @auth
                        @if(Auth::user()->admin==true)
                        <button class="button is-white" type="submit">
                            <a href="{{url('enfant')}}" class="has-text-black">
                                Voir enfants
                            </a>
                        </button>
                        <button class="button is-white" type="submit">
                            <a href="{{url('activite')}}" class="has-text-black">
                                Voir activites
                            </a>
                        </button>
                        @endif
                        @endauth
                        
                    </span>
                </div>
            </div>
        </div>
    </div>
    </div>
  </nav>

  <!-- TITRE -->
  <div class="mb-0 box has-text-centered has-background-link">
    <div class="title is-1 has-text-white">@yield('titre')</div>
  </div>
  <!-- FIN TITRE -->
  @yield('content')
  <!-- -------------------------------------------------------------------- -->

  <!--

░█▀▀░█▀█░█▀█░▀█▀░█▀▀░█▀▄
░█▀▀░█░█░█░█░░█░░█▀▀░█▀▄
░▀░░░▀▀▀░▀▀▀░░▀░░▀▀▀░▀░▀

  -->

  <footer class="footer ">

    <div class="content has-text-centered">
      <p>Copyright © Boulogne-Sur-Mere </p>

    </div>

    <div class="columns">

      <div class="column">


        <h4 class="bd-footer-title 
                 has-text-weight-medium
                 has-text-left">
          Boulogne-Sur-Mere
        </h4>


        <p class="bd-footer-link 
                has-text-left">
          Ce site créer par la commune vous permet d'inscrire
          votre enfant à différentes activités.
          ATTENTION, vous devez faire
          l'inscription à l'activité 2 jours
          avant le début de celle-ci.
        </p>

      </div>


      <div class="column">
        <h4 class="bd-footer-title 
                 has-text-weight-medium 
                 has-text-justify">
          Explore
        </h4>


        <p class="bd-footer-link">
          <a href="https://www.pas-de-calais-tourisme.com/fr/escapade-a-boulogne-sur-mer/">
            <span>Tourisme</span>
          </a>
          <br />
          <a href="https://www.google.fr/maps/place/62200+Boulogne-sur-Mer/@50.7303115,1.5711708,13z/data=!3m1!4b1!4m5!3m4!1s0x47dc2c40b157a363:0x40af13e8163fb30!8m2!3d50.725231!4d1.613334">
            <span>Localisation</span>
          </a>
          <br />
        </p>

      </div>

      <!-- Column 3 -->
      <div class="column">
        <h4 class="bd-footer-title
                 has-text-weight-medium
                 has-text-justify">
          Contactez nous
        </h4>

        <!-- Column 3 lists with links -->
        <p class="bd-footer-link">
          <a href="https://">
            <span class="icon-text">
              <span>Email</span>
            </span>
          </a>
          <br />
          <a href="https://">
            <span class="icon-text">
              <span>Facebook</span>
            </span>
          </a>
          <br />
          <a href="https://">
            <span class="icon-text">
              <span>00 01 02 03 04</span>
            </span>
          </a>
        </p>

      </div>
    </div>
  </footer>

  <!--

░█▀▀░█▀█░█▀▄░░░█▀▀░█▀█░█▀█░▀█▀░█▀▀░█▀▄
░█▀▀░█░█░█░█░░░█▀▀░█░█░█░█░░█░░█▀▀░█▀▄
░▀▀▀░▀░▀░▀▀░░░░▀░░░▀▀▀░▀▀▀░░▀░░▀▀▀░▀░▀

-->

  <!-- -------------------------------------------------------------------- -->

  <!--
░█▄█░█▀▀░█▀█░█░█░░░█▀▄░█░█░█▀▄░█▀▀░█▀▀░█▀▄
░█░█░█▀▀░█░█░█░█░░░█▀▄░█░█░█▀▄░█░█░█▀▀░█▀▄
░▀░▀░▀▀▀░▀░▀░▀▀▀░░░▀▀░░▀▀▀░▀░▀░▀▀▀░▀▀▀░▀░▀
-->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

      $navbarBurgers.forEach(el => {
        el.addEventListener('click', () => {

          // Get the target from the "data-target" attribute
          const target = el.dataset.target;
          const $target = document.getElementById(target);

          // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
          el.classList.toggle('is-active');
          $target.classList.toggle('is-active');

        });
      });

    });
  </script>
</body>

</html>