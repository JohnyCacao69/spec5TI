<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$kw = $_REQUEST ['kwota'];
$proc = $_REQUEST ['procent'];
$rok = $_REQUEST ['rok'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kw) && isset($proc) && isset($rok))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $kw == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $proc == "") {
	$messages [] = 'Nie podano procentu';
}
if ( $rok == "") {
	$messages [] = 'Nie podano okresu czasu';
}


if (empty( $messages )) {
	
	// sprawdzenie, czy $kw i $proc i $rok są liczbami całkowitymi
	if (! is_numeric( $kw )) {
		$messages [] = 'Kwota nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $proc )) {
		$messages [] = 'Procent nie jest liczbą całkowitą';
	}	

	if (! is_numeric( $rok )) {
		$messages [] = 'Rok nie jest liczbą całkowitą';
	}	

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$kw = intval($kw);
	$proc = intval($proc);
	$rok = intval($rok);
	
	//wykonanie operacji
	
	$op = $proc * $rok * 0.01;
	$reszta = $op * $kw;
	$konc_kwota = $reszta + $kw;
	$miesiace = $rok * 12;
	$wynik = round($konc_kwota/$miesiace);

}

// 4. Wywołanie widoku z przekazaniem zmiennych

include 'bank_widok.php';