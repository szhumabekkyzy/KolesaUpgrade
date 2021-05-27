<?php

class QuickViewCest
{
    /**
     * Проверить открытия модального окна товара Blouse
     */
    public function checkSearchInsideQuickView(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->scrollTo('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img');
        $I->waitForElementVisible('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
        $I->switchToIFrame('.fancybox-iframe');
        $I->waitForText("Blouse", 5, '#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');
    }
}
