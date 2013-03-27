<?php

Image::add_extension('ImageFunctionsExtension');

Page::add_extension('PlaceholderImagePageExtension');
SiteConfig::add_extension('PlaceholderImageSiteConfigExtension');

GD::set_default_quality(100);