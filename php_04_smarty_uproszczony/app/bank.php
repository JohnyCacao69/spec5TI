<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.
include_once _ROOT_PATH.'/app/security/check.php';
// 1. pobranie parametrów

function getParams(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['proc'] = isset($_REQUEST['proc']) ? $_REQUEST['proc'] : null;
	$form['rok'] = isset($_REQUEST['rok']) ? $_REQUEST['rok'] : null;	
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

function validate(&$form,&$infos,&$msgs,&$hide_intro){

	//sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
	if ( ! (isset($form['kwota']) && isset($form['proc']) && isset($form['rok']) ))	return false;	
	
	//parametry przekazane zatem
	//nie pokazuj wstępu strony gdy tryb obliczeń (aby nie trzeba było przesuwać)
	// - ta zmienna zostanie użyta w widoku aby nie wyświetlać całego bloku itro z tłem 
	$hide_intro = true;

	$infos [] = 'Przekazano parametry.';

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['kwota'] == "") $msgs [] = 'Nie podano kwota';
	if ( $form['proc'] == "") $msgs [] = 'Nie podano procentu';
	if ( $form['rok'] == "") $msgs [] = 'Nie podano na ile lat';
	
	//nie ma sensu walidować dalej gdy brak parametrów
	
	
	if (count($msgs)>0) return false;
	else return true;
}
function process(&$form,&$infos,&$msgs,&$result){
	
	

// 3. wykonaj zadanie jeśli wszystko w porządku


	global $role;
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	//konwersja parametrów na int
	$form['kwota'] = intval($form['kwota']);
	$form['proc'] = intval($form['proc']);
	$form['rok'] = intval($form['rok']);
	
	//wykonanie operacji
	if($role != "admin" && $form['kwota'] > 100000){
		$msgs[] = "Tylko administrator może obliczyć kredyt powyżej 100000zł";
	}else{
		$op = $form['proc'] * $form['rok'] * 0.01;
	$reszta = $op * $form['kwota'];
	$konc_kwota = $reszta + $form['kwota'];
	$miesiace = $form['rok'] * 12;
	$result = round($konc_kwota/$miesiace);
	}
}


	
	

//inicjacja zmiennych
$form = null;
$infos = array();
$messages = array();
$result = null;
	
getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$result);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Przykład 04');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages)	;
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/bank.html');