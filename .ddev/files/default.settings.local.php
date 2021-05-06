<?php

/**
 * @file
 * Get environment settings.
 *
 * Development: Use development settings.
 */
$settings['trusted_host_patterns'] = ['[\s\S]*'];

// Necessary as per #3188183.
$settings['swiftmailer.transport']['smtp_host'] = 'mailcatcher';
$settings['swiftmailer.transport']['smtp_port'] = '1025';

/**
 * Set private file path directory.
 */
$settings['file_private_path'] = '/var/www/html/files_private';
