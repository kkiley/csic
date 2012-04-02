<?php if ($teaser): ?>
  <div id="node-<?php print $node->nid; ?>" class="teaser <?php print $classes; ?>">
    <?php if ($display_submitted): ?>
			<span class="submitted"><?php echo format_date($node->created, 'medium'); ?></span>
		<?php endif; ?>
    <h2 class="title node-title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <div class="content">
  	  <?php print render($content);?>
  	</div>
    <?php if (!empty($content['links'])): ?>
	    <div class="links"><?php print render($content['links']); ?></div>
	  <?php endif; ?>
	</div>
<?php else : ?>
  <div id="node-<?php print $node->nid; ?>" class="full <?php print $classes; ?>">
		<?php if ($node->nid): ?>
			<div class="meta clearfix">
        <?php print $user_picture; ?>
				<?php if ($display_submitted or !empty($content['links']['terms'])): ?>
          <?php if ($display_submitted): ?>
            <span class="submitted"><?php print $date; ?> — <?php print $name; ?></span>
          <?php endif; ?>
          <?php if (!empty($content['links']['terms'])): ?>
            <div class="terms"><?php print render($content['links']['terms']); ?></div>
          <?php endif;?>
  			<?php endif; ?>    	
			</div>
		<?php endif; ?>
    
		<div class="content clearfix">
  	  <?php 
  	    // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content);
       ?>
		</div>
    
    <?php if (!empty($content['links'])): ?>
	    <div class="links"><?php print render($content['links']); ?></div>
	  <?php endif; ?>

  </div>
<?php endif; ?>
