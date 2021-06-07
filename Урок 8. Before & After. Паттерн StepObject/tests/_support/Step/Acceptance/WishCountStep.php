<?php
namespace Step\Acceptance;
use Page\Acceptance\MainPage;
use Page\Acceptance\AccountPage;
use Page\Acceptance\ProductFrame;
use Page\Acceptance\WishListPage;

use function PHPUnit\Framework\assertEquals;
/**
 * Класс-степ для определения количества предметов в списке желаемого
 * */
class WishCountStep extends \AcceptanceTester
{
    /**
     * Константа отвечающая за колличество товаров, которые будут добавлены в список желаемого.
     * С ней же сравнивается кол-во элементов, добавленных в список желаемого
     */
    public const PRODUCTS_COUNT = 2;
    /**
     * Функция для добавления требуемого кол-ва товаров в список желаемого
     * */
    public function addProductToWishList()
    {
        $I= $this;
        for($i = 1;$i<=self::PRODUCTS_COUNT;$i++)
        {
            $I->seeElement(sprintf(MainPage::$ProductSelector,$i));
            $I->moveMouseOver(sprintf(MainPage::$ProductSelector,$i));
            $I->waitForElementVisible(sprintf(MainPage::$QuickViewSelecor,$i));
            $I->clickWithLeftButton(sprintf(MainPage::$QuickViewSelecor,$i));
            $I->switchToIFrame(ProductFrame::$IframeSwitcher);
            $I->waitForElementVisible(ProductFrame::$PicInIframe);
            $I->waitForElementClickable(ProductFrame::$WishlistInFrame);
            $I->click(ProductFrame::$WishlistInFrame);
            $I->waitForText(ProductFrame::$SucsessWishText,5,ProductFrame::$SucsessWishWindows);
            $I->switchToIFrame();
            $I->clickWithLeftButton("//a[@title='Close']");
        }
    }

    /**
     * Функция для проверки фактического кол-ва товаров в списке желаний с требуемым
     */
    public function CheckQtyInWishList()
    {
        $I=$this;
        $I->seeElement(WishListPage::$QtySelector);
        $I->assertEquals(self::PRODUCTS_COUNT,$I->grabTextFrom(WishListPage::$QtySelector)); 
    }
}