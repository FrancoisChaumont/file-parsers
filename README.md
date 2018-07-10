# CSV - Read lines

![GitHub release](https://img.shields.io/github/release/FrancoisChaumont/file-parsers.svg)
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/FrancoisChaumont/file-parsers/issues)
[![GitHub issues](https://img.shields.io/github/issues/FrancoisChaumont/file-parsers.svg)](https://github.com/FrancoisChaumont/file-parsers/issues)
[![GitHub stars](https://img.shields.io/github/stars/FrancoisChaumont/file-parsers.svg)](https://github.com/FrancoisChaumont/file-parsers/stargazers)
![Github All Releases](https://img.shields.io/github/downloads/FrancoisChaumont/file-parsers/total.svg)

PHP library to parse different types of files:
- CSV
- XML

## Getting started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Requirements
PHP 7.1+

### Installation
Install this package with composer by simply adding the following to your composer.json file:  
```
"repositories": [
    {
        "url": "https://github.com/FrancoisChaumont/file-parsers.git",
        "type": "git"
    }
]
```
and running the following command:  
```
composer require francoischaumont/file-parsers
```

## Testing
Under the folder named *tests* you will find a demo csv file and a test script ready to use.  
This demo CSV file is provided by [SpatialKey](https://support.spatialkey.com/spatialkey-sample-csv-data/)  
This simple test open a demo CSV file, read every lines and display them.

No tests yet for XML.

## Built with
* Visual Studio Code

## Authors
* **Francois Chaumont** - *Initial work* - [FrancoisChaumont](https://github.com/FrancoisChaumont)

See also the list of [contributors](https://github.com/FrancoisChaumont/file-parsers/graphs/contributors) who particpated in this project.

## License
This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

