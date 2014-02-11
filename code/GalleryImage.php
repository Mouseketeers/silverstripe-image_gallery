<?php
class GalleryImage extends DataObject {
    static $db = array ();
    static $has_one = array (
        'Image' => 'Image',
        'ImageGalleryPage' => 'ImageGalleryPage'
    );
    public function getCMSFields_forPopup() {
        return new FieldSet(
            new ImageField('Image')
        );
    }
}