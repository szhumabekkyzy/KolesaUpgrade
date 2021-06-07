<?php
namespace Page\Acceptance;
/**
 * Страница My account (после авторизации)
 */
class AccountPage
{
    /**
     * URL текущей страницы
     */
    public static $URL = '/index.php?controller=my-account';

    /**
     * Кнопка входа в информацию об аккаунте 
     */
    public static $AccountInButton ='//*[@id="header"]/div[2]/div/div/nav/div[1]';

    /**
     * Кнопка входа в Wishlist
     */
    public static $WishListInButton ='//*[@id="center_column"]/div/div[2]/ul/li/a';
}