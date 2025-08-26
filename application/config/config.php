<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Prioritaskan header dari reverse proxy (ngrok):
 * - HTTP_X_FORWARDED_HOST  : host asli (xxxx.ngrok-free.app)
 * - HTTP_X_FORWARDED_PROTO : skema asli (https)
 * Fallback ke HTTP_HOST/HTTPS lokal bila header tidak ada.
 */
$host = $_SERVER['HTTP_X_FORWARDED_HOST']
     ?? $_SERVER['HTTP_HOST']
     ?? 'localhost';

$proto = $_SERVER['HTTP_X_FORWARDED_PROTO']
      ?? ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http');

$config['base_url'] = rtrim($proto.'://'.$host, '/') . '/';

/* (opsional, tapi rapi buat debug) */
error_log("FAZTECH DEBUG: XFH = ".($_SERVER['HTTP_X_FORWARDED_HOST'] ?? '-')
        .", XFP = ".($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '-')
        .", HOST = ".($_SERVER['HTTP_HOST'] ?? '-')
        .", base_url = ".$config['base_url']);

$config['index_page']   = '';
$config['uri_protocol'] = 'REQUEST_URI';

$config['url_suffix'] = '';
$config['language'] = 'english';
$config['charset'] = 'UTF-8';
$config['enable_hooks'] = FALSE;
$config['subclass_prefix'] = 'MY_';
$config['composer_autoload'] = FALSE;
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
$config['allow_get_array'] = TRUE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';
$config['log_threshold'] = 0;
$config['log_path'] = '';
$config['log_file_extension'] = '';
$config['log_file_permissions'] = 0644;
$config['log_date_format'] = 'Y-m-d H:i:s';
$config['error_views_path'] = '';
$config['cache_path'] = '';
$config['cache_query_string'] = FALSE;
$config['encryption_key'] = 'faztech_key_2024';
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = APPPATH . 'sessions';
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;
$config['cookie_prefix'] = '';
$config['cookie_domain'] = '';
$config['cookie_path'] = '/';
$config['cookie_secure'] = FALSE;
$config['cookie_httponly'] = FALSE;
$config['standardize_newlines'] = FALSE;
$config['global_xss_filtering'] = FALSE;
$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();
$config['compress_output'] = FALSE;
$config['time_reference'] = 'local';
$config['rewrite_short_tags'] = FALSE;
$config['proxy_ips'] = '';
