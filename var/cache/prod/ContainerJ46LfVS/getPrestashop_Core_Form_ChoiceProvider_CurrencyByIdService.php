<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.currency_by_id' shared service.

return $this->services['prestashop.core.form.choice_provider.currency_by_id'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CurrencyByIdChoiceProvider(($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProviderService()));