# Brackets

A small project for working with brackets.

## Installation

Run the following command from you terminal:


 ```bash
 composer require "koind/brackets: ^1.0"
 ```

or add this to require section in your composer.json file:

 ```
 "koind/brackets": "^1.0"
 ```

then run ```composer update```


## Usage

The library accepts a string of the form: 

```(()()()()))((((()()()))(()()()(((()))))))``` 

And return ```true``` if the string is correct - all open parentheses are correctly opened and closed, or ```false``` otherwise.

```php
<?php 

require __DIR__ . '/vendor/autoload.php';

$bracket = new \Koind\Brackets();
$result = $bracket->checkString('(()()()()()()(((()()()()()()((()((((()))))))()()))))');
var_dump($result);

```

## Allowable characters
```
" , (), \t, \r, \n"
```

Attention! All other characters are not allowed.

If you try to send an invalid character, an exception of the type will be thrown: ```InvalidArgumentException```

## Tests

Run the following command from you terminal:

```
phpunit
```