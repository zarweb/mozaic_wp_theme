<?php /* Template Name: Front Page */ ?>

<?php get_header(); ?>

<div class="front-page">

    <section class="header-box">
        <div class="container">
            <div class="row">

                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/08/img.png" alt="">
            </div>

            <div class="row text">
                <p>over 1 million irish - 1 euro - own a peice of irish history</p>
            </div>
        </div>
    </section>

    <section class="how-it-works">
        <div class="content">
            <div class="row fisrt">
                <div class="col-md-12">
                    <h3 class="title">How it works</h3>
                </div>

                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="how-it-box">

                        <h4>rappresent your support with a simple photo</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aliquam autem beatae deleniti doloremque,
                            doloribus esse eveniet harum illum minima modi molestias obcaecati odio porro possimus,
                            repellat soluta suscipit tenetur voluptate.
                        </p>
                        <button class="btn">upload now</button>
                    </div>
                </div>
                <div class="col-md-7 col-sm-6 col-xs-12">
                    <div class="how-to-img">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/08/Screenshot_2.png" alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7 col-sm-6 col-xs-12">
                    <div class="how-to-img">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="big-img">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/08/img2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mini">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/08/img.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mini">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/08/img3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="how-it-box">

                        <h4>that can be displayed on all the tourist spot</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aliquam autem beatae deleniti doloremque,
                            doloribus esse eveniet harum illum minima modi molestias obcaecati odio porro possimus,
                            repellat soluta suscipit tenetur voluptate.
                        </p>
                        <button class="btn">upload now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="participate">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title">How to participate?</h3>
                </div>

                <div class="col-md-4">
                    <div class="how-to-img">
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/img.svg" alt="">
                        <h6>upload</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Amet, cumque ipsa maiores
                            nostrum quis repellendus!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="how-to-img">
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/credit.svg" alt="">
                        <h6>pay</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Amet, cumque ipsa maiores
                            nostrum quis repellendus!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="how-to-img">
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/user.svg" alt="">
                        <h6>be proud</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Amet, cumque ipsa maiores
                            nostrum quis repellendus!
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn">upload now</button>
                </div>


            </div>
        </div>
    </section>

    <section class="join">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-green">join the thousand of people to upload their photo and be proud</h3>
                    <p class="title-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Minima mollitia natus numquam odit sit suscipit?
                        Ab earum error iure minima neque nisi placeat quos ratione sit.
                        Consequuntur enim reiciendis tempora.

                    </p>
                </div>

                <div class="col-md-12">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/08/people_resized.png" alt="">
                    <button class="btn">upload now</button>
                </div>

            </div>
        </div>
    </section>

    <section class="contact-us">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title">contact us now</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Delectus et facere, harum laboriosam magnam molestiae officiis
                        sequi temporibus vitae voluptate!
                    </p>
                </div>
                <div class="col-md-12">
                    <?php echo do_shortcode('[contact-form-7 id="37" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </section>





</div>

<?php get_footer(); ?>
