<?php
/**
*
* BBAwards AutoGroup Addon.
* @copyright (c) 2015 SiteSplat <http://www.sitesplat.com>
* @license SiteSplat 2015 all rights reserved
* Brazilian Portuguese translation by eunaumtenhoid [2019][ver 1.1.0] (https://github.com/phpBBTraducoes)
**/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BADGEAUTO_TYPE_AVATAR'			=> 'Prêmio de Emblema Avatar',
	'BADGEAUTO_TYPE_BADGES'			=> 'Prêmio de Emblema Emblemas',
	'BADGEAUTO_TYPE_CROSS_BADGE'	=> 'Prêmio de Emblema Cruzar Emblemas',
	'BADGEAUTO_TYPE_CUSTOM'			=> 'Prêmio de Emblema Personalizados',
	'BADGEAUTO_TYPE_DONATIONS'		=> 'Prêmio de Emblema Doações',
	'BADGEAUTO_TYPE_LIKEDD'			=> 'Prêmio de Emblema LikeBB',
	'BADGEAUTO_TYPE_PROFILEWALL'	=> 'Prêmio de Emblema Mural do perfil',
	'BADGEAUTO_TYPE_SIGNATURE'		=> 'Prêmio de Emblema Assinatura',
	'BADGEAUTO_TYPE_TOPICS'			=> 'Prêmio de Emblema Tópicos',
	'BADGEAUTO_TYPE_ZEBRA_FOES'		=> 'Prêmio de Emblema Inimigos',
	'BADGEAUTO_TYPE_ZEBRA_FRIENDS'	=> 'Prêmio de Emblema Amigos',

	'BADGE_AUTOGROUPS_NOTICE'		=> '<div class="phpinfo"><p>As configurações para esta extensão estão em <strong>%1$s » %2$s » %3$s</strong>.<br />Por favor, note que os tipos de regras de emblema são adicionados juntos! Extensões como LikeBB, Doação etc não funcionarão se não estiverem instaladas.</p></div>'
));
