
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
    <a class="navbar-brand" href="/"><img src="{{ asset('images/eotc-logo-original-2.png') }}" alt="logo" width="80px" height="80px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">ቀዳሜ ገጽ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
         ስለእኛ
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
              <li><a class="dropdown-item" href="/about/የጽ_ቤት_መልዕክት">የሰሜን ሸዋ ሃገረ ስብከት ጽ/ቤት መልዕክት</a></li>
              <li><a class="dropdown-item" href="/history/የሃገረ_ስብከት_ታሪክ">የሃገረ ስብከቱ ታሪክ</a></li>
              <li><a class="dropdown-item" href="/about/ራዕይ_እና_ተልዕኮ">ራእይና ተልዕኮ</a></li>
              <li><a class="dropdown-item" href="/about/ገዳማትና_አድባራት">የገዳማተና አድባራት</a></li>
            </ul>
          </div>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
         አገልግሎቶች
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
              <li><a class="dropdown-item" href="/service/ሰበካ_ጉባኤ">ሰበካ ጉባኤ</a></li>
              <li><a class="dropdown-item" href="/service/ስብከተ_ወንጌል">ስብከተ ወንጌል</a></li>
              <li><a class="dropdown-item" href="#">እቅድና ልማት</a></li>
              <li><a class="dropdown-item" href="#">የሰው ሀብት አስተዳደር</a></li>
              <li><a class="dropdown-item" href="#">የቅርሳቅርስ እንክብካቤ</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
           ስብከተ ወንጌል
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
                <li><a class="dropdown-item" href="/preaching/message">መልዕክት</a></li>
              <li><a class="dropdown-item" href="#">ታሪክ</a></li>
              <li><a class="dropdown-item" href="/whatisnew/news">የመጽሀፍ ቅዱስ ጥናት</a></li>
              <li><a class="dropdown-item" href="#">ስርዓተ ቤተከርስቲያን</a></li>
              <li><a class="dropdown-item" href="#">ክርስቲያናዊ ሕይወት</a></li>
              <li><a class="dropdown-item" href="#">ነገረ ቅዱሳን</a></li>

              <li><a class="dropdown-item" href="#">ነገር መለኮት</a></li>
              <li><a class="dropdown-item" href="#">7ቱ ሚስጥራተ ቤ/ክርስቲያን</a></li>
              <li><a class="dropdown-item" href="#">ነገረ ማርያም</a></li>
            </ul>
          </div>
        </li>
		  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
           ሰንበት ት/ቤት
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
              <li><a class="dropdown-item" href="#">የሰንበት ት/ቤት ታሪክ</a></li>
              <li><a class="dropdown-item" href="/whatisnew/news">የወጣቶች እንቅስቃሴ</a></li>
              <li><a class="dropdown-item" href="#">ወጣቶች እና ልማት</a></li>

            </ul>


          </div>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/charity/ምግባረ_ሰናይ"> ምግባረ ሰናይ</a>
          </li>
		
		 <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            ትምህረት ቤቶች
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <ul>
              <li><a class="dropdown-item" href="#">የአብነት ት/ቤቶች</a></li>
              <li><a class="dropdown-item" href="/whatisnew/news">የአስኮላ ት/ቤቶች</a></li>
              <li><a class="dropdown-item" href="/whatisnew/news">መንፈሳዊ ኮሌጅ</a></li>
            </ul>

          </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
             ዜና
            </a>

          </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
             ያግኙን
            </a>

          </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              ቋንቋ
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <ul>
                <li><a class="dropdown-item" href="/am">Amharic</a></li>
                <li><a class="dropdown-item" href="/en">English</a></li>
              </ul>
            </div>
          </li>


    </div>
  </div>
</nav>
