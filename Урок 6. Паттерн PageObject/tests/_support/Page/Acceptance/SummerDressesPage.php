<?php
namespace Page\Acceptance;

/**
 * Класс с элементами и методами страницы летних платьев
 */
class SummerDressesPage
{
    /**
     *  Урл страницы летних платьев 
     */
    public static $URL = '/index.php?id_category=11&controller=category';

    /**
     * Представление товаров по умолчанию
     */
    public static $defaultProductsView = '//li[contains(@class, "selected")]';
    /**
     * Селектор кнопки, отображающей товары в виде Grid
     */
    public static $gridViewButton = 'li#grid';
    /**
     * Селектор контейнера товаров в виде Grid
     */
    public static $productsGridContainer = 'ul.grid';
    /**
     *  Селектор для отображения товаров в режиме таблицы
     */
    public static $listViewButton = 'li#list';
    /**
     * Селектор кнопки List 
     */
    public static $productsListContainer = 'ul.list';

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
     * Проверяет, что нахожусь на текущей странице
     */
    public function onSummerDressesPage(){
        $this->acceptanceTester->seeInCurrentUrl(self::$URL);
        return $this;
    }
    /**
     * Проверяет, что карточки с товаром расположены в режиме таблицы
     */
    public function seeDefaultProductsView(){
        $this->acceptanceTester->seeElement(self::$gridViewButton);
        return $this;
    }
    /**
     * Проверяет, что отображение карточек изменилось на List
     */
    public function changeViewToList(){
        $this->acceptanceTester->click(self::$listViewButton);
        return $this;
    }
}