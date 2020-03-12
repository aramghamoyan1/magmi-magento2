<?php
        ini_set('display_errors',1);
        use Magento\Framework\App\Bootstrap;
        require '/data/web/magento2/app/bootstrap.php';

        $params = $_SERVER; 
        $bootstrap = Bootstrap::create(BP, $params);

        $obj = $bootstrap->getObjectManager();

        $state = $obj->get('Magento\Framework\App\State');
        $state->setAreaCode('frontend');


        set_time_limit(0);
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '-1');
                    
        // Require Magmi stuff
        require_once('/data/web/magento2/pub/magmi/inc/magmi_defs.php');
        require_once('/data/web/magento2/pub/magmi/integration/inc/magmi_datapump.php');

        // create a Product import Datapump using Magmi_DatapumpFactory
        $dp = \Magmi_DataPumpFactory::getDataPumpInstance('productimport');

        // Begin import session with a profile & running mode, here profile is "default" & running mode is "create".
        // Available modes: "create" creates and updates items, "update" updates only, "xcreate creates only.
        $dp->beginImportSession("Default","create");

        $Import = array( 
            'name'                              => 'test 1',
            'sku'                               => '123yhf',
            'cost'                              => '12',
            'price'                             => '45',
            'qty'                               => '2',
            'type'								=> 'simple',
            'description'                       => 'test description long',
            'short_description'                 => 'test desc short',
			'weight'                            => 1,
			'brand'                             => 'MAGMI',
			'image'                             => '+image path',
			'thumbnail'                         => '+image path',
			'small_image'                       => '+image path',
			'media_gallery'                     => 'image path1;imagepath2;imagepath3',
			'store_id'                          => 1, // true
			'manage_stock'                      => 1, // true
			'tax_class_id'                      => 10,
			'is_in_stock'                       => 1, // 0 = false - 1 = true'
        );

        $dp->ingest($item); 