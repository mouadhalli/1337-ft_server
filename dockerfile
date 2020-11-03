FROM debian:buster
COPY srcs /
RUN bash ./services.sh
CMD sh /start_services.sh && tail -f /dev/null