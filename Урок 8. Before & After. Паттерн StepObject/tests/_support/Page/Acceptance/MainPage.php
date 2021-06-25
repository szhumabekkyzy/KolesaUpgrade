<?php
namespace Page\Acceptance;
/**
 * Главная страница сайта 
 * */
class MainPage
{
    // URL главной страницы
    public static $URL = '';

    /**кнопка входа в учетку */
    public static $LogInButton = '//*[@class="login"]';

    /**Кнопка выхода из учетки */
    public static $LogoutButton = '//*[@id="header"]/div[2]/div/div/nav/div[2]/a';

    /**Картинка YourLada */
    public static $LogoPicture = '//*[@class="logo img-responsive"]';

    /**Xpath карточки товара первого*/
    public static $ProductSelector = '//*[@id="homefeatured"]/li[%s]/div/div';

    /**Xpath кнопки на первой карточке */
    public static $QuickViewSelecor = '//*[@id="homefeatured"]/li[%s]/div/div[1]/div/a[2]';
}