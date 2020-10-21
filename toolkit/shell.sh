#!/bin/sh

source /gh-toolkit/shell/logger.sh
source /gh-toolkit/shell/inputvars.sh
source /gh-toolkit/shell/envars.sh

gh_set_output() {
  echo "::set-output name=${1}::${2}"
}

gh_mask_output() {
  echo "::add-mask::${1}"
}
