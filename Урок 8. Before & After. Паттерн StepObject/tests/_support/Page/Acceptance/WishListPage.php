<?php
namespace Page\Acceptance;
/**
 * Класс страницы со списком желаний 
 */
class WishListPage
{
    /**
     * Урл списка желаний на сайте
     */
    public static $URL = '/index.php?fc=module&module=blockwishlist&controller=mywishlist';

    /**
     * Селектор поля qty
     */
    public static $QtySelector = '//*/td[2]';

    /**
     * Селектор удаления своего списка желаний
     */
    public static $QtyDeletButton = '//tr[contains(@id,"wishlist")]//td[6]/a';
}