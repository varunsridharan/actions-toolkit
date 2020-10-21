#!/bin/sh

set -e

GITHUB_SCRIPTS_FOLDER="actions-alpine-main"
GITHUB_SCRIPTS_URL="https://github.com/varunsridharan/actions-alpine/archive/main.zip"

## Install Required Dependencies
apk add bash git curl unzip wget

## Clone Github Toolkit Files To /gh-toolkit/
wget https://raw.githubusercontent.com/varunsridharan/actions-alpine/main/setup-toolkit.sh
chmod uga+x setup-toolkit.sh
sh setup-toolkit.sh