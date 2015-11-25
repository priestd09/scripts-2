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

#### Prepare WordPress plugin package

This takes a Git repository, builds all assets, languages & an optimized autoloader, changes the version to the specified version and then creates a stripped-down .zip package for distribution.

```shell
# wp-plugin-package $PLUGIN_DIRECTORY $VERSION $DESTINATION
wp-plugin-package . 1.0 ~/releases
```

#### Release WordPress plugin to .org SVN

This will automatically extract the plugin name and version number from the given package.

```shell
# wp-plugin-release-org $PACKAGE
wp-plugin-release-org ~/releases/mailchimp-for-wp-3.0.zip
```

#### Bump version

This bumps the version number in the main plugin file, `readme.txt` and `*.json`.

```
# dvkf bump-version $VERSION
dvkf bump-version 1.0.1
```

#### Run default Gulp/Grunt tasks

Installs NPM deps (if needed) and runs Gulp or Grunt.

```
dvkf build-assets
```

#### Update language files

Pulls updated language files from Transifex and creates `.mo` files out of it.

```
dvkf build-language-files
```

#### Create optimized autoloader

Removes all developer dependencies and creates an optimized autoloader.

```
dvkf build-autoloader
```

#### Add all previously auto-generated files to Git

Adds assets, languages & autoloader to Git.

```
dvkf gitadd
```
