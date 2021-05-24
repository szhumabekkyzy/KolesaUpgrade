<?php

class ModalWindowCest
{
    /**
     * Проверить товара внутри модального окна
     */
    public function checkSearchInsideTheModalWindowCest(AcceptanceTester $I)
    {
       $I->amOnPage('');
        $I->seeElement('#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img');
        $I->seeElement('#homefeatured > li.ajax_block_product.col-xs-12.col-sm-4.col-md-3.last-item-of-mobile-line.hovered > div > div.left-block > div > a.quick-view');
        $I->click('#homefeatured > li.ajax_block_product.col-xs-12.col-sm-4.col-md-3.last-item-of-mobile-line.hovered > div > div.left-block > div > a.quick-view');
        $I->performOn('.product', ActionSequence::build()
            ->seeElement('.#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1')
    );
    }
}
