<?php

function cust_customizer_settings($wp_customizer){
	$wp_customizer->add_section('cust_services',array(
		'title'=>__('Services','customizer'),
		'priority'=>'30'
	));
	$wp_customizer->add_setting('cust_service_heading',array(
		'default' => 'Mission Statement',
		'transport' => 'refresh'//postMessage
	));
	$wp_customizer->add_control('cust_service_heading_ctrl',array(
		'label' => 'Services Heading',
		'section' => 'cust_services',
		'settings' => 'cust_service_heading',
		'type' => 'text'
	));


	
}
add_action('customize_register','cust_customizer_settings');