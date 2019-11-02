<?php if(is_home()):  ?>
<h1 style="text-align:center;color:white; backgorund: #94d8695e">Our Menu</h1>
<?php else: ?>
<h1 style="text-align:center;color:white; backgorund: #94d8695e"><?php echo get_the_archive_title() ?></h1>
<?php endif; ?>
            <div id="food-container">
<?php if(is_home()):?>            
 <?php $args = array('post_type'=>array('food'));?>
 <?php query_posts($args);?>
<?php endif;?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     <div id="post-<?php the_ID() ?>" <?php post_class() ?>>
     <div class="food-card" data-id="<?php the_ID() ?>">
         <?php if ( has_post_thumbnail() ): ?>
         <div class="image-card">			
             <?php the_post_thumbnail( 'image-card' ); ?>						
         </div>
         <?php endif; ?>
         <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
       
         <p><?php the_content() ?></p>
     </div>
   
     </div>
 <?php endwhile;?>
 <?php endif; ?>   
 </div>
 <nav id="post-nav" class="row">
    <div class="columns small-6 post-previous"><?php previous_posts_link(); ?></div>
    <div class="columns small-6 post-next text-right"><?php next_posts_link(); ?></div>
    </nav>
