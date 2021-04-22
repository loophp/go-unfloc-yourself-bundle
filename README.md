[![Latest Stable Version][latest stable version]][1]
 [![GitHub stars][github stars]][1]
 [![Total Downloads][total downloads]][1]
 [![GitHub Workflow Status][github workflow status]][2]
 [![Scrutinizer code quality][code quality]][3]
 [![Type Coverage][type coverage]][4]
 [![Code Coverage][code coverage]][3]
 [![License][license]][1]
 [![Donate!][donate github]][5]
 [![Donate!][donate paypal]][6]

# Go Unfloc Yourself

## Description

A bundle for Symfony 5 that adds a `Permissions-Policy` header in all the
responses to prevent the use of new Google's "*Federated Learning of Cohorts*"
tracking method, namely [FLoC][46].

Basically, it adds a specific header to every response to disable Google's usage
of your site in it's FLoC tracking method.

For better performance, it is advised to edit the `.htaccess` or alter the
webserver configuration.

## Features

If an existing `Permissions-Policy` header is found, the bundle will not change
that value.

The added headers is: `Permissions-Policy: interest-cohort=()`

## Installation

```composer require loophp/go-unfloc-yourself-bundle```

## Usage

Once installed, there is nothing else to do.

## Interesting links

- [What is Federated Learning of Cohorts (FLoC)?][47]
- [Federated Learning of Cohorts (FLoC)][48]
- [Google’s FLoC Is a Terrible Idea][49]
- [Block FLoC With Duckduckgo][50]
- [Am I FLoCed?][51]
- [Pi-Hole - Network-wide Ad Blocking][52]

## Code quality, tests and benchmarks

Every time changes are introduced into the library, [Github][2] run the
tests.

The library has tests written with [PHPSpec][35].
Feel free to check them out in the `spec` directory. Run `composer phpspec` to
trigger the tests.

Before each commit some inspections are executed with [GrumPHP][36], run
`composer grumphp` to check manually.

The quality of the tests is tested with [Infection][37] a PHP Mutation testing
framework,  run `composer infection` to try it.

Static analyzers are also controlling the code. [PHPStan][38] and
[PSalm][39] are enabled to their maximum level.

## Contributing

Feel free to contribute by sending Github pull requests. I'm quite reactive :-)

If you can't contribute to the code, you can also sponsor me on [Github][5] or
[Paypal][6].

## Changelog

See [CHANGELOG.md][43] for a changelog based on [git commits][44].

For more detailed changelogs, please check [the release changelogs][45].

[1]: https://packagist.org/packages/loophp/go-unfloc-yourself-bundle
[latest stable version]: https://img.shields.io/packagist/v/loophp/go-unfloc-yourself-bundle.svg?style=flat-square
[github stars]: https://img.shields.io/github/stars/loophp/go-unfloc-yourself-bundle.svg?style=flat-square
[total downloads]: https://img.shields.io/packagist/dt/loophp/go-unfloc-yourself-bundle.svg?style=flat-square
[github workflow status]: https://img.shields.io/github/workflow/status/loophp/go-unfloc-yourself-bundle/Unit%20tests?style=flat-square
[code quality]: https://img.shields.io/scrutinizer/quality/g/loophp/go-unfloc-yourself-bundle/master.svg?style=flat-square
[3]: https://scrutinizer-ci.com/g/loophp/go-unfloc-yourself-bundle/?branch=master
[type coverage]: https://img.shields.io/badge/dynamic/json?style=flat-square&color=color&label=Type%20coverage&query=message&url=https%3A%2F%2Fshepherd.dev%2Fgithub%2Floophp%2Fgo-unfloc-yourself-bundle%2Fcoverage
[4]: https://shepherd.dev/github/loophp/go-unfloc-yourself-bundle
[code coverage]: https://img.shields.io/scrutinizer/coverage/g/loophp/go-unfloc-yourself-bundle/master.svg?style=flat-square
[license]: https://img.shields.io/packagist/l/loophp/go-unfloc-yourself-bundle.svg?style=flat-square
[donate github]: https://img.shields.io/badge/Sponsor-Github-brightgreen.svg?style=flat-square
[donate paypal]: https://img.shields.io/badge/Sponsor-Paypal-brightgreen.svg?style=flat-square
[34]: https://github.com/loophp/go-unfloc-yourself-bundle/issues
[2]: https://github.com/loophp/go-unfloc-yourself-bundle/actions
[35]: http://www.phpspec.net/
[36]: https://github.com/phpro/grumphp
[37]: https://github.com/infection/infection
[38]: https://github.com/phpstan/phpstan
[39]: https://github.com/vimeo/psalm
[5]: https://github.com/sponsors/drupol
[6]: https://www.paypal.me/drupol
[43]: https://github.com/loophp/go-unfloc-yourself-bundle/blob/master/CHANGELOG.md
[44]: https://github.com/loophp/go-unfloc-yourself-bundle/commits/master
[45]: https://github.com/loophp/go-unfloc-yourself-bundle/releases
[46]: https://www.eff.org/deeplinks/2021/03/googles-floc-terrible-idea
[47]: https://web.dev/floc/
[48]: https://github.com/WICG/floc
[49]: https://www.eff.org/deeplinks/2021/03/googles-floc-terrible-idea
[50]: https://spreadprivacy.com/block-floc-with-duckduckgo/
[51]: https://www.eff.org/deeplinks/2021/04/am-i-floced-launch
[52]: https://pi-hole.net/
