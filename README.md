# DDEV powered Open Social Installation

This is an [Open Social](https://github.com/goalgorilla/open_social) installation pre-configured for use with [DDEV](https://github.com/drud/ddev).

## Setup instructions

### Step #1: DDEV environment setup

**This is a one time setup - skip this if you already have a working DDEV environment.**

Follow [DDEV instructions](https://ddev.readthedocs.io/en/stable/)


### Step #2: Project setup

1. Clone this repo into your Projects directory

    ```
    git clone https://github.com/nkoporec/social-ddev open-social
    cd open-social
    ```

2. Initialize the site
    1. Initialize the site without demo content

        ```
        ddev init
        ```

    2. Initialize the site with demo content

        ```
        ddev init demo
        ```


   _This will install composer dependencies and install the site via drush._


3. Point your browser to

    ```
    http://open-social.ddev.site
    ```

The default login is admin/admin

<br>

## Tools

### Running code checks

 This repository includes [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) and [Phpstan](https://github.com/phpstan/phpstan).

 ##### Run PHP CodeSniffer for the entire Open Social distribution

    ddev phpcs



 ##### Run PHP CodeSniffer for a specific file/folder


    ddev phpcs ./path_to_file_or_folder


 ##### Run Phpstan for the entire Open Social distribution


    ddev phpstan


 ##### Run Phpstan for a specific file/folder


    ddev phpstan ./path_to_file_or_folder


 ##### Run Rector for the entire Open Social distribution


    ddev rector


 ##### Run Rector for a specific file/folder


    ddev rector ./path_to_file_or_folder


<br>

### Xdebug

For performance reasons Xdebug is disabled at start up, when you need to use it, simply run:

```
ddev xdebug on
```

When you don't need it anymore, it's recommended to turn it off by running:

```
ddev xdebug off
```

See more at [PHP Step Debugging with DDEV](https://ddev.readthedocs.io/en/stable/users/step-debugging/)


<br>

### Tests

   ##### Run PhpUnit tests for entire Open Social distribution


    ddev phpunit


   ##### Run a specific PhpUnit test


    ddev phpunit ./path_to_file


   ##### Run Behat tests


    ddev behat


See more at [PhpUnit](https://phpunit.de/) and [Behat](https://docs.behat.org/en/latest/).

<br>

For more info about other tools such as drush and how to use DDEV, see [DDEV-Local Documentation](https://ddev.readthedocs.io/en/stable/).
