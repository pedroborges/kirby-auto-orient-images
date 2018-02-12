# Kirby Auto-Orient Images [![Release](https://img.shields.io/github/release/pedroborges/kirby-auto-orient-images.svg)](https://github.com/pedroborges/kirby-auto-orient-images/releases) [![Issues](https://img.shields.io/github/issues/pedroborges/kirby-auto-orient-images.svg)](https://github.com/pedroborges/kirby-auto-orient-images/issues)

Automatically rotates JPEG images based on EXIF orientation flag.

## Usage
[Images containing EXIF orientation flag](https://github.com/recurser/exif-orientation-examples) uploaded to Kirby Panel are shown with the wrong orientation, which is very common with photos taken from iPhones.

Once the plugin is installed, new JPEG images uploaded via Kirby Panel will be automatically rotated based on their EXIF orientation flag.

If you need to disable this feature in any environment, use the `auto-orient-images` option:

```php
c::set('auto-orient-images', false);
```

## Installation

### Requirements
- Kirby 2.1.2+
- PHP 5.3+

> This plugin doesn't require the Imagick PHP extension.

### Download
[Download the files](https://github.com/pedroborges/kirby-auto-orient-images/archive/master.zip) and place them inside `site/plugins/auto-orient-images`.

### Kirby CLI
Kirby's [command line interface](https://github.com/getkirby/cli) makes installing the Auto-Orient Images plugin a breeze:

    $ kirby plugin:install pedroborges/kirby-auto-orient-images

Updating couldn't be any easier, simply run:

    $ kirby plugin:update pedroborges/kirby-auto-orient-images

### Git Submodule
You can add the Auto-Orient Images plugin as a Git submodule.

<details>
    <summary><strong>Show Git Submodule instructions</strong> 👁</summary><p>

    $ cd your/project/root
    $ git submodule add https://github.com/pedroborges/kirby-auto-orient-images.git site/plugins/auto-orient-images
    $ git submodule update --init --recursive
    $ git commit -am "Add Auto-Orient Images plugin"

Updating is as easy as running a few commands.

    $ cd your/project/root
    $ git submodule foreach git checkout master
    $ git submodule foreach git pull
    $ git commit -am "Update submodules"
    $ git submodule update --init --recursive

</p></details>

## Change Log
All notable changes to this project will be documented at: <https://github.com/pedroborges/kirby-auto-orient-images/blob/master/changelog.md>

## License
Auto-Orient Images plugin is open-sourced software licensed under the [MIT license](http://www.opensource.org/licenses/mit-license.php).

Copyright © 2018 Pedro Borges <oi@pedroborg.es>
