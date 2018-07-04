<?php
/*
Plugin Name:  TWPS Plugin
Plugin URI:   http://twpsupport.cba.pl/
Description:  Teacher WordPress Support Site Guide
Version:      0.1
Author:       Karolina Makowska
Author URI:   http://twpsupport.cba.pl/
License:      
License URI:  
Text Domain:  
Domain Path:  
*/

//Deklaracja Styli------------------------------------------------------------------------------------------------------------
add_action('wp_enqueue_scripts', 'StylePodstawowe');
function StylePodstawowe()
{
    wp_enqueue_style('StylePodstawowe', esc_url(plugins_url('twps_plugin/css/StylePodstawowe.css')), array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'StyleDlaMini');
function StyleDlaMini()
{
    wp_enqueue_style('StyleDlaMini', esc_url(plugins_url('twps_plugin/css/StyleDlaMini.css')), array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'StyleDlaReco');
function StyleDlaReco()
{
    wp_enqueue_style('StyleDlaReco', esc_url(plugins_url('twps_plugin/css/StyleDlaReco.css')), array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'StyleDlaUMK');
function StyleDlaUMK()
{
    wp_enqueue_style('StyleDlaUMK', esc_url(plugins_url('twps_plugin/css/StyleDlaUMK.css')), array(), '1.0', 'all');
}


add_action('wp_enqueue_scripts', 'StyleDlaBudowa');

function StyleDlaBudowa()
{
    wp_enqueue_style('StyleDlaBudowa', esc_url(plugins_url('twps_plugin/css/StyleDlaBudowa.css')), array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'StyleDlaForm');

function StyleDlaForm()
{
    wp_enqueue_style('StyleDlaForm', esc_url(plugins_url('twps_plugin/css/StyleDlaForm.css')), array(), '1.0', 'all');
}
//----------------------------------------------------------------------------------------------------------------------------------

//include dla funkcji ukrywającej 
//include('lekcje.php');
//register_activation_hook('lekcje.php','ukryj_odkryj');
//ten zestaw akcja + funkcja dodają zakładkę //startowa
add_action("admin_menu","twps_addMenu");
function twps_addMenu()
{
    //to manage_options to jest jedna ze stałych dla tej matody
    //nie do końca wiem po co ale musi byc żeby było widać zakładkę   
   add_menu_page("TWPS","TWPS","manage_options","twps-main","twps_startM");
	add_submenu_page("twps-main","Mini Tools","Mini Narzędzia","manage_options","twps-mini","twps_initMini" );
    add_submenu_page("twps-main","Recommendations","Rekomendacje","manage_options","twps-recom","twps_initRecom" );
	add_menu_page("TWPS Budowa","TWPS Budowa","manage_options","twps-budowa","twps_initBudowa");   
   add_submenu_page("twps-main","For UMK","UMK","manage_options","twps-umk","twps_initUMK");
	
	add_submenu_page("twps-budowa","O Mnie","O Mnie","manage_options","twps-umk-budowa-o-mnie","twsp_initBudowaOMnie");
	add_submenu_page("twps-budowa","Student","Student","manage_options","twps-umk-budowa-student","twsp_initBudowaStud");
	add_submenu_page("twps-budowa","Publikacje","Publikacjie","manage_options","twps-umk-budowa-publikacje","twsp_initBudowaPubli");
	add_submenu_page("twps-budowa","Kontakt","Kontakt","manage_options","twps-umk-budowa-kontakt","twsp_initKontakt");
	add_submenu_page("twps-budowa","Materiały","Materiały","manage_options","twps-umk-budowa-materialy","twsp_initMaterialyInne");
	}
//Tu jest Str Startowa------------------------------------------------------------------
//function twps_init_Lekcje()
//{}

function twps_startM()
{
	StylePodstawowe();
    include 'TWPSMain.php';
}

//Tu jest str Zbuduj ze mną stronę 
function twps_initBudowa()
{
	StyleDlaBudowa();
	include 'MainBudowa.php';	
}

function twsp_initBudowaOMnie()
{
	StyleDlaForm();
	include 'BudowaOMnie.php';
}
function twsp_initBudowaStud()
{
	StyleDlaForm();
	include 'BudowaStud.php';
}
function twsp_initBudowaPubli()
{
		StyleDlaForm();
	include 'BudowaPubli.php';
}
function twsp_initKontakt()
{
	StyleDlaForm();
	include 'BudowaKontakt.php';
}
function twsp_initMaterialyInne()
{
	StyleDlaForm();
	include 'BudowaInneMater.php';
}
//--------------------------------------------------------------------------------------------------------------


//Tu jest Str Mini Dodatków-------------------------------------------------------------------------------------
function twps_initMini()
{
	StyleDlaMini(); //style niby dziłają ale to takie troche dzikie jest
    include 'MiniMain.php'; //plik tej karty
    
}
//----------------------------------------------------------------------------------------------------------------

//Tu jest Str Rekomendacji szablonów i wtyczek--------------------------------------------------------------------
function twps_initRecom()
{
	StyleDlaReco();
	include 'RecomMain.php';
   
}
//----------------------------------------------------------------------------------------------------------------

//Tu jest Strona Specjalnych Dodatków UMK--------------------------------------------------------------------------
function twps_initUMK()
{
	StyleDlaUMK();
	include 'UMKMain.php';
	
}
//-----------------------------------------------------------------------------------------------------------------


?>


