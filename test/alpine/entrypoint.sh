#!/bin/sh

set -e
cd /

ls -lah
echo "
CD - To GH_TOOLKIT
"
cd /gh-toolkit/
ls -lah

echo "
"
sh ./test/shell-test.sh