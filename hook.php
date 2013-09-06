<?php

// Init vars
$LOCAL_ROOT         = "/var/pqlhamfphp";

// Delete local repo if it exists
if (file_exists($LOCAL_REPO)) {
    shell_exec("rm -rf {$LOCAL_REPO}");
}

// Clone fresh repo from github using desired local repo name and checkout the desired branch
echo shell_exec("cd {$LOCAL_ROOT} && cd .. && git clone https://github.com/minuJeong/pqlhamfphp.git");
