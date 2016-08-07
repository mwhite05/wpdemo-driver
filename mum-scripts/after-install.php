#! /usr/bin/php
<?php

$installPath = file_get_contents('../../install_to');

chdir($installPath);

rename('./readme.html', '../readme.html');
rename('./wp-config.php', '../wp-config.php');

unlink('./wp-config-sample.php');

// todo - fix permissions and ownership on files / directories
