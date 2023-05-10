<?php

namespace assets;

require_once('structures/SendType.php');

$sku = [
    ['tshirt-czerwony-xs',1,4,4],
['tshirt-czerwony-s',1,4,5],
['tshirt-czerwony-m',1,4,5],
['tshirt-czerwony-l',1,5,4],
['tshirt-czerwony-xl',1,5,5],
['czapka-zielona-128',3,19,20],
['czapka-zielona-162',4,20,21],
['kurtka-czarna-xl',8,20,30],
];

$sendTypes = [
    new \structures\SendType('list', 5),
    new \structures\SendType('mała paczka', 20),
    new \structures\SendType('duża paczka', 50)
];