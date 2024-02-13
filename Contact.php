<!DOCTYPE html>
<html lang="fr">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="Contact.css">
</head>
<body>
<?php include 'menu.php'?>
<section id="Formulaire de Contact">
<h1>Formulaire de Contact</h1>
<center>
<div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">
<form action="https://formspree.io/f/mjvzjnqy" method="POST">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="156">
<input type="hidden" name="_wpcf7_version" value="3.7.2">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f156-p143-o1">
<input type="hidden" name="_wpnonce" value="d1da331d93">
</div>
<p>
<span class="wpcf7-form-control-wrap Name">
<input type="text" name="Nom" value="" size="40" class="nameinput wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nom & Prénom" required>
</span>
<span class="wpcf7-form-control-wrap Email">
<input type="email" name="Email"  size="40" class="emailinput wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" required>
</span>
<span class="wpcf7-form-control-wrap Subject flat">
<select name="Subject" class="indent wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false" required>
<option value="Question">Question</option>
<option value="Recommandation">Recommandation</option>
<option value="Autre">Autre</option>
</select>
</span>
<span class="wpcf7-form-control-wrap Message">
<textarea name="Message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message" required></textarea>
</span>
<input type="submit" value="Envoyer" class="wpcf7-form-control wpcf7-submit btn">
<img class="ajax-loader" src="http://www.jordancundiff.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Envoie en cours ..." style="visibility: hidden;">
</p>
<div class="wpcf7-response-output wpcf7-display-none">
</div>
</form>
</div>
</center>
</section>
<footer class="footer">
<div class="container">
<div class="row">
 <div class="footer-col">
<h4>Follow Us</h4>
<div class="social-links">
<a href="https://twitter.com/oumar_foulail"><div style='display:flex'><img src="X Icon.png" width="100" height="100"> </a>
<a href="https://www.instagram.com/oumar_foulail93/"><div style='display:flex'><img src="Instagram Icon.png" width="100" height="100"></a>
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