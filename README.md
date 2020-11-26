# TYPO3 Extension `statictagcloud`

![Build Status](https://github.com/jweiland-net/statictagcloud/workflows/CI/badge.svg)

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
