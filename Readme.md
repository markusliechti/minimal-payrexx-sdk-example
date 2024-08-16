# Minimal Example of Payrexx SDK (PHP)

# Prerequisits

- PHP needs to be installed in the environment
- Composer needs to be installed in the environment 

# Installation of the SDK

1. Install PHP libraries via composer

```shell
composer install
```

2. Insert the correct values for **$instanceName** and **$secret** in the **index.php**. 

3. Run the script via CLI.
```shell
php index.php
```

4. API response should look something like
```html
<pre>array(23) {
  [0]=>
  object(Payrexx\Models\Response\PaymentMethod)#7 (9) {
    ["uuid":protected]=>
    NULL
    ["id":protected]=>
    string(6) "alipay"
    ["filterCurrency":protected]=>
    NULL
    ["filterPaymentType":protected]=>
    NULL
    ["filterPsp":protected]=>
    NULL
    ["name":protected]=>
    ....


```