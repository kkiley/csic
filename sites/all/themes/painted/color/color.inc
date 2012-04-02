<?php

$info = array(
  // Available colors and color labels used in theme.
  'fields' => array(
    'base' => t('Base color'),
    'top'    => t('Header Top'),
    'bottom' => t('Header Bottom'),
    'link'   => t('Link color'),
    'text'   => t('Text Color'),
  ),
  
  // Pre-defined color schemes.
  'schemes' => array(
    'default' => array(
      'title' => t('Aquarelle (Default)'),
      'colors' => array(
        'base' => '#86a7b0',
        'top' => '#e0dbc2',
        'bottom' => '#e0dbc2',
        'link' => '#337F91',
        'text' => '#555555',
      ),
    ),
      'abarre' => array(
        'title' => t('Abarre'),
        'colors' => array(
          'base' => '#c1ba9a',
          'top' => '#e0dbc2',
          'bottom' => '#e0dbc2',
          'link' => '#D63E03',
          'text' => '#555555',
        ),
      ),
      'ash' => array(
        'title' => t('Ash'),
        'colors' => array(
          'base' => '#62676a',
          'top' => '#e0dbc2',
          'bottom' => '#e0dbc2',
          'link' => '#2e3957',
          'text' => '#494949',
        ),
      ),
      'caramel' => array(
        'title' => t('Caramel'),
        'colors' => array(
          'base' => '#c9b273',
          'top' => '#e0dbc2',
          'bottom' => '#e0dbc2',
          'link' => '#6c420e',
          'text' => '#6e6e6e',
        ),
      ),
      'bluemarine' => array(
        'title' => t('Bluemarine'),
        'colors' => array(
          'base' => '#88add3',
          'top' => '#e0dbc2',
          'bottom' => '#e0dbc2',
          'link' => '#336699',
          'text' => '#222222',
        ),
      ),
      
      'dark_blue' => array(
        'title' => t('Dark Blue'),
        'colors' => array(
          'base' => '#8798a1',
          'top' => '#e0dbc2',
          'bottom' => '#e0dbc2',
          'link' => '#226c96',
          'text' => '#555555',
        ),
      ),
      'dark_forest' => array(
        'title' => t('Dark Forest'),
        'colors' => array(
          'base' => '#517750',
          'top' => '#e0dbc2',
          'bottom' => '#e0dbc2',
          'link' => '#1c5819',
          'text' => '#555555',
        ),
      ),
      
      'green_tea' => array(
        'title' =>('Green Tea'),
        'colors' => array(
          'base' => '#bdc18f',
          'top' => '#e0dbc2',
          'bottom' => '#e0dbc2',
          'link' => '#5a8217',
          'text' => '#555555',
        ),
      ),
        
      'gelato' => array(
        'title' =>('Gelato'),
        'colors' => array(
          'base' => '#bb8195',
          'top' => '#e0dbc2',
          'bottom' => '#e0dbc2',
          'link' => '#c6246b',
          'text' => '#555555',
        ),
      
      ),
      'loves_pink' => array(
        'title' =>('Loves Pink'),
        'colors' => array(
          'base' => '#e684a6',
          'top' => '#e0dbc2',
          'bottom' => '#e0dbc2',
          'link' => '#c6246b',
          'text' => '#555555',
        ),
      ),
      'mars_attack' => array(
        'title' =>('Mars Attack'),
        'colors' => array(
          'base' => '#6bad1a',
          'top' => '#e0dbc2',
          'bottom' => '#e0dbc2',
          'link' => '#0c7a00',
          'text' => '#555555',
        ),
      ),
      'new_flat' => array(
        'title' =>('New Flat'),
        'colors' => array(
          'base' => '#dcdbcb',
          'top' => '#e0dbc2',
          'bottom' => '#e0dbc2',
          'link' => '#816d46',
          'text' => '#555555',
        ),
      ),
      'orange_juice' => array(
        'title' =>('Orange Juice'),
        'colors' => array(
          'base' => '#d3b650',
          'top' => '#e0dbc2',
          'bottom' => '#e0dbc2',
          'link' => '#c27700',
          'text' => '#555555',
        ),
      ),
      'orange_juice' => array(
        'title' =>('Old Ashes'),
        'colors' => array(
          'base' => '#b0a786',
          'top' => '#e0dbc2',
          'bottom' => '#e0dbc2',
          'link' => '#957e32',
          'text' => '#555555',
        ),
      ),
      'purple' => array(
        'title' =>('Purple'),
        'colors' => array(
          'base' => '#a698b9',
          'top' => '#e0dbc2',
          'bottom' => '#e0dbc2',
          'link' => '#9764be',
          'text' => '#555555',
        ),
      ),
      'red_dead' => array(
        'title' =>('Red is dead'),
        'colors' => array(
          'base' => '#c9534a',
          'top' => '#e0dbc2',
          'bottom' => '#e0dbc2',
          'link' => '#8f2a00',
          'text' => '#333333',
        ),
      ),
      
  ),    



  // Gradient definitions.
  'gradients' => array(
    array(
      // (x, y, width, height).
      'dimension' => array(0, 0, 0, 0),
      // Direction of gradient ('vertical' or 'horizontal').
      'direction' => 'vertical',
      // Keys of colors to use for the gradient.
      'colors' => array('link', 'text'),
    ),
  ),
  
  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => array(
    //'css/preview.css',
    'css/style.css',
    'css/layout.css',
  ),
  
  // Coordinates of all the theme slices (x, y, width, height)
  // with their filename as used in the stylesheet.
  'slices' => array(
    'css/images/layout/bg.jpg'								=> array(1150, 0 ,300, 300),
    'css/images/layout/border.gif'						=> array(1084, 0, 65, 65),
    'css/images/layout/header.jpg'						=> array(0, 0, 1083, 197),
    'css/images/layout/sidebar-bg.jpg'				=> array(0, 198, 600, 99),
    'css/images/layout/side-title-left.gif'		=> array(1084, 66, 6, 9),
    'css/images/layout/side-title.gif'				=> array(1090, 66, 6, 9),
  ),

	'copy' => array(
	  'css/images/layout/even.gif',
	  'css/images/layout/content-bg.gif',
	  'css/images/layout/node.gif',
	  'css/images/layout/textarea.gif',
	  'css/images/interface/fieldset.png',
	  'css/images/interface/legend.gif',
	  'logo.png',
  ),
  
  // Color areas to fill (x, y, width, height)
  'fill' => array(
    'base' => array(0, 0, 1450, 300),
    'link' => array(240,530,40,40),
  ),
  
    // Reference color used for blending. Matches the base.png's colors.
  'blend_target' => '#ffffff',

  // Preview files.
  'preview_image' => 'color/preview.png',
  'preview_css' => 'color/preview.css',

  // Base file for image generation.
  'base_image' => 'color/base.png',
);
