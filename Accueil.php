<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Accueil</title>
<header>
<?php include 'menu.php'?>
</header>
<div class="wrapper">
<div class="typing-demo">
Bienvenue dans le Portfolio de Foulail Oumar
</div>
</div>
<style>
.wrapper {
height: 100vh;
/*This part is important for centering*/
display: grid;
place-items: center;
}
  
.typing-demo {
width: 44ch;
animation: typing 2s steps(22), blink .5s step-end infinite alternate;
white-space: nowrap;
overflow: hidden;
border-right: 3px solid;
font-family: 'Courier New', Courier, monospace;
font-size: 3em;
}
  
@keyframes typing {
from {
	  width: 0
	}
}
	  
@keyframes blink {
50% {
border-color: transparent
	}
}
</style>
<footer class="footer">
<div class="container">
<div class="row">
<div class="footer-col">
<h4>follow us</h4>
<div class="social-links">
<a href="https://twitter.com/oumar_foulail"><div style='display:flex'><img src="X Icon.jpg" width="100" height="100"> </a>
<a href="https://www.instagram.com/oumar_foulail_realmadrid/"><div style='display:flex'><img src="Instagram Icon.png" width="100" height="100"></a>
<a href="https://www.linkedin.com/in/oumar-foulail-9b0232178/"><div style='display:flex'><img src="LinkedIn Icon.png" width="100" height="100"></a>
</div>
</div>
</div>
</div>
</footer>
<p>Copyright © <script>document.write(new Date().getFullYear());</script> Tous Droits Résérvés Foulail Oumar</p>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
line-height: 1.5;
font-family: 'Poppins', sans-serif;
}
*{
margin:0;
padding:0;
box-sizing: border-box;
}
.container{
max-width: 1170px;
margin:auto;
}
.row{
display: flex;
flex-wrap: wrap;
}
ul{
list-style: none;
}
.footer{
background-color: #24262b;
padding: 70px 0;
}
.footer-col{
width: 25%;
padding: 0 15px;
}
.footer-col h4{
font-size: 18px;
color: #ffffff;
text-transform: capitalize;
margin-bottom: 35px;
font-weight: 500;
position: relative;
}
.footer-col h4::before{
content: '';
position: absolute;
left:0;
bottom: -10px;
background-color: #e91e63;
height: 2px;
box-sizing: border-box;
width: 50px;
}
.footer-col ul li:not(:last-child){
margin-bottom: 10px;
}
.footer-col ul li a{
font-size: 16px;
text-transform: capitalize;
color: #ffffff;
text-decoration: none;
font-weight: 300;
color: #bbbbbb;
display: block;
transition: all 0.3s ease;
}
.footer-col ul li a:hover{
color: #ffffff;
padding-left: 8px;
}

/*responsive*/
@media(max-width: 767px){
.footer-col{
width: 50%;
margin-bottom: 30px;
}
}
@media(max-width: 574px){
.footer-col{
width: 100%;
}
}
</style>
</body>
</html>
