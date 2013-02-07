<?php

Object::add_extension('Image', 'ImageFunctionsExtension');

Object::add_extension('Page', 'PlaceholderImagePageExtension');
Object::add_extension('SiteConfig', 'PlaceholderImageSiteConfigExtension');

GD::set_default_quality(100);