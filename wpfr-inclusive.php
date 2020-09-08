<?php
/*
Plugin Name: WPFR Users
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: WPFR Tests.
Author: The WordPress French Translation Team
Version: 1.0
Author URI: https://fr.wordpress.org/
*/

add_filter( 'gettext', 'wpfr_change_text_strings_gettext', 10, 3 );
add_filter( 'gettext_with_context', 'wpfr_change_text_strings_gettext_with_context', 10, 4 );

function wpfr_change_text_strings_gettext( $translated_text, $untranslated_text, $domain ) {
	if ( 'Users' === $untranslated_text ) {
		$translated_text = 'Profils';
	}
	if ( 'Profile' === $untranslated_text ) {
		$translated_text = 'Mon profil';
	}
	if ( 'Send User Notification' === $untranslated_text) {
		$translated_text = 'Envoyer une notification à l’adresse de messagerie du profil';
	}
	if ( 'Envoyer un message au nouvel utilisateur à propos de son compte.' === $translated_text) {
		$translated_text = 'Envoyer un message au nouveau profil à propos de son compte.';
	}

	$translated_text = str_replace( 'Supprimer des utilisateurs', 'Suppression de profils', $translated_text );
	$translated_text = str_replace( 'supprimer cet utilisateur', 'supprimer ce profil', $translated_text );
	$translated_text = str_replace( 'Modifier l’utilisateur', 'Modifier le profil', $translated_text );
	$translated_text = str_replace( 'utilisateurs et utilisatrices', 'profils', $translated_text );
	$translated_text = str_replace( 'nouvel utilisateur', 'nouveau profil', $translated_text );
	$translated_text = str_replace( 'l’utilisateur', 'le profil', $translated_text );
	$translated_text = str_replace( 'd’utilisateurs', 'de profils', $translated_text );
	$translated_text = str_replace( 'l’administrateur du site', 'la personne administrant le site', $translated_text );
	$translated_text = str_replace( 'utilisateur', 'profil', $translated_text );
	$translated_text = str_replace( 'Utilisateurs', 'Profils', $translated_text );
	$translated_text = str_replace( 'Utilisateur', 'Profil', $translated_text );
	$translated_text = str_replace( 'utilisateurs', 'profils', $translated_text );

	$translated_text = str_replace( 'Administrateurs', 'rôles d’Administration', $translated_text );
	$translated_text = str_replace( 'Éditeurs', 'rôles d’Édition', $translated_text );
	$translated_text = str_replace( 'Auteurs', 'rôles de Rédaction', $translated_text );
	$translated_text = str_replace( 'Contributeurs', 'rôles de Contribution', $translated_text );
	$translated_text = str_replace( 'Abonnés', 'rôles d’Abonnement', $translated_text );

	$translated_text = str_replace( 'Administrateur', 'Administration', $translated_text );
	$translated_text = str_replace( 'Éditeur', 'Édition', $translated_text );
	$translated_text = str_replace( 'Auteur', 'Rédaction', $translated_text );
	$translated_text = str_replace( 'Contributeur', 'Contribution', $translated_text );
	$translated_text = str_replace( 'Abonné', 'Abonnement', $translated_text );
	return $translated_text;
}

function wpfr_change_text_strings_gettext_with_context( $translated_text, $untranslated_text, $context, $domain ) {
	if ( 'User role' === $context ) {
		$translated_text = str_replace( 'Administrateur', 'Administration', $translated_text );
		$translated_text = str_replace( 'Éditeur', 'Édition', $translated_text );
		$translated_text = str_replace( 'Auteur', 'Rédaction', $translated_text );
		$translated_text = str_replace( 'Contributeur', 'Contribution', $translated_text );
		$translated_text = str_replace( 'Abonné', 'Abonnement', $translated_text );
	}
	return $translated_text;
}

