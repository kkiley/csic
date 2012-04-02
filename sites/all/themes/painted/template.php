<?php

function painted_preprocess_page(&$vars, $hook) {
  global $theme;
//  // Hook into color.module
//  if (module_exists('color')) {
//    _color_page_alter($vars);
//  }

  // changing #navigation markup for easier theming of main and submenus
  if (isset($vars['main_menu'])) {
    $vars['main_menu'] = theme('links', $vars['main_menu'],
      array(
        'class' => array('links', 'main-menu'),
        'id' => array('primary'),
      )
    );
  } else {
    $vars['primary_nav'] = FALSE;
  }
  if (isset($vars['secondary_menu'])) {
    $vars['secondary_menu'] = theme('links', $vars['secondary_menu'],
      array(
        'class' => array('links', 'sub-menu'),
        'id' => array('secondary'),
      )
    );
  } else {
    $vars['secondary_menu'] = FALSE;
  }

}

/**
 * Override or insert variables into the html template.
 */
function painted_process_html(&$vars) {
  // Hook into color.module
  if (module_exists('color')) {
    _color_html_alter($vars);
  }
}

function painted_id_safe($string) {
  // Replace with dashes anything that isn't A-Z, numbers, dashes, or underscores.
  $string = strtolower(preg_replace('/[^a-zA-Z0-9_-]+/', '-', $string));
  // If the first character is not a-z, add 'n' in front.
  if (!ctype_lower($string{0})) { // Don't use ctype_alpha since its locale aware.
    $string = 'id'. $string;
  }
  return $string;
}

function painted_fieldset($variables) {
  $element = $variables['element'];
  if (!empty($element['#collapsible'])) {

    if (!isset($element['#attributes']['class'])) {
      $element['#attributes']['class'] = array();
    }

    $element['#attributes']['class'][] = 'collapsible';
    if (!empty($element['#collapsed'])) {
      $element['#attributes']['class'][] = 'collapsed';
    }
  }
  $element['#attributes']['id'] = $element['#id'];

  if (arg(2) == 'edit' || arg(1) == 'add') {
    return '<fieldset' . drupal_attributes($element['#attributes']) . '>' . ($element['#title'] ? '<legend>' . $element['#title'] . '</legend>' : '') . (isset($element['#description']) && $element['#description'] ? '<div class="fieldset-description">' . $element['#description'] . '</div>' : '') . (!empty($element['#children']) ? $element['#children'] : '') . (isset($element['#value']) ? $element['#value'] : '') . "</fieldset>\n";
  }
  else {
    return '<div class="fieldset-outer"><fieldset' . drupal_attributes($element['#attributes']) . '>' . ($element['#title'] ? '<legend>' . $element['#title'] . '</legend>' : '') . (isset($element['#description']) && $element['#description'] ? '<div class="fieldset-description">' . $element['#description'] . '</div>' : '') . (!empty($element['#children']) ? $element['#children'] : '') . (isset($element['#value']) ? $element['#value'] : '') . "</fieldset></div>\n";
  }
}

/*
 *  Return a themed breadcrumb trail.
 *	Alow you to customize the breadcrumb markup
 */

function painted_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb"><div>'. implode(' › ', $breadcrumb) .'</div></div>';
  }
}

function page_property($values) {
  if (theme_get_setting('painted_width')) { 
    $output .= '<style type="text/css" media="screen">#page{' ;
    if (theme_get_setting('painted_width')) {
      $output .= "width:" . theme_get_setting('painted_width') . "px;" ;
    }
    $output .= '}</style>' ;
  }
  return $output;
}
