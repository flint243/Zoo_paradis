<?php

use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

require __DIR__ . '/vendor/autoload.php';

$transport = Transport::fromDsn('smtp://127.0.0.1:1025');
$mailer = new Mailer($transport);

$email = (new Email())
    ->from('noreply@yourdomain.com')
    ->to('test@example.com')
    ->subject('Test email')
    ->text('This is a test email.');

$mailer->send($email);
