<?php
/* Smarty version 4.3.4, created on 2024-07-07 17:29:05
  from 'module:ps_supplierlistviewstemplateshookps_supplierlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668ab4419dd2f3_34357673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e98a1d231ad7587ed33d217eebc733ab1968889' => 
    array (
      0 => 'module:ps_supplierlistviewstemplateshookps_supplierlist.tpl',
      1 => 1720204187,
      2 => 'module',
    ),
    'b3c075d1bfb2c0c0cdc7430c741d12863681a16d' => 
    array (
      0 => 'module:ps_supplierlistviewstemplates_partialssupplier_text.tpl',
      1 => 1720204187,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_668ab4419dd2f3_34357673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="search_filters_suppliers">
  <section class="facet">
    <h1 class="h6 text-uppercase facet-label">
              Proveedores
          </h1>
    <div>
              
<ul>
            <li class="facet-label">
        <a href="http://localhost:8000/index.php?id_supplier=2&amp;controller=supplier" title="Accessories supplier">
          Accessories supplier
        </a>
      </li>
                <li class="facet-label">
        <a href="http://localhost:8000/index.php?id_supplier=1&amp;controller=supplier" title="Fashion supplier">
          Fashion supplier
        </a>
      </li>
      </ul>
          </div>
  </section>
</div>
<?php }
}
