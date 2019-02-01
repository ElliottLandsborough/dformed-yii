<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
?>

<div class="container content">
    <div class="row-fluid about">
        <div class="span8">
            <div class="aboutwrap">
                <h1 class="blue">About Us</h1>
                <p>We are a small team of young, dedicated geeks. This is good news for you, because we are committed to making your website inviting, functional, and secure. And we get excited about information architecture, which means your audience will easily find the right page on your website. We pride ourselves on our love of good design, so your customers will find your site a pleasure to use.</p>
                <p>We’ve been offering web design and hosting for five years, and have expanded over time into a comprehensive service agency. Here are some things we’re awesome at:</p>
                <ul>
                    <li>We love, love, love coding. </li>
                    <li>We love making logos to give your business the best visual identity it can have. </li>
                    <li>We like our customers: that means we listen as much as talk.</li>
                    <li>We can even help with your blogging and social media strategy.</li>
                </ul>
                <p>A network of trusted associates means we can provide you with specialised services: copywriting, SEO writing, search engine optimisation (SEO) and photography.</p>
                <p>Our pricing is flexible and competitive: you’ll get more from your budget, with options to expand in the future.</p>
                <p class="bottom"><a class="light-green" href="/contact">Find out more...</a></p>
            </div>
        </div>
        <div class="span4 aboutright">
            <?php require __DIR__ . '/../boxes/bigcircle.php'; ?>
            <?php require __DIR__ . '/../boxes/testimonials.php'; ?>
        </div>
    </div>
</div>