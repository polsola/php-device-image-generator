<?php
namespace Classes;

use PHPImageWorkshop\ImageWorkshop;

class Template {
	public static function getDevices($withCategories = false) {

		$ios_product_variations = array('' => 'Space Gray', '--silver' => 'Silver', '--gold' => 'Gold');
		$samsung_product_variations = array('' => 'Black', '--silver' => 'Silver', '--gold' => 'Gold');
		$google_product_variations = array('' => 'Just Black', '--white' => 'Clearly White', '--blue' => 'Kinda Blue');
		//$ios_product_variations_name = array('', ' Silver', ' Gold');

		$devices = $phones = $tablets = $computers = $watches = array();

		$phones['iphone11'] = array(
			'name' 				=> 'iPhone 11',
			'image' 			=> 'iphone11.png',
			'screen' 			=> array('x' => 50, 'y' => 50, 'width' => 414, 'height' => 896 ),
			'variations' 		=> array(
				'' => 'Space Gray', 
				'--green' => 'Green',
				'--purple' => 'Purple',
				'--yellow' => 'Yellow',
				'--white' => 'White'
			),
			'back' 				=> true,
			'landscape'			=> true
		);

		$phones['iphonex'] = array(
			'name' 				=> 'iPhone X',
			'image' 			=> 'iphonex.png',
			'screen' 			=> array('x' => 47, 'y' => 60, 'width' => 375, 'height' => 812 ),
			'variations' 	=> array('' => 'Space Gray', '--silver' => 'Silver'),
			'back' 				=> true,
			'landscape'		=> true
		);

		$phones['iphone8'] = array(
			'name' 				=> 'iPhone 8',
			'image' 			=> 'iphone8.png',
			'screen' 			=> array('x' => 50, 'y' => 140, 'width' => 375, 'height' => 667 ),
			'variations' 	=> $ios_product_variations,
			'landscape'		=> true
		);

		$phones['iphone8-plus'] = array(
			'name' 				=> 'iPhone 8 Plus',
			'image' 			=> 'iphone8-plus.png',
			'screen' 			=> array('x' => 67, 'y' => 133, 'width' => 414, 'height' => 736 ),
			'variations' 	=> $ios_product_variations,
			'landscape'		=> true
		);

		$phones['iphone-se'] = array(
			'name' 				=> 'iPhone SE',
			'image' 			=> 'iphone-se.png',
			'screen' 			=> array('x' => 50, 'y' => 140, 'width' => 320, 'height' => 568 ),
			'variations' 	=> $ios_product_variations,
			'landscape'		=> true
		);

		$tablets['ipad-air-2'] = array(
							'name' 				=> 'iPad Air 2',
							'screen' 			=> array('x' => 80, 'y' => 140, 'width' => 768, 'height' => 1024 ),
							'variations' 	=> $ios_product_variations,
							'landscape'		=> true
						);

		$tablets['ipadpro'] = array(
							'name' 				=> 'iPad Pro',
							'image' 			=> 'ipadpro.png',
							'screen' 			=> array('x' => 100, 'y' => 175, 'width' => 1024, 'height' => 1366 ),
							'variations' 	=> $ios_product_variations,
							'landscape'		=> true
							);

		$computers['macbook'] = array(
							'name' 				=> 'MacBook',
							'image' 			=> 'macbook.png',
							'screen' 			=> array('x' => 190, 'y' => 64, 'width' => 1152, 'height' => 721 ),
							'variations' 	=> array('' => 'Space Gray', '--gold' => 'Gold')
						);

		$computers['imac'] = array(
							'name' 				=> 'iMac',
							'image' 			=> 'imac.png',
							'screen' 			=> array('x' => 57, 'y' => 77, 'width' => 1280, 'height' => 721 ),
						);

		$phones['samsung-galaxy-s8'] = array(
			'name' 				=> 'Samsung Galaxy S8',
			'image' 			=> 'samsung-galaxy-s8.png',
			'screen' 			=> array('x' => 50, 'y' => 160, 'width' => 720, 'height' => 1480 ),
			'variations'	=> $samsung_product_variations,
			'back' 				=> true,
			'landscape'		=> true
		);

		$phones['samsung-galaxy-s7'] = array(
			'name' 			=> 'Samsung Galaxy S7',
			'image' 		=> 'samsung-galaxy-s7.png',
			'screen' 		=> array('x' => 70, 'y' => 200, 'width' => 720, 'height' => 1280 ),
			'variations'	=> $samsung_product_variations,
			'landscape'		=> true
		);

		$phones['google-pixel-2'] = array(
			'name' 				=> 'Google Pixel 2',
			'image' 			=> 'google-pixel-2.png',
			'screen' 			=> array('x' => 50, 'y' => 170, 'width' => 540, 'height' => 960 ),
			'variations'		=> $google_product_variations,
			'back' 				=> true,
			'landscape'			=> true
		);

		$phones['huawei-p8'] = array(
			'name' 				=> 'Huawei P8',
			'image' 			=> 'huawei-p8.png',
			'screen' 			=> array('x' => 50, 'y' => 160, 'width' => 540, 'height' => 960 ),
			'variations'		=> array('' => 'Black', '--white' => 'White'),
			'landscape'			=> true
		);

		$tablets['nexus9'] = array(
			'name' 				=> 'Nexus 9',
			'image' 			=> 'nexus9.png',
			'screen' 			=> array('x' => 90, 'y' => 150, 'width' => 768, 'height' => 1024 ),
			'landscape'		=> true
		);

		$tablets['microsoft-surface-pro-4'] = array(
			'name' 				=> 'Microsoft Surface Pro 4',
			'image' 			=> 'microsoft-surface-pro-4.png',
			'screen' 			=> array('x' => 120, 'y' => 100, 'width' => 1368, 'height' => 912 )
		);

		$watches['apple-watch-42'] = array(
							'name' 				=> 'Apple Watch 2 42mm',
							'image' 			=> 'apple-watch-42.png',
							'screen' 			=> array('x' => 100, 'y' => 280, 'width' => 312, 'height' => 390 )
						);

		if( $withCategories ) {
			$devices = array(
				'phones' => array(
					'label' => 'Phones',
					'devices' => $phones
				),
				'tablets' => array(
					'label' => 'Tablets',
					'devices' => $tablets
				),
				'computers' => array(
					'label' => 'Computers',
					'devices' => $computers
				),
				'watches' => array(
					'label' => 'Watches',
					'devices' => $watches
				)
			);
		} else {
			$devices = $phones + $tablets + $computers + $watches;
		}



		return $devices;
	}

	public static function getCompositions( $withCategories = false ) {

		$compositions2 = $compositions3 = $compositions4 = array();

		$compositions2['2iphonesx'] = array(
			'name' => '2 iPhones X',
			'information' => array(
				'width' 	=> 702,
				'height'	=> 932
			),
			'layers' => array(
				0 => array(
					'device' 	=> 'iphonex',
					'from'		=> 'LT',
					'pos'		=> array('x' => 0, 'y' => 0)
				),
				1 => array(
					'device' 	=> 'iphonex',
					'from'		=> 'RT',
					'pos'		=> array('x' => 0, 'y' => 0)
				)
			)
		);

		$compositions2['2iphones8'] = array(
			'name' => '2 iPhones 8',
			'information' => array(
				'width' 	=> 700,
				'height'	=> 947
			),
			'layers' => array(
				0 => array(
					'device' 	=> 'iphone8',
					'from'		=> 'LT',
					'pos'		=> array('x' => 0, 'y' => 0)
				),
				1 => array(
					'device' 	=> 'iphone8',
					'from'		=> 'RT',
					'pos'		=> array('x' => 0, 'y' => 0)
				)
			)
		);
		$compositions3['3iphonesx'] = array(
			'name' => '3 iPhones X',
			'information' => array(
				'width' 	=> 920,
				'height'	=> 947
			),
			'layers' => array(
				0 => array(
					'device' 	=> 'iphonex',
					'from'		=> 'LM'
				),
				1 => array(
					'device' 	=> 'iphonex',
					'from'		=> 'MM'
				),
				2 => array(
					'device' 	=> 'iphonex',
					'from'		=> 'RM'
				)
				
			)
		);
		$compositions3['3iphonesxfront'] = array(
			'name' => '3 iPhones X Front',
			'information' => array(
				'width' 	=> 1000,
				'height'	=> 932
			),
			'layers' => array(
				array(
					'device' 	=> 'iphonex',
					'from'		=> 'LM',
					'pos'		=> array('x' => 0, 'y' => 0),
					'resize'	=> 90
				),
				array(
					'device' 	=> 'iphonex',
					'from'		=> 'RM',
					'pos'		=> array('x' => 0, 'y' => 0),
					'resize'	=> 90
				),
				array(
					'device' 	=> 'iphonex',
					'from'		=> 'MT',
					'pos'		=> array('x' => 0, 'y' => 0)
				)
			)
		);
		$compositions3['3iphones8'] = array(
			'name' => '3 iPhones 8',
			'information' => array(
				'width' 	=> 920,
				'height'	=> 947
			),
			'layers' => array(
				0 => array(
					'device' 	=> 'iphone8',
					'from'		=> 'LT',
					'pos'		=> array('x' => 0, 'y' => 0)
				),
				1 => array(
					'device' 	=> 'iphone8',
					'from'		=> 'LT',
					'pos'		=> array('x' => 220, 'y' => 0)
				),
				2 => array(
					'device' 	=> 'iphone8',
					'from'		=> 'RT',
					'pos'		=> array('x' => 0, 'y' => 0)
				)
			)
		);
		$compositions3['3iphones8front'] = array(
			'name' => '3 iPhones 8 Front',
			'information' => array(
				'width' 	=> 920,
				'height'	=> 947
			),
			'layers' => array(
				0 => array(
					'device' 	=> 'iphone8',
					'from'		=> 'LM',
					'resize'	=> 90
				),
				1 => array(
					'device' 	=> 'iphone8',
					'from'		=> 'RM',
					'resize'	=> 90
				),
				2 => array(
					'device' 	=> 'iphone8',
					'from'		=> 'MT',
					'pos'		=> array('x' => 0, 'y' => 0)
				)
			)
		);
		$compositions2['iphoneipad'] = array(
			'name' => 'iPhone 8 + iPad Air',
			'information' => array(
				'width' 	=> 1100,
				'height'	=> 1304
			),
			'layers' => array(
				array(
					'device' 	=> 'ipad-air-2',
					'from'		=> 'RB',
					'pos'		=> array('x' => 0, 'y' => 0)
				),
				array(
					'device' 	=> 'iphone8',
					'from'		=> 'LB',
					'pos'		=> array('x' => 0, 'y' => 0)
				)
			)
		);

		$compositions2['iphoneipadland'] = array(
			'name' => 'iPhone 8 + iPad Air Landscape',
			'information' => array(
				'width' 	=> 1500,
				'height'	=> 1100
			),
			'layers' => array(
				array(
					'device' 	=> 'ipad-air-2',
					'from'		=> 'RB',
					'orientation' => 'landscape'
				),
				array(
					'device' 	=> 'iphone8',
					'from'		=> 'LB',
					'orientation' => 'landscape'
				)
			)
		);

		$compositions2['iphonemacbook'] = array(
			'name' => 'iPhone 8 + MacBook Pro',
			'information' => array(
				'width' 	=> 1532,
				'height'	=> 900
			),
			'layers' => array(
				array(
					'device' 	=> 'macbook',
					'from'		=> 'MM',
					'pos'		=> array('x' => 0, 'y' => 0)
				),
				array(
					'device' 	=> 'iphone8',
					'from'		=> 'LB',
					'pos'		=> array('x' => 30, 'y' => 0),
					'resize'	=> 60
				)
			)
		);

		$compositions3['iphone-ipad-imac'] = array(
			'name' => 'iPhone 8 + iPad + iMac',
			'information' => array(
				'width' 	=> 1600,
				'height'	=> 1176
			),
			'layers' => array(
				array(
					'device' 	=> 'imac',
					'from'		=> 'RB'
				),
				array(
					'device' 	=> 'ipad-air-2',
					'from'		=> 'LB',
					'resize'	=> 50
				),
				array(
					'device' 	=> 'iphone8',
					'from'		=> 'LB',
					'pos'		=> array('x' => 350),
					'resize'	=> 45
				)
			)
		);

		$compositions4['iphone-ipad-imac-macbook'] = array(
			'name' => 'iPhone 8 + iPad + MacBook + iMac',
			'information' => array(
				'width' 	=> 2200,
				'height'	=> 1176
			),
			'layers' => array(
				array(
					'device' 	=> 'imac',
					'from'		=> 'LB',
					'pos'		=> array('x' => 250),
				),
				array(
					'device' 	=> 'macbook',
					'from'		=> 'RB',
					'resize'	=> 70
				),
				array(
					'device' 	=> 'ipad-air-2',
					'from'		=> 'LB',
					'resize'	=> 50
				),
				array(
					'device' 	=> 'iphone8',
					'from'		=> 'LB',
					'pos'		=> array('x' => 350),
					'resize'	=> 45
				)
			)
		);

		if( $withCategories ) {
			$compositions = array(
				'2devices' => array(
					'label' => '2 devices',
					'compositions' => $compositions2
				),
				'3devices' => array(
					'label' => '3 devices',
					'compositions' => $compositions3
				),
				'4devices' => array(
					'label' => '4 devices',
					'compositions' => $compositions4
				)
			);
		} else {
			$compositions = $compositions2 + $compositions3  + $compositions4;
		}

		return $compositions;

	}

}
