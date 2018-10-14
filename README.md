[![Latest Stable Version](https://poser.pugx.org/eberkund/ranger/v/stable)](https://packagist.org/packages/eberkund/ranger)
[![Total Downloads](https://poser.pugx.org/eberkund/ranger/downloads)](https://packagist.org/packages/eberkund/ranger)
[![License](https://poser.pugx.org/eberkund/ranger/license)](https://packagist.org/packages/eberkund/ranger)
[![Build Status](https://travis-ci.org/eberkund/ranger.svg?branch=master)](https://travis-ci.org/eberkund/ranger)
[![Coverage](https://codecov.io/gh/eberkund/ranger/branch/master/graph/badge.svg)](https://codecov.io/gh/eberkund/ranger)

# Ranger

Easily expand text to an array of integers.

## Installation

```
composer require eberkund/ranger
```

## Usage

Pass the `get_range` a string and expect back an array of integers.

```
get_range('1-3,8');

// [1, 2, 3, 8]
```

## Testing

Run the tests with,

```
vendor/bin/phpunit
```
