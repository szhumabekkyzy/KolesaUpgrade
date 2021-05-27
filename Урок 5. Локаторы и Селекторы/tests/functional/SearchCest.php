<?php

class   SearchCest
{
    /**
     * Проверить поиск по тексту и количество найденных товаров
     */
    public function checkSearchByText(FunctionalTester $I)
    {
        $fillFieldCSS = '#search_query_top';
        $fillFieldXPath = '//input[@id="search_query_top"]';
        $clickCSS = 'button[name="submit_search"]';
        $clickXPath = '//*["@name="submit_search"]/button';
        $seeNumberOfElementsCSS = '.product-container';
        $seeNumberOfElementsXPath = '//ul[@class="product_list grid row"]/li';

        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->fillField('#search_query_top','Printed dress');
        $I->click('#searchbox > button');
        $I->seeNumberofElements('.product-container','5');
    }
}