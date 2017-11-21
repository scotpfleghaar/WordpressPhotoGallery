
       <?php get_header();?>


       <?php if(have_posts()) :?>
            <?php while(have_posts()) : the_post();?>
                <?php get_template_part('content',get_post_format());?>

            <?php endwhile; ?>


        <?php else : ?>
                <?php echo wpautop('Sorry, there are not posts'); ?>
        <?php endif; ?>









            <!-- <div class="w3-col m4 l4 pic">
                <a href="single.html">
                    <img class="w3-animate-opacity" src="https://static1.squarespace.com/static/5317b571e4b01396b757268a/535ed193e4b081613fd31a34/535ed193e4b081613fd31a39/1398722779508/photo-placeholder.png"
                        alt="">
                </a>
                <p>Lorum Ipsom</p>

            </div>
            <div class="w3-col m4 l4 pic">
                <img class="w3-animate-opacity" src="https://static1.squarespace.com/static/5317b571e4b01396b757268a/535ed193e4b081613fd31a34/535ed193e4b081613fd31a39/1398722779508/photo-placeholder.png"
                    alt="">
                <p>Lorum Ipsom</p>
            </div>
            <div class="w3-col m4 l4 pic">
                <img class="w3-animate-opacity" src="https://static1.squarespace.com/static/5317b571e4b01396b757268a/535ed193e4b081613fd31a34/535ed193e4b081613fd31a39/1398722779508/photo-placeholder.png"
                    alt="">
                <p>Lorum Ipsom</p>
            </div>
            <div class="w3-col m4 l4 pic">
                <img class="w3-animate-opacity" src="https://static1.squarespace.com/static/5317b571e4b01396b757268a/535ed193e4b081613fd31a34/535ed193e4b081613fd31a39/1398722779508/photo-placeholder.png"
                    alt="">
                <p>Lorum Ipsom</p>
            </div>
            <div class="w3-col m4 l4 pic">
                <img class="w3-animate-opacity" src="https://static1.squarespace.com/static/5317b571e4b01396b757268a/535ed193e4b081613fd31a34/535ed193e4b081613fd31a39/1398722779508/photo-placeholder.png"
                    alt="">
                <p>Lorum Ipsom</p>
            </div>
            <div class="w3-col m4 l4 pic">
                <img class="w3-animate-opacity" src="https://static1.squarespace.com/static/5317b571e4b01396b757268a/535ed193e4b081613fd31a34/535ed193e4b081613fd31a39/1398722779508/photo-placeholder.png"
                    alt="">
                <p>Lorum Ipsom</p>
            </div>
        </div> -->
    <?php get_footer();?>