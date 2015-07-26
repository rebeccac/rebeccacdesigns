[insert_php]
// Get data
$about = "<p class='card-text'>Art has always played an important role in my life. I played the piano, violin and harp as a child and spent most of my spare time with my nose in a book. As a teenager, I loved taking photographs with my SLR and developing them in the darkroom.</p>
<p class='card-text'>I studied politics then social health at university, with a particular interest in human rights.</p>
<p class='card-text'>In 2006, a friend introduced me to lampworking. I knew nothing about jewellery at the time - I didn't even know what a lampwork bead was - but I was fascinated by hot glass and hooked from the moment I melted my first rod.</p>
<p class='card-text'>Later that week, I bought my first little torch, a hothead, and a few basic tools and rods of glass and set up a small studio at home. That small studio grew as I acquired more glass and tools and moved on to more powerful torches.</p>
<p class='card-text'>I find hot glass quite mesmerising and love playing with it and trying to get colours to react in different ways.</p>
<p class='card-text'>Initially, I began selling my work as a way to fund my hobby but after a while my business became quite successful.</p>
<p class='card-text'>Unfortunately, in late 2010, I had to give up lampworking due to ill health. Since then, I've been back to university to study computer science.</p>
<p class='card-text'>From the time I started lampworking, I have wanted to try silversmithing and finally, at the beginning of 2015, I did beginners and intermediate courses at the Jam Factory in Adelaide.</p>
";

$images = frontPageImages_function();
$item = new Etsy();
$listings = $item->getListings();
$rand = $item->getRandomElement($listings);
$info_500 = truncate_paragraph($about, 500, "/about", "red");
$info_250 = truncate_paragraph($about, 250, "/about", "red");
$description = truncate_paragraph($listings['results'][$rand]['description'], 300, $listings['results'][$rand]['url'], "dark_grey");

[/insert_php]

<div class="content">
<div class="frontpage-gallery visible-xs-block">
<div class="row images row-no-padding">
  <div class="col-xs-12">
      <div class="row row-no-padding">
          [insert_php]
for($i = 0; $i < 4; $i++) {
echo "<div class='col-xs-6'>";
echo "<img src='".$images[$i]->url."' alt='".$images[$i]->alt."' width='100%' class='frontpage-image'>";
echo "</div>";
}
[/insert_php]
      </div>
  </div>
</div>
</div>

<div class="frontpage-gallery hidden-xs">
<div class="frontpage-hidden-xs-images">
  <div class="col-sm-12">
      <div class="row row-no-padding">
          [insert_php]
for($i = 0; $i < 3; $i++) {
echo "<div class='col-sm-4'>";
echo "<img src='".$images[$i]->url."' alt='".$images[$i]->alt."' width='100%' class='frontpage-image'>";
echo "</div>";
}[/insert_php]

      </div>
  </div>
</div>
</div>
<div class="clear"></div>
<!-- <hr class="divider"> -->





<div class="col-xs-12 col-sm-12">
<div class="row row-no-padding">

  <!-- left column -->

  <div class="left col-xs-12 col-sm-4">
      <div class="card">
          <h2 class="front-page-subtitle">ABOUT REBECCA CORDINGLEY DESIGNS</h2>
          <img src="/wp-content/uploads/2015/07/rebecca.png" alt="Rebecca Cordingley" class="text-wrap-left">
          <div class="hidden-xs"><p class="card-text<div class=">[insert_php]echo $info_500; [/insert_php]</p></div>
          <div class="visible-xs-block"><p class="card-text">[insert_php]echo $info_250;[/insert_php]</p></div>
      </div><!-- card -->
      <div class="card">
          <h2 class="front-page-subtitle">SUBSCRIBE TO MAILING LIST</h2>
          <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
<div id="mc_embed_signup">
<form action="//rebeccacordingley.us11.list-manage.com/subscribe/post?u=3cadf198e71180063ebddfd16&amp;id=e810f8a740" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate style="padding: 0; margin: 0 auto; width: 92%;">
<div id="mc_embed_signup_scroll">

<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required style="width: 100%; margin-left: 0; padding: 3px;">
<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
<div style="position: absolute; left: -5000px;"><input type="text" name="b_3cadf198e71180063ebddfd16_e810f8a740" tabindex="-1" value=""></div>
<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="background-color: #red; border-radius:0; color: #FFFFFF; font-weight: 300; height: 25px; line-height: 25px;"></div>
</div>
</form>
</div>

<!--End mc_embed_signup-->
      </div>
  </div>


  <!-- middle column -->

  <div class="middle col-xs-12 col-sm-4">
      <div class="card">
          <h2 class="info-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
      </div>
  </div>


<!-- right column -->

<div class="right col-xs-12 col-sm-4">
<div class="card">
<h2 class="front-page-subtitle">REBECCA CORDINGLEY DESIGNS ON ETSY</h2>

<div class="widget-img">
[insert_php] echo "<img src='".$listings['results'][$rand]['MainImage']['url_570xN']."' alt='".$listings['results'][$rand]['title']."'>";[/insert_php]
</div>

<div class="widget-description">
[insert_php] echo $description; [/insert_php]
</div>

<div class="widget-bottom-row">
<div class="widget-bottom-row-left">
  <h3 class="widget-view-more">VIEW MORE<br>ON ETSY</h3>
</div>
<div class="widget-bottom-row-right">
  <h3 class="widget-price">USD$[insert_php]echo $listings['results'][$rand]['price'];[/insert_php]</h3>
</div>
</div>

</div>
  </div>

</div><!-- row -->
</div>
</div><!-- content -->
