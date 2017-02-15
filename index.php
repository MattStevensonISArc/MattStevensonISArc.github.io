<?php
/**********************
 * Created by PhpStorm.
 * User: mattstevenson
 * Date: 14/02/2017
 * Time: 8:42 PM
 * Latest Version: 0.0
 * Bug Listings: txt.
 *********************/

include('html/header.html');

?>

<div class="container-fluid" id="section1">
    <div class="row-fluid">
        <div class="col-xs-12">
            <h1>mjstvo</h1>

            <a href="http://twitter.com/mjstvo">
                <span class="fa fa-twitter" aria-hidden="true"></span>
            </a>
            <a href="http://instagram.com/mjstvo">
                <span class="fa fa-instagram" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>

<style>

    h1 {
        font-family: 'Helvetica Neue', cursive;
        font-size: 3em;
        line-height: 1;
        margin: 20px;
    }

    a {
        color: #1a1a1a;
    @include transition(all 0.3s ease-in-out);
        text-decoration: none;
        position: relative;
        text-shadow: -2px 3px 0 #ff00ff, 4px 1px 0 #00ffff, -4px -3px 0 #ffff00;


    &:hover {
     @include animation(link-hover 1s infinite);
     }
    }

    section {
        position: absolute;
        top: 50%;
        left: 50%;
    @include transform(translate(-50%, -50%));

    &:hover {
     @include animation(pulse 0.3s infinite);
     }
    }

    h1 {
        text-shadow: -2px 3px 0 #ff00ff, 4px 1px 0 #00ffff, -4px -3px 0 #ffff00;
    }
</style>