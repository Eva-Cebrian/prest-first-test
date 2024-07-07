<?php
class CategoryController extends CategoryControllerCore
{
    /*
    * module: stoverride
    * date: 2024-07-05 20:30:50
    * version: 1.0.0
    */
    protected function doProductSearch($template, $params = array(), $locale = null)
    {
        if ($this->ajax) {
            ob_end_clean();
            header('Content-Type: application/json');
            $variables = $this->getAjaxProductSearchVariables();
            if(!Configuration::get('STSN_REMOVE_PRODUCTS_VARIABLE'))
                unset($variables['products']);
            $this->ajaxDie(json_encode($variables));
        } else {
            $variables = $this->getProductSearchVariables();
            $this->context->smarty->assign(array(
                'listing' => $variables,
            ));
            $this->setTemplate($template, $params, $locale);
        }
    }
}
