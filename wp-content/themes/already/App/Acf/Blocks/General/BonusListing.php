<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class BonusListing implements \App\Acf\Blocks\Helpers\BlockItem {

    public static function setBlockParams(): void {
        RegisterBlock::addBlock( new Block( 'bonus_listing',
                'Bonus Listing',
                'Bonus Listing block',
                'templates/parts/bonus_listing.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => true,
                    'jsx'   => true
                ),
                array(
                    'title'       => "Bonus Listing block",
                    'description' => "Bonus Listing block"
                ),
                'image',
                'custom'
            )
        );
    }
}