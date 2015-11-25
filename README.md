# scripts.sh

A collection of scripts I use repeatedly.

## Installation

1. Clone repository
1. Add entire folder to your `$PATH` variable.
```shell
echo '# scripts.sh (https://github.com/dannyvankooten/scripts.sh)' >> ~/.bash_profile
echo 'export PATH="~/Scripts:$PATH"' >> ~/.bash_profile
```
1. Enjoy.

## Usage

**Prepare WordPress plugin package**
```shell
# wp-plugin-package $PLUGIN_DIRECTORY $VERSION $DESTINATION
wp-plugin-package . 1.0 ~/releases
```

**Release WordPress plugin to .org**
```shell
# wp-plugin-release-org $PACKAGE
wp-plugin-release-org ~/releases/mailchimp-for-wp-3.0.zip
```
