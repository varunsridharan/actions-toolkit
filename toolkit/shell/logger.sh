#!/bin/sh

# $1 Log Message
gh_log() {
  echo "${1}"
}

# $1 Group Name
gh_log_group_start() {
  echo "###[group]${1}"
}

gh_log_group_end() {
  echo "###[endgroup]"
}

gh_log_yellow() {
  echo "###[warning]${1}"
}

# $1 Warning Message
gh_log_warning() {
  gh_log_yellow "⚠️  ${1}"
}

# $1 Error Message
gh_log_red() {
  echo "###[error]${1}"
}

# $1 Error Message
gh_log_error() {
  gh_log_red "🛑️  ${1}"
}

# $1 Debug Log
gh_log_debug() {
  echo "::debug::${1}"
}
