<?php

// Init vars
$CLONE_ROOT         = "/var/";

// Delete local repo if it exists
if (file_exists($CLONE_ROOT . '/pq')) {
    echo 'root exists.
removing..
';
    shell_exec("sudo rm -rf {$CLONE_ROOT}/pq");
}

// Clone fresh repo from github using desired local repo name and checkout the desired branch
echo 'cd ~~..
';
shell_exec("cd {$CLONE_ROOT}");

echo 'git clone ~~
';
shell_exec("sudo git clone https://github.com/minuJeong/pq.git");

echo 'chmod.
';
shell_exec("sudo chmod 777 {$CLONE_ROOT}/pq");

echo '
';

echo 'hook.php complete.
';

?>
