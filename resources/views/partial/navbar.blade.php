<nav class="navbar navbar-expand-lg container mt-4">
    <div class="container-fluid">
        @auth
        <a class="navbar-brand title" href="/">Hi, {{auth()->user()->username}}</a>
        @else
        <a class="navbar-brand title" href="/">E-Furniture</a>
        @endauth
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item mx-4">
            <a class="nav-link active navtulisan" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link active navtulisan" href="/products">Products</a>
          </li>
          @auth
          <li class="nav-item dropdown mx-4">
            <a class="nav-link dropdown-toggle active navtulisan" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Editor
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item navtulisan" href="/insert">Insert</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item navtulisan" href="/editor">Editor</a></li>
            </ul>
          </li>
            <li class="nav-item d-flex align-items-center mx-4">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="buttonnav navtulisan">Logout</button>
                </form>
            </li>
          @else
          <li class="nav-item mx-4">
            <a class="nav-link active navtulisan" href="/login">Login</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
