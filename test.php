<!DOCTYPE html>
<html>
<head>
<title>Image Rotation Test</title>
<style>
 #img1 {
 float: left;
 transform: rotate(30deg);
 box-shadow: black 10px 5px 15px;
 }
 #img2 {
 float: left;
 transform: rotate(-30deg);
 box-shadow: black 10px 5px 15px;
 }
</style>
</head>
<body>
<h1>Testing the image rotation feature</h1>
<header>
<h1>My vacation photos</h1>
</header>
<section>
<img id="img1" src="image1.jpg" width="50" height="50">
<img id="img2" src="image2.jpg" width="50" height="50">
</section>
</body>
</html>