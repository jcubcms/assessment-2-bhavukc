<?php


get_header(); ?>

<?php do_action( 'u3a_townsville_page_top' ); ?>

    <main id="maincontent" role="main" class="middle-align"> 
        <div class="container">
            <?php $theme_lay = get_theme_mod( 'u3a_townsville_page_layout','One Column');
                if($theme_lay == 'One Column'){ ?>
                    <?php while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/page-content'); 
                  
                    endwhile; ?>
            <?php }else if($theme_lay == 'Right Sidebar'){ ?>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <?php while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/page-content'); 
                      
                        endwhile; ?>
                    </div>
                    <div id="sidebar" class="col-lg-4 col-md-4">
                        <?php dynamic_sidebar('sidebar-2'); ?>
                    </div>
                </div>
            <?php }else if($theme_lay == 'Left Sidebar'){ ?>
                <div class="row">
                    <div id="sidebar" class="col-lg-4 col-md-4">
                        <?php dynamic_sidebar('sidebar-2'); ?>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <?php while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/page-content'); 
                      
                        endwhile; ?>
                    </div>
                </div>
            <?php }else {?>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <?php while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/page-content'); 
                      
                        endwhile; ?>
                    </div>
                    <div id="sidebar" class="col-lg-4 col-md-4">
                        <?php dynamic_sidebar('sidebar-2'); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
    
<?php do_action( 'u3a_townsville_page_bottom' ); ?>

<?php get_footer(); ?>