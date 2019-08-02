# Unit Converter

Unit Converter is a PHP library that makes unit converting a fairly simple an intuitive process.

Project was forked from the skyoah/unit-converter library.

## Table of Contents

1. [Installation](#installation)
2. [Basic Usage](#basic-usage)
3. [Support](#support)
4. [Configuration](#configuration)
6. [License](#license)

___
## Installation
```bash
$ composer require konetchy/unit-converter
```

## Basic Usage
### Namespacing
The Unit Converter library is under ```Konetchy\Converter``` namespace.

Once you have installed the Unit Converter library, converting from one unit of measurement to another is really simple.

First, create a new instance of the desired type and import the related class.
The instance needs to accept two parameters -  1) a boolean for the quantity, and 2) a string for the unit of measurement.

Next, all you need is to call a ```to()``` method and pass in the parameter for the convertion.

### Example conversion:
```php
use Konetchy\Converter\Mass;

$mass = new Mass(1, 'kg');
echo $mass->to('pounds'); // '2.20462262'
```

Alternatively, you can convert using the unit abbreviation as a parameter:

```php
echo $mass->to('lbs'); // '2.20462262'
```

The ```to()``` method has also an optional parameter tor defining how many decimal units should be displayed for the given convertion.

```php
echo $mass->to('lbs', 2); // '2.20'
```

## Support
Currently, the Unit Converter supports the following types:

* [Mass](#mass-units)
* [Length](#length-units)
* [Pressure](#pressure-units)
* [Area](#area-units) - <em><strong>New</strong></em>


## Configuration
During instantiation or convertion, you have two options for defining the unit to be used.

There is a longform and a short-hand word available for each unit of measure.

For consistency, it is __recommended__ to use lowercase letters, but if you prefer you can use uppercase letters since during instantiation and/or convertion, the unit of measure will be parsed and formatted to lowercase characters.

### Mass units
| long       | short   |
| :--------- | :------ |
|*tonnes*    |     *t* |
|*kilograms* |     *kg*|
|*grams*     |      *g*|
|*milligrams*|     *mg*|
|*pounds*    |    *lbs*|
|*onces*     |     *oz*|

### Length units
| long           | short   |
| :------------- | :------ |
|*kilometers*    |     *km*|
|*meters*        |      *m*|
|*decimeters*    |     *dm*|
|*centimeters*   |     *cm*|
|*millimeters*   |     *mm*|
|*inches*        |     *in*|
|*feet*          |     *ft*|
|*yards*         |     *yd*|
|*miles*         |     *mi*|
|*nautical miles*|    *nmi*|

### Pressure units
| long        | short   |
| :---------- | :------ |
|*bars*       |    *bar*|
|*millibars*  |   *mbar*|
|*kilopascals*|    *kpa*|
|*pascals*    |     *pa*|
|*atmospheres*|    *atm*|

### Area units
| long               | short   |
| :----------------  | :------ |
|*square kilometers* |    *km2*|
|*square meters*     |     *m2*|
|*square centimeters*|    *cm2*|
|*square millimeters*|    *mm2*|
|*square inches*     |    *in2*|
|*square feet*       |    *ft2*|
|*square yards*      |    *yd2*|


## License
Unit Converter is released under the MIT Licence. Read the [license](https://github.com/konetchy/unit-converter/blob/master/LICENSE.md) file for more details.
