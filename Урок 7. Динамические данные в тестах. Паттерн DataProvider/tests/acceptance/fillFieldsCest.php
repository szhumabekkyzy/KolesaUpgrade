<?php

namespace Tests\Acceptance;

use Page\Acceptance\Fill;

/**
 * Класс для тестирования формы
 */

class fillFieldsCest
{
    /**
     * Тест на проверку заполнения полей с помощью фейкера
     * @group test2
     */
    public function checkFillField(\AcceptanceTester $I)
    {
       
        $firstName = $I ->getFaker() -> firstName;
        $lastName = $I ->getFaker() -> lastName;
        $email = $I ->getFaker()-> email;
        $phoneNumber = $I ->getFaker() -> getPhoneKZ();
        $address = $I ->getFaker()-> address;
        $city = $I ->getFaker()-> city;
        $state = $I ->getFaker()-> region;
        $postal = $I ->getFaker() -> postCode;
        $cardNumber = $I ->getFaker() -> getCardNumber();
        
        $I->amOnPage('');
        $I ->fillField(Fill::$firstName, $firstName);
        $I ->fillField(Fill::$lastName, $lastName);
        $I ->fillField(Fill::$email, $email);
        $I ->fillField(Fill::$phoneNumber, $phoneNumber);
        $I ->fillField(Fill::$address, $address);
        $I ->fillField(Fill::$city, $city);
        $I ->fillField(Fill::$state, $state);
        $I ->fillField(Fill::$postal, $postal);
        $I ->click(Fill::$paymentTypeCredit);
        $I ->fillField(Fill::$paymentFirstName, $firstName);
        $I ->fillField(Fill::$paymentLastName, $lastName);
        $I ->fillField(Fill::$creditCardNumber, $cardNumber);
        $I ->fillField(Fill::$securityCode, 222);
        $I ->click(Fill::$expirationMonthFebruary);
        $I ->click(Fill::$expirationYear2022);
        $I ->fillField(Fill::$streetAdress, $address);
        $I ->fillField(Fill::$streetAdressSecond, $address);
        $I ->fillField(Fill::$paymentCity, $city);
        $I ->fillField(Fill::$paymentState, $state);
        $I ->fillField(Fill::$paymentPostal, $postal);
        $I ->click(Fill::$paymentCountry);
        $I ->wait(20);
        $I ->click(Fill ::$registerButton);
        $I -> waitForText('Good job');
    }
}