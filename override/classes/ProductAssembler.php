<?php
/**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
class ProductAssembler extends ProductAssemblerCore
{
    /**
     * Assemble Product
     *
     * @param array $rawProduct
     *
     * @return mixed
     */
    /*
    * module: stoverride
    * date: 2024-07-05 20:30:50
    * version: 1.0.0
    */
    public function assembleProduct(array $rawProduct)
    {
        $assembled = parent::assembleProduct($rawProduct);
        $module_assembled = Hook::exec('actionStAssemble', $assembled, null, true);
        if($module_assembled && is_array($module_assembled))
            $assembled = array_merge($assembled, $module_assembled);
        return $assembled;
    }
    /*
    * module: stoverride
    * date: 2024-07-05 20:30:50
    * version: 1.0.0
    */
    public function assembleProducts(array $rawProducts)
    {
        $enrichedProducts = parent::assembleProducts($rawProducts);
        foreach($enrichedProducts as &$enrichedProduct) {
            $module_assembled = Hook::exec('actionStAssemble', $enrichedProduct, null, true);
            if($module_assembled && is_array($module_assembled)) {
                $enrichedProduct = array_merge($enrichedProduct, $module_assembled);
            }
        }
        return $enrichedProducts;
    }
}
