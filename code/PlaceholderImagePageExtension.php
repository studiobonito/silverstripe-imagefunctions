<?php

/**
 * Description of ImagePageExtension.
 *
 * @author Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright (c) 2012, Studio Bonito Ltd.
 * @version 1.0
 */
class PlaceholderImagePageExtension extends DataExtension
{

    /**
     * Return a place holder image of a certain size.
     *
     * @param int $width
     * @param int $height
     * @return Image | string
     */
    public function PlaceholderImage($width = null, $height = null)
    {
        $image = $this->getPlaceholderImageRecursive($this->owner);

        if(!isset($image)) {

            $config = SiteConfig::current_site_config();

            $image = $config->PlaceholderImage();

        }

        if(isset($image) && $image->exists()) {

            if($image->hasMethod('RatioCrop') && ($width) && ($height)) {

                return $image->RatioCrop($width, $height);

            }

            return $image;

        }

        $width = $width ?: 690;
        $height = $height ?: 230;

        return "<img src=\"http://placehold.it/{$width}x{$height}\" width=\"{$width}\" height=\"{$height}\" alt=\"\" />";
    }

    public function PlaceholderImageURL($width = null, $height = null)
    {
        $image = $this->getPlaceholderImageRecursive($this->owner);

        if(!isset($image)) {

            $config = SiteConfig::current_site_config();

            $image = $config->PlaceholderImage();

        }

        if(isset($image) && $image->exists()) {

            if($image->hasMethod('RatioCrop') && ($width) && ($height)) {

                return $image->RatioCrop($width, $height).URL;

            }

            return $image.URL;

        }

        $width = $width ?: 690;
        $height = $height ?: 230;

        return "http://placehold.it/{$width}x{$height}";
    }

    /**
     * Recursivly search for a PlaceholderImage.
     *
     * @param DataObject $object
     * @return Image | null
     */
    protected function getPlaceholderImageRecursive(DataObject $object)
    {
        if($object->has_one('PlaceholderImage')) {

            $image = $object->getComponent('PlaceholderImage');

            if($image->exists()) {

                return $image;

            }

        }

        $parentObject = $object->hasMethod('Parent') ? $object->Parent() : null;

        return isset($parentObject) && $parentObject->exists() ? $this->getPlaceholderImageRecursive($parentObject) : null;
    }

}