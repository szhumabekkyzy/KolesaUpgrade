<?php

class QuickViewCest
{
    /**
     * Проверить открытия модального окна товара Blouse
     */
    public function checkSearchInsideQuickView(AcceptanceTester $I)
    {

        $searchProductToCSS = '#homefeatured > li:nth-child(2)';
        $searchProductXPath = '//ul[@id="homefeatured"]/li[2]';
        $moveMouseOverCSS = '#homefeatured > li:nth-child(2)';
        $moveMouseOverXPath = '//ul[@id="homefeatured"]/li[2]';
        $quickViewButtonCSS = '#homefeatured > li:nth-child(2) a.quick-view';
        $quickViewButtonXPath = '//ul[@id="homefeatured"]/li[2]//a[@class="quick-view"]'; 
        $IFrameCSS = '.fancybox-iframe';
        $IFrameXPath = '//iframe[@class="fancybox-iframe"]';
        $waitForTextCSS = 'h1[itemprop="name"]';
        $waitForTextXPath = '//h1[@itemprop="name"]';
    }
}