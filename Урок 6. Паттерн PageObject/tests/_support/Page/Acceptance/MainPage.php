<?php
namespace Page\Acceptance;
/**
 * Класс с элементами и методами главной страницы
 */
class MainPage
{
    /**
     * Урл главной страницы товаров
     */
    public static $URL = '';

    /**
     * Cелектор для каталога платьев
     */
    public static $dressesMenu = '#block_top_menu>ul>li:nth-child(2)';
    public static $summerDressesCatalog = '#block_top_menu>ul>li:nth-child(2) li:nth-child(3)';

    /**
     * Объект тестера
     * @var \AcceptanceTester
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
     * Находит меню вкладки летние платья, затем переходит на страницу SummerDressesCatalog
     */
    public function openSummerDressesPage(){
        $this->acceptanceTester->moveMouseOver(self::$dressesMenu);
        $this->acceptanceTester->click(self::$summerDressesCatalog);
        
        return new SummerDressesPage($this->acceptanceTester);
    }
}