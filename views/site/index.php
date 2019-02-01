<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="container content">
    <div class="row-fluid home">
        <div class="span4">
            <h1 class="hidden">Home</h1>
            <h1 id="greeting"class="blue">
            <?php
            $time = date("G");
            if ($time < 12) {
                echo 'Good morning!';
            } else if ($time >= 12 && $time <= 17) {
                echo 'Good afternoon!';
            } else if ($time > 17) {
                echo 'Good evening!';
            }
            ?>
            </h1>
            <p>At D-formed, we believe in the power of creative communication.</p>
            <p>We are a small team with skills across all forms of digital media, so your website will be based on great design, efficient code, and expert knowledge. And you will always know who you’re dealing with.</p> 
            <p>Whether you are an established business looking for an effective online presence, or you’re just setting up on your own, we can produce beautiful, efficient media and strategies to help you reach your audience, create customers and make it happen.</p>
            <p>So give us a <a href="/contact">call</a>.</p>
        </div>
        <div class="span8">
            <iframe src="http://player.vimeo.com/video/42827732?color=238149"></iframe>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4">
            <?php require __DIR__ . '/../boxes/aboutus.php'; ?>
        </div>
        <div class="span4">
            <?php require __DIR__ . '/../boxes/services.php'; ?>
        </div>
        <div class="span4">
            <?php require __DIR__ . '/../boxes/testimonials.php'; ?>
            </div>
            </div>
            </div>