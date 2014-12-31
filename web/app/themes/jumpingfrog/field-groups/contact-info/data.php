<?php 
$group = array (
  'id' => '549931dd2f11d',
  'title' => 'Contact info',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_54992ee846573',
      'label' => 'Location',
      'name' => 'location',
      '_name' => 'location',
      'type' => 'google_map',
      'order_no' => 0,
      'instructions' => '',
      'required' => 0,
      'id' => 'acf-field-location',
      'class' => 'google_map',
      'conditional_logic' => 
      array (
        'status' => 0,
        'rules' => 
        array (
          0 => 
          array (
            'field' => 'null',
            'operator' => '==',
          ),
        ),
        'allorany' => 'all',
      ),
      'center_lat' => '',
      'center_lng' => '',
      'zoom' => '',
      'height' => '',
      'field_group' => 9,
    ),
  ),
  'location' => 
  array (
    0 => 
    array (
      0 => 
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-contact.php',
        'order_no' => 0,
        'group_no' => 0,
      ),
    ),
  ),
  'options' => 
  array (
    'position' => 'normal',
    'layout' => 'default',
    'hide_on_screen' => 
    array (
    ),
  ),
  'menu_order' => 0,
);