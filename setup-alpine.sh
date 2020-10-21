#!/bin/sh
set -e

## Install Required Dependencies
apk add bash git curl unzip wget

## Clone Github Toolkit Files To /gh-toolkit/
wget https://raw.githubusercontent.com/varunsridharan/actions-alpine/main/setup-toolkit.sh
chmod uga+x setup-toolkit.sh
sh setup-toolkit.sh