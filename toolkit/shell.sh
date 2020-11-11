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
  GIT_EMAIL="githubactionbot@gmail.com"
  GIT_USERNAME="Github Action Bot"
  LOCAL=false

  if [ ! -z "$1" ]; then
    GIT_USERNAME="$1"
  fi

  if [ ! -z "$2" ]; then
    GIT_EMAIL="$2"
  fi

  if [ ! -z "$3" ]; then
    LOCAL=false
  else
    LOCAL=true
  fi

  if [ "$LOCAL" = true ]; then
    gh_log "🗃 Git Config"
    git config user.email "$GIT_EMAIL"
    git config user.name "$GIT_USERNAME"
  else
    gh_log "🗃 Git Global Config"
    git config --global user.email "$GIT_EMAIL"
    git config --global user.name "$GIT_USERNAME"
  fi
  gh_log "  > Name          : $GIT_USERNAME"
  gh_log "  > Email         : $GIT_EMAIL"
  #gh_log ""
  gh_log ""
}
