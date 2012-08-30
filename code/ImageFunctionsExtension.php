<?php
class ImageFunctionsExtension extends DataExtension {
	
	public function RatioCrop($width, $height) {
		$image = $this->owner->getFormattedImage('SetRatioSize', $width, $height);
		$image = $this->owner->getFormattedImage('CroppedImage', $width, $height);
		return $image;
	}
}
