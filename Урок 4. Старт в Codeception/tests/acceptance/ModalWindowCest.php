<?php

class ModalWindowCest
{
    /**
     * Проверить товара внутри модального окна
     */
    public function checkSearchInsideTheModalWindowCest(AcceptanceTester $I)
    {
      $I->amOnPage('index.php');
        $I->waitForElement('#homefeatured > li:nth-child(2) > div > div.left-block > div', 30);
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.left-block > div');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span');
        $I->waitForElement('.fancybox-iframe', 40); 
        $I->switchToIFrame('.fancybox-iframe');
        $I->waitForElement('#product', 40);  
        $I->see('Blouse');
    }
}
