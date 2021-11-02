<style>
/*
 * owl-carousel.scss
 * -----------------------------------------------
*/
.owl-carousel {
  /* owl dots */ }
  .owl-carousel .tm-carousel-item {
    transition: .8s;
    -webkit-transition: .8s;
    transform: translateX(0);
    -webkit-transform: translateX(0);
    opacity: 1; }
    .owl-carousel .tm-carousel-item.__loading {
      opacity: 0;
      transform: translateX(40px);
      -webkit-transform: translateX(40px); }
  .owl-carousel .owl-item img {
    display: inline-block;
    width: auto; }
  .owl-carousel .owl-dots {
    text-align: center;
    margin-top: 10px; }
    .owl-carousel .owl-dots .owl-dot {
      display: inline-block;
      zoom: 1; }
      .owl-carousel .owl-dots .owl-dot span {
        background: #D6D6D6;
        display: block;
        height: 10px;
        margin: 5px 3px;
        opacity: 0.8;
        width: 10px;
        border-radius: 3px;
        transition: all 0.4s ease 0s; }
        @media (prefers-reduced-motion: reduce) {
          .owl-carousel .owl-dots .owl-dot span {
            transition: none; } }
      .owl-carousel .owl-dots .owl-dot.active span, .owl-carousel .owl-dots .owl-dot:hover span {
        background: #869791; }
  .owl-carousel .owl-nav button {
    border-radius: 0;
    display: block;
    margin: -25px 0 0 0;
    position: absolute;
    opacity: 0.3;
    top: 50%;
    z-index: 6;
    transition: all 0.4s ease 0s; }
    @media (prefers-reduced-motion: reduce) {
      .owl-carousel .owl-nav button {
        transition: none; } }
    .owl-carousel .owl-nav button i {
      color: #fff;
      vertical-align: middle; }
    .owl-carousel .owl-nav button.owl-prev, .owl-carousel .owl-nav button.owl-next {
      background: rgba(240, 240, 240, 0.8) !important;
      padding: 10px !important;
      width: 50px;
      height: 50px;
      border-radius: 50%; }
    .owl-carousel .owl-nav button.owl-prev {
      left: -10px; }
    .owl-carousel .owl-nav button.owl-next {
      right: -10px; }
  .owl-carousel:hover .owl-nav > button {
    opacity: 1; }
    .owl-carousel:hover .owl-nav > button.owl-prev {
      left: 20px; }
    .owl-carousel:hover .owl-nav > button.owl-next {
      right: 20px; }
  .owl-carousel[data-focused-center-image="true"] .owl-item {
    opacity: 0.3;
    transition: all 0.4s ease; }
    @media (prefers-reduced-motion: reduce) {
      .owl-carousel[data-focused-center-image="true"] .owl-item {
        transition: none; } }
    .owl-carousel[data-focused-center-image="true"] .owl-item.active {
      opacity: 0.6; }
      .owl-carousel[data-focused-center-image="true"] .owl-item.active.center {
        opacity: 1; }
  .owl-carousel[data-zoomin-center-image="true"] .owl-item {
    -webkit-transform: scale(0.9);
    -moz-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9);
    transition: all 0.4s ease; }
    @media (prefers-reduced-motion: reduce) {
      .owl-carousel[data-zoomin-center-image="true"] .owl-item {
        transition: none; } }
    .owl-carousel[data-zoomin-center-image="true"] .owl-item.active.center {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1); }

.owl-nav-outer .owl-nav button.owl-prev, .owl-nav-outer .owl-nav button.owl-next {
  background: rgba(240, 240, 240, 0.8) !important;
  padding: 10px 15px !important; }

.owl-nav-outer .owl-nav button.owl-prev {
  left: -70px; }

.owl-nav-outer .owl-nav button.owl-next {
  right: -70px; }

@media (max-width: 1199.98px) {
  .owl-nav-outer .owl-nav button.owl-prev {
    left: -25px; }
  .owl-nav-outer .owl-nav button.owl-next {
    right: -25px; } }

/* Owl Dots */
.owl-dots-bottom-right .owl-dots {
  bottom: -10px;
  position: absolute;
  right: 0; }

.owl-dots-center-bottom .owl-dots {
  bottom: 15px;
  left: 0;
  position: absolute;
  right: 0;
  text-align: center; }

.owl-dots-left .owl-dots {
  text-align: left; }

.owl-dots-center .owl-dots {
  text-align: center; }

.owl-dots-right .owl-dots {
  text-align: right; }

.owl-dots-light-skin .owl-dots .owl-dot span {
  background: #D6D6D6; }

.owl-dots-light-skin .owl-dots .owl-dot.active span, .owl-dots-light-skin .owl-dots .owl-dot:hover span {
  background: #fff; }

.owl-dots-dark-skin .owl-dots .owl-dot span {
  background: #333; }

.owl-dots-dark-skin .owl-dots .owl-dot.active span, .owl-dots-dark-skin .owl-dots .owl-dot:hover span {
  background: #000; }

.tm-owl-carousel-1col .owl-dots {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0; }

/* Owl Animated Slider */
.tm-owl-slider {
  position: relative; }
  .tm-owl-slider .slider-wrapper {
    position: relative; }
    .tm-owl-slider .slider-wrapper .slide-item {
      position: relative;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover; }
      .tm-owl-slider .slider-wrapper .slide-item:before {
        position: absolute;
        content: '';
        width: 100%;
        height: 100%;
        background: -webkit-linear-gradient(0deg, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0) 80%);
        left: 0px;
        top: 0px;
        right: 0px;
        z-index: 1; }
      .tm-owl-slider .slider-wrapper .slide-item .image-layer {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        -webkit-transition: all 6000ms linear;
        -moz-transition: all 6000ms linear;
        -ms-transition: all 6000ms linear;
        -o-transition: all 6000ms linear;
        transition: all 6000ms linear; }
    .tm-owl-slider .slider-wrapper .active .slide-item .image-layer {
      -webkit-transform: scale(1.15);
      -ms-transform: scale(1.15);
      transform: scale(1.15); }
    .tm-owl-slider .slider-wrapper .content-box {
      position: relative;
      display: block;
      z-index: 5;
      width: 100%; }
      .tm-owl-slider .slider-wrapper .content-box.centred {
        text-align: center;
        margin: 0 auto; }
      .tm-owl-slider .slider-wrapper .content-box .sub-title, .tm-owl-slider .slider-wrapper .content-box .title, .tm-owl-slider .slider-wrapper .content-box .paragraph, .tm-owl-slider .slider-wrapper .content-box .btn-wrapper {
        position: relative;
        opacity: 0;
        -webkit-transform: translateY(100px);
        -moz-transform: translateY(100px);
        -ms-transform: translateY(100px);
        -o-transform: translateY(100px);
        transform: translateY(100px); }
      .tm-owl-slider .slider-wrapper .content-box .sub-title {
        display: block;
        -webkit-transition: all 800ms ease;
        -moz-transition: all 800ms ease;
        -ms-transition: all 800ms ease;
        -o-transition: all 800ms ease;
        transition: all 800ms ease; }
      .tm-owl-slider .slider-wrapper .content-box .title {
        display: block;
        -webkit-transition: all 1000ms ease;
        -moz-transition: all 1000ms ease;
        -ms-transition: all 1000ms ease;
        -o-transition: all 1000ms ease;
        transition: all 1000ms ease; }
      .tm-owl-slider .slider-wrapper .content-box .paragraph {
        display: block;
        -webkit-transition: all 1300ms ease;
        -moz-transition: all 1300ms ease;
        -ms-transition: all 1300ms ease;
        -o-transition: all 1300ms ease;
        transition: all 1300ms ease; }
      .tm-owl-slider .slider-wrapper .content-box .btn-wrapper {
        -webkit-transition: all 1600ms ease;
        -moz-transition: all 1600ms ease;
        -ms-transition: all 1600ms ease;
        -o-transition: all 1600ms ease;
        transition: all 1600ms ease; }
    .tm-owl-slider .slider-wrapper .active .content-box .sub-title, .tm-owl-slider .slider-wrapper .active .content-box .title, .tm-owl-slider .slider-wrapper .active .content-box .paragraph, .tm-owl-slider .slider-wrapper .active .content-box .btn-wrapper {
      opacity: 1;
      -webkit-transform: translateY(0);
      -moz-transform: translateY(0);
      -ms-transform: translateY(0);
      -o-transform: translateY(0);
      transform: translateY(0); }
    .tm-owl-slider .slider-wrapper .active .content-box .sub-title {
      -webkit-transition-delay: 800ms;
      -moz-transition-delay: 800ms;
      -ms-transition-delay: 800ms;
      -o-transition-delay: 800ms;
      transition-delay: 800ms; }
    .tm-owl-slider .slider-wrapper .active .content-box .title {
      -webkit-transition-delay: 1000ms;
      -moz-transition-delay: 1000ms;
      -ms-transition-delay: 1000ms;
      -o-transition-delay: 1000ms;
      transition-delay: 1000ms; }
    .tm-owl-slider .slider-wrapper .active .content-box .paragraph {
      -webkit-transition-delay: 1300ms;
      -moz-transition-delay: 1300ms;
      -ms-transition-delay: 1300ms;
      -o-transition-delay: 1300ms;
      transition-delay: 1300ms; }
    .tm-owl-slider .slider-wrapper .active .content-box .btn-wrapper {
      -webkit-transition-delay: 1600ms;
      -moz-transition-delay: 1600ms;
      -ms-transition-delay: 1600ms;
      -o-transition-delay: 1600ms;
      transition-delay: 1600ms; }
</style>