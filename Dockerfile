FROM ifirlana/php7.2:v0.0.1

COPY ./start.sh /
COPY . /root

EXPOSE 80

# ENTRYPOINT [ "tail","-f","/dev/null" ]
ENTRYPOINT ["/bin/bash", "start.sh"]
