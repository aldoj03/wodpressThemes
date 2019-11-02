<?php get_header() ?>
        
        <section id="" >
            <h1 style="text-align:center;color:white">Enjoy it!</h1>
            <div id="food-container-single">
                <?php the_post(); ?>
                    <div id="post-<?php the_ID() ?>" <?php post_class() ?> style="min-width:95%;min-height:85%">
                        <div class="food-card-single" >
                        <?php if ( has_post_thumbnail() ): ?>
                        <div class="image-card-single">			
                            <?php the_post_thumbnail( 'image-post' ); ?>						
                        </div>
                        <?php endif; ?>
                        <div class="food-info">
                            <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>               
                            <p><?php the_content() ?></p>               
                        </div>       
                    </div>
                    
                    <div id="footer-post">
                        <ul class="post-tags">
                                <?php echo  get_the_term_list( get_the_ID(), 'food-tag', '<li>', '</li><li>', '</li>' );?>
                            </ul>
                            <span class="edit-link"><?php edit_post_link( 'Edit' ) ?></span>
                    </div>
       
                    </div>
                </div>        
            </section>
            
    <?php get_footer() ?>