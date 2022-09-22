<?php

require_once __DIR__ . '/movie.php';

$btf = new movie("Back to the Future", "sci-fi", "En", "Marty McFly è stato catapultato per errore nel 1955, grazie alla macchina del tempo ideata dal suo amico scienziato Doc. Non avendo più carburante per poter tornare nel futuro si rivolge alla versione più giovane di Doc, che nonostante l'incredulità iniziale si farà in quattro per aiutarlo. Ma nel 1955 non è solo Doc ad essere più giovane, Marty infatti si imbatte casualmente nei suoi genitori, all'epoca teenager, ma l'incontro aggiungerà altri problemi.");
$btf->getMovieInfo();

$prey = new movie("Prey", "sci-fi", "En", "Nei territori Comanche del 1719, la giovane Naru cerca di dimostrarsi una cacciatrice al pari dei giovani maschi della comunità, guidati da suo fratello Taabe. Ha la sua occasione quando, seguendoli di soppiatto, si unisce a una spedizione di caccia al leone. Strada facendo incontra le tracce di un altro più pericoloso predatore, ma non riesce a convincere nessuno che non si tratti di un semplice orso. Giunto da un altro mondo, questo predatore invece è fin troppo reale, determinato a cercare sfide di caccia degne di sé e protetto da una tecnologia stealth che lo rende pressoché invisibile. La sua superiorità tecnologica sembra insuperabile non solo per i comanche, ma pure per un gruppo di spregevoli trapper francofoni.");
$prey->getMovieInfo();

