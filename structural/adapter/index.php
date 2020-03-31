<?php
require_once('ATM.php');
$atm = new ATM(500.00);
$atm->withdraw(50);
echo $atm->getBalance();
echo "\n";



require_once('ATMWithPhoneTopUp.php');
$adaptedATM = new ATMWithPhoneTopUp(500.00);
echo "Top-up code: " . $adaptedATM->getTopUp(50, time());
echo "\n";
echo $adaptedATM->getBalance();