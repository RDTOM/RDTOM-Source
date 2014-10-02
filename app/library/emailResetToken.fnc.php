<?php
include ("ResetPasswordTokenHandler");

function set_up_reset_token($forgetfulUser) {

	global $mydb;
	$siteURL = get_site_URL();

	$resetPasswordTokenHandler = new ResetPasswordTokenHandler($mydb, $siteURL);
	
	$token = generatealphaneumericSalt(50);

	$resetPasswordTokenHandler->handle($forgetfulUser, $token);
	
}