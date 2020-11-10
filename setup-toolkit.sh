#!/bin/sh
set -e

GITHUB_SCRIPTS_FOLDER="actions-toolkit-main"
GITHUB_SCRIPTS_URL="https://github.com/varunsridharan/actions-toolkit/archive/main.zip"

if [ -z "$1" ]; then
  INSTALL_DIR="/gh-toolkit/"
else
  INSTALL_DIR="$1"
fi

## Clone Github Toolkit Files To /gh-toolkit/
mkdir -p "${INSTALL_DIR}"
cd "${INSTALL_DIR}"
wget "$GITHUB_SCRIPTS_URL"
unzip ./main.zip
chmod -R 777 "${INSTALL_DIR}${GITHUB_SCRIPTS_FOLDER}/toolkit/"
chmod -R 777 "${INSTALL_DIR}${GITHUB_SCRIPTS_FOLDER}/scripts/"

## Copy Toolkit Datas
cd "${INSTALL_DIR}${GITHUB_SCRIPTS_FOLDER}/toolkit/"
cp -r * "${INSTALL_DIR}"
sed -i 's|/gh-toolkit/|'"$INSTALL_DIR"'|g' shell.sh

echo "INSTALL_DIR : $INSTALL_DIR"
cat shell.sh

## Setup Install Script
#cd "${INSTALL_DIR}${GITHUB_SCRIPTS_FOLDER}/scripts/"
#cp -r * /usr/local/bin/

## Removed Unwanted Files.
cd "${INSTALL_DIR}"
rm -rf main.zip
rm -rf "${GITHUB_SCRIPTS_FOLDER}"