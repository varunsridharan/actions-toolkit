# Github Actions Toolkit
~ Predefined Functions For Github Actions SHELL & PHP ~

## ⚙️Installation
### 🐳 Docker - Alpine
```dockerfile
FROM alpine:latest

ADD https://raw.githubusercontent.com/varunsridharan/actions-toolkit/master/setup-alpine.sh /
RUN chmod uga+x /setup-alpine.sh
RUN sh /setup-alpine.sh
```

## 🚀 Usage
### Shell
```shell script
#!/bin/sh
set -e

source /gh-toolkit/shell.sh

gh_log "Hello World"
```

### PHP
```php
require_once '/gh-toolkit/php.php';

GH_LOG::log('Hello World');
```

## 📖 Documentation
### Shell Script

#### `gh_set_output`
```shell script
# {KEY} Custom Output Key
# {VALUE} Custom Output Value
gh_set_output "{KEY}" "{VALUE}"
```

#### `gh_mask_output`
```shell script
# {STRING} To be masked in Github Action's Log
gh_mask_output "{STRING}"

# Below Log Will Not Have "{STRING}" Which Will Be Masked Out
gh_log "{STRING} This Output Should Have A Masked Word"
```

#### `gh_log`
```shell script
# Logs The Given Value
gh_log "Sample Log In Github Actions"
```

#### `gh_log_group_*`
```shell script
gh_log_group_start "Group Name"
gh_log "Log Line 1"
gh_log "Log Line 2"
gh_log "Log Line 3"
gh_log_group_end
```

#### `gh_log_*`
```shell script
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
```

#### `gh_env`
```shell script
# Get The ENV Variable's Value
ENV_VALUE=$(gh_env "CUSTOM_ENV_NAME")

# Provides Default Value if ENV Variable Is Empty / Not Exists
ENV_VALUE=$(gh_env "CUSTOM_ENV_NAME" "MY_Default_VALUE")
```

#### `gh_validate_env`
```shell script
# Check if ENV exists if not throws an error.
gh_validate_env "CUSTOM_ENV1"

# Check if ENV exists if not throws an error. but the error message can be set.
gh_validate_env "CUSTOM_ENV2" "Sorry Can't Process The Request. CUSTOM_ENV2 IS REQUIRED"
```

#### `gh_set_env` && `gh_set_env_silent`
```shell script
# Sets A New ENV Variable And Logs A Success Message
gh_set_env "ENV_VAR_NAME" "ENV_VAR_CONTENT"
gh_set_env "ENV_VAR_NAME2" "ENV_VAR_CONTENT"

# Sets A New ENV Variable And No Log Will Be Generated
gh_set_env_silent "ENV_VAR_NAME3" "Custom Content Here"

# Sets A New ENV Variable Which Will have Multiple Lines Of String
gh_set_env_multiline "VARIABLE_NAME" "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
```

#### `gh_input`
```shell script
# Get The Input Variable's Value
INPUT_VALUE=$(gh_input "INPUT_CUSTOMNAME")

# Provides Default Value if Input Variable Is Empty / Not Exists
INPUT_VALUE=$(gh_input "INPUT_CUSTOMNAME" "MY_Default_VALUE")
```

#### `gh_validate_input`
```shell script
# Check if Input exists if not throws an error.
gh_validate_input "CUSTOM_INPUT_NAME1"

# Check if Input exists if not throws an error. but the error message can be set.
gh_validate_input "CUSTOM_INPUT_NAM2" "Sorry Can't Process The Request. CUSTOM_ENV2 IS REQUIRED"
```

---

### PHP Script

#### `gh_log`
```php
# Logs The Given Value
gh_log("Sample Log In Github Actions");
```

### `gh_log_group_*`
```php
gh_log_group_start( "Group Name" );
gh_log( "Log Line 1" );
gh_log( "Log Line 2" );
gh_log( "Log Line 3" );
gh_log_group_end();
```

#### `gh_log_*`
```php
# Github Action Warning Log
gh_log_yellow( 'This Will Be Displayed As Warning In Github Actions Log' );

# Github Action Warning Log With Emoji
gh_log_warning( 'This Will Be Displayed With A Warning Emoji' );

# Github Action Error Log
gh_log_red( 'This Will Be Displayed As Error In Github Actions Log' );

# Github Action Error Log With Emoji
gh_log_error( 'This Will Be Displayed With A Error Emoji' );

# Github Actions Debug Log
gh_log_debug( 'This Will Be Displayed As Debug Log in Github Actions Log If Debug Enabled' );
```

#### `GH_LOG::*`
```php
GH_LOG::Log( 'My Background Color Will Be {black}', 'normal', 'black' );

GH_LOG::Log( 'My Background Color Will Be {red}', 'normal', 'red' );

GH_LOG::Log( 'My Background Color Will Be {green}', 'normal', 'green' );

GH_LOG::Log( 'My Background Color Will Be {yellow}', 'normal', 'yellow' );

GH_LOG::Log( 'My Background Color Will Be {blue}', 'normal', 'blue' );

GH_LOG::Log( 'My Background Color Will Be {magenta}', 'normal', 'magenta' );

GH_LOG::Log( 'My Background Color Will Be {cyan}', 'normal', 'cyan' );

GH_LOG::Log( 'My Background Color Will Be {light_gray}', 'normal', 'light_gray' );

GH_LOG::Log( 'My Text Color Will Be {bold}', 'bold' );

GH_LOG::Log( 'My Text Color Will Be {dim}', 'dim' );

GH_LOG::Log( 'My Text Color Will Be {black}', 'black' );

GH_LOG::Log( 'My Text Color Will Be {dark_gray}', 'dark_gray' );

GH_LOG::Log( 'My Text Color Will Be {blue}', 'blue' );

GH_LOG::Log( 'My Text Color Will Be {light_blue}', 'light_blue' );

GH_LOG::Log( 'My Text Color Will Be {green}', 'green' );

GH_LOG::Log( 'My Text Color Will Be {light_green}', 'light_green' );

GH_LOG::Log( 'My Text Color Will Be {cyan}', 'cyan' );

GH_LOG::Log( 'My Text Color Will Be {light_cyan}', 'light_cyan' );

GH_LOG::Log( 'My Text Color Will Be {red}', 'red' );

GH_LOG::Log( 'My Text Color Will Be {light_red}', 'light_red' );

GH_LOG::Log( 'My Text Color Will Be {purple}', 'purple' );

GH_LOG::Log( 'My Text Color Will Be {light_purple}', 'light_purple' );

GH_LOG::Log( 'My Text Color Will Be {brown}', 'brown' );

GH_LOG::Log( 'My Text Color Will Be {yellow}', 'yellow' );

GH_LOG::Log( 'My Text Color Will Be {light_gray}', 'light_gray' );

GH_LOG::Log( 'My Text Color Will Be {white}', 'white' );

GH_LOG::Log( 'My Text Color Will Be {normal}', 'normal' );

GH_LOG::Log( 'This Text Will Be [underline]', 'normal', false, 'underline' );

GH_LOG::Log( 'This Text Will Be [blink]', 'normal', false, 'blink' );

GH_LOG::Log( 'This Text Will Be [reverse]', 'normal', false, 'reverse' );

GH_LOG::Log( 'This Text Will Be [hidden]', 'normal', false, 'hidden' );
```
#### `gh_input`
```php
# Get The ENV Variable's Value
$VALUE = gh_input( 'VALUE3' );

# Provides Default Value if ENV Variable Is Empty / Not Exists
$VALUE = gh_input( 'VALUE4', 'DEFAULT_VALUE' );
```

#### `gh_validate_input`
```php
# Check if INPUT exists if not throws an error.
gh_validate_input( 'VALUE5' );

# Check if INPUT exists if not throws an error. but the error message can be set.
gh_validate_input( 'VALUE5', 'Sorry Can\'t Process VALUE5 Input Is Required' );
```



---
## 📝 Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

[Checkout CHANGELOG.md](/CHANGELOG.md)

## 🤝 Contributing
If you would like to help, please take a look at the list of [issues](issues/).

## 💰 Sponsor
[I][twitter] fell in love with open-source in 2013 and there has been no looking back since! You can read more about me [here][website].
If you, or your company, use any of my projects or like what I’m doing, kindly consider backing me. I'm in this for the long run.

- ☕ How about we get to know each other over coffee? Buy me a cup for just [**$9.99**][buymeacoffee]
- ☕️☕️ How about buying me just 2 cups of coffee each month? You can do that for as little as [**$9.99**][buymeacoffee]
- 🔰         We love bettering open-source projects. Support 1-hour of open-source maintenance for [**$24.99 one-time?**][paypal]
- 🚀         Love open-source tools? Me too! How about supporting one hour of open-source development for just [**$49.99 one-time ?**][paypal]

## 📜  License & Conduct
- [**General Public License v3.0 license**](LICENSE) © [Varun Sridharan](website)
- [Code of Conduct](code-of-conduct.md)

## 📣 Feedback
- ⭐ This repository if this project helped you! :wink:
- Create An [🔧 Issue](issues/) if you need help / found a bug

## Connect & Say 👋
- **Follow** me on [👨‍💻 Github][github] and stay updated on free and open-source software
- **Follow** me on [🐦 Twitter][twitter] to get updates on my latest open source projects
- **Message** me on [📠 Telegram][telegram]
- **Follow** my pet on [Instagram][sofythelabrador] for some _dog-tastic_ updates!

---

<p align="center">
<i>Built With ♥ By <a href="https://sva.onl/twitter"  target="_blank" rel="noopener noreferrer">Varun Sridharan</a> <a href="https://en.wikipedia.org/wiki/India"><img src="https://cdn.svarun.dev/flag-india-flat.svg" width="20px"/></a> </i>
</p>

---

<!-- Personl Links -->
[paypal]: https://sva.onl/paypal
[buymeacoffee]: https://sva.onl/buymeacoffee
[sofythelabrador]: https://www.instagram.com/sofythelabrador/
[github]: https://sva.onl/github/
[twitter]: https://sva.onl/twitter/
[telegram]: https://sva.onl/telegram/
[email]: https://sva.onl/email
[website]: https://sva.onl/website/
