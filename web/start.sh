#!/bin/bash

/etc/init.d/nginx start
/etc/init.d/php7.0-fpm start

tail -f /dev/null
