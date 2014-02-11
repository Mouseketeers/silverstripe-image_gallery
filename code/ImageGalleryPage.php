<?php
class ImageGalleryPage extends Page {
	public static $db = array();
	static $has_many = array (
		'Images' => 'GalleryImage'
	);
	private static $default_folder;
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$manager = new ImageDataObjectManager(
			$this,
			'Images',
			'GalleryImage',
			'Image',
			array(),
			'getCMSFields_forPopup'
		);
		$manager->copyOnImport = false;
		if(self::$default_folder) $manager->setUploadFolder(self::$default_folder);
		$fields->addFieldToTab("Root.Content.ImageGallery", $manager);
		return $fields;
	}
	function SetDefaultFolder($folder_name) {
		self::$default_folder = $folder_name;
	}
}
class ImageGalleryPage_Controller extends Page_Controller {}