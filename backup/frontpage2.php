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
$info_500 = truncate_paragraph($about, 500, "/about", "underlined");
$info_250 = truncate_paragraph($about, 250, "/about", "underlined");
$description = truncate_paragraph($listings['results'][$rand]['description'], 300, $listings['results'][$rand]['url'], "underlined");

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
     <img src="/wp-content/uploads/2015/08/banner.jpg" class="img-full-width" alt="Rebecca Cordingley Designs banner" title="Photo by Simon Cordingley">
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
[insert_php]
$counter = 0;

$args = array(
    'posts_per_page' => 2,
    'order' => 'DESC'
);
$rp = new WP_Query( $args );

if($rp->have_posts()) :
    while($rp->have_posts()) : $rp->the_post();
       echo '<div class="card">';
       echo '<h2 class="front-page-subtitle">';
       the_title();
       echo '</h2>';
echo "<br>";
       the_date();


       if($counter == 0) {
            echo "<hr class='front-page-blog-colour' style='background: rgba(255, 166, 68, 1);'>";
       }
       else if($counter == 1) {
            echo "<hr class='front-page-blog-colour' style='background: rgba(0, 45, 64, 1);'>";
       }

       the_excerpt(); // displays the excerpt
       echo '</div>'; // card
       $counter++;
    endwhile;
    wp_reset_postdata(); // always always remember to reset postdata when using a custom query, very important
endif;
[/insert_php]


</div> <!-- middle -->




<!-- right column -->

<div class="right col-xs-12 col-sm-4">

<div class="card" style="padding-right: 10px;">
<div style="margin: 0 auto;" class="fb-page" data-href="https://www.facebook.com/RebeccaCordingleyDesigns" data-width="340" data-height="150" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/RebeccaCordingleyDesigns"><a href="https://www.facebook.com/RebeccaCordingleyDesigns">Rebecca Cordingley Designs</a></blockquote></div></div>
</div>

<div class="card">
<h2 class="front-page-subtitle">REBECCA CORDINGLEY DESIGNS ON ETSY</h2>

<div class="widget-img"><a href="[insert_php]echo $listings['results'][$rand]['url'];[/insert_php]" target="_blank">
[insert_php] echo "<img src='".$listings['results'][$rand]['MainImage']['url_570xN']."' alt='".$listings['results'][$rand]['title']."'>";[/insert_php]</a>
</div>

<div class="widget-description">
[insert_php] echo $description; [/insert_php]
</div>

<div class="widget-bottom-row">
<div class="widget-bottom-row-left">
  <a href="http://rebeccacordingley.etsy.com" target="_blank"><h3 class="widget-view-more">VIEW MORE ON ETSY</h3></a>
</div>
<div class="widget-bottom-row-right">
  <a href="[insert_php]echo $listings['results'][$rand]['url'];[/insert_php]" target="_blank"><h3 class="widget-price">AUD$[insert_php]echo $listings['results'][$rand]['price'];[/insert_php]</h3></a>
</div>
</div>

</div>
  </div>

</div><!-- row -->
</div>
</div><!-- content -->
