<div id="skip-nav"><a href="#content">Skip to Content</a></div>  
<div id="page">

	<!-- ______________________ HEADER _______________________ -->
	
	<div id="header" class="clearfix">
		
		<?php if (isset($main_menu)) { ?>
      <div id="primary" class="clearfix">
        <?php if ($main_menu): print $main_menu; endif; ?>
			</div>
		<?php } ?> 			
	  
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
      </a>
    <?php endif; ?>
    
    <?php if ($site_name || $site_slogan): ?>
		  <div id="name-slogan">
	      <?php if (!empty($site_name)): ?>
		      <?php if ($is_front): ?>
	      	  <h1 id="site-name">
	      	    <a href="<?php echo $front_page; ?>" title="<?php echo t('Home'); ?>"><?php echo $site_name; ?></a>
	      	  </h1>
	    	  <?php else: ?>
	      	  <h2 id="site-name">
	      	    <a href="<?php echo $front_page; ?>" title="<?php echo t('Home'); ?>"><?php echo $site_name; ?></a>
	      	  </h2>
    		  <?php endif; ?>
    	  <?php endif; ?>

        <?php if ($site_slogan): ?>
	        <div id="site-slogan"><?php echo $site_slogan; ?></div>
	      <?php endif; ?>
		  </div>

  	<?php endif; ?>
    
  </div> <!-- /header -->

			
  <!-- ______________________ MAIN _______________________ -->
  
	<div id="border" class="clearfix">
	  <div id="main">
  		<div id="content" class="clearfix">
      	<div id="content-area" class="center column">
  
 			    <?php if (!empty($secondary_menu) && empty($page['sidebar_first']) && empty($page['sidebar_second'])): ?>
 						<div class="block secondary clearfix">
              <?php if ($secondary_menu): print $secondary_menu; endif; ?>
 						</div>
 			    <?php endif; ?>

 	        <?php echo $breadcrumb; ?>
        	<?php echo $messages; ?>

          <?php if ($page['highlight']): ?>
            <div id="highlight"><?php print render($page['highlight']) ?></div>
          <?php endif; ?>

          <?php if ($title): ?>
            <h1 class="title"><?php echo $title; ?></h1>
          <?php endif; ?>

          <?php if ($tabs): ?><?php print render($tabs) ?><?php endif; ?>
          
          <?php print render($page['help']); ?> 
          <?php print render($page['content']) ?>          
          <?php echo $feed_icons; ?>

 	      	</div><!-- /content-area -->

 				</div> <!-- /content -->


        <?php if ($page['sidebar_first']): ?>
 	  		  <div id="sidebar-left" class="sidebar left column"><div class="side-inner inner">
            <?php if ($page['sidebar_first']): ?>

     			    <?php if (!empty($secondary_menu)): ?>
     						<div class="block secondary clearfix">
 									<h2 class="title block-title"><?php echo t('Secondary Links')?></h2>
                  <?php if ($secondary_menu): print $secondary_menu; endif; ?>
     						</div>
     			    <?php endif; ?>
              <?php print render($page['sidebar_first']); ?>
 	  			  <?php endif; ?>
 	  		  </div></div> <!-- /sidebar-left -->
 	  		<?php endif; ?>


        <?php if ($page['sidebar_second']): ?>
 	  		  <div id="sidebar-right" class="sidebar right column"><div class="side-inner inner">
            <?php if ($page['sidebar_second']): ?>

     			    <?php if (!empty($secondary_menu) && empty($page['sidebar_first'])): ?>
     						<div class="block secondary clearfix">
 									<h2 class="title block-title"><?php echo t('Secondary Links')?></h2>
                  <?php if ($secondary_menu): print $secondary_menu; endif; ?>
     						</div>
     			    <?php endif; ?>
              <?php print render($page['sidebar_second']); ?>
 	  			  <?php endif; ?>
 	  		  </div></div> <!-- /sidebar-right -->
 	  		<?php endif; ?>


     <div id="fakecenter" class="center fakecol"></div>
     <?php if ($page['sidebar_first']): ?><div id="fakeleft" class="left fakecol"></div><?php endif; ?>
     <?php if ($page['sidebar_second']): ?><div id="fakeright" class="right fakecol"></div><?php endif; ?>

   </div> <!-- /main -->

</div> <!-- /border -->

  <!-- ______________________ FOOTER _______________________ -->

  <?php if ($page['footer']): ?>
	  <div id="footer">
      <?php print render($page['footer']); ?>
	  </div> <!-- /footer -->
	<?php endif; ?>

</div> <!-- /page -->