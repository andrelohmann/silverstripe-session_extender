# session_extender

## Maintainers

 * Andre Lohmann (Nickname: andrelohmann)
  <lohmann dot andre at googlemail dot com>

## Introduction

Allows to set the lifetime for PHP Sessions.
Needs to uncommented on _ss_environment.php

To use Redis as a Session Store place the following ini_settings to your _config.php

define('SESSIONSAVEHANDLER', 'redis');
define('SESSIONSAVEPATH', 'tcp://127.0.0.1:6379?prefix=mySessionPrefix');

### Notice
 * After each Update, set the new Tag
```
git tag -a v1.2.3.4 -m 'Version 1.2.3.4'
git push -u origin v1.2.3.4
```
 * Also update the requirements in andrelohmann/silverstripe-apptemplate