<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <?php
            $images = array();
            $title = array();
            $tech = array();
            $dimen = array();
            $annee = array();
            ?>



            <?php $loop = new WP_Query(array('post_type' => 'oeuvres', 'posts_per_page' => '10'));
            $i = 0; ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <?php
                array_push($images, addslashes( get_field('oeuvre')['url']));
                array_push($title, addslashes(get_the_title()));
                array_push($tech, addslashes(get_post_meta($post->ID, 'technique', true)));
                array_push($dimen, addslashes(get_post_meta($post->ID, 'dimension', true)));
                array_push($annee, addslashes(get_post_meta($post->ID, 'annee', true)));


                ?>
                <?php if ($i < 2) { ?>
                    <div class="col-xs-12">
                        <div class="test-oeuvres">
                                <img class="img-responsive padding-oeuvres"
                                     src="<?php echo get_field('oeuvre')['url']; ?>"
                                     alt="<?php echo get_field('oeuvre')['alt']; ?>"
                                    <?php echo "onclick = \"display('$images[$i]', '$title[$i]', '$tech[$i]', '$dimen[$i]', $annee[$i])\""; ?>
                                />
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="col-md-6">
                        <div class="test-oeuvres">
                            <img class="img-responsive padding-oeuvres"
                                     src="<?php echo get_field('oeuvre')['url']; ?>"
                                     alt="<?php echo get_field('oeuvre')['alt']; ?>"
                            <?php echo "onclick = \"display('$images[$i]', '$title[$i]', '$tech[$i]', '$dimen[$i]', $annee[$i])\""; ?>

                                onclick="display('http://localhost/LisaSeror/wp-content/uploads/2017/01/trolltunga1.jpg', 'Une oeuvre', 'peinture à l'huile', '200x300', 2015)"
                            />

                        </div>
                        <!--<h1><?php /*the_title() */ ?></h1>-->

                    </div>
                <?php }
                $i = $i + 1; ?>
            <?php endwhile;
            wp_reset_query(); ?>
        </div>
    </div>

    <!--LIGHTBOX -->

    <div id = 'lightbox'>

    <div class = 'limage'>
    </div>

    <div class="descri-img">
    </div>

    <div class = 'left'>
        <img src="<?php echo get_template_directory_uri()?>/img/arrow_left.png" alt="fleche de gauche">
    </div>

    <div class = 'right'>
        <img src="<?php echo get_template_directory_uri()?>/img/arrow_right.png" alt="fleche de droite">
    </div>

    <div class = 'close'>
        <img src="<?php echo get_template_directory_uri()?>/img/cross.png" alt="Fermer l'image">
    </div>



<?php get_footer(); ?>
<script type = "text/javascript">

        function display(src, titre, technique, dimensions, annee){
            $('.limage').html("<img src = " + src + ">");
            $('.descri-img').html('<h2 class="titre-oeuvre">' + titre + '</h2></br><ul><li><p class="ss-titre-oeuvre">Technique</p><p class="txt-oeuvre">' + technique + '</p></li><li><p class="ss-titre-oeuvre">Dimensions</p><p class="txt-oeuvre">' + dimensions + '</p></li><li><p class="ss-titre-oeuvre">Année</p><p class="txt-oeuvre">' + annee + '</p></li></ul>');
            $('#lightbox').css("display", "block");
            $('#lightbox').fadeIn();
            console.log(src, titre, technique, dimensions, annee);


            $('.right').click(function(){

                var images = <?php echo json_encode($images); ?>;
var title = <?php echo json_encode($title); ?>;
var tech = <?php echo json_encode($tech); ?>;
var dimen = <?php echo json_encode($dimen); ?>;
var year = <?php echo json_encode($annee); ?>;
var x;

for(x=0; x<<?php echo count($images); ?>-1; x++){
if(images[x] == src){
break;
}
else{
continue;
}
}

if(x==<?php echo count($images) -1; ?>){
x=-1;
}

$('.limage').fadeOut(0);
$('.limage').html("<img src = " + images[x+1] + " >");
$('.descri-img').html('<h2 class="titre-oeuvre">' + title[x+1]+ '</h2></br><ul><li><p class="ss-titre-oeuvre">Technique</p><p class="txt-oeuvre">' + tech[x+1] + '</p></li><li><p class="ss-titre-oeuvre">Dimensions</p><p class="txt-oeuvre">' + dimen[x+1] + '</p></li><li><p class="ss-titre-oeuvre">Année</p><p class="txt-oeuvre">' + year[x+1] + '</p></li></ul>');
$('.limage').fadeIn(500);
src = images[x+1];
});

$('.left').click(function(){

var images = <?php echo json_encode($images); ?>;
var title = <?php echo json_encode($title); ?>;
var tech = <?php echo json_encode($tech); ?>;
var dimen = <?php echo json_encode($dimen); ?>;
var year = <?php echo json_encode($annee); ?>;
var x;

for(x=0; x<<?php echo count($images); ?>-1; x++){
if(images[x] == src){
break;
}
else{
continue;
}
}

if(x==0){
x=<?php echo count($images); ?>;
}

$('.limage').fadeOut(0);
$('.limage').html("<img src = " + images[x-1] + " >");
$('.descri-img').html('<h2 class="titre-oeuvre">'+title[x-1]+ '</h2></br><ul><li><p class="ss-titre-oeuvre">Technique</p><p class="txt-oeuvre">' + tech[x-1] + '</p></li><li><p class="ss-titre-oeuvre">Dimensions</p><p class="txt-oeuvre">' + dimen[x-1] + '</p></li><li><p class="ss-titre-oeuvre">Année</p><p class="txt-oeuvre">' + year[x-1] + '</p></li></ul>');
$('.limage').fadeIn(500);
src = images[x-1];
});

$('.close').click(function(){
$('#lightbox').fadeOut();
$('.left').off("click");
$('.right').off("click");
});

}

$(document).ready(function(e){
var timer;
$('#lightbox').mousemove(function() {
if (timer) {
clearTimeout(timer);
timer = 0;
}

$('.descri-img').fadeIn();
timer = setTimeout(function() {
$('.descri-img').fadeOut()
}, 3000)
})
});

</script>