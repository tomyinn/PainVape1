<!-- resources/views/components/header.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">My Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('products.index') }}">Products</a>
        </li>
        <!-- Pokud je uživatel přihlášen -->
        @auth
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/profile') }}">My Profile</a>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="btn btn-link nav-link">Logout</button>
            </form>
          </li>
        @else
          <!-- Pokud není uživatel přihlášen -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
