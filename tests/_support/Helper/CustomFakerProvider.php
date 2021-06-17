<?php
namespace Helper;

use Faker\Provider\Base;

class CustomFakerProvider extends Base
{
    protected $phoneCodes = [
        '701',
        '702',
        '707',
        '778'
    ];

    /**
     * Возвращает рандомный казахстанский номер
     */
  public function getPhoneKZ() 
  {
      return sprintf (
          '7(%d) %d-%d-%d',
          $this-> phoneCodes [array_rand($this->phoneCodes)],
          random_int(100,999),
          random_int(10,99),
          random_int(10,99)
      );
  }

  protected $creditCardNumber = [
    '7777888899991111',
    '5169582622221111',
    '7896452566782345',
    '5896478963254512'
];

/**
 * Возвращает рандомные номера карт
 */
public function getCardNumber() 
{
  return sprintf (
      '%d',
      $this-> creditCardNumber [array_rand($this->creditCardNumber)]
  );
}
}