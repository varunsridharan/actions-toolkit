FROM alpine:latest

#####################################
#### Install Required Dependency ####
#####################################
ADD https://raw.githubusercontent.com/varunsridharan/actions-toolkit/main/setup-alpine.sh /

########################################
#### Configure Required Dependency #####
########################################
RUN chmod uga+x /setup-alpine.sh
RUN sh /setup-alpine.sh


#####################################
#### Setup Entry Point & RUN IT #####
#####################################
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]