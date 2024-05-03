<?php

require_once './Entity/Address.php';
require_once './Entity/Letter.php';
require_once './Entity/Stamp.php';
require_once './Entity/Envelope.php';
require_once './Entity/PostOffice.php';

use Entity\Address;
use Entity\Envelope;
use Entity\Letter;
use Entity\PostOffice;
use Entity\Stamp;

$consumer = new Address('Russia', 'Izhevsk', 'Kirova 9');
$produces = new Address('Russia', 'Izhevsk', 'Kirova 11');

$letter = new Letter('new message!!!');

$stamps = new Stamp(5);

$envelope = new Envelope($letter,$stamps, $consumer, $produces);

$postOffice = new PostOffice();
$postOffice->addEnvelope($envelope);

$postOffice->send();
