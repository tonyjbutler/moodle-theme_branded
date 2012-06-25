<?php
 
/**
 * Settings for the branded theme
 */
 
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
 
// Logo file setting
$name = 'theme_branded/logo';
$title = get_string('logo','theme_branded');
$description = get_string('logodesc', 'theme_branded');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);
 
// Block region width
$name = 'theme_branded/regionwidth';
$title = get_string('regionwidth','theme_branded');
$description = get_string('regionwidthdesc', 'theme_branded');
$default = 240;
$choices = array(200=>'200px', 240=>'240px', 290=>'290px', 350=>'350px', 420=>'420px');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);
 
// Foot note setting
$name = 'theme_branded/footnote';
$title = get_string('footnote','theme_branded');
$description = get_string('footnotedesc', 'theme_branded');
$setting = new admin_setting_confightmleditor($name, $title, $description, '');
$settings->add($setting);
 
// Custom CSS file
$name = 'theme_branded/customcss';
$title = get_string('customcss','theme_branded');
$description = get_string('customcssdesc', 'theme_branded');
$setting = new admin_setting_configtextarea($name, $title, $description, '');
$settings->add($setting);
 
// Add our page to the structure of the admin tree


}
?>