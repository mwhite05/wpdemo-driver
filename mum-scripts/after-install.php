#! /usr/bin/php
<?php

$webRootPath = file_get_contents('../../install_to');
chdir($webRootPath);

rename('./readme.html', '../readme.html');
rename('./wp-config.php', '../wp-config.php');

unlink('./wp-config-sample.php');

// Make sure we have an uploads directory so we can properly set permissions on it
if(!is_dir('./wp-content/uploads')) {
    mkdir('./wp-content/uploads', true);
}

// permissions and ownership operations are done in bash
