#!/usr/bin/env sh
set -eu

envsubst '${SERVER_NAME} ${FPM_HOST}' < /etc/nginx/conf.d/default.conf.template > /etc/nginx/conf.d/default.conf

exec "$@"
