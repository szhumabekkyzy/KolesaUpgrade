<?php
namespace Page\Acceptance;
/**
 * PageObject для страницы формы
 */
class Fill
{
    /**
     * Селектор поля имени
     */
    public static $firstName = '//*[@id = "firstName"]';

    /**
     * Селектор поля фамилии
     */
    public static $lastName = '//*[@id = "lastName"]';

    /**
     * Селектор поля email
     */
    public static $email = '//*[@type = "email"]';

    /**
     * Селектор поля номера телефона
     */
    public static $phoneNumber = '//*[@id = "phoneNumber"]';

    /**
     * Селектор поля адреса
     */
    public static $address = '//*[@id = "address"]';

    /**
     * Селектор поля города
     */
    public static $city = '//*[@id = "city"]';

    /**
     * Селектор поля региона
     */
    public static $state = '//*[@id = "state"]';

    /**
     * Селектор поля почтового индекса
     */
    public static $postal = '//*[@id = "postal"]';

    /**
     * Селектор кнопки для заполнения Payment method
     */
    public static $paymentTypeCredit = '//*[@id="input_32_paymentType_credit"]';

    /**
     * Селектор поля имени в Payment
     */
    public static $paymentFirstName = '//*[@id="input_32_cc_firstName"]';

    /**
     * Селектор поля фамилии в Payment
     */
    public static $paymentLastName = '//*[@id="input_32_cc_lastName"]';

    /**
     * Селектор поля номера кредитной карты в Payment
     */
    public static $creditCardNumber = '//*[@id="input_32_cc_number"]';

    /**
     * Селектор поля ccv кода в Payment
     */
    public static $securityCode = '//*[@id="input_32_cc_ccv"]';

    /**
     * Селектор поля месяца истечения карты 
     * выбора месяца февраль 
     */
    public static $expirationMonthFebruary = '//*[@id="input_32_cc_exp_month"]/option[3]';

    /**
     * Селектор для выбора года истечения карты
     * выбор 2022 года
     */
    public static $expirationYear2022 = '//*[@id="input_32_cc_exp_year"]/option[3]';

    /**
     * Селектор поля адреса оплаты
     */
    public static $streetAdress = '//*[@id="input_32_addr_line1"]';

    /**
     * Селектор поля второго адреса оплаты
     */
    public static  $streetAdressSecond = '//*[@id="input_32_addr_line2"]';

    /**
     * Селектор поля города оплаты
     */
    public static $paymentCity = '//*[@id="input_32_city"]';

    /**
     * Селектор поля региона оплаты
     */
    public static $paymentState = '//*[@id="input_32_state"]';

    /**
     * Селектор поля почтового индекса оплаты
     */
    public static $paymentPostal = '//*[@id="input_32_postal"]';

    /**
     * Селектор для выбор страны Казахстан
     */
    public static $paymentCountry = '//*[@id="input_32_country"]/option[102]';

     /**
     * Селектор кнопки регистрации
     */
    public static $registerButton = '//*[@type = "submit"]';
}