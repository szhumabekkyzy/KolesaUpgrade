<?php

use Page\Acceptance\LoginPage;

/**
 * Класс для проверки неудачной авторизации заблокированного пользователя
 */
class FailAuthCest
{
    /**
    * Проверка появление ошибки и успешное закрытие блока ошибки
    */
    public function checkLockedUserFailAuth(AcceptanceTester $I)
    {
        $loginPage = new LoginPage($I);
        $I->amOnPage(LoginPage::$URL);
        $loginPage->fillUserNameField()
                  ->fillPasswordField()
                  ->clickLoginButton();
        $I->waitForElementVisible(LoginPage::$errorBoxContainer);
        $loginPage->closeErrorBox();
        $I->dontSee(LoginPage::$errorBoxContainer);
    }
}