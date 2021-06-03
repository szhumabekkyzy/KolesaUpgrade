<?php
namespace Page\Acceptance;
/**
 * PageObject для элементов главной страницы
 */
class MainPage
{
    /**
     * Селектор всех категории на главной странице
     */
    public static $sectionLinkButton = '//a[contains(text(),"%s")]';

}