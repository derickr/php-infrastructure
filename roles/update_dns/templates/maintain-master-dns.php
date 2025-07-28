<?php

# Generate a complete bind zone
echo "; this file was automatically generated from php-infrastructure/inventory/php.net.zone\n\n";
echo str_replace('@SERIAL@', time(), file_get_contents('/local/systems/php.net.zone'));
