#!/bin/sh
set -e

## Install Required Dependencies
apk add bash curl git lftp rsync unzip wget zip

## Clone Github Toolkit Files To /gh-toolkit/
wget https://raw.githubusercontent.com/varunsridharan/actions-toolkit/main/setup-toolkit.sh
chmod uga+x setup-toolkit.sh
sh setup-toolkit.sh