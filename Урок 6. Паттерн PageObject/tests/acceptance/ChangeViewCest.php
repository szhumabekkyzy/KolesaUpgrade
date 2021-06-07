<?php

use Page\Acceptance\MainPage;
use Page\Acceptance\SummerDressesPage;


/**
 * Класс для проверки смены раскладки результатов поиска
 */
class ChangeViewCest
{

    /**
     * Проверка поиска и отображения карточек при смене раскладки
     */
    public function checkChangingGridToList(AcceptanceTester $I)
    {
        $mainPage = new MainPage($I);
        $summerDressesPage = new SummerDressesPage($I);
        $I->amOnPage(MainPage::$URL);
        $mainPage->openSummerDressesPage()
                 ->onSummerDressesPage()
                 ->seeDefaultProductsView();
        $I->seeElement(SummerDressesPage::$productsGridContainer);
        $I->seeElement(SummerDressesPage::$listViewButton);
        $summerDressesPage->changeViewToList();
        $I->waitForElement(SummerDressesPage::$productsListContainer);
    }
}