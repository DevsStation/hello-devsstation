# hello-devsstation

A hello world package for DevsStation.

## Installation

You can install the package via composer:

```
composer require devsstation/hello-devsstation
```

## Usage

```php
use Devsstation\HelloDevsstation\HelloDevsstation;

// Call as instance method
$hello = new HelloDevsstation();
echo $hello->sayHello(); // Output: Hello, DevsStation!
echo $hello->sayHello('SK Paul'); // Output: Hello, SK Paul!

// Call as static method
$message = HelloDevsstation::sayHello($name);
echo $message

```

## Testing

```
composer test
```

## Code Quality

This package includes automated code style checking and fixing tools:

### Code Style Commands

```bash
# Check code style (PHP CodeSniffer)
composer cs-check

# Fix code style issues automatically (PHP CodeSniffer)
composer cs-fix

# Check code style (PHP CS Fixer)
composer style-check

# Fix code style issues automatically (PHP CS Fixer)
composer style-fix

# Run all quality checks (tests + code style)
composer quality
```

### Code Coverage

```bash
# Generate test coverage report
composer test-coverage
```

## License

The MIT License (MIT). See [LICENSE](LICENSE) for more information.

## Repositories

Add a local path repository to your main project's composer.json:

```json
"repositories": [
  {
    "type": "path",
    "url": "./hello-devsstation"
  }
]
```

### About the Error

```
Could not find a matching version of package devsstation/hello-devsstation. Check the package spelling, your version constraint and that the package is available in a stability which matches your minimum-stability (stable).
```

#### Why this happens:

- Composer cannot find your package on Packagist or any repository it knows about.
- This is expected if your package is local and not published.

#### How to use your local package in Laravel (or any Composer project):

1. **Add a local path repository to your main project's `composer.json`:**

   ```json
   "repositories": [
     {
       "type": "path",
       "url": "./hello-devsstation"
     }
   ]
   ```
2. **Require your package with `--dev` and `@dev` version:**

   ```sh
   composer require devsstation/hello-devsstation:@dev --dev
   ```
3. **Set `"minimum-stability": "dev"` and `"prefer-stable": true`** in your main project's `composer.json` if not already set.

---
