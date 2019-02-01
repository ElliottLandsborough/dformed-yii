<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>d-formed.net</title>
  <!-- <title><?= Html::encode($this->title) ?></title> -->
  <meta name="description" content="At D-formed, we believe in the power of creative communication. We’ve been offering web design and hosting for five years, and have expanded over time into a comprehensive service agency.">
  <meta name="og:title" content="D-Formed - Digital Agency" />
  <meta name="og:description" content="At D-formed, we believe in the power of creative communication. We’ve been offering web design and hosting for five years, and have expanded over time into a comprehensive service agency." />
  <link rel="icon" href="/favicon.ico" type="image/x-icon" />
  <meta name="og:image" content="/img/shareimg.jpg" />
  <meta name="viewport" content="width=device-width">
  <link rel="author" href="/humans.txt" />
  <?php
  $bg = array('bg.jpg', 'bg2.jpg', 'bg3.jpg', 'bg4.jpg', 'bg5.jpg', 'bg6.jpg', 'bg7.jpg' );
  $i = rand(0, count($bg)-1);
  $selectedBg = "$bg[$i]";
  ?>
  <style type="text/css">
  <!--
  body{
  background:url('/img/<?php echo $selectedBg; ?>') no-repeat;
  background-color:#111111;
  background-position:center top;
  background-attachment:fixed;
  }
  -->
  </style>

  <?php $this->registerCsrfMetaTags() ?>

  <?php $this->head() ?>
</head>

<body>

<div class="wrapper"><!-- open footer wrapper -->

<header>
  <div class="container">
    <div class="row-fluid">
      <div class="span5">
        <div class="logo">
          <p><a href="http://www.d-formed.net/home"><span>d-formed.net</span></a></p>
        </div>
      </div>
      <div class="span7">
        <div class="contact-info">
          <p>
          <span class="blue">Email:</span> <a href="mailto:hello@d-formed.net">hello@d-formed.net</a></p>
          <p class="social">
            <a class="facebook" href="http://www.facebook.com/DFormed.Digital"><span class="hidden">Like us on facebook...</span></a>
            <a class="twitter" href="http://twitter.com/#!/d_formed"><span class="hidden">Follow us on twitter...</span></a>
          </p>
        </div>
        <ul>
         <li class="home"><a href="/home"><span class="hidden">Home</span></a></li>
         <li class="about"><a href="/about"><span class="hidden">About</span></a></li>
         <li class="services"><a href="/services"><span class="hidden">Services</span></a></li>
         <?php /* <li class="projects"><a href="/projects"><span class="hidden">Projects</span></a></li>
         <li class="news"><a href="/news"><span class="hidden">News</span></a></li> */ ?>
         <li class="contact"><a href="/contact"><span class="hidden">Contact</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</header>

<?php $this->beginBody() ?>

<?= $content ?>

<div class="push"></div>
</div><!-- close footer wrapper -->

<div class="footer">

<div class="container">
  <footer>
    <div class="row">
      <div class="span8">
        <p class="alignleft">All content copyright &copy; 2012 D-Formed Digital.<span class="smallhide"> All rights reserved</span></p>
      </div>
      <div class="span4">
        <p class="alignright"><a href="/terms">Terms &amp; Conditions</a></p>
      </div>
    </div>
  </footer>
</div>

</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<?php $this->endBody() ?>
</body>
</html>

<?php $this->endPage() ?>