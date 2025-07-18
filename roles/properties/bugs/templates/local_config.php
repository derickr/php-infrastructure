<?php
/**
 * Add your local changes here and copy to local_config.php
 */

$site_data = array (
        'method' => 'https',
        'url' => '{{ bugs_domain }}',
        'basedir' => '',
        'email' => 'php-bugs@lists.php.net',
        'doc_email' => 'doc-bugs@lists.php.net',
        'security_email' => 'security@php.net',
        'db' => '{{ bugs_database }}',
        'db_extension' => 'mysqli',
        'db_user' => '{{ bugs_username }}',
        'db_pass' => '{{ bugs_password }}',
        'db_host' => 'localhost',
        'patch_tmp' => '{{ bugs_patches_dir }}',
);

define('DEVBOX', false);
