# Imperivm Romanvm Website

![Build Status](https://github.com/HHOppidumProject/ir-website/actions/workflows/ci.yml/badge.svg?branch=master)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%207-brightgreen.svg?style=flat-square)](https://github.com/phpstan/phpstan)

---
## Link to the website

[Imperivm Romanvm](https://www.imperivm-romanvm.com/)

---

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Testing

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.

You can now either use your machine's webserver to view the default home page, or start up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Configuration

Read and edit the environment specific `config/app_local.php` and setup the 
`'Datasources'` and any other configuration relevant for your application.
Other environment agnostic settings can be changed in `config/app.php`.

## Layout

The website for Imperivm Romanvm uses a layout from [HTML5 UP](https://html5up.net) called Escape Velocity. This has been modified and changed to suit our needs.

The Imperivm Romanvm website also uses a framework called [Bulma](https://bulma.io). Overrides and changes to for this are found in [styles.css](webroot/css/style.css).

For telephone input we are using [International Telephone Input](https://github.com/jackocnr/intl-tel-input).

We are also using bootstrap and jquery for various aspects of the website.

## Contributing

Unless you are a member of the Imperivm Romanvm and have been granted access to the organisation's github and this repo then all contributions have to be made through a fork with a pull request.

Contributions, however, are welcomed and appreciated greatly!

## WYSIWYG Editor

The Imperivm Romanvm are working on a WYSIWYG editor for the website for Censors, Aediles, Senatores and Consules to edit with. However this is still in the works.

To see progress on this editor please visit the branch `feature/WYSIWYG` and contribute if you can.

The editor is using the [WYSIWYG editor from Froala](https://froala.com/wysiwyg-editor/) at the base.

## Dockerisation

In the future the website will be contained within a docker container and hosted on a Kubernetes or OpenShift cluster.

At the moment budget does not allow such luxuries and it is required that the website is hosted as is seen here.

---

## TODO

| Done      | Feature                                               |
| :---:     | ---                                                   |
| x         | Remember Me                                           |
| x         | WYSIWYG Editor                                        |
| x         | Add/Remove Cives on website                           |
| x         | Add/Remove States/Counties from Provinciae on website |
| x         | Add/Remove \[Prae/Cog\]Nomina on website              |
| x         | Add/Remove Civil Service Record from cives on website |
| x         | Add/Remove Civil Service acts on website              |
| x         | Add/Remove Provinciae on website                      |
| x         | Add/Remove Countries on website                       |
| x         | Add/Remove States from countries on Website           |
| x         | Dockerisation                                         |
