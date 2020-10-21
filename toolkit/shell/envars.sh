#!/bin/sh

gh_env() {
  INPUT_KEY="\$${1}"
  VALUE=$(eval "echo $INPUT_KEY")
  if [ -z "$VALUE" ] && [[ ! -z "$2" ]]; then
    VALUE="$2"
  fi
  echo "$VALUE"
}

gh_validate_env() {
  if [ -z "$(gh_env $1)" ]; then
    if [ -z "$2" ]; then
      gh_log_red "🚩  ${1} Not Found. Please Set It As ENV Variable"
    else
      gh_log_red "🚩  ${2}"
    fi
    exit 1
  fi
}

gh_set_env_multiline() {
  echo "${1}<<EOF" >>$GITHUB_ENV
  echo "${2}" >>$GITHUB_ENV
  echo "EOF" >>$GITHUB_ENV
  gh_log "✔️ ENV  : ${1}  =>  ${2}"
}

gh_set_env() {
  echo "${1}=${2}" >>$GITHUB_ENV
  gh_log "✔️ ENV  : ${1}  =>  ${2}"
}

gh_set_env_silent() {
  SLIENT=$(gh_set_env $1 $2 $3)
}
