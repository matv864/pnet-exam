#!/bin/bash

curl -v 192.168.10.108:8000/registration.php \
    -H "Content-Type: application/x-www-form-urlencoded" \
    -d "login=ivanov_mo&password=2&submit="
