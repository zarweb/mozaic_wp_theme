<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<div class="contact-box">
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
