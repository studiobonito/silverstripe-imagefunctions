<?php
class ImageFunctionsDecorator extends DataObjectDecorator {
	
	public function RatioCrop($width, $height) {
		$image = $this->owner->getFormattedImage('SetRatioSize', $width, $height);
		$image = $this->owner->getFormattedImage('CroppedImage', $width, $height);
		return $image;
	}
}