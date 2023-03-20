
<style>
	.navbar-dark .navbar-nav a.nav-link {
  color: #ffffff;
  font-size: 1.1em;
}
.dropdown-menu {
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  border: none;
  border-radius: 0;
  padding: 0.7em;
}
@media only screen and (min-width: 992px) {
  .dropdown:hover .dropdown-menu {
    display: flex;
  }
  .dropdown-menu.show {
    display: flex;
  }
}
.dropdown-menu ul {
  list-style: none;
  padding: 0;
}
.dropdown-menu li .dropdown-item {
  color: gray;
  font-size: 1em;
  padding: 0.5em 1em;
}
.dropdown-menu li .dropdown-item:hover {
  background-color: #f1f1f1;
}
	/*
.dropdown-menu li:first-child a {
  font-weight: bold;
  font-size: 1.2em;
  text-transform: uppercase;
  color: #516beb;
}
	*/
.dropdown-menu li:first-child a:hover {
  background-color: #f1f1f1;
}
@media only screen and (max-width: 992px) {
  .dropdown-menu.show {
    flex-wrap: wrap;
    max-height: 350px;
    overflow-y: scroll;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1140px) {
  .dropdown:hover .dropdown-menu {
    width: 40vw;
    flex-wrap: wrap;
  }
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #516BEB;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
          About us
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
              <li><a class="dropdown-item" href="/about/president_message">Message</a></li>
              <li><a class="dropdown-item" href="#">Mission & Vision</a></li>
              <li><a class="dropdown-item" href="#">Board members</a></li>
              <li><a class="dropdown-item" href="#">Senate council</a></li>
              <li><a class="dropdown-item" href="#">Legislation</a></li>				
            </ul>
            <ul>
              <li><a class="dropdown-item" href="#">Glance</a></li>
              <li><a class="dropdown-item" href="#">Background</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
    
          </div>
        </li>
		          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
         Academics
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
              <li><a class="dropdown-item" href="#">Institutes</a></li>
              <li><a class="dropdown-item" href="/academics/iot">Institute of Technology</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
           Administration
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
              <li><a class="dropdown-item" href="#">Announcement</a></li>
              <li><a class="dropdown-item" href="/news">News</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
          </div>
        </li>
		          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
           Research
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
              <li><a class="dropdown-item" href="#">Announcement</a></li>
              <li><a class="dropdown-item" href="/news">News</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
          </div>
        </li>
		          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Students
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
              <li><a class="dropdown-item" href="#">Announcement</a></li>
              <li><a class="dropdown-item" href="/news">News</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>

          </div>
        </li>
		          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Services
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
              <li><a class="dropdown-item" href="#">Announcement</a></li>
              <li><a class="dropdown-item" href="/news">News</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>

          </div>
        </li>
		          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            What is new
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
              <li><a class="dropdown-item" href="#">Announcement</a></li>
              <li><a class="dropdown-item" href="/news">News</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>
            <ul>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>

          </div>
        </li>
		          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Partnership
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
              <li><a class="dropdown-item" href="#">Announcement</a></li>
              <li><a class="dropdown-item" href="/news">News</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
              <li><a class="dropdown-item" href="#">Mega Menu Link</a></li>
            </ul>


          </div>
        </li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>