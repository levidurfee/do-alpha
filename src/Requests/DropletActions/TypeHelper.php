<?php

namespace wappr\digitalocean\Requests\DropletActions;

use wappr\digitalocean\Contracts\RequestContract;

class TypeHelper extends RequestContract
{
    const ENABLE_BACKUPS = 'enable_backups';
    const DISABLE_BACKUPS = 'disable_backups';
    const REBOOT = 'reboot';
    const POWER_CYCLE = 'power_cycle';
    const SHUTDOWN = 'shutdown';
    const POWER_OFF = 'power_off';
    const POWER_ON = 'power_on';
    const PASSWORD_RESET = 'password_reset';
    const ENABLE_IPV6 = 'enable_ipv6';
    const ENABLE_PRIVATE_NETWORKING = 'enable_private_networking';
}
