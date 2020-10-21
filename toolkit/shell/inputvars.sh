#!/bin/sh

gh_input() {
  INPUT_KEY="\$INPUT_${1}"
  VALUE=$(eval "echo $INPUT_KEY")
  if [ -z "$VALUE" ] && [[ ! -z "$2" ]]; then
    VALUE="$2"
  fi
  echo "$VALUE"
}

gh_validate_input() {
  if [ -z "$(gh_input $1)" ]; then
    if [ -z "$2" ]; then
      gh_log_red "🚨 ${1} Not Found. Please Set The Input Value using WITH in workflow file"
    else
      gh_log_red "🚨 ${2}"
    fi
    exit 1
  fi
}