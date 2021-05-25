<?php

class   SearchCest
{
    /**
     * Проверить поиск по тексту и количество найденных товаров
     */
    public function checkSearchByText(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->fillField('#search_query_top','Printed dress');
        $I->click('#searchbox > button');
        $I->seeNumberofElements('.product-container','5');
    }
}
