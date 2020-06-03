# An opinionated custom coding standard

## How to use

```json
"test:code": "vendor/bin/php-cs-fixer fix --dry-run --diff",
"test:composer": "@composer validate --no-check-all --strict",
"test:phpunit": "vendor/bin/phpunit",
"fix:code": "vendor/bin/php-cs-fixer fix",
"test": [
    "@test:composer",
    "@test:code",
    "@test:phpunit"
],
"fix": [
    "@fix:code"
]
```
