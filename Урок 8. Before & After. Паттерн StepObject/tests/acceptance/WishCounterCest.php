<?php

use Codeception\Step;
use Page\Acceptance\MainPage;
use Page\Acceptance\AccountPage;
use Page\Acceptance\SignPage;
use Page\Acceptance\ProductFrame;
use Page\Acceptance\WishListPage;
use PHPUnit\Framework\Error\Warning;

/**
 * Класс для тестирования количества предметов в Wishlist
 * */
class WishCounterCest 
{
    /**
     * Авторизация пользователя 
     * */
    public function _before(\acceptanceTester $I)
    {
        $I->amOnPage(MainPage::$URL);
        $I->waitForElementClickable(MainPage::$LogInButton);
        $I->click(MainPage::$LogInButton);
        $I->amOnPage(SignPage::$URL);
        $I->waitForElementVisible(SignPage::$EmailField);
        $I->fillField(SignPage::$EmailField,SignPage::$CorrectEmail);
        $I->fillField(SignPage::$PasswordField,SignPage::$CorrectPassword);
        $I->click(SignPage::$SignInButton);
        $I->amOnPage(AccountPage::$URL);
        $I->click(MainPage::$LogoPicture);
    }
    
    /**
     * Отчистка Wishlist и logout 
    */
    public function _after(\AcceptanceTester $I)
    {
        $I->waitForElementClickable(WishListPage::$QtyDeletButton);
        $I->click(WishListPage::$QtyDeletButton);
        $I->acceptPopup();
        $I->wait(3);
        $I->waitForElementClickable(MainPage::$LogoutButton);
        $I->click(MainPage::$LogoutButton);
    }

    /**
     * Основная функция для проверки кол-ва предметов в WishList
     * */
    public function CheckWishList(\Step\Acceptance\WishCountStep $I)
    {
        $I->amOnPage(MainPage::$URL);
        $I->addProductToWishList();
        $I->waitForElementVisible(AccountPage::$AccountInButton);
        $I->click(AccountPage::$AccountInButton);
        $I->amOnPage(AccountPage::$URL);
        $I->waitForElementClickable(AccountPage::$WishListInButton);
        $I->click(AccountPage::$WishListInButton);
        $I->amOnPage(WishListPage::$URL);
        $I->CheckQtyInWishList();
    }
}