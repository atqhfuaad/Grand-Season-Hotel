<?php
session_start();
//include "input_booking.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>My Booking</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="icon" href="hotel_image/baseline_location_city_black_18dp.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
    @import url('https://fonts.googleapis.com/css?family=Lato:300,400,700');
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");

    /* GLOBAL STYLES
-------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
        color: #5a5a5a;
        font-family: 'Lato', sans-serif;
    }

    h1, h2, h3, h4, h5 {
        font-family: 'Montserrat', sans-serif;
    }

    .parallax-section {
        background-attachment: fixed !important;
    }

    .btn-capsul {
        border-radius: 30px;
    }

    .btn-aqua {
        background: #0297FF;
        color: #fff;
    }

    .btn-aqua:hover {
        background: #10629b;
        color: #fff;
    }

    .btn-dark-blue {
        background: #0C242E;
        color: #fff;
    }

    .btn-dark-blue:hover {
        background: #063d28;
        color: #fff;
    }

    .btn-transparent-white {
        border: 2px solid #fff;
        color: #fff;
    }

    .btn-transparent-white:hover, .btn-transparent-white:focus {
        background: #fff;
        color: #0297FF
    }

    .relative-box {
        position: relative
    }

    section {
        float: left;
        width: 100%;
        padding: 80px 0;
    }

    /* TOP HEADER
-------------------------------------------------- */

    .navbar.top-bar {
        border-radius: 0;
        padding: 16px 0;
        z-index: 16;
        position: absolute;
        top: 0;
    }

    .navbar-toggler {
        border: 1px solid #fff;
        color: #fff;
        position: absolute;
        right: 21px;
    }

    .sps {
        padding: 1em .5em;
        position: fixed;
        top: 0;
        left: 0;
        transition: all 0.25s ease;
        width: 100%;
    }

    .sps--abv {
        background-color: transparent;
        color: #000;
    }

    .sps--blw {
        background-color: #fff;
        color: #fff;
    }

    .top-bar a.navbar-brand {
        color: #000000;
        font-size: 26px;
        font-weight: 800;
        padding: 5px 0 0 10px;
        text-transform: uppercase;
    }

    .sps--blw.top-bar a.navbar-brand {
        color: #000;
    }

    .top-bar a.navbar-brand span {
        color: #000000;
    }

    .top-bar .nav-link {
        color: #000000;
        font-size: 16px;
        font-weight: 500;
        padding: 12px 18px !important;
    }

    .sps--blw.top-bar .nav-link {
        color: #000
    }

    .top-bar .navbar-nav .nav-item {
        margin: 0
    }

    .top-bar .nav-link:hover, .top-bar .nav-item.active a {
        color: #000000;
        border-bottom: 2px solid #fff;
        border-radius: 0;
    }

    .sps--blw.top-bar .nav-link:hover, .sps--blw.top-bar .nav-item.active a {
        color: #0297ff;
        border-bottom: none;
        border-radius: 0;
    }

    /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

    /*Swiper*/
    .swiper-container {
        width: 100%;
        height: 100vh;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .main-slider .slider-bg-position {
        background-size: cover !important;
        background-position: center center !important;
    }

    .main-slider .swiper-button-prev, .main-slider .swiper-button-next {
        background-image: none !important;
        color: #fff;
        width: 50px;
        height: 50px;
        border: 1px solid #fff;
        text-align: center;
        line-height: 50px;
        font-size: 20px;
    }

    .main-slider h2 {
        color: #fff;
        font-size: 54px;
        line-height: 59px;
        padding: 0 19%;
        text-transform: uppercase;
    }

    .main-slider .swiper-pagination-bullet {
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 0.9)
    }

    .main-slider .swiper-pagination-bullet-active {
        background: #0297ff
    }

    /* SERVICE SECTION
-------------------------------------------------- */

    .service-sec .heading {
        float: left;
        width: 100%;
        margin-bottom: 70px;
        text-align: center;
    }

    .service-sec h2 {
        display: block;
        text-transform: capitalize;
        font-weight: 600;
        color: #0297FF;
        font-size: 32px;
    }

    .service-sec h2 small {
        color: #222;
        display: block;
        font-size: 22px;
        margin-bottom: 18px;
    }

    .service-sec i {
        border: 1px solid #0297FF;
        border-radius: 2px;
        font-size: 25px;
        padding: 12px 0;
        width: 52px;
        color: #0297FF;
        margin-bottom: 20px
    }

    .service-sec h3 {
        font-size: 23px;
        font-weight: 600;
    }

    .service-sec p {
        line-height: 22px;
        margin-top: 13px;
        padding: 0 21px;
    }

    .service-sec .service-block {
        margin-top: 30px;
    }

    /* ABOUT SECTION
-------------------------------------------------- */
    .about-sec {
        background: url('hotel_image/interior/interior_view1.jpg') no-repeat center center;
        background-size: cover;
        color: #fff;
        padding: 150px;
    }

    .about-sec:before {
        content: ' ';
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(22, 122, 192, 0.8);
        top: 0;
        left: 0
    }

    .about-sec h2 {
        font-size: 55px;
        font-weight: 800;
        margin-top: 25%;
    }

    .about-sec h2 small {
        display: block;
        font-size: 24px;
        margin-bottom: 15px;
        padding-left: 10px;
    }

    .about-sec p {
        font-size: 16px;
    }

    .action-sec {
        width: 100%;
        float: left;
        background: #222
    }

    .action-box {
        float: left;
        width: 100%;
        text-align: center;
    }

    .action-box h2 {
        color: #fff;
        font-size: 20px;
    }

    /**
 * Swiper 3.4.0
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 *
 * http://www.idangero.us/swiper/
 *
 * Copyright 2016, Vladimir Kharlampidi
 * The iDangero.us
 * http://www.idangero.us/
 *
 * Licensed under MIT
 *
 * Released on: October 16, 2016
 */
    .swiper-container {
        margin-left: auto;
        margin-right: auto;
        position: relative;
        overflow: hidden;
        z-index: 1
    }

    .swiper-container-no-flexbox
    .swiper-slide {
        float: left
    }

    .swiper-container-vertical > .swiper-wrapper {
        -webkit-box-orient: vertical;
        -moz-box-orient: vertical;
        -ms-flex-direction: column;
        -webkit-flex-direction: column;
        flex-direction: column
    }

    .swiper-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        z-index: 1;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-transition-property: -webkit-transform;
        -moz-transition-property: -moz-transform;
        -o-transition-property: -o-transform;
        -ms-transition-property: -ms-transform;
        transition-property: transform;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box
    }

    .swiper-container-android
    .swiper-slide, .swiper-wrapper {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -o-transform: translate(0, 0);
        -ms-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .swiper-container-multirow > .swiper-wrapper {
        -webkit-box-lines: multiple;
        -moz-box-lines: multiple;
        -ms-flex-wrap: wrap;
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .swiper-container-free-mode >
    .swiper-wrapper {
        -webkit-transition-timing-function: ease-out;
        -moz-transition-timing-function: ease-out;
        -ms-transition-timing-function: ease-out;
        -o-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
        margin: 0 auto
    }

    .swiper-slide {
        -webkit-flex-shrink: 0;
        -ms-flex: 0 0 auto;
        flex-shrink: 0;
        width: 100%;
        height: 100%;
        position: relative
    }

    .swiper-container-autoheight, .swiper-container-autoheight .swiper-slide {
        height: auto
    }

    .swiper-container-autoheight .swiper-wrapper {
        -webkit-box-align: start;
        -ms-flex-align: start;
        -webkit-align-items: flex-start;
        align-items: flex-start;
        -webkit-transition-property: -webkit-transform, height;
        -moz-transition-property: -moz-transform;
        -o-transition-property: -o-transform;
        -ms-transition-property: -ms-transform;
        transition-property: transform, height
    }

    .swiper-container .swiper-notification {
        position: absolute;
        left: 0;
        top: 0;
        pointer-events: none;
        opacity: 0;
        z-index: -1000
    }

    .swiper-wp8-horizontal {
        -ms-touch-action: pan-y;
        touch-action: pan-y
    }

    .swiper-wp8-vertical {
        -ms-touch-action: pan-x;
        touch-action: pan-x
    }

    .swiper-button-next, .swiper-button-prev {
        position: absolute;
        top: 50%;
        width: 27px;
        height: 44px;
        margin-top: -22px;
        z-index: 10;
        cursor: pointer;
        -moz-background-size: 27px 44px;
        -webkit-background-size: 27px 44px;
        background-size: 27px 44px;
        background-position: center;
        background-repeat: no-repeat
    }

    .swiper-button-next.swiper-button-disabled, .swiper-button-prev.swiper-button-disabled {
        opacity: .35;
        cursor: auto;
        pointer-events: none
    }

    .swiper-button-prev, .swiper-container-rtl .swiper-button-next {

    background-image:url
("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0
%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");left:10px;right:auto}
.swiper-button-prev.swiper-button-black,.swiper-container-rtl .swiper-button-next.swiper-button-black{background-image:url("data:image/svg+xml;
charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%
2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")}.swiper-button-prev.swiper-button-white,
.swiper-container-rtl .swiper-button-next.swiper-button-white{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'
http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0
%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")}.swiper-button-next,.swiper-container-rtl .swiper-button-prev{background-image:url
("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C2
2L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");right:10px;left:auto}
.swiper-button-next.swiper-button-black,.swiper-container-rtl .swiper-button-prev.swiper-button-black{background-image:url
("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D
'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")}
.swiper-button-next.swiper-button-white,.swiper-container-rtl .swiper-button-prev.swiper-button-white{background-image:url
("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath
%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")}
.swiper-pagination{position:absolute;text-align:center;-webkit-transition:.3s;-moz-transition:.3s;-o-transition:.3s;transition:
.3s;-webkit-transform:translate3d(0,0,0)

    ;
    -ms-transform:translate3d(0,0,0)

    ;
    -o-transform:translate3d(0,0,0)

    ;
    transform:translate3d(0,0,0)

    ;
    z-index:

    10
    }
    .swiper-pagination.swiper-pagination-hidden {
        opacity: 0
    }

    .swiper-container-horizontal > .swiper-pagination-bullets, .swiper-pagination-custom,
    .swiper-pagination-fraction {
        bottom: 10px;
        left: 0;
        width: 100%
    }

    .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        display: inline-block;
        border-radius: 100%;
        background: #000;
        opacity: .2
    }

    button.swiper-pagination-bullet {
        border: none;
        margin: 0;
        padding: 0;
        box-shadow: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -webkit-appearance: none;
        appearance: none
    }

    .swiper-pagination-clickable .swiper-pagination-bullet {
        cursor: pointer
    }

    .swiper-pagination-white .swiper-pagination-bullet {
        background: #fff
    }

    .swiper-pagination-bullet-active {
        opacity: 1;
        background: #007aff
    }

    .swiper-pagination-white .swiper-pagination-bullet-active {
        background: #fff
    }

    .swiper-pagination-black .swiper-pagination-bullet-active {
        background: #000
    }

    .swiper-container-vertical > .swiper-pagination-bullets {
        right: 10px;
        top: 50%;
        -webkit-transform: translate3d(0, -50%, 0);
        -moz-transform: translate3d(0, -50%, 0);
        -o-transform: translate(0, -50%);
        -ms-transform: translate3d(0, -50%, 0);
        transform: translate3d(0, -50%, 0)
    }

    .swiper-container-vertical > .swiper-pagination-bullets .swiper-pagination-bullet {
        margin: 5px 0;
        display: block
    }

    .swiper-container-horizontal >
    .swiper-pagination-bullets .swiper-pagination-bullet {
        margin: 0 5px
    }

    .swiper-pagination-progress {
        background: rgba(0, 0, 0, .25);
        position: absolute
    }

    .swiper-pagination-progress .swiper-pagination-progressbar {
        background: #007aff;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0);
        -webkit-transform-origin: left top;
        -moz-transform-origin: left top;
        -ms-transform-origin: left top;
        -o-transform-origin: left top;
        transform-origin: left top
    }

    .swiper-container-rtl
    .swiper-pagination-progress .swiper-pagination-progressbar {
        -webkit-transform-origin: right top;
        -moz-transform-origin: right top;
        -ms-transform-origin: right top;
        -o-transform-origin: right top;
        transform-origin: right top
    }

    .swiper-container-horizontal > .
    swiper-pagination-progress {
        width: 100%;
        height: 4px;
        left: 0;
        top: 0
    }

    .swiper-container-vertical > .swiper-pagination-progress {
        width: 4px;
        height: 100%;
        left: 0;
        top: 0
    }

    .swiper-pagination-progress.swiper-pagination-white {
        background: rgba(255, 255, 255, .5)
    }

    .swiper-pagination-progress.swiper-pagination-white
    .swiper-pagination-progressbar {
        background: #fff
    }

    .swiper-pagination-progress.swiper-pagination-black .swiper-pagination-progressbar {
        background: #000
    }

    .swiper-container-3d {
        -webkit-perspective: 1200px;
        -moz-perspective: 1200px;
        -o-perspective: 1200px;
        perspective: 1200px
    }

    .swiper-container-3d
    .swiper-cube-shadow, .swiper-container-3d .swiper-slide, .swiper-container-3d .swiper-slide-shadow-bottom, .swiper-container-3d
    .swiper-slide-shadow-left, .swiper-container-3d .swiper-slide-shadow-right, .swiper-container-3d .swiper-slide-shadow-top, .swiper-container-3d
    .swiper-wrapper {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transform-style: preserve-3d
    }

    .swiper-container-3d .swiper-slide-shadow-bottom, .swiper-container-3d .swiper-slide-shadow-left, .swiper-container-3d .swiper-slide-shadow-right,
    .swiper-container-3d .swiper-slide-shadow-top {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 10
    }

    .swiper-container-3d .swiper-slide-shadow-left {
        background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, 0)));
        background-image: -webkit-linear-gradient(right, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(right, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: -o-linear-gradient(right, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: linear-gradient(to left, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
    }

    .swiper-container-3d .swiper-slide-shadow-right {
        background-image: -webkit-gradient(linear, right top, left top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, 0)));
        background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(left, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: linear-gradient(to right, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
    }

    .swiper-container-3d .swiper-slide-shadow-top {
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, 0)));
        background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: linear-gradient(to top, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
    }

    .swiper-container-3d .swiper-slide-shadow-bottom {
        background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, 0)));
        background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(top, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: -o-linear-gradient(top, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
    }

    .swiper-container-coverflow
    .swiper-wrapper, .swiper-container-flip .swiper-wrapper {
        -ms-perspective: 1200px
    }

    .swiper-container-cube, .swiper-container-flip {
        overflow: visible
    }

    .swiper-container-cube .swiper-slide, .swiper-container-flip .swiper-slide {
        pointer-events: none;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden;
        z-index: 1
    }

    .swiper-container-cube .swiper-slide
    .swiper-slide, .swiper-container-flip .swiper-slide .swiper-slide {
        pointer-events: none
    }

    .swiper-container-cube .swiper-slide-active,
    .swiper-container-cube .swiper-slide-active .swiper-slide-active, .swiper-container-flip .swiper-slide-active, .swiper-container-flip
    .swiper-slide-active .swiper-slide-active {
        pointer-events: auto
    }

    .swiper-container-cube .swiper-slide-shadow-bottom, .swiper-container-cube
    .swiper-slide-shadow-left, .swiper-container-cube .swiper-slide-shadow-right, .swiper-container-cube .swiper-slide-shadow-top,
    .swiper-container-flip .swiper-slide-shadow-bottom, .swiper-container-flip .swiper-slide-shadow-left, .swiper-container-flip
    .swiper-slide-shadow-right, .swiper-container-flip .swiper-slide-shadow-top {
        z-index: 0;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden
    }

    .swiper-container-cube .swiper-slide {
        visibility: hidden;
        -webkit-transform-origin: 0 0;
        -moz-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        transform-origin: 0 0;
        width: 100%;
        height: 100%
    }

    .swiper-container-cube.swiper-container-rtl .swiper-slide {
        -webkit-transform-origin: 100% 0;
        -moz-transform-origin: 100% 0;
        -ms-transform-origin: 100% 0;
        transform-origin: 100% 0
    }

    .swiper-container-cube .swiper-slide-active, .swiper-container-cube
    .swiper-slide-next, .swiper-container-cube .swiper-slide-next + .swiper-slide, .swiper-container-cube .swiper-slide-prev {
        pointer-events: auto;
        visibility: visible
    }

    .swiper-container-cube .swiper-cube-shadow {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: #000;
        opacity: .6;
        -webkit-filter: blur(50px);
        filter: blur(50px);
        z-index: 0
    }

    .swiper-container-fade
    .swiper-container-free-mode .swiper-slide {
        -webkit-transition-timing-function: ease-out;
        -moz-transition-timing-function: ease-out;
        -ms-transition-timing-function: ease-out;
        -o-transition-timing-function: ease-out;
        transition-timing-function: ease-out
    }

    .swiper-container-fade
    .swiper-slide {
        pointer-events: none;
        -webkit-transition-property: opacity;
        -moz-transition-property: opacity;
        -o-transition-property: opacity;
        transition-property: opacity
    }

    .swiper-container-fade .swiper-slide .swiper-slide {
        pointer-events: none
    }

    .swiper-container-fade
    .swiper-slide-active, .swiper-container-fade .swiper-slide-active .swiper-slide-active {
        pointer-events: auto
    }

    .swiper-zoom-container {
        width: 100%;
        height: 100%;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -moz-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -moz-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        text-align: center
    }

    .swiper-zoom-container > canvas, .swiper-zoom-container > img,
    .swiper-zoom-container > svg {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain
    }

    .swiper-scrollbar {
        border-radius: 10px;
        position: relative;
        -ms-touch-action: none;
        background: rgba(0, 0, 0, .1)
    }

    .swiper-container-horizontal > .swiper-scrollbar {
        position: absolute;
        left: 1%;
        bottom: 3px;
        z-index: 50;
        height: 5px;
        width: 98%
    }

    .swiper-container-vertical > .swiper-scrollbar {
        position: absolute;
        right: 3px;
        top: 1%;
        z-index: 50;
        width: 5px;
        height: 98%
    }

    .swiper-scrollbar-drag {
        height: 100%;
        width: 100%;
        position: relative;
        background: rgba(0, 0, 0, .5);
        border-radius: 10px;
        left: 0;
        top: 0
    }

    .swiper-scrollbar-cursor-drag {
        cursor: move
    }

    .swiper-lazy-preloader {
        width: 42px;
        height: 42px;
        position: absolute;
        left: 50%;
        top: 50%;
        margin-left: -21px;
        margin-top: -21px;
        z-index: 10;
        -webkit-transform-origin: 50%;
        -moz-transform-origin: 50%;
        transform-origin: 50%;
        -webkit-animation: swiper-preloader-spin 1s steps(12, end) infinite;
        -moz-animation: swiper-preloader-spin 1s steps(12, end) infinite;
        animation: swiper-preloader-spin 1s steps(12, end) infinite
    }

    .swiper-lazy-preloader:after {
        display: block;
        content: "";
        width: 100%;
        height: 100%;
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D 'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' %20xmlns%3Axlink%3D 'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink' %3E%3Cdefs%3E%3Cline%20id%3D 'l' %20x1%3D '60' %20x2%3D '60' %20y1%3D '7' %20y2%3D '27' %20stroke%3D '%236c6c6c' %20stroke-width%3D '11' %20stroke-linecap%3D 'round' %2F%3E%3C% 2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D '%23l' %20opacity%3D '.27' %2F%3E%3Cuse%20xlink%3Ahref%3D '%23l' %20opacity%3D '.27' %20transform%3D 'rotate(30%2060%2C60)' %2F%3E%3Cuse%20xlink%3Ahref%3D '%23l' %20opacity%3D '.27' %20transform%3D 'rotate(60%2060%2C60)' %2F%3E%3Cuse%20xlink% 3Ahref%3D '%23l' %20opacity%3D '.27' %20transform%3D 'rotate(90%2060%2C60)' %2F%3E%3Cuse%20xlink%3Ahref%3D '%23l' %20opacity%3D '.27' %20transform%3D 'rotate(120%2060%2C60)' %2F%3E%3Cuse%20xlink%3Ahref%3D '%23l' %20opacity%3D '.27' %20transform%3D 'rotate(150%2060%2C60)' %2F%3E%3Cuse%20xlink%3Ahref%3D '%23l' %20opacity%3D '.37' %20transform%3D 'rotate(180%2060%2C60)' %2F%3E%3Cuse%20xlink%3Ahref%3D '%23l' %20opacity%3D '.46' %20transform%3D 'rotate(210%2060%2C60) '%2F%3E%3Cuse%20xlink%3Ahref%3D' % 23 l '%20opacity%3D' .56 '%20transform%3D' rotate(240 % 2060 % 2 C60) '%2F%3E%3Cuse%20xlink%3Ahref%3D' % 23 l '%20opacity%3D' .66 '%20transform%3D' rotate(270 % 2060 % 2 C60) '%2F%3E%3Cuse%20xlink%3Ahref%3D' % 23 l '%20opacity%3D' .75 '%20transform%3D' rotate(300 % 2060 % 2 C60) '%2F%3E%3Cuse%20xlink%3Ahref%3D' % 23 l '%20opacity%3D' .85 '%20transform%3D' rotate(330 % 2060 % 2 C60) '%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
        background-position: 50%;
        -webkit-background-size: 100%;
        background-size: 100%;
        background-repeat: no-repeat
    }

    .swiper-lazy-preloader-white:after {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns% 3 Axlink% 3 D 'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'% 3 E% 3 Cdefs% 3 E% 3 Cline% 20 id% 3 D 'l'% 20 x1% 3 D '60'% 20 x2% 3 D '60'% 20 y1% 3 D '7'% 20 y2% 3 D '27'% 20 stroke% 3 D '%23fff'% 20 stroke-width% 3 D '11'% 20 stroke-linecap% 3 D 'round'% 2 F% 3 E% 3 C% 2 Fdefs% 3 E% 3 Cg% 3 E% 3 Cuse% 20 xlink% 3 Ahref% 3 D '%23l'% 20 opacity% 3 D ' .27 '%2F%3E%3Cuse%20xlink%3Ahref%3D'% 23 l '%20opacity%3D' .27 '%20transform%3D' rotate(30% 2060% 2 C60) '%2F%3E%3Cuse%20xlink%3Ahref%3D'% 23 l '%20opacity%3D' .27 '%20transform%3D' rotate(60% 2060% 2 C60) '%2F%3E%3Cuse%20xlink%3Ahref%3D'% 23 l '%20opacity%3D' .27 '%20transform%3D' rotate(90% 2060% 2 C60) '%2F%3E%3Cuse%20xlink%3Ahref%3D'% 23 l '%20opacity%3D' .27 '%20transform%3D' rotate(120% 2060% 2 C60) '%2F%3E%3Cuse%20xlink%3Ahref%3D'% 23 l '%20opacity%3D' .27 '%20transform%3D' rotate(150% 2060% 2 C60) '%2F%3E%3Cuse%20xlink%3Ahref%3D'% 23 l '%20opacity%3D' .37 '%20transform%3D' rotate(180% 2060% 2 C60) '%2F%3E%3Cuse%20xlink%3Ahref%3D'% 23 l '%20opacity%3D' .46 '%20transform%3D' rotate(210% 2060% 2 C60) '%2F%3E%3Cuse%20xlink%3Ahref%3D'% 23 l '%20opacity%3D' .56 '%20transform%3D' rotate(240% 2060% 2 C60) '%2F%3E%3Cuse%20xlink%3Ahref%3D'% 23 l '%20opacity%3D' .66 '%20transform%3D' rotate(270% 2060% 2 C60) '%2F%3E%3Cuse%20xlink%3Ahref%3D'% 23 l '%20opacity%3D' .75 '%20transform%3D' rotate(300% 2060% 2 C60) '%2F%3E%3Cuse%20xlink%3Ahref%3D'% 23 l '%20opacity%3D' .85 '%20transform%3D' rotate(330% 2060% 2 C60) '%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E")
    }

    @-webkit-keyframes swiper-preloader-spin {
        100% {
            -webkit-transform: rotate(360deg)
        }

    }

    @keyframes swiper-preloader-spin {
        100% {
            transform: rotate(360deg)
        }
    }

    /* CONTACT SECTION
-------------------------------------------------- */
    .about-sec {
        background: url('hotel_image/interior/interior_view1.jpg') no-repeat center center;
        background-size: cover;
        color: #fff;
        padding: 150px;
    }

    .about-sec:before {
        content: ' ';
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(22, 122, 192, 0.8);
        top: 0;
        left: 0
    }

    .about-sec h2 {
        font-size: 55px;
        font-weight: 800;
        margin-top: 25%;
    }

    .about-sec h2 small {
        display: block;
        font-size: 24px;
        margin-bottom: 15px;
        padding-left: 10px;
    }

    .about-sec p {
        font-size: 16px;
    }

    .action-sec {
        width: 100%;
        float: left;
        background: #222
    }

    .action-box {
        float: left;
        width: 100%;
        text-align: center;
    }

    .action-box h2 {
        color: #fff;
        font-size: 20px;
    }
</style>

<style type="text/css">
    table td {
        text-align: center;
    }
</style>

<?php
$con = mysqli_connect("localhost", "root", "ROOT", "hrsdb");
if (!empty($_POST)) {
    $book_id = (int)$_POST["book_id"];
    $sql = "UPDATE booking SET status = 'Cancelled' WHERE booking_id = $book_id";
    $con->query($sql);
}

$username = $_SESSION['login_user'];
$search_Query = "SELECT customer.cust_id, booking.booking_id, customer.firstname, customer.lastname, customer.phone, booking.roomtype,
					    booking.checkindate, booking.checkoutdate, booking.amount, booking.status
			     FROM customer					 
			     INNER JOIN booking ON customer.cust_id = booking.cust_id
				 WHERE booking.cust_id = (SELECT cust_id FROM customer WHERE username='$username') 
				 ORDER BY booking.status DESC";

$search_Result = mysqli_query($con, $search_Query);
?>

<body>
<nav class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--abv">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mx-auto" href="#">Grand Seasons</a>
        <div class="collapse navbar-collapse" id="navbarCollapse1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a></li>               
                <li class="nav-item"><a class="nav-link" href="home.php #benefits">Accommodation</a></li>
                <li class="nav-item" https://s.bootsnipp.com/iframe/NjR9z#blog> <a class="nav-link" href="home.php #about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="facilities.php #benefits">Facilities</a></li>
                <?php if ($_SESSION["is_login"] == true): ?>
                    <li class="nav-item active"><a class="nav-link" href="bookingSummary.php #benefits">My Booking</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                <?php else : ?>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Swiper Silder -->
<!-- Slider main container -->
<div class="swiper-container main-slider" id="myCarousel">
    <div class="swiper-wrapper">
        <div class="swiper-slide slider-bg-position" style="background:url('hotel_image/view.jpg')" data-hash="slide1">
            <h2>Premier business hotel located in the heart of the city</h2>
        </div>
    </div>
</div>

<!-- Benefits ================================================== -->
<section class="service-sec" id="benefits">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2 align="left">Booking Summary</h2>
                </div>

                <table border=1px width="100%">
                    <tr>
                        <th style="text-align:center">No.</th>
                        <th style="text-align:center">Customer ID</th>
                        <th style="text-align:center">Booking ID</th>
                        <th style="text-align:center">Name</th>
                        <th style="text-align:center">Phone Number</th>
                        <th style="text-align:center">Room Type</th>
                        <th style="text-align:center">Check in date</th>
                        <th style="text-align:center">Check out date</th>
                        <th style="text-align:center">Amount</th>
                        <th style="text-align:center">Status</th>
						<th style="text-align:center">-</th>
                    </tr>

                    <?php $bil = 1;
                    while ($row = mysqli_fetch_array($search_Result)): ?>
                        <tr>
                            <td><?= $bil ?></td>
                            <td><?= $row["cust_id"] ?></td>
                            <td><?= $row["booking_id"] ?></td>
                            <td><?= $row["firstname"] ?> <?= $row["lastname"] ?></td>
                            <td><?= $row["phone"] ?></td>
                            <td><?= $row["roomtype"] ?></td>
                            <td><?= $row["checkindate"] ?></td>
                            <td><?= $row["checkoutdate"] ?></td>
                            <td><?= $row["amount"] ?></td>
                            <td><?= $row["status"] ?></td>
                            <?php if ($row["status"] == "Pending"): ?>
                                <td>
                                    <button type="button" class="btn btn-danger" 
										    onclick="post('/HRS/bookingSummary.php',{book_id:'<?= $row["booking_id"] ?>'})">Cancel
                                    </button>
                                </td>
                            <?php endif; ?>
                            <?php $bil++; ?>
                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
</section>
</body>

<script>
    function post(path, params, method) {
        method = method || "post"; // Set method to post by default if not specified.

        // The rest of this code assumes you are not using a library.
        // It can be made less wordy if you use one.
        var form = document.createElement("form");
        form.setAttribute("method", method);
        form.setAttribute("action", path);

        for (var key in params) {
            if (params.hasOwnProperty(key)) {
                var hiddenField = document.createElement("input");
                hiddenField.setAttribute("type", "hidden");
                hiddenField.setAttribute("name", key);
                hiddenField.setAttribute("value", params[key]);

                form.appendChild(hiddenField);
            }
        }

        document.body.appendChild(form);
        form.submit();
    }
</script>

</html>     
      