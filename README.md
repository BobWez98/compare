# Rapidez Compare

## Installation

```
composer require rapidez/compare
```

## Compared products

The compared products are available in the compare variable imported from the `useCompare.js` file.
```js
import { compare } from './../stores/useCompare.js'
```

## Adding products
To add a product to the compare list you can simply import the add function and execute it with product id's.
```js
import { addProductToCompare } from './../stores/useCompare.js'

addProductToCompare(['1', '2']);
```

If you want a button on the product detail page, you can simply import this partial:
```
@include('rapidez-compare::product.partials.compare')
```

If you want checkbox on a category page, you can simply add this import in the item tile:
```
@include('rapidez-compare::listing.partials.checkbox')
```

## Showing a user their compare list
Within your vue app container you can show the user they have a compare list. This will show a button with a count. Clicking on this will result in the user redirecting to the compare page.
```
@include('rapidez-compare::partials.button')
```


## Compare page
The compare page show's a list of the comparable attributes of the products that are added. The url of the compare page can be changed in the config.


## Views

```
php artisan vendor:publish --provider="Rapidez\Compare\RapidezCompareServiceProvider"
```

## Note
Currently this module does not support:
* Resizing the images
* Displaying any pricing of the products
* Linking a compare list to a customer

## License

GNU General Public License v3. Please see [License File](LICENSE) for more information.
