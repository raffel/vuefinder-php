#!/bin/bash
ipAddr=$(ip addr show eth0 | grep "inet\b" | awk '{print $2}' | cut -d/ -f1)
php -S "$ipAddr":3000 -t public
