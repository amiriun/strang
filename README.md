# PHP string helpers

Strang is the PHP package include string helpers

### Requirements:
- PHP >= 5.6


### INSTALATION:

```composer require amiriun/strang```

### HELPERS:

Create random string with specific length and characters:
```php
use Amiriun;

$myRandomString = Strang::make()->random(10,'abcdefg');

// return : 