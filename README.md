CakePHP Cart Plugin
===================

A CakePHP shopping cart plugin.

The cart plugin is a stand alone cart only plugin, no payment processors are included you'll have to write them or get them from somewhere else.

The shopping cart part of this plugin is finished but needs to be polished. There callbacks for many things in place that give you customization possibilities.

**This is in development** backward compatibility breaking changes are expected!

Requirements
------------

 * CakePHP 2.x
 * Search Plugin https://github.com/cakedc/search

Features
--------

 * Make *any* of your models a buy-able item with just a few steps
 * CartManager - handles the cart, adding and removing items from it
 * Buy items via HTTP POST or GET
 * Saves the cart to session
 * Saves the cart to a cookie to make it persistent if not logged in
 * Saves the cart to DB if user is logged
 * Most, if not all steps are customizable by Events
 * Allow/deny anonymous checkouts

Documentation
-------------

For documentation, as well as tutorials, see the [Docs](Docs/Home.md) directory of this repository.

Support
-------

For bugs and feature requests, please use the [issues](https://github.com/burzum/cakephp-cart-plugin/issues) section of this repository.

Contributing
------------

To contribute to this plugin please follow a few basic rules.

* Pull requests **must** be send to the ```develop``` branch.
* Contributions **must** follow the [CakePHP coding standard](http://book.cakephp.org/2.0/en/contributing/cakephp-coding-conventions.html).
* [Unit tests](http://book.cakephp.org/2.0/en/development/testing.html) **are required**.

License
-------

Copyright 2012 - 2014, Florian Krämer

Licensed under The MIT License
Redistributions of files must retain the above copyright notice.