<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Email
| -------------------------------------------------------------------------
| This file lets you define parameters for sending emails.
| Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/libraries/email.html
|
*/
$config['protocol'] = 'smtp';
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";
$config['smtp_host'] = 'mail.desafiolaboral.cl';
$config['smtp_user'] = 'noreply@desafiolaboral.cl';
$config['smtp_pass'] = 'camila2009';
$config['validation'] = TRUE;
$config['smtp_timeout'] = 5;
$config['smtp_port'] = '465';
$config['smtp_crypto'] = 'ssl';

/* End of file email.php */
/* Location: ./application/config/email.php */