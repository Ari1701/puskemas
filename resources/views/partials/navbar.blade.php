
 <div id="topbar" class="d-flex align-items-center fixed-top">
     <div class="container d-flex justify-content-between">
         <div class="contact-info d-flex align-items-center">
             <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">puskesmasdelanggu@gmail.com</a>
             <i class="bi bi-phone"></i> (0272) 551040
         </div>
     </div>
 </div>

 <header id="header" class="fixed-top">
     <div class="container d-flex align-items-center">

         <h1 class="logo me-auto"><a href="/">Puskesmas Delanggu</a></h1>

         <nav id="navbar" class="navbar order-last order-lg-0">
             <ul>
                 <li><a class="nav-link scrollto active" href="/">Home</a></li>
                 <li><a class="nav-link scrollto" href="/antrian">Antrian</a></li>
                 <li><a class="nav-link scrollto" href="/jadwal">Jadwal Dokter</a></li>
                 <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

         @auth
             <div class="dropdown ms-3">
                 <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                     aria-expanded="false">
                     {{ auth()->user()->name }}
                 </button>
                 <ul class="dropdown-menu">
                     @if (auth()->user()->roles === 'admin')
                         <li><a class="dropdown-item" href="/dashboard">Dashboard </a></li>
                     @else
                         <li><a class="dropdown-item" href="/profil">Profil </a></li>

                         <li><a class="dropdown-item" href="/antrian">Menu Antrian </a></li>
                     @endif

                     <form action="/logout" method="post">
                         @csrf
                         <button type="submit" class="dropdown-item">
                             <span class="align-middle">Keluar</span>
                         </button>
                     </form>

                 </ul>
             </div>
         @else
             <a href="/login" class="appointment-btn scrollto">Login</a>
         @endauth

     </div>
 </header>
