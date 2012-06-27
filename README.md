# Wordpress install

## Getting it

    git clone --recursive git://github.com/b00y0h/wordpress.git
    cd wordpress

## Configure for you

copy `dev_settings_sample.php` to `dev_settings.php` and edit with your db settings.

    cp dev_settings_sample.php dev_settings.php
    
## Updating Wordpress

    cd wordpress-core
    git fetch --tags
    git checkout 3.4

Replace 3.4 with the correct version number.

Now commit the changes subrepository version to your main project:

    cd ..
    git commit -m "Update Wordpress to version 3.4"