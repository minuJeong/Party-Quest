<?php

// Init vars
$LOCAL_ROOT         = "/var/pqlhamfphp";
$CLONE_ROOT         = "/var/";

// Delete local repo if it exists
if (file_exists($LOCAL_ROOT)) {
    echo 'root exists. removing..';
    shell_exec("sudo rm -rf {$LOCAL_ROOT}");
}

// Clone fresh repo from github using desired local repo name and checkout the desired branch
echo 'cloning..';
shell_exec("cd {$CLONE_ROOT} && sudo git clone https://github.com/minuJeong/pqlhamfphp.git");

echo '
';

echo 'hook.php complete.
';

?>
