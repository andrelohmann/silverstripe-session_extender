# session_extender

## Maintainers

 * Andre Lohmann (Nickname: andrelohmann)
  <lohmann dot andre at googlemail dot com>

## Requirements

Silverstripe 3.2.x

## Introduction

Allows to set the lifetime for PHP Sessions.
Needs to be uncommented on _ss_environment.php

The SESSIONSAVEPATH is suggested to be set to the local silverstripe directory, as the session otherwise might be overwritten by other php applications

define('SESSIONID','PHPSESSID');
define('SESSIONLIFETIME',(60*60*24)); // two hours
define('SESSIONSAVEPATH','/var/www/__YOUR_SILVERSTRIPE_PATH__/silverstripe-cache/sessions');

To use Redis as a Session Store place the following ini_settings to your _config.php

define('SESSIONSAVEHANDLER', 'redis');
define('SESSIONSAVEPATH', 'tcp://127.0.0.1:6379?prefix=mySessionPrefix');

### Notice
This repository uses the git flow paradigm.
After each release cycle, do not forget to push tags, master and develop to the remote origin
```
git push --tags
git push origin develop
git push origin master
```