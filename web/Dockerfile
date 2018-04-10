FROM wangwentao/env:latest

USER root
ADD start.sh  /root/
RUN chmod 777  /root/start.sh

WORKDIR /root

ENTRYPOINT /root/start.sh
