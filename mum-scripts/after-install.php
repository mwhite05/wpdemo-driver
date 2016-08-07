#! /usr/bin/php
<?php

rename('./readme.html', '../readme.html');
rename('./wp-config.php', '../wp-config.php');

unlink('./wp-config-sample.php');

// todo - fix permissions and ownership on files / directories
