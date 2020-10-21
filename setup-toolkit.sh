#!/bin/sh

set -e

GITHUB_SCRIPTS_FOLDER="actions-alpine-main"
GITHUB_SCRIPTS_URL="https://github.com/varunsridharan/actions-alpine/archive/main.zip"

## Clone Github Toolkit Files To /gh-toolkit/
mkdir /gh-toolkit/
cd /gh-toolkit/
wget "$GITHUB_SCRIPTS_URL"
unzip ./main.zip
chmod -R 777 "/gh-toolkit/${GITHUB_SCRIPTS_FOLDER}/toolkit/"
chmod -R 777 "/gh-toolkit/${GITHUB_SCRIPTS_FOLDER}/scripts/"

## Copy Toolkit Datas
cd "/gh-toolkit/${GITHUB_SCRIPTS_FOLDER}/toolkit/"
cp -r * /gh-toolkit/

## Setup Install Script
cd "/gh-toolkit/${GITHUB_SCRIPTS_FOLDER}/scripts/"
cp -r * /usr/local/bin/

## Removed Unwated Files.
cd /gh-toolkit/
rm -rf main.zip
rm -rf "${GITHUB_SCRIPTS_FOLDER}"