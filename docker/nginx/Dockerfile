FROM nginx:latest

COPY default.conf.template /etc/nginx/conf.d/default.conf.template

COPY ./init.sh /
ENTRYPOINT ["/init.sh"]
CMD ["nginx", "-g", "daemon off;"]
