<?php
/**
 * @file
 * Stub file for coppola_menu_tree() and suggestion(s).
 */

/**
 * Returns HTML for a wrapper for a menu sub-tree.
 *
 * @param array $variables
 *   An associative array containing:
 *   - tree: An HTML string containing the tree's items.
 *
 * @return string
 *   The constructed HTML.
 *
 * @see template_preprocess_menu_tree()
 * @see theme_menu_tree()
 *
 * @ingroup theme_functions
 */
function coppola_menu_tree(&$variables) {
  return '<ul>' . $variables['tree'] . '</ul>';
}

/**
 * coppola theme wrapper function for the primary menu links.
 */
function coppola_menu_tree__primary(&$variables) {
  return '<ul>' . $variables['tree'] . '</ul>';
}

/**
 * coppola theme wrapper function for the secondary menu links.
 */
function coppola_menu_tree__secondary(&$variables) {
  return '<ul class="menu nav navbar-nav secondary">' . $variables['tree'] . '</ul>';
}

/**
 * Overrides theme_menu_tree() for book module.
 */
function coppola_menu_tree__book_toc(&$variables) {
  $output = '<div class="book-toc btn-group pull-right">';
  $output .= '  <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">';
  $output .= t('!icon Outline !caret', array(
    '!icon' => _coppola_icon('list'),
    '!caret' => '<span class="caret"></span>',
  ));
  $output .= '</button>';
  $output .= '<ul class="dropdown-menu" role="menu">' . $variables['tree'] . '</ul>';
  $output .= '</div>';
  return $output;
}

/**
 * Overrides theme_menu_tree() for book module.
 */
function coppola_menu_tree__book_toc__sub_menu(&$variables) {
  return '<ul class="dropdown-menu" role="menu">' . $variables['tree'] . '</ul>';
}
