<?php
error_reporting(0);

$CONF = $TMPL = array();

// The MySQL credentials
$CONF['host'] = 'ec2-54-235-206-118.compute-1.amazonaws.com';
$CONF['user'] = 'satemtrpfmhznn';
$CONF['pass'] = '964eeb4c9e72f137ee39581f934d1de5dcf002a6c4ef39940b34ce1a4a4cff72';
$CONF['name'] = 'd1frm0ohnpskbu';

// The Installation URL
$CONF['url'] = 'https://tikle.herokuapp.com';

// The Notifications e-mail
$CONF['email'] = 'notifications@yourdomain.com';

// The themes directory
$CONF['theme_path'] = 'themes';

$action = array('admin'			=> 'admin',
				'explore'		=> 'explore',
				'stream'		=> 'stream',
				'settings'		=> 'settings',
				'messages'		=> 'messages',
				'track'			=> 'track',
				'playlist'		=> 'playlist',
				'upload'		=> 'upload',
				'recover'		=> 'recover',
				'profile'		=> 'profile',
				'stats'			=> 'stats',
				'pro'			=> 'pro',
				'notifications'	=> 'notifications',
				'search'		=> 'search',
				'page'			=> 'page',
				'welcome'		=> 'welcome'
				);

define('COOKIE_PATH', preg_replace('|https?://[^/]+|i', '', $CONF['url']).'/');
?>
