# TYPO3 Extension `statictagcloud`

[![Packagist][packagist-logo-stable]][extension-packagist-url]
[![Latest Stable Version][extension-build-shield]][extension-ter-url]
[![Total Downloads][extension-downloads-badge]][extension-packagist-url]
[![Monthly Downloads][extension-monthly-downloads]][extension-packagist-url]
[![TYPO3 13.4][TYPO3-shield]][TYPO3-13-url]

![Build Status](https://github.com/jweiland-net/statictagcloud/actions/workflows/ci.yml/badge.svg)

With `statictagcloud` you can create tags and assign them a priority.
The higher the priority the bigger is the font for the tag in cloud.

## 1 Features

* Create and prioritize tags

## 2 Usage

### 2.1 Installation

#### Installation using Composer

The recommended way to install the extension is using Composer.

Run the following command within your Composer based TYPO3 project:

```
composer require jweiland/statictagcloud
```

#### Installation as extension from TYPO3 Extension Repository (TER)

Download and install `statictagcloud` with the extension manager module.

### 2.2 Minimal setup

1) Include the static TypoScript of the extension.
2) Create tag records on a sysfolder.
3) Add statictagcloud plugin on a page and select at least the sysfolder as startingpoint.

## 3 Support

Free Support is available via [Github Issue Tracker](https://github.com/jweiland-net/statictagcloud/issues).

For commercial support, please contact us at [support@jweiland.net](support@jweiland.net).

<!-- MARKDOWN LINKS & IMAGES -->

[extension-build-shield]: https://poser.pugx.org/jweiland/statictagcloud/v/stable.svg?style=for-the-badge

[extension-downloads-badge]: https://poser.pugx.org/jweiland/statictagcloud/d/total.svg?style=for-the-badge

[extension-monthly-downloads]: https://poser.pugx.org/jweiland/statictagcloud/d/monthly?style=for-the-badge

[extension-ter-url]: https://extensions.typo3.org/extension/statictagcloud/

[extension-packagist-url]: https://packagist.org/packages/jweiland/statictagcloud/

[packagist-logo-stable]: https://img.shields.io/badge/--grey.svg?style=for-the-badge&logo=packagist&logoColor=white

[TYPO3-13-url]: https://get.typo3.org/version/13

[TYPO3-shield]: https://img.shields.io/badge/TYPO3-13.4-green.svg?style=for-the-badge&logo=typo3
