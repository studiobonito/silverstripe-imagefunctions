<?php

/**
 * Description of PlaceholderImagePerPageExtension.
 *
 * @author Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright (c) 2012, Studio Bonito Ltd.
 * @version 1.0
 */
class PlaceholderImagePerPageExtension extends DataExtension
{

    /**
     * List of one-to-one relationships. {@link DataObject::$has_one}
     *
     * @access public
     * @static
     * @var array
     */
    public static $has_one = array(
        'PlaceholderImage' => 'Image'
    );

    /**
     * Returns a FieldList with which to create the editing form. {@link SiteTree::getCMSFields()}
     *
     * @return FieldList
     */
    public function updateCMSFields(FieldList $fields)
    {
        $placeholderImageUploadField = new UploadField('PlaceholderImage', 'Placeholder Image');
        $placeholderImageUploadField->allowedExtensions = array('jpg', 'gif', 'png');

        $fields->addFieldToTab('Root.Images', $placeholderImageUploadField);

        return $fields;
    }

}