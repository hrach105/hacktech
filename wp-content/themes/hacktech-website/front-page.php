<?php get_header()?>

<main>
    <div class="page-wrapper">
       <div class="main-container">
       <h2 class="banner-title"><?php the_field('banner_title') ?></h2>
            <div class="page-wrapper">
                <div class="main-content">
                    <div class="banner">
                           <img src="<?php the_field('banner_image') ?>" class="banner-image" alt="gohacktech.com banner">
                           <div class="services">
                               <?php if( have_rows('services') ): ?>
                                   <div class="wrapper">
                                       <?php while( have_rows('services') ): the_row();
                                           $icon = get_sub_field('icon');
                                           $title = get_sub_field('title');
                                           $desc = get_sub_field('desc');
                                           ?>
                                           <div class="wrapper-item">
                                               <img src="<?= $icon ?>" alt="gohacktech.com services">
                                               <div>
                                                   <p><?= $title ?></p>
                                                   <span><?= $desc  ?></span>
                                               </div>
                                           </div>
                                       <?php endwhile; ?>
                                   </div>
                               <?php endif; ?>
                           </div>
                       </div>
                    <div class="slider">
                        <?php
                            if (have_rows('slider')) : ?>
                                <div class="slides">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php $first = true; ?>
                                            <?php while (have_rows('slider')) : the_row();
                                                $image = get_sub_field('image');
                                                $alt = get_sub_field('alt'); // Retrieve alt text
                                            ?>
                                                <div class="carousel-item <?php if ($first) echo 'active'; ?>">
                                                    <img class="d-block w-100" src="<?php echo $image; ?>" alt="<?php echo $alt; ?>">
                                                </div>
                                                <?php $first = false; ?>
                                            <?php endwhile; ?>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                        <?php endif; ?>
                    </div>
                    <div class="main-container">
                    <section id="introduction">
                        <h3 class="section-title"><?php the_field('section_title') ?></h3>
                        <p class="section_description"><?php the_field('section_description') ?></p>
                    </section>
                    <section id="partnership">
                            <div class="table">
                                <div class="titles">
                                    <h4><?php the_field('title_1') ?></h4>
                                    <h4><?php the_field('title_2') ?></h4>
                                </div>
                                <div class="body">
                                    <?php if( have_rows('table') ): ?>
                                        <div class="descriptions">
                                            <?php while( have_rows('table') ): the_row();
                                                $table_description = get_sub_field('table_description');
                                                $table_description_2 = get_sub_field('table_description_2');
                                                ?>
                                               <div class="desc-item">
                                                    <p><?= $table_description ?></p>
                                               </div>
                                               <div class="desc-item">
                                                    <p><?= $table_description_2 ?></p>
                                               </div>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                       </section>
                    </div>
                    <section id="problem_statment">
                        <h3 class="section-title"><?php the_field('after-table_title') ?></h3>
                        <p class="section_description"><?= the_field('after_table_description') ?></p>
                    </section>
                    <section id="solution">
                        <h3 class="section-title"><?php the_field('solutions_title') ?></h3>
                        <p class="section_description"><?= the_field('solutions_description') ?></p>
                    </section>
                    <section id="testimonial" class="testimonial">
                        <?php if( have_rows('testimonial') ): ?>
                            <div class="testimonail-item">
                            <?php while( have_rows('testimonial') ): the_row();
                                $testimonial_image = get_sub_field('testimonial_image');
                                $testimonial_description = get_sub_field('testimonial_description');
                                $testimonial_information = get_sub_field('testimonial_information');
                                ?>
                                <div class="image">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="37" height="28" viewBox="0 0 37 28" fill="none">
                                        <path d="M1.5905 14.6512L11.1335 0H17.7466L11.7195 12.3721C13.1146 12.9147 14.2866 13.8915 15.2353 15.3023C16.2398 16.6589 16.7421 18.1783 16.7421 19.8605C16.7421 22.1395 15.9329 24.0659 14.3145 25.6395C12.6961 27.2132 10.7149 28 8.37104 28C6.02715 28 4.046 27.2132 2.4276 25.6395C0.809201 24.0659 0 22.1395 0 19.8605C0 18.0698 0.530166 16.3333 1.5905 14.6512ZM20.8439 14.6512L30.3869 0H37L30.9728 12.3721C32.368 12.9147 33.54 13.8915 34.4887 15.3023C35.4932 16.6589 35.9955 18.1783 35.9955 19.8605C35.9955 22.1395 35.1863 24.0659 33.5679 25.6395C31.9495 27.2132 29.9683 28 27.6244 28C25.2805 28 23.2994 27.2132 21.681 25.6395C20.0626 24.0659 19.2534 22.1395 19.2534 19.8605C19.2534 18.0698 19.7836 16.3333 20.8439 14.6512Z" fill="#4669D1"/>
                                    </svg>
                                    <img src="<?= $testimonial_image ?>" alt="gohacktech.com testimonials">
                                </div>
                                <div>
                                    <p><?= $testimonial_description ?></p>
                                    <span><?= $testimonial_information ?></span>
                                </div>
                            <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </section>
                    <section id="implementation">
                        <h3 class="section-title"><?php the_field('implementation_title') ?></h3>
                        <p class="section_description"><?= the_field('implementation_description') ?></p>
                    </section>
                    <section id="design">
                        <h3 class="section-title"><?php the_field('design_title') ?></h3>
                        <p class="section_description"><?= the_field('design_description') ?></p>
                    </section>
                    <section id="our_aproach">
                        <h3 class="section-title"><?php the_field('our_aproach_title') ?></h3>
                        <p class="section_description"><?= the_field('our_aproach_description') ?></p>
                    </section>
                    <section id="results">
                        <h3 class="section-title"><?php the_field('results_title') ?></h3>
                        <p class="section_description"><?= the_field('results_description') ?></p>
                    </section>
                    <section id="conclusion">
                        <h3 class="section-title"><?php the_field('conclusion_title') ?></h3>
                        <p class="section_description"><?= the_field('conclusion_description') ?></p>
                    </section>
                    <div class="share-to">
                            <span>Share to</span>
                            <div class="socials">
                                <?php if( have_rows('socials','options') ): ?>
                                    <ul class="socials-wrapper">
                                        <?php while( have_rows('socials','options') ): the_row();
                                            $social_icon = get_sub_field('social_icon','options');
                                            $social_link = get_sub_field('social_link','options');
                                            ?>
                                            <li>
                                                <a href="<?= $social_link ?>">
                                                    <img src="<?= $social_icon ?>" alt="gohacktech.com socials">
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>

                </div>
                <div class="sidebar">
                    <div class="contact-us-banner">
                        <div class="contact-us-banner-content">
                            <h3><?php the_field('contact_us_title') ?></h3>
                            <p><?php the_field('contact_us_description') ?></p>
                            <a href="#"><?php the_field('contact_us_button') ?></a>
                        </div>
                    </div>
                    <div class="links-block">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'links',
                            ));
                        ?>
                    </div>
                </div>

            </div>
           <div class="related-articles">
               <h2><?php the_field('article_title') ?></h2>

               <?php
               $args = array(
                   'post_type' => 'articles',  // Replace 'your_custom_post_type' with the name of your custom post type
                   'posts_per_page' => -1,
               );

               $query = new WP_Query($args);?>
               <div class="posts-wrapper">
                   <?php  if ($query->have_posts()) :?>

                       <?php    while ($query->have_posts()) : $query->the_post(); ?>
                           <div class="post-item">
                               <img src="<?php the_field('article_image'); ?>" alt="gohacktech.com posts">
                               <div class="post-item-titles">
                                   <p><?php the_field('post_title'); ?></p>
                                   <span><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
                               </div>
                               <a href="#" rel="nofollow">
                                   Read More
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="12" viewBox="0 0 24 12" fill="none">
                                       <g clip-path="url(#clip0_2_319)">
                                           <path d="M20 4.44312H0V7.44312H20V4.44312Z" fill="#4669D1"/>
                                           <path d="M24 6L14.352 12V0L24 6Z" fill="#4669D1"/>
                                       </g>
                                       <defs>
                                           <clipPath id="clip0_2_319">
                                               <rect width="24" height="12" fill="white"/>
                                           </clipPath>
                                       </defs>
                                   </svg>
                               </a>
                           </div>
                       <?php endwhile;
                       wp_reset_postdata();
                   endif;
                   ?>
               </div>

           </div>
           <div class="contact-us-block">
               <div class="contact-us-block-content">
                   <h3><?php the_field('contact_title')?></h3>
                   <p><?php the_field('contact_description')?></p>
                   <a href="#">Contact us</a>
               </div>
           </div>
        </div>
    </div>
</main>

<?php get_footer() ?>