<?php
class ImageFunctionsExtension extends DataExtension
{

    /**
     * Resize the image by preserving aspect ratio, keeping the image inside the
     * $width and $height then cropping to the exact $width and $height.
     * Use in templates with $RatioCrop.
     *
     * @param int $width The width to size to
     * @param int $height The width to size to
     *
     * @return Image
     */
    public function RatioCrop($width, $height)
    {
        return $this->owner->isSize($width, $height)
            ? $this->owner
            : $this->owner->getFormattedImage('RatioCrop', $width, $height);
    }

    /**
     * Resize the image by preserving aspect ratio, keeping the image inside the
     * $width and $height then cropping to the exact $width and $height.
     *
     * @param Image_Backend $backend
     * @param int           $width The width to size to
     * @param int           $height The width to size to
     *
     * @return Image_Backend
     */
    public function generateRatioCrop(Image_Backend $backend, $width, $height)
    {
        $this->owner->generateFormattedImage('SetRatioSize', $width, $height);
        return $backend->croppedResize($width, $height);
    }
}
