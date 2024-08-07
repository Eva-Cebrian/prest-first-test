<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__9111746bdd0ea7caf781784c844782e8 */
class __TwigTemplate_82fd91050332a0a975bf643a85dcb7b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Información • Tienda de pruebas</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminInformation';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '8.1.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Leer este mensaje';
    var token = 'bf4286417ea325b7903881170de3a5ad';
    var currentIndex = 'index.php?controller=AdminInformation';
    var employee_token = '2bf04071f085498ac204570dc275d2ba';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/admin-backoffice/index.php/improve/modules/manage?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU';
    var admin_notification_get_link = '/admin-backoffice/index.php/common/notifications?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU';
    var admin_notification_push_link = adminNotificationPushLink = '/admin-backoffice/index.php/common/notifications/ack?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
 ";
        // line 43
        echo "   var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/admin-backoffice/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin-backoffice/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin-backoffice/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin-backoffice/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin-backoffice\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin-backoffice\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1";
        // line 70
        echo "\";
</script>
<script type=\"text/javascript\" src=\"/admin-backoffice/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/admin-backoffice/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/admin-backoffice/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin-backoffice/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin-backoffice/index.php/common/notifications?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
\t\t\t\tvar admin_stblog_ajax_url = 'http://localhost:8000/admin-backoffice/index.php?controller=AdminStBlog&token=3c24669d62b7cc70b1c690bc27e9be0e';
\t\t\t\tvar current_id_tab = 93;
\t\t\t</script>

";
        // line 103
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es admininformation\"
  data-base-url=\"/admin-backoffice/index.php\"  data-token=\"svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminDashboard&amp;token=4d5fca75a80bdcf099afc7aa6d2c8ce6\"></a>
      <span id=\"shop_version\">8.1.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminModules&amp;configure=steasycontent&amp;token=3899870ed24b58048f5883b9f58fe53c\"
                 data-item=\"Advanced custom content\"
      >Advanced custom content</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminImages&amp;conf=9&amp;token=d30e4520071ce9e62952045f20974d1d\"
                 data-item=\"AJUSTES DE IMAGENES\"
      >AJUSTES DE IMAGENES</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=37edb77e85dbbfa3833f516952086a00\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminModules&amp;configure=stthemeeditor&amp;token=3899870ed24b5804";
        // line 137
        echo "8f5883b9f58fe53c\"
                 data-item=\"MODULO EDITOR DEL TEMA\"
      >MODULO EDITOR DEL TEMA</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8000/admin-backoffice/index.php/improve/modules/manage?token=360b37c70587ac8c47e71b680ae87e02\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8000/admin-backoffice/index.php/sell/catalog/categories/new?token=360b37c70587ac8c47e71b680ae87e02\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost:8000/admin-backoffice/index.php/sell/catalog/products-v2/create?token=360b37c70587ac8c47e71b680ae87e02\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2260f4d3ccae0d34f965ccbc7ec1a848\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8000/admin-backoffice/index.php/sell/orders?token=360b37c70587ac8c47e71b680ae87e02\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"128\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/system-information/?-iM-D7DnU\"
        data-post-link=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminQuickAccesses&token=76552e44c704a95c6ed869bbfc5d0b66\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Informaci&oacute;n - Lista\"
      >
        <i class=\"materia";
        // line 172
        echo "l-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminQuickAccesses&token=76552e44c704a95c6ed869bbfc5d0b66\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin-backoffice/index.php?controller=AdminSearch&amp;token=78c68797907bbb64bb0d84ba856416cb\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placehold";
        // line 201
        echo "er=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acceso rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminModules&amp;configure=steasycontent&amp;token=3899870ed24b58048f5883b9f58fe53c\"
             data-item=\"Advanced custom content\"
    >Advanced custom content</a>
      <a class=\"dropdown-item quick-row-link\"
 ";
        // line 230
        echo "      href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminImages&amp;conf=9&amp;token=d30e4520071ce9e62952045f20974d1d\"
             data-item=\"AJUSTES DE IMAGENES\"
    >AJUSTES DE IMAGENES</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=37edb77e85dbbfa3833f516952086a00\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminModules&amp;configure=stthemeeditor&amp;token=3899870ed24b58048f5883b9f58fe53c\"
             data-item=\"MODULO EDITOR DEL TEMA\"
    >MODULO EDITOR DEL TEMA</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8000/admin-backoffice/index.php/improve/modules/manage?token=360b37c70587ac8c47e71b680ae87e02\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8000/admin-backoffice/index.php/sell/catalog/categories/new?token=360b37c70587ac8c47e71b680ae87e02\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8000/admin-backoffice/index.php/sell/catalog/products-v2/create?token=360b37c70587ac8c47e71b680ae87e02\"
             data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2260f4d3ccae0d34f965ccbc7ec1a848\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8000/admin-backoffice/index.php/sell/orders?token=360b37c70587ac8c47e71b680ae87e02\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div clas";
        // line 261
        echo "s=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"84\"
      data-icon=\"icon-AdminAdvancedParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/system-information/?-iM-D7DnU\"
      data-post-link=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminQuickAccesses&token=76552e44c704a95c6ed869bbfc5d0b66\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Informaci&oacute;n - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminQuickAccesses&token=76552e44c704a95c6ed869bbfc5d0b66\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8000/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
         ";
        // line 308
        echo "     class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=8e7f0f82f494462d4dae2549d5a8e7fc\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos mo";
        // line 356
        echo "mentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8000/img/pr/default.jpg\" alt=\"Eva\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Eva</span>
      </div>

      <a class=\"dr";
        // line 408
        echo "opdown-item employee-link profile-link\" href=\"/admin-backoffice/index.php/configure/advanced/employees/1/edit?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminLogin&amp;logout=1&amp;token=63e5861579b9b81e2ba5325d811ed2f0\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin-backoffice/index.php/configure/advanced/employees/toggle-navigation?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminDashboard&amp;token=4d5fca75a80bdcf099afc7aa6d2c8ce6\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.7</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminDashboard&amp;token=4d5fca75a80bdcf099afc7aa6d2c8ce6\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
";
        // line 457
        echo "                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin-backoffice/index.php/sell/orders/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin-backoffice/index.php/sell/orders/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin-backoffice/index.php/sell/orders/invoices/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Facturas
                                </a>
                              </li>

       ";
        // line 491
        echo "                                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin-backoffice/index.php/sell/orders/credit-slips/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin-backoffice/index.php/sell/orders/delivery-slips/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminCarts&amp;token=8e7f0f82f494462d4dae2549d5a8e7fc\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin-backo";
        // line 522
        echo "ffice/index.php/sell/catalog/products?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin-backoffice/index.php/sell/catalog/products?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin-backoffice/index.php/sell/catalog/categories?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin-backoffi";
        // line 552
        echo "ce/index.php/sell/catalog/monitoring/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminAttributesGroups&amp;token=bae2ba94f6ba51da33ca31d731359cff\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin-backoffice/index.php/sell/catalog/brands/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin-backoffice/index.php/sell/attachments/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
          ";
        // line 583
        echo "                    <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminCartRules&amp;token=2260f4d3ccae0d34f965ccbc7ec1a848\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin-backoffice/index.php/sell/stocks/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin-backoffice/index.php/sell/customers/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                              ";
        // line 613
        echo "        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin-backoffice/index.php/sell/customers/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin-backoffice/index.php/sell/addresses/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminCustomerThreads&amp;token=a392a206f25a46e0a1d9f2002dcf818c\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                              ";
        // line 644
        echo "              </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminCustomerThreads&amp;token=a392a206f25a46e0a1d9f2002dcf818c\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin-backoffice/index.php/sell/customer-service/order-messages/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminReturn&amp;token=88a6ae69bbb4350d7f7a9eb700158246\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
         ";
        // line 675
        echo "         
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminStats&amp;token=37edb77e85dbbfa3833f516952086a00\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin-backoffice/index.php/improve/modules/manage?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
    ";
        // line 712
        echo "                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin-backoffice/index.php/improve/modules/manage?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin-backoffice/index.php/improve/design/themes/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin-backoffice/index.php/improve/design/themes/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Te";
        // line 741
        echo "ma y logotipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin-backoffice/index.php/improve/design/mail_theme/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin-backoffice/index.php/improve/design/cms-pages/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin-backoffice/index.php/improve/design/modules/positions/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://";
        // line 773
        echo "localhost:8000/admin-backoffice/index.php?controller=AdminImages&amp;token=d30e4520071ce9e62952045f20974d1d\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminCarriers&amp;token=d5e505324ad39d96da288573311bba79\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminCarriers&amp;token=d5e505324ad39d96da288573311bba79\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                ";
        // line 804
        echo "            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin-backoffice/index.php/improve/shipping/preferences/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin-backoffice/index.php/improve/payment/payment_methods?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin-backoffice/index.php/improve/payment/payment_methods?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                              ";
        // line 835
        echo "                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin-backoffice/index.php/improve/payment/preferences?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin-backoffice/index.php/improve/international/localization/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin-backoffice/index.php/improve/international/localization/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7Dn";
        // line 864
        echo "U\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin-backoffice/index.php/improve/international/zones/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin-backoffice/index.php/improve/international/taxes/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin-backoffice/index.php/improve/international/translations/settings?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
      ";
        // line 898
        echo "            <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminStBlog\">
                    <a href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminStBlog&amp;token=3c24669d62b7cc70b1c690bc27e9be0e\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      St Blog Module
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"132\" id=\"subtab-AdminStBlogCategory\">
                    <a href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminStBlogCategory&amp;token=f6debdf9f3ceb4161840a8a1c990d536\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      St Blog Categories
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                        ";
        // line 934
        echo "      
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin-backoffice/index.php/configure/shop/preferences/preferences?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin-backoffice/index.php/configure/shop/preferences/preferences?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin-backoffice/index.php/configure/shop/order-preferences/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Configuración de pedidos
                                </a>
                    ";
        // line 963
        echo "          </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin-backoffice/index.php/configure/shop/product-preferences/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin-backoffice/index.php/configure/shop/customer-preferences/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin-backoffice/index.php/configure/shop/contacts/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin-backoffice/inde";
        // line 993
        echo "x.php/configure/shop/seo-urls/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminSearchConf&amp;token=0106a0b2ad436edd2b48266a92df3a99\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin-backoffice/index.php/configure/advanced/system-information/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
            ";
        // line 1023
        echo "                  
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin-backoffice/index.php/configure/advanced/system-information/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin-backoffice/index.php/configure/advanced/performance/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin-backoffice/index.php/configure/advanced/administration/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin-backoffice/index.php/configure/advanced/emails/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> E-mail
                        ";
        // line 1051
        echo "        </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin-backoffice/index.php/configure/advanced/import/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin-backoffice/index.php/configure/advanced/employees/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin-backoffice/index.php/configure/advanced/sql-requests/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin-backoffice/index.php/configure/advanced/";
        // line 1082
        echo "logs/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin-backoffice/index.php/configure/advanced/webservice-keys/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin-backoffice/index.php/configure/advanced/feature-flags/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin-backoffice/index.php/configure/advanced/security/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" class=\"link\"> Security
                                </a>
                              </li>

                                                ";
        // line 1110
        echo "                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Parámetros Avanzados</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin-backoffice/index.php/configure/advanced/system-information/?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\" aria-current=\"page\">Información</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Información          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin-backoffice/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminInformation%253Fversion%253D8.1.7%2526country%253Des/Ayuda?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-i";
        // line 1174
        echo "tem btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin-backoffice/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminInformation%253Fversion%253D8.1.7%2526country%253Des/Ayuda?_token=svqt3a1jba2j7BT6ilT9sceG3EbTXXyUlZ-iM-D7DnU\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1199
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost:8000/admin-backoffice/index.php?controller=AdminDashboard&amp;token=4d5fca75a80bdcf099afc7aa6d2c8ce6\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1233
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 103
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1199
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1233
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__9111746bdd0ea7caf781784c844782e8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1398 => 1233,  1377 => 1199,  1366 => 103,  1357 => 1233,  1317 => 1199,  1290 => 1174,  1224 => 1110,  1194 => 1082,  1161 => 1051,  1131 => 1023,  1099 => 993,  1067 => 963,  1036 => 934,  998 => 898,  962 => 864,  931 => 835,  898 => 804,  865 => 773,  831 => 741,  800 => 712,  761 => 675,  728 => 644,  695 => 613,  663 => 583,  630 => 552,  598 => 522,  565 => 491,  529 => 457,  478 => 408,  424 => 356,  374 => 308,  325 => 261,  292 => 230,  261 => 201,  230 => 172,  193 => 137,  154 => 103,  119 => 70,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9111746bdd0ea7caf781784c844782e8", "");
    }
}
