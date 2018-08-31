<?php /* Template Name: Attaractions*/ ?>

<?php get_header(); ?>


<div class="attaraction">
    <section class="attaract-background" style="background-image: url('http://dev.restadviser.com/prog/prog22/wp-content/uploads/2018/08/large.jpg'); ">
        <div class="row">
            <div class="col-md-12">
                <h5>Places to go on Ireland</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Beatae illum quaerat voluptatum!
                    A assumenda, at delectus deleniti esse impedit perspiciatis?
                </p>
            </div>
        </div>
    </section>

    <section class="turists">
        <div class="content">

            <div class="row">
                <div class="col-md-12">
                    <h1>Tourist Attractions and Sites</h1>
                </div>
            </div>
            <div class="row">

                <?php
                $loop = new WP_Query( array( 'post_type' => 'tourists',  'ignore_sticky_posts' => 6 ) );
                if ( $loop->have_posts() ) :
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>


                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="turist-box">
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <div class="pimage">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                    </div>
                                <?php } ?>
                                <div class="ptitle">
                                    <h2><?php echo get_the_title(); ?></h2>
                                </div>
                                <div class="cont">
                                    <?php echo the_content();?>
                                </div>
                            </div>
                        </div>



                    <?php endwhile;

                endif;
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </section>



    <section class="turists">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <h1>Hotels and Restaurants</h1>
                </div>
            </div>

            <div class="row">

                <?php
                $loop = new WP_Query( array( 'post_type' => 'hotels',  'ignore_sticky_posts' => 6 ) );
                if ( $loop->have_posts() ) :
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>


                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="turist-box">
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <div class="pimage">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                    </div>
                                <?php } ?>
                                <div class="ptitle">
                                    <h2><?php echo get_the_title(); ?></h2>
                                </div>
                                <div class="cont">
                                    <?php echo the_content();?>
                                </div>
                            </div>
                        </div>



                    <?php endwhile;

                endif;
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </section>
</div>




<?php get_footer();?>
