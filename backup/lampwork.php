[insert_php] $images = galleryLampworkPhotos_function();

[/insert_php]
<code>
<div class="content">
<h2 class="page-title">GALLERY - LAMPWORK GLASS</h2>
<div class="padded-content">
<div class="gallery">
        <div class="row">
            <div class="col-md-12">
                <section>

    				<ul class="rc-album">
                        [insert_php]
                        $i = 0;
                        $count = count($images);

                        foreach($images as $image) {
echo "<li>";
echo "<a href='#image-".$i."'>";
echo "<img src='".$image->url."' alt='".$image->alt."'>";
echo "<span>".$image->title."</span>";
echo "</a>";
echo "<div class='rc-overlay' id='image-".$i."'>";
      echo "<div class='row'>";
            echo "<div class='rc-overlay-top'>";
                 echo "<a href='#page' class='rc-close'>";
                     echo "<span aria-hidden='true'>";
                          echo "<i class='fa fa-times'></i>";
                      echo "</span>";
                      echo "<span class='sr-only'>Twitter</span>";
                 echo "</a>";

echo "<div class='rc-overlay-box'>";

echo "<img src='".$image->url."' alt='".$image->alt."'>";
echo "<div class='rc-details'>";
echo "<h3 class='title'>$image->title</h3>";
echo "<span class='gallery-description'>$image->description</span>";

echo "<div class='rc-nav'>";
echo "<div class='prev'>";
if ($i == 0) {
   $prev_link = "<a href='#image-".($count - 1)."' class='rc-prev'>&larr;</a>";
}
else {
   $prev_link = "<a href='#image-".($i-1)."' class='rc-prev'>&larr;</a>";
}
echo $prev_link;
echo "</div>";
echo "<div class='next'>";
if ($i == $count - 1) {
    $next_link = "<a href='#image-0' class='rc-next'>&rarr;</a>";
}
else {
    $next_link = "<a href='#image-".($i+1)."' class='rc-next'>&rarr;</a>";
}
echo $next_link;
echo "</div>";


echo "</li>";
$i++;
}[/insert_php]
                    </ul>

                    <div class="clear"></div>
                </section>
            </div>
        </div>
    </div>
</div><!-- padded-content -->
</div><!-- content -->
