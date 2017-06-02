<?php
var_dump($_SESSION['userrol']);
if (isset($_SESSION['userrol'])) {
  echo "<header id='header' class='hoc clear'>";
  echo "<div id='logo' class='fl_left'>";
  echo  "<h1><a href='index.php'>Cooban</a></h1>";
  echo  "</div>";
  echo "  <nav id='mainav' class='fl_right'>";
  if ($_SESSION['userrol'] == 1 || $_SESSION['userrol'] ==2 || $_SESSION['userrol'] ==3) {
  echo "<li><a class=drop href='#'>Voorraden</a>
    <ul>
      <li><a href='voorraad.php'>Voorraden</a></li>
      <li><a href='producten.php'>Producten</a></li>
    </ul>
  </li>";
  }
  if ($_SESSION['userrol'] ==  2 || $_SESSION['userrol'] == 3) {
  echo "<li><a href='locaties.php'>Locaties</a></li>";
  }
  if ($_SESSION['userrol'] == 4) {
  echo "<li><a href='gebruikers.php'>Gebruikers</a></li>";
  }
  echo "<li><a href='logout.php'>logout</a></li>
  </nav>
  </header>
  ";
} else{
  echo "<header id='header' class='hoc clear'>

    <div id='logo' class='fl_left'>
      <h1><a href='index.html'>Cooban</a></h1>
    </div>
    <nav id='mainav' class='fl_right'>
      <ul class='clear'>
        <li><a href='Hindex.php'>Home</a></li>
        <li><a class='drop' href='#'>Voorraden</a>
          <ul>
            <li><a href='voorraad.php'>Voorraden</a></li>
            <li><a href='producten.php'>Producten</a></li>
          </ul>
        </li>
        <li><a href='locaties.php'>Locaties</a></li>
        <li><a href='gebruikers.php'>Gebruikers</a></li>
      </ul>
    </nav>
   <
 </header>";
}
;

 ?>
