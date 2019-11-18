<?php
// these three classes needed to add custom attribute to the menus in the admin end.
require_once('classes/custom-walker.php');
require_once('classes/menu-item-custom-fields.php');
require_once('classes/menu-custom-attribute.php');

require_once('classes/class.PostTypes.php');
$theme_post_types = new Theme_Post_Types();

require_once('classes/class.HappyCustomers.php');
$theme_customers = new Theme_Customers();

require_once('classes/class.Taxonomies.php');
$theme_taxonomies = new Theme_Taxonomies();

require_once('classes/class.Ajax.php');
$theme_ajax = new Theme_Ajax();

require_once('classes/class.PlanBook.php');
$theme_planbook = new Theme_PlanBook();

require_once('classes/class.General.php');
$theme_general = new Theme_General();

require_once('admin-menu-functions.php');
require_once('theme.helper.functions.php');
require_once('custom_widgets.php');