#!/bin/sh
set -e

source /gh-toolkit/shell.sh

# {KEY} Custom Output Key
# {VALUE} Custom Output Value
gh_set_output "{KEY}" "{VALUE}"

# Logs The Given Value
gh_log "Sample Log In Github Actions"
gh_log

gh_log_group_start "Group Name"
gh_log "Log Line 1"
gh_log "Log Line 2"
gh_log "Log Line 3"
gh_log_group_start "Group Name2"
gh_log "Log Line 2"
gh_log "Log Line 3"
gh_log_group_end
gh_log_group_end
gh_log

# {STRING} To be masked in Github Action's Log
gh_mask_output "{STRING}"
# Below Log Will Not Have "{STRING}" Which Will Be Masked Out
gh_log "{STRING} This Output Should Have A Masked Word"
gh_log

# Github Action Warning Log
gh_log_yellow "This Will Be Displayed As Warning In Github Actions Log"

# Github Action Warning Log With Emoji
gh_log_warning "This Will Be Displayed With A Warning Emoji"

# Github Action Error Log
gh_log_red "This Will Be Displayed As Error In Github Actions Log"

# Github Action Error Log With Emoji
gh_log_error "This Will Be Displayed With A Error Emoji"

# Github Actions Debug Log
gh_log_debug "This Will Be Displayed As Debug Log in Github Actions Log If Debug Enabled"

# Get The ENV Variable's Value
gh_log
gh_log "Fetche ENV Values For AC_ENV_1 AC_ENV_2 AC_ENV_3 & AC_ENV_4"
echo "$(gh_env "AC_ENV_1")"
echo "$(gh_env "AC_ENV_2")"
echo "$(gh_env "AC_ENV_3")"
echo "$(gh_env "AC_ENV_4" "MY_Default_VALUE")"
gh_log

# Sets A New ENV Variable And Logs A Success Message
gh_set_env "ENV_VAR_NAME" "ENV_VAR_CONTENT"
gh_set_env "ENV_VAR_NAME2" "ENV_VAR_CONTENT"
gh_set_env_multiline "VARIABLE_NAME" "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."

# Sets A New ENV Variable And No Log Will Be Generated
gh_set_env_silent "ENV_VAR_NAME3" "Custom Content Here"
gh_log

# Get The Input Variable's Value
echo "$(gh_input "CUSTOM_INPUT_NAME")"
# Provides Default Value if Input Variable Is Empty / Not Exists
echo "$(gh_input "CUSTOM_INPUT_NAME" "MY_Default_VALUE")"
# Check if Input exists if not throws an error.
#gh_validate_input "CUSTOM_ENV1"
# Check if Input exists if not throws an error. but the error message can be set.
#gh_validate_input "CUSTOM_ENV2" "Sorry Can't Process The Request. CUSTOM_ENV2 IS REQUIRED"
gh_log