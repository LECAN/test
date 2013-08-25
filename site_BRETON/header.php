


<!-- include JQuery -->
 <script src="./JQuery/jquery-1.10.2.min.js"></script>
  
 <!-- include bootstrap -->
  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="./stylesheet.css" rel="stylesheet">
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  
  <?php 

  //GETTEXT
  include './gettext/PHP.php';
  
  //TODO : get default locale
  $locale = 'en';
  
  $translator = new Gettext_PHP(__DIR__ . '/gettext/locale','messages',$locale);
		
	?>
  
  </head>
  
  <body>
  <div class="row">
		
			<div class="container menu" >


<ul class="nav nav-pills">
<li <?php if(basename($_SERVER[REQUEST_URI],'.php')==='home') echo ' class="active" '; ?> >
 <a href="./home.php" ><?= $translator->gettext('home'); ?></a>
</li>
<li <?php if(basename($_SERVER[REQUEST_URI],'.php')==='where_are_we') echo ' class="active" '; ?> >
<a href="./where_are_we.php" ><?= $translator->('where_are_we'); ?></a>
</li>
<li <?php if(basename($_SERVER[REQUEST_URI],'.php')==='region') echo ' class="active" '; ?> >
<a href="./region.php" ><?= $translator->('region'); ?></a>
</li>
<li <?php if(basename($_SERVER[REQUEST_URI],'.php')==='prices') echo ' class="active" '; ?> >
<a href="./prices.php" ><?= $translator->('prices'); ?></a>
</li>
<li <?php if(basename($_SERVER[REQUEST_URI],'.php')==='contact') echo ' class="active" '; ?> >
<a href="./contact.php" ><?= $translator->('contact'); ?></a>
</li>


</ul>

<div class="pull-right" >
<img class="flag" src="./images/flags/fr.png" />
<img class="flag" src="./images/flags/england.png" />
<img class="flag" src="./images/flags/de.png" />
</div>

		</div>
	</div>