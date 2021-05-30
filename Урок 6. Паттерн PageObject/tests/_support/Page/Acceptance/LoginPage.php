<?php
namespace Page\Acceptance;
/**
 * Страница авторизации
 */
class LoginPage
{
    /**
     * Стандартный пользователь для неуспешной авторизации
     */
    public const LOCKED_USER_NAME = 'locked_out_user';
    /**
     * Стандартный пароль
     */
    public const PASSWORD = 'secret_sauce';
    /**
     * Урл страницы авторизации
     */
    public static $URL = '';

    /**
     * Селектор поля ввода для логина
     */
    public static $usernameField = '#user-name';
    /**
     * Селектор поля ввода для пароля
     */
    public static $password = '#password';
    /**
     * Селектор кнопки авторизации
     */
    public static $loginButton = '#login-button';
    /**
     * Селектор блока ошибки
     */
    public static $errorBoxContainer = '.error-message-container';
    /**
     * Селектор кнопки ошибки 
     */
    public static $closeErrorBoxButton = '.error-message-container .error-button';

    /**
     * Объект тестера
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Метод конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Заполняет поле ввода логином
     */
    public function fillUserNameField(){
        $this->acceptanceTester->fillField(self::$usernameField, self::LOCKED_USER_NAME);
        return $this;
    }
    /**
     * Заполняет поле ввода пароля
     */
    public function fillPasswordField(){
        $this->acceptanceTester->fillField(self::$password, self::PASSWORD);
        return $this;
    }
    /**
     * Кликает на кнопку логина
     */
    public function clickLoginButton(){
        $this->acceptanceTester->click(self::$loginButton);
        return $this;
    }
    /**
     * Проверяет успешное закрытие блока ошибки
     */
    public function closeErrorBox(){
        $this->acceptanceTester->click(self::$closeErrorBoxButton);
        return $this;
    }
}