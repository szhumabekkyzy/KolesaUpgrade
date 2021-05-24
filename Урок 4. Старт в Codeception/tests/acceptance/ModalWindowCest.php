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
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > div.quick-view-wrapper-mobile > a');
        $I->seeElement('#center_column');
        $I->switchToIframe('fancybox-iframe');
        $I->see('Blouse','fancybox-iframe');
        
    }
}