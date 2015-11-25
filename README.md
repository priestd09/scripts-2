# scripts.sh

## Installation

1. Clone repository
1. Add entire folder to your `$PATH` variable.
	```bash
	echo '# scripts.sh (https://github.com/dannyvankooten/scripts.sh)' >> ~/.bash_profile
	echo 'export PATH="~/Scripts:$PATH"' >> ~/.bash_profile
	```
1. Enjoy.

## Usage

**Prepare WordPress plugin package**

```bash
$ wp-plugin-package $DIRECTORY $VERSION
```

**Release WordPress plugin to .org**

```bash
$ wp-plugin-release $PACKAGE
```
