<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class CarsListing implements \App\Acf\Blocks\Helpers\BlockItem {

    public static function setBlockParams(): void {
        RegisterBlock::addBlock( new Block( 'cars_listing',
                'Cars Listing',
                'Cars Listing block',
                'templates/parts/cars_listing.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => true,
                    'jsx'   => true
                ),
                array(
                    'title'       => "Cars Listing block",
                    'description' => "Cars Listing block"
                ),
                'image',
                'custom'
            )
        );
    }
}