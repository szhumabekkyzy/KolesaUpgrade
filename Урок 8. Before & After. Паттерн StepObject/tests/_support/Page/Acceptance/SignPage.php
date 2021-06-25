<?php
namespace Page\Acceptance;

use PHPUnit\Runner\StandardTestSuiteLoader;

/**
 * Страница авторизации на сайте
 * */
class SignPage
{
    /**
     *Url страницы авторизации
     */
    public static $URL = '/index.php?controller=authentication&back=my-account';

    /**
     * Xpath поля ввода email 
     */
    public static $EmailField = '//*[@id="email"]';

    /**
     * Xpath поля ввода пароля 
     * */
    public static $PasswordField = '//*[@id="passwd"]';

    /**
     * Кнопка входа на странице авторизации 
     */
    public static $SignInButton = '//*[@id="SubmitLogin"]';

    /**
     * Логин для входа
     * */
    public static $CorrectEmail = 'szhumabekkyzy@gmail.com';

    /**
     * Пароль для входа 
     */
    public static $CorrectPassword = '2117563';
}