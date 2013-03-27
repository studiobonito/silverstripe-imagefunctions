# Image Functions Module

## Overview

Image Functions Module primarily adds more image functions to the Image object but it also adds some useful SiteConfig settings.

## Requirements

SilverStripe 3.1 or newer.

## Installation Instructions

Copy the 'imagefunctions' folder to your the root of your SilverStripe installation.

## Functions

### RationCrop

RatioCrop is an Image function that resizes then crops the image, which we thinks gives the best results when dealing with user uploaded images.

#### Usage Overview

	<% with Image %>
		$RatioCrop(200,300)
	<% end_with %>

## Placeholder Images

This module also provides the facility to set placeholder images via three DataExtensions (PlaceholderImagePageExtension, PlaceholderImagePerPageExtension, PlaceholderImageSiteConfigExtension).

### Usage Overview

	$PlaceholderImage

### PlaceholderImageSiteConfigExtension (Required)

This is the main extension which adds a PlaceholderImage to the SiteConfig. This extension must be configured in order to use either of the others.

### PlaceholderImagePageExtension (Required)

This extension adds methods to access the PlaceholderImage. By default this extension is added to the Page DataObject.

### PlaceholderImagePerPageExtension (Optional)

This extension adds a PlaceholderImage to any DataObject. It is designed to be added to DataObjects that act as parents to other DataObjects, thus allowing for localised inheritance of PlaceholderImages.
