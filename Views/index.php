<!DOCTYPE html>
<html lang="en">
<title>Animal Blog</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-theme-l1">Animal Blog</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Articles</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>

  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Articles</h1>
      <p>Welcome to the Animal Blog, below you will find articles all about animals.</p>
      <img src="https://imgur.com/gallery/rRJuzYZ" alt="Panda Image"/>
    </div>1
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center">Image 1</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">Image 1</p>
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal">Lion</h1>
      <p>A muscular, deep-chested cat with a short, rounded head, a reduced neck and round ears, and a hairy tuft at the end of its tail.</p>

      <h2 class="w3-text-teal">Panda</h1>
      <p>The giant panda, also known as the panda bear or simply the panda, is a bear native to south central China. It is characterised by large, black patches around its eyes, over the ears, and across its round body.</p>

      <h2 class="w3-text-teal">Sloth</h1>
      <p>Sloths of the present day are arboreal mammals noted for slowness of movement and for spending most of their lives hanging upside down in the trees of the tropical rain forests of South America and Central America.</p>

      <h2 class="w3-text-teal">Tiger</h1>
      <p>The tiger (Panthera tigris) is the largest species among the Felidae and classified in the genus Panthera. It is most recognisable for its dark vertical stripes on orangish-brown fur with a lighter underside. It is an apex predator, primarily preying on ungulates such as deer and wild boar.</p>

      <h2 class="w3-text-teal">Wild Dog</h1>
      <p>The African wild dog is a canid native to sub-Saharan Africa. It is the largest indigenous canid in Africa, and the only extant member of the genus Lycaon, which is distinguished from Canis by dentition highly specialised for a hypercarnivorous diet, and a lack of dewclaws.</p>

      <h2 class="w3-text-teal">Elephant</h1>
      <p>Elephants are mammals of the family Elephantidae and the largest existing land animals. Three species are currently recognised: the African bush elephant, the African forest elephant, and the Asian elephant.</p>

      <h2 class="w3-text-teal">Pig</h1>
      <p>A muscular, deep-chested cat with a short, rounded head, a reduced neck and round ears, and a hairy tuft at the end of its tail.</p>
      
      <h2 class="w3-text-teal">Fox</h1>
      <p>Foxes are small-to-medium-sized, omnivorous mammals belonging to several genera of the family Canidae. Foxes have a flattened skull, upright triangular ears, a pointed, slightly upturned snout, and a long bushy tail (or brush).</p>

      <h2 class="w3-text-teal">Racoon</h1>
      <p>The raccoon (/rəˈkuːn/ or US: /ræˈkuːn/ (About this soundlisten), Procyon lotor), sometimes spelled racoon,[3] also known as the common raccoon,[4] North American raccoon,[5] northern raccoon,[6] or coon, is a medium-sized mammal native to North America. </p>

      <h2 class="w3-text-teal">Honey Badger</h1>
      <p>The honey badger (Mellivora capensis), also known as the ratel (/ˈreɪtəl/ or /ˈrɑːtəl/), is a mammal widely distributed in Africa, Southwest Asia, and the Indian subcontinent.</p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center">Image 1</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">Image 1</p>
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal"></h1>
      <p></p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center">Image 1</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">Image 1</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a class="w3-button w3-black" href="#">1</a>
      <a class="w3-button w3-hover-black" href="#">2</a>
      <a class="w3-button w3-hover-black" href="#">3</a>
      <a class="w3-button w3-hover-black" href="#">4</a>
      <a class="w3-button w3-hover-black" href="#">5</a>
      <a class="w3-button w3-hover-black" href="#">»</a>
    </div>
  </div>

  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>Footer</h4>
    </div>

    <div class="w3-container w3-theme-l1">
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
