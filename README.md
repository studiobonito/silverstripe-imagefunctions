# Image Functions Module

## Overview

Image Functions Module adds more image functions to the Image object. Specifically it provides a function that resizes then crops the image, which we thinks gives the best results when dealing with user uploaded images.

## Requirements

SilverStripe 3.0 or newer.

## Installation Instructions

Copy the 'imagefunctions' folder to your the root of your SilverStripe installation.

## Usage Overview

	<% with Image %>
		$RatioCrop(200,300)
	<% end_with %>
