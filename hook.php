<?php

$logfile = '/var/pqlhlog/log.txt';
$handler = fopen($logfile, 'a') or die ('cannot open file.');
$logdata = '';

// Init vars
$LOCAL_ROOT         = "/var/pqlhamfphp";
$CLONE_ROOT         = "/var/";

$logdata . 'Local root: ' . $LOCAL_ROOT . ';
';
$logdata . 'Clone root: ' . $CLONE_ROOT . ';
';

// Delete local repo if it exists
if (file_exists($LOCAL_ROOT)) {
    $logdata . 'root exists. removing root directory.
    ';
    echo 'root exists. removing..';
    shell_exec("sudo rm -rf {$LOCAL_ROOT}");
}

// Clone fresh repo from github using desired local repo name and checkout the desired branch
$logdata . 'cloning git.
';
echo 'cloning..';
shell_exec("cd {$CLONE_ROOT} && sudo git clone https://github.com/minuJeong/pqlhamfphp.git");

echo '
';

$logdata . 'clone git complete. (from hook.php)
'


fwrite($handler, $logdata);

echo 'hook.php complete.
';

?>
