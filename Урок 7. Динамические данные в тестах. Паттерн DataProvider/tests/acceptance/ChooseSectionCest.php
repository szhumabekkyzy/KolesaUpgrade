<?php

namespace Tests\Acceptance;

use Codeception\Example;
use Page\Acceptance\MainPage;
use Page\Acceptance\SectionPage;

/**
 * Класс для тестирования выбора разделов из меню категориями
 * @group test
 */
class ChooseSeactionCest 
{
    /**
     * Тест на выбор 2-х случайных разделов из меню категории
     * @group        test
     * @param        Example $data
     * @dataProvider getDataForSearchSectionByCategory
     */
    public function searchSectionByCategory (\AcceptanceTester $I, Example $data)
    {
        $I ->amOnPage('');
        $I ->waitForElementClickable(sprintf(MainPage::$sectionLinkButton, $data ['nameSection']));
        $I ->click(sprintf(MainPage::$sectionLinkButton, $data ['nameSection']));
        $I ->seeInCurrentUrl(sprintf(SectionPage::$URL, $data ['sectionUrl']));
        $I ->waitForText($data ['nameSection'], 5 , SectionPage::$headerSection);
    }

    protected function getDataForSearchSectionByCategory () 
    {
        $sections = [
            ['nameSection' => 'Разработка',         'sectionUrl' => 'flows/develop/'],
            ['nameSection' => 'Администрирование' , 'sectionUrl' => 'flows/admin/'],
            ['nameSection' => 'Дизайн',             'sectionUrl' => 'flows/design/'],
            ['nameSection' => 'Менеджмент' ,        'sectionUrl' => 'flows/management/'],
            ['nameSection' => 'Маркетинг',          'sectionUrl' => 'flows/marketing/'],
            ['nameSection' => 'Научпоп' ,           'sectionUrl' => 'flows/popsci/']
        ];
        shuffle($sections);
        return array_slice($sections, 0, 2);
    }
 }
