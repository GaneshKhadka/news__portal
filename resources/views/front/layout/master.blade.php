<!DOCTYPE HTML>
<html>
@include('front.includes.head')
<body>
<!--start-main-->
@include('front.includes.header')
<!-- banner -->
@yield('content')
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-4 footer-left">
            <h6>THIS LOOKS GREAT</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt consectetur adipisicing elit,</p>
        </div>
        <div class="col-md-4 footer-middle">
            <h4>Twitter Feed</h4>
            <div class="mid-btm">
                <p>Consectetur adipisicing</p>
                <p>Sed do eiusmod tempor</p>
                <a href="http://eagle-i-tech.com/">http://eagle-i-tech.com/</a>
            </div>

            <p>Consectetur adipisicing</p>
            <p>Sed do eiusmod tempor</p>
            <a href="http://eagle-i-tech.com/">http://eagle-i-tech.com/</a>

        </div>
        <div class="col-md-4 footer-right">
            <h4>Quick Links</h4>
            <li><a href="#">Eiusmod tempor</a></li>
            <li><a href="#">Consectetur </a></li>
            <li><a href="#">Adipisicing elit</a></li>
            <li><a href="#">Eiusmod tempor</a></li>
            <li><a href="#">Consectetur </a></li>
            <li><a href="#">Adipisicing elit</a></li>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- footer -->
<!-- footer-bottom -->
<div class="foot-nav">
    <div class="container">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="videos.html">Videos</a></li>
            <li><a href="reviews.html">Reviews</a></li>
            <li><a href="tech.html">Tech</a></li>
            <li><a href="singlepage.html">Culture</a></li>
            <li><a href="singlepage.html">Science</a></li>
            <li><a href="design.html">Design</a></li>
            <li><a href="business.html">Business</a></li>
            <li><a href="world.html">World</a></li>
            <li><a href="forum.html">Forum</a></li>
            <li><a href="contact.html">Contact</a></li>
            <div class="clearfix"></div>
        </ul>
    </div>
</div>
<!-- footer-bottom -->
<div class="copyright">
    <div class="container">
        <p>© 2018 Eagle Eye Technology. All rights reserved | <a href="http://eagle-i-tech.com/">Eagle Eye Technolgy</a></p>
    </div>
</div>


</body>
</html>