#!/bin/sh

COLOR_PALLET_TYPE="0"

__colortext() {
  echo " \e[$COLOR_PALLET_TYPE;$2m$1\e[0m"
}

log_green() {
  echo $(__colortext "$1" "32")
}

log_red() {
  echo $(__colortext "$1" "31")
}

log_blue() {
  echo $(__colortext "$1" "34")
}

log_purple() {
  echo $(__colortext "$1" "35")
}

log_yellow() {
  echo $(__colortext "$1" "33")
}

log_cyan() {
  echo $(__colortext "$1" "36")
}
