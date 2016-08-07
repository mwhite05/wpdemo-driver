#! /usr/bin/php
<?php

mv('./readme.html', '../readme.html');
mv('./wp-config.php', '../wp-config.php');

unlink('./wp-config-sample.php');

// todo - fix permissions and ownership on files / directories
