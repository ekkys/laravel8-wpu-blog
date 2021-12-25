<div class="container mt-2">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand font-weight-bold" href="#"></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-3">
            <a class="nav-link {{ ( $active === "home" ? 'active' : '') }}" href="/home"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link {{ ( $active === "posts" ? 'active' : '') }}" href="/posts">Articles</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link {{ ( $active === "categories" ? 'active' : '') }}" href="/categories">Categories</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

