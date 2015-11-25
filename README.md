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
This calls all the build commands (from below) and then creates a .zip package, without ignored files.

```shell
# wp-plugin-package $PLUGIN_DIRECTORY $VERSION $DESTINATION
wp-plugin-package . 1.0 ~/releases
```

**Release WordPress plugin to .org**
```shell
# wp-plugin-release-org $PACKAGE
wp-plugin-release-org ~/releases/mailchimp-for-wp-3.0.zip
```

**Bump version**
```
# dvkf bump-version $VERSION
dvkf bump-version 1.0.1
```

**Run default Gulp/Grunt tasks**
```
dvkf build-assets
```

**Update language files**
```
dvkf build-language-files
```

**Create optimized autoloader**
```
dvkf build-autoloader
```

**Add all previously auto-generated files to Git**
```
dvkf gitadd
```
