<?php
/**
 * Created by PhpStorm.
 * User: cjs2599
 * Date: 12/10/15
 * Time: 1:39 AM
 */




function write_headline () {

    $title = "";
    $release_date = "";
    $tags = "";
    $readmore_link = "";
    $headline_review = "";
    $banner_pic = "";

    print <<<HEADLINE
<div class="single-blog-post">
<h3>$title</h3>
<div class="post-meta">
<ul>
<li><i class="fa fa-calendar"></i>$release_date</li>
<li><i class="fa fa-tags"></i>$tags</li>
<li><i class="fa fa-thumbs-o-up"></i></li>
<li><i class="fa fa-trophy"></i></li>
<li><i class="fa fa-video-camera"></i></li>
</ul>
</div>
<a href="$readmore_link">
<img src="$banner_pic" alt="">
</a>
<p>$headline_review</p>
<a  class="btn btn-primary" href="$readmore_link">Read More</a>
</div>
<hr>
HEADLINE;

}






function write_fullpage () {


    print <<<WRITEUP
<div id="contact-page" class="container">
<div class="bg">
<div class="row">
<div class="col-sm-12">
<div class="product-details">
<div class="col-sm-5">
<div class="view-product" style ="text-align:center;">
<img src="$gamebox_pic" alt=""  style="width:80%;"/>

</div>
<div id="similar-product" class="carousel slide" data-ride="carousel">


</div>

</div>
<div class="col-sm-7">
<div class="product-information" style = "height:380px;">

<h2>The Witcher 3: Wild Hunt - PC</h2>
<span style>
<p style = "padding:10px;"><b>Price Now: </b>$current_price</p>
<p style = "padding:10px;"><b>Platform:</b>$this_platform    |   <b>Also On:</b> $also_on</p>
<p style = "padding:10px;"><b>Genre(s):</b> $genre</p>
<p style = "padding:10px;"><b>Release Date:</b> $release_date</p>

<p style = "padding:10px;"><b>ESRB:</b>                <img src="$rating_img" alt=""></p>
</span>
</div>
</div>
</div>

<div class="category-tab shop-details-tab"><!--category-tab-->
<div class="col-sm-12">
<ul id = "bar" class="nav nav-tabs">
<li  class="active"><a href="#details" data-toggle="tab">More Details</a></li>
<li><a href="#feature" data-toggle="tab">Feature</a></li>
<li><a href="#video" data-toggle="tab">Video & Images</a></li>
<li><a href="#award" data-toggle="tab">Award & Rating</a></li>
</ul>
</div>
<div class="tab-content">
<div class="tab-pane fade active in" id="details" >
<div class="col-sm-12">

<p><b>Platform:</b>$this_platform     |   <b>Also On:</b>$also_on</p>
<p><b>Genre(s):</b> $genre</p>
<p><b>Mode(s):</b> $mode</p>

<table class="table">
<tr>
<td><b>Release Date</b></td>
<td>$release_date</td>
</tr>
<tr>
<td><b>Series</b></td>
<td>$series</td>
</tr>
<tr>
<td><b>Engine</b></td>
<td>$engine</td>
</tr>
<tr>
<td><b>Publisher</b></td>
<td>$publisher</td>
</tr>
<tr>
<td><b>Developer</b></td>
<td>$developer</td>
</tr>
<tr>
<td><b>Distributor(s)</b></td>
<td>$distributor</td>
</tr>
<tr>
<td><b>Director(s)</b></td>
<td>$director</td>
</tr>
<tr>
<td><b>Producer(s)</b></td>
<td>$producer</td>
</tr>
<tr>
<td><b>Artist(s)</b></td>
<td>$artist</td>
</tr><tr>
<td><b>Writer(s)</b></td>
<td>$writer</td>
</tr><tr>
<td><b>Composer(s)</b></td>
<td>$composer</td>
</tr>
</table>
</div>

</div>

<div class="tab-pane fade" id="feature" >
<div class="col-sm-12">
<div id="slider-carousel" class="carousel slide" data-ride="carousel" style="height:750px;">
<ol class="carousel-indicators" >
<li data-target="#slider-carousel" data-slide-to="0" class="active" ></li>
<li data-target="#slider-carousel" data-slide-to="1"></li>
<li data-target="#slider-carousel" data-slide-to="2"></li>
<li data-target="#slider-carousel" data-slide-to="3"></li>
<li data-target="#slider-carousel" data-slide-to="4"></li>
</ol>

<div class="carousel-inner">
<div class="item active">



<div class="col-sm-6">

<img src="$folder/feature_image1.jpg" style="width:100%;height:100%;"></div>
<div class="col-sm-6">
<h1>$</h1>
<p><i>Exploration,Inhabitants, Regions, Activites</i></p>
<p>In the open world of Wild Hunt, you chart your own path to adventure. You play as a bounty hunter, a man of the road. You set your own goals and choose your own destinations. Go after the bounty on the head of a nasty monster pestering a village or help a scheming prince who needs a dirty job done -- no matter what style of epic questing you crave, The Witcher will provide it.</p>
</div>
</div>


<div class="item">
<div class="col-sm-6">

<img src="wit5.png" style="width:100%;height:100%;"> </div>

<div class="col-sm-6">
<h1>Professional Monster Hunter</h1>
<p><i>Mutations And Skills, Monster Hunts, Equipment, Allies And Enemies</i></p>
<p>Witchers are mutants, men subjected to gruelling training and flesh-altering experiments that prepare them for one purpose: to kill monsters. Geralt was forged at the elite School of the Wolf and is considered one of the deadliest witchers ever trained. He possesses superhuman reflexes and strength, and his sword fighting skills are second to none.</p>

</div>
</div>
<div class="item">


<div class="col-sm-6" >
<img src="wit4.png" style="width:100%;height:100%;">


</div>
<div class="col-sm-6">
<h1>Story</h1>
<p><i>Child Of Prophecy, Romance, Plague Of The Wild Hun, Choice And Consequence</i></p>
</div>

</div>

<div class="item ">


<div class="col-sm-6">
<img src="wit3.png" style="width:100%;height:100%;">
</div>
<div class="col-sm-6">
<h1>Story</h1>
<p>In a war-torn world, with the Wild Hunt on your back, you’ll take on your most important contract -- to track down the child of prophecy, a key and a weapon which can save or destroy all.</p>

</div>
</div>

<div class="item ">


<div class="col-sm-6">
<img src="wit2.png" style="width:100%;height:100%;">
</div>
<div class="col-sm-6">
<h1>Graphics</h1>
<p>Built exclusively for next generation hardware, the REDengine 3 renders the world of The Witcher visually nuanced and organic, a real true to life fantasy.

Dynamic weather systems and day/night cycles affect how the citizens of the towns and the monsters of the wilds behave.</p>

</div>
</div>
</div>
<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
<i class="fa fa-angle-left"></i>
</a>
<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
<i class="fa fa-angle-right"></i>
</a>
</div>
</div></div>

<div class="tab-pane fade" id="video" >
<div class="col-sm-12">
<div id="slider-carouse" class="carousel slide" data-ride="carousel" style="height:550px;">
<ol class="carousel-indicators" >
<li data-target="#slider-carouse" data-slide-to="0" class="active" ></li>
<li data-target="#slider-carouse" data-slide-to="1"></li>
<li data-target="#slider-carouse" data-slide-to="2"></li>
<li data-target="#slider-carouse" data-slide-to="3"></li>
<li data-target="#slider-carouse" data-slide-to="4"></li>
<li data-target="#slider-carouse" data-slide-to="5"></li>
</ol>

<div class="carousel-inner">
<div class="item active">
<div class ="vt">
<div class="col-sm-6">
<h1>Official Game Play Trailer</h1>

</div>

<div class="col-sm-6">

<iframe width="560" height="315" src="https://www.youtube.com/embed/nYwe_WHARdc" frameborder="0" allowfullscreen></iframe>

</div>
</div>
</div>
<div class="item">
<div class ="vt">
<div class="col-sm-6">
<h1>Launch Trailer</h1>


</div>
<div class="col-sm-6">
<iframe width="560" height="315" src="https://www.youtube.com/embed/hBoCRYX6Vq0?list=PLf-QZNCg8OAY9-uVPt-RGEmlryyg-pnpD" frameborder="0" allowfullscreen></iframe>



</div></div>
</div>
<div class="item">
<div class ="vt">
<div class="col-sm-6">
<h1>Launch Cinematic</h1>

</div>
<div class="col-sm-6" >

<iframe width="560" height="315" src="https://www.youtube.com/embed/1-l29HlKkXU?list=PLf-QZNCg8OAY9-uVPt-RGEmlryyg-pnpD" frameborder="0" allowfullscreen></iframe>

</div>


</div></div>

<div class="item ">
<div class="col-sm-6">
<h1>More Pictures</h1>


</div>

<div class="col-sm-6">
<img class = "dim"  src="wit31.jpg" alt="">
</div>

</div>

<div class="item ">



<div class="col-sm-6">
<h1>More Pictures</h1>


</div>
<div class="col-sm-6">
<img class = "dim" src="wit32.jpg" alt="">
</div>
</div>
<div class="item ">



<div class="col-sm-6">
<h1>More Pictures</h1>


</div>
<div class="col-sm-6">
<img class = "dim" src="wit33.jpg" alt="">
</div>
</div>
</div>
<a href="#slider-carouse" class="left control-carousel hidden-xs" data-slide="prev">
<i class="fa fa-angle-left"></i>
</a>
<a href="#slider-carouse" class="right control-carousel hidden-xs" data-slide="next">
<i class="fa fa-angle-right"></i>
</a>
</div></div></div>

<div class="tab-pane fade" id="award" >
<div class="col-sm-12">
<div class = "vt">
<img src="wiaward.jpg" alt="" style="width:100%;"/>
<h2>Metacritic User Score: 9.1<br>Metascore: 93</h2>
<img src="TGA.jpg" alt="" style="width:100%;"/>
<h2>The Game Award 2015</h2>
<h3>Game of the Year</h3>
<h3>Developer of the Year</h3>
<h3>Best Role Playing Game</h3>
<img src="wita1.jpg" alt="" style="width:100%;"/>
<img src="wita2.jpg" alt="" style="width:100%;"/>
<h2>Golden Joystick Awards</h2>
<h3>Ultimate game of the year</h3>
<h3>Best storytelling</h3>
<h3>Best visual design</h3>
<h3>Best gaming moment</h3>
<h3>Studio of the year</h3>
</div>

</div>
</div>

</div>
</div>

<div class="recommended_items"><!--recommended_items-->
<h2 class="title text-center">Games You may like</h2>

<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">

<div class="item">
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products" style = "height:410px;">
<div class="productinfo text-center">

<img src="witex.jpg" alt="" style = "height:300px"/>
<h2>The Witcher 3: Wild Hunt              - Hearts of Stone</h2>
<a href = "witcherexps.html">PS4</a> |
<a href = "witcherexxbox.html">Xbox One</a> |
<a href = "witcherexpc.html">PC</a>


</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products" style = "height:410px;">
<div class="productinfo text-center" >
<img src="F1.jpg" alt="" style = "height:300px" />
<h2>Fallout 4</h2>
<a href = "fallps.html">PS4</a> |
<a href = "fallxbox.html">Xbox One</a> |
<a href = "fallpc.html">PC</a>

</div>
</div>
</div>
</div>

<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">


<img src="bloodborne.png" alt="" style = "height:300px"/>
<h2>Bloodborne</h2>
<a href = "blood.html">PS4 Only</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
WRITEUP;

}