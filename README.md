# An opinionated custom coding standard

## Table of contents

- [Sniffing code](#sniffing-code)
- [Sniffing code in PHPStorm](#sniffing-code-in-phpstorm)

## How to use

### Enabling the rules

Add it to your project `phpcs.xml` or `phpcs.xml.dist` ruleset:

```xml
<?xml version="1.0"?>
<ruleset name="Smart Vitaal coding standard" namespace="smartvitaal/coding-standard">
    <arg name="basepath" value="."/>

    <file>./app</file>
    <file>./config</file>
    <file>./database</file>
    <file>./modules</file>
    <file>./resources</file>
    <file>./tests</file>

    <rule ref="./vendor/qbixx/smartvitaal-code-style/ruleset.xml"/>
</ruleset>
```

### Sniffing code

The following commands can be added to the `scripts` section of your `composer.json` file to check and fix invalid code. Some optional checks are also included to illustrate how they might work together to check all your code.

```json
{
    "scripts": {
        "composer-validate": "@composer validate --no-check-all --strict",
        "codesniffer-check": "vendor/bin/phpcs --runtime-set ignore_errors_on_exit 1 --runtime-set ignore_warnings_on_exit 1",
        "codesniffer-fix": "vendor/bin/phpcbf --runtime-set ignore_errors_on_exit 1 --runtime-set ignore_warnings_on_exit 1 || exit 0",
        "test": "vendor/bin/phpunit",
        "check": [
            "@composer-validate",
            "@codesniffer-check",
            "@test"
        ]
    }
}
```

### Sniffing code in PHPStorm

See [PHP Code Sniffer in PhpStorm](https://confluence.jetbrains.com/display/PhpStorm/PHP+Code+Sniffer+in+PhpStorm) on how to set up CodeSniffer in PHPStorm.
