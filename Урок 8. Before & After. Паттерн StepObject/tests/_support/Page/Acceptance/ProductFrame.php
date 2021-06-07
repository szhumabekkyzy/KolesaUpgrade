<?php
namespace Page\Acceptance;

/**
 * Класс содержащий элементы ifram'a с карточки товара
 */
class ProductFrame
{
    /**
     * Селектор окна iframe
     */
    public static $IframeSwitcher = "//*[@class = 'fancybox-iframe']";

    /**
     * Селектор картинки для прогрузки фрейма
     */
    public static $PicInIframe = '//*[@id="image-block"] ';

    /**
     * Селектор кнопки добавить в желаемое на фрейме
     */
    public static $WishlistInFrame = '//*[@id="wishlist_button"]';

    /**
     * Кнопка закрытия фрейма 
     */
    public static $IframeCloseButtom = '//*[@href="javascript:;"]';

    /**
     * Текст выводимый при успешном добавлении товара в Wishlist 
     */
    public static $SucsessWishText = 'Added to your wishlist.';

    /**
     * Окошко с текстом об успешном добавлении товара в Wishlist
     */
    public static $SucsessWishWindows = '/html/body/div[2]/div/div/div/div/p';
}