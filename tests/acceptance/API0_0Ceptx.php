<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Test version 0.0 of the API');
$I->amOnPage('/api/0.0/xml/question/');
$XML = $I->getVisibleText();
codecept_debug($XML);
$I->see('<status_code>601</status_code>');
?>