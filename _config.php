<?php

/**
 * Set the Time of how long the Session should last
 */

ini_set('session.name',SESSIONID);
ini_set('session.gc_maxlifetime', SESSIONLIFETIME);
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 1);
ini_set('session.cookie_secure', FALSE);
ini_set('session.use_only_cookies', TRUE);