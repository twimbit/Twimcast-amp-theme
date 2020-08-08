<?php
/*
 * Template Name: Thank you page
 * Template Post Type: page
 */

//$hostedPage = $_GET['hostedpage'];
//
//$host = 'https://payments.pabbly.com/api/v1/verifyhosted';
//
//$username = PABBLY_USER_NAME; //pabbly api key
//
//$password = PABBLY_USER_PASS; //pabbly api secret key
//
//if ( isset( $_GET['hostedpage'] ) ) {
//	$ch = curl_init( $host );
//	curl_setopt( $ch, CURLOPT_USERPWD, $username . ":" . $password );
//	curl_setopt( $ch, CURLOPT_TIMEOUT, 30 );
//	curl_setopt( $ch, CURLOPT_POST, 1 );
//	curl_setopt( $ch, CURLOPT_POSTFIELDS, 'hostedpage=' . $hostedPage );
//	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
//
//	$return = json_decode( curl_exec( $ch ) );
//
//	$subscription_id = $return->data->id;
//
//	$customer_id = $return->data->customer_id;
//
//	$plan_id = $return->data->plan_id;
//
//	//echo $subscription_id . ' ' . $customer_id . ' ' . $plan_id;
//
//	//print_r( $return );
//	curl_close( $ch );
//} else {
//	echo 'not set';
//}
