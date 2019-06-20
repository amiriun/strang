# PHP string helpers

Strang is the PHP package include string helpers

### Requirements:
- PHP >= 5.6


### INSTALATION:

```composer require amiriun/strang```

### HELPERS:

Create random string with specific length and characters:
```php
use Amiriun\Strang;

$myRandomString = Strang::make()->random(80,'abcdefg');

// return : HakzxvBsyBxyQkPmuvjtGxtHRTMDhOXPeR9CGPMnTtt3FDFiLXSE2PCsR78tl7hIwVD5HUdPgaIe03qB
