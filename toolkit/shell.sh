#!/bin/sh

source /gh-toolkit/shell/logger.sh
source /gh-toolkit/shell/inputvars.sh
source /gh-toolkit/shell/envars.sh
source /gh-toolkit/shell/color-log.sh

gh_set_output() {
  echo "::set-output name=${1}::${2}"
}

gh_mask_output() {
  echo "::add-mask::${1}"
}

is_empty_var() {
  if [ -z "$1" ]; then
    echo "$2"
  else
    echo "$1"
  fi
}

gitconfig() {
  GIT_EMAIL=""
  GIT_USERNAME=""
  LOCAL="no"

  if [ ! -z "$1" ]; then
    GIT_USERNAME="$1"
  fi

  if [ ! -z "$2" ]; then
    GIT_EMAIL="$2"
  fi

  if [ ! -z "$3" ]; then
    LOCAL="$2"
  fi

  gh_log_group_start "🗃 Git Config"
  gh_log "  > Name          : $GIT_USERNAME"
  gh_log "  > Email         : $GIT_EMAIL"

  if [ "$LOCAL" != true ]; then
    gh_log "  > Global Config : true"
    git config --global user.email "$GIT_EMAIL"
    git config --global user.name "$GIT_USERNAME"
  else
    gh_log "  > Global Config : false"
    git config user.email "$GIT_EMAIL"
    git config user.name "$GIT_USERNAME"
  fi
  gh_log_group_end ""
  gh_log ""
}
