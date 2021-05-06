# DDEV powered Open Social Installation

This is a Open Social installation pre-configured for use with DDEV.

## Setup instructions

### Step #1: DDEV environment setup

**This is a one time setup - skip this if you already have a working DDEV environment.**

Follow [DDEV instructions](https://ddev.readthedocs.io/en/stable/)

### Step #2: Project setup

1. Clone this repo into your Projects directory

    ```
    git clone https://github.com/nkoporec/social-ddev social-ddev
    cd social-ddev
    ```

2. Initialize the site

 2.1. Initialize the site without demo content

    This will initialize local settings and install the site via drush

    ```
    ddev init
    ```

 2.1. Initialize the site with demo content

    This will initialize local settings and install the site via drush with demo content

    ```
    ddev init demo
    ```

3. Point your browser to

    ```
    http://open-social.ddev.site
    ```

The default login is admin/admin

## Running code checks

 This repository includes `phpcs` and `phpstan` preconfigured.

 1. Running phpcs for the entire open-social profile

    ```
    ddev phpcs
    ```

 2. Running phpcs for a specific file/folder

    ```
    ddev phpcs path_to_file_or_folder
    ```

 3. Running phpstan for the entire open-social profile

    ```
    ddev phpstan
    ```

 4. Running phpstan for a specific file/folder

    ```
    ddev phpstan path_to_file_or_folder
    ```
