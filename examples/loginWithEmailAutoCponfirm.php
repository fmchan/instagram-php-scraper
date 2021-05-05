<?php
require __DIR__ . '/../../vendor/autoload.php';
use InstagramScraper\TwoStepVerification\EmailVerification;

$instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), 'username', 'password', new \Phpfastcache\Helper\Psr16Adapter('Files'));

$emailVecification = new EmailVerification(
    'username@gmail.com',
    'imap.gmail.com',
    'app password'
);

$instagram->login(false, $emailVecification);

$account = $instagram->getAccountById(3);
echo $account->getUsername();