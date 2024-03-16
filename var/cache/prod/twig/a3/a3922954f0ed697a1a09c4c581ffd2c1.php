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

/* __string_template__4fe753a11fc32b41f19f3695f1a52040 */
class __TwigTemplate_4a184e837f2b9ef4bc5faea39dfa7ad1 extends Template
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
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Thème et logo > Thème • store</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.1.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '50eb573615b5dddd294a62d5905f557a';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = '4c097296ce084b2025447703872902eb';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin/index.php/improve/modules/manage?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg';
    var admin_notification_get_link = '/prestashop/admin/index.php/common/notifications?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin/index.php/common/notifications/ack?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg';
    var tab_modules_list = '';
  ";
        // line 42
        echo "  var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admin/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admin/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var";
        // line 67
        echo " prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/admin/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>

  

";
        // line 83
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminthemes\"
  data-base-url=\"/prestashop/admin/index.php\"  data-token=\"j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admin/index.php?controller=AdminDashboard&amp;token=e4469283e6a658566779a46fdfe440d3\"></a>
      <span id=\"shop_version\">8.1.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=b5fd29ad6d8707c2948bcfb90313361d\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin/index.php/improve/modules/manage?token=14fc257f1cb5311581ae001ea087026c\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin/index.php/sell/catalog/categories/new?token=14fc257f1cb5311581ae001ea087026c\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/admin/index.php/sell/catalog/products-v2/create?token=14fc257f1cb5311581ae001ea087026c\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quic";
        // line 120
        echo "k-row-link \"
         href=\"http://localhost/prestashop/admin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=749ba6b0f1ee96e9bd20213752b2a4fc\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin/index.php/sell/orders?token=14fc257f1cb5311581ae001ea087026c\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"99\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes/?-UU67Nz4RxRooSg\"
        data-post-link=\"http://localhost/prestashop/admin/index.php?controller=AdminQuickAccesses&token=6d3755e336ffe4af9824ab471f896be6\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Theme &amp; Logo - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin/index.php?controller=AdminQuickAccesses&token=6d3755e336ffe4af9824ab471f896be6\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
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
      action=\"/prestashop/admin/index.php?controller=AdminSearch&amp;token=f242d9eddfa39b0e9931509d854ac8af\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_";
        // line 160
        echo "query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-pi";
        // line 174
        echo "ece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=b5fd29ad6d8707c2948bcfb90313361d\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin/index.php/improve/modules/manage?token=14fc257f1cb5311581ae001ea087026c\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin/index.php/sell/catalog/categories/new?token=14fc257f1cb5311581ae001ea087026c\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin/index.php/sell/catalog/products-v2/create?token=14fc257f1cb5311581ae001ea087026c\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=749ba6b0f1ee96e9bd20213752b2a4fc\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin/index.php/sell/orders?token=14fc257f1cb5311581ae001ea087026c\"
        ";
        // line 215
        echo "     data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"110\"
      data-icon=\"icon-AdminThemesParent\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/themes/?-UU67Nz4RxRooSg\"
      data-post-link=\"http://localhost/prestashop/admin/index.php?controller=AdminQuickAccesses&token=6d3755e336ffe4af9824ab471f896be6\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Theme &amp; Logo - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin/index.php?controller=AdminQuickAccesses&token=6d3755e336ffe4af9824ab471f896be6\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
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
                          <li class=\"nav-item\">";
        // line 262
        echo "
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
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
              Clients<span id=\"_nb_new_customers_\"></span>
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
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=30d145fa2cf542a530b839635c6da8e8\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les";
        // line 312
        echo " réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
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
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
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
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" alt=\"Hedi\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Hedi</s";
        // line 361
        echo "pan>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin/index.php/configure/advanced/employees/1/edit?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admin/index.php?controller=AdminLogin&amp;logout=1&amp;token=0f1bfd997af142803a902e67da815ecb\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin/index.php/configure/advanced/employees/toggle-navigation?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admin/index.php?controller=AdminDashboard&amp;token=e4469283e6a658566779a46fdfe440d3\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminDashboard&amp;token=e4469283e6a658566779a46fdfe440d3\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-s";
        // line 412
        echo "ubmenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin/index.php/sell/orders/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin/index.php/sell/orders/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin/index.php/sell/orders/invoices/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Invoices
                                </a>
                      ";
        // line 445
        echo "        </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin/index.php/sell/orders/credit-slips/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin/index.php/sell/orders/delivery-slips/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCarts&amp;token=30d145fa2cf542a530b839635c6da8e8\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop";
        // line 478
        echo "/admin/index.php/sell/catalog/products?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin/index.php/sell/catalog/products?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin/index.php/sell/catalog/categories?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin/";
        // line 508
        echo "index.php/sell/catalog/monitoring/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminAttributesGroups&amp;token=d7108561c9f64c24f1823b1134f75bd4\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin/index.php/sell/catalog/brands/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin/index.php/sell/attachments/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                     ";
        // line 539
        echo "         <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCartRules&amp;token=749ba6b0f1ee96e9bd20213752b2a4fc\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin/index.php/sell/stocks/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin/index.php/sell/customers/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
      ";
        // line 570
        echo "                        
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin/index.php/sell/customers/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin/index.php/sell/addresses/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCustomerThreads&amp;token=952f98746e23ea028dab813bd5935537\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
     ";
        // line 601
        echo "                                         <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCustomerThreads&amp;token=952f98746e23ea028dab813bd5935537\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin/index.php/sell/customer-service/order-messages/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminReturn&amp;token=ab93666c08bf1f6b25fb57f6c72a3cd3\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-level";
        // line 632
        echo "one\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminStats&amp;token=b5fd29ad6d8707c2948bcfb90313361d\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin/index.php/improve/modules/manage?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
     ";
        // line 669
        echo "                         
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin/index.php/improve/modules/manage?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin/index.php/improve/design/themes/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop/admin/index.php/improve/design/themes/?_token=";
        // line 697
        echo "j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin/index.php/improve/design/mail_theme/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin/index.php/improve/design/cms-pages/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin/index.php/improve/design/modules/positions/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-Adm";
        // line 728
        echo "inImages\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminImages&amp;token=6f6dd24ae15e2d2f8408b5d12b98b05a\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin/index.php/modules/link-widget/list?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCarriers&amp;token=627b89167de4e3429f0b96ba1c637427\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                 ";
        // line 760
        echo "                                           
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCarriers&amp;token=627b89167de4e3429f0b96ba1c637427\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin/index.php/improve/shipping/preferences/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin/index.php/improve/payment/payment_methods?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-co";
        // line 790
        echo "llapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin/index.php/improve/payment/payment_methods?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin/index.php/improve/payment/preferences?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin/index.php/improve/international/localization/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
  ";
        // line 822
        echo "                                          </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin/index.php/improve/international/localization/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin/index.php/improve/international/zones/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin/index.php/improve/international/taxes/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
    ";
        // line 852
        echo "                            <a href=\"/prestashop/admin/index.php/improve/international/translations/settings?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin/index.php/configure/shop/preferences/preferences?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/preferences/preferences?_";
        // line 887
        echo "token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/order-preferences/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/product-preferences/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/customer-preferences/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <";
        // line 918
        echo "li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/contacts/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/seo-urls/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminSearchConf&amp;token=fb72e9702223dbdbb480e781b42f3d0a\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin/index.php/configure/advanced/system-information/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">set";
        // line 947
        echo "tings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/system-information/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/performance/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/administration/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg";
        // line 976
        echo "\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/emails/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/import/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/employees/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestas";
        // line 1008
        echo "hop/admin/index.php/configure/advanced/sql-requests/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/logs/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/webservice-keys/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/feature-flags/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                  ";
        // line 1036
        echo "                                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/security/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Theme &amp; Logo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Thème et logo &gt; Thème          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/prestashop/admin/index.php/improve/design/themes/import?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\"                  title=\"Ajouter un thème\"                                  >
                  <i class=\"material-icons\">add</i>                  Ajouter un thème
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/prestashop/admin/index.php/improve/design/themes/export?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67N";
        // line 1084
        echo "z4RxRooSg\"                  title=\"Exporter le thème actif\"                                  >
                  <i class=\"material-icons\">cloud_download</i>                  Exporter le thème actif
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminThemes%253Fversion%253D8.1.4%2526country%253Dfr/Aide?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li class=\"nav-item\">
                    <a href=\"/prestashop/admin/index.php/improve/design/themes/?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"44\">
                      Theme & Logo
                      <span";
        // line 1111
        echo " class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminPsThemeCustoConfiguration&token=426c972c8c06a9a8c0f2d0fa6a464958\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"126\">
                      Pages Configuration
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminPsThemeCustoAdvanced&token=950cc39ec06cb6d751912cd1b215ea65\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"127\">
                      Personnalisation avancée
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ";
        // line 1132
        echo "                                                                                                                                                                                                                                                       </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/prestashop/admin/index.php/improve/design/themes/import?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\"              title=\"Ajouter un thème\"            >
              Ajouter un thème
              <i class=\"material-icons\">add</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-export\"
              href=\"/prestashop/admin/index.php/improve/design/themes/export?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\"              title=\"Exporter le thème actif\"            >
              Exporter le thème actif
              <i class=\"material-icons\">cloud_download</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminThemes%253Fversion%253D8.1.4%2526country%253Dfr/Aide?_token=j1xrquZYHlPfCjyERkwWJaf0Y_ba-UU67Nz4RxRooSg\"
            >
              Aide
            </a>
                 ";
        // line 1161
        echo "       </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1178
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminDashboard&amp;token=e4469283e6a658566779a46fdfe440d3\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1212
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 83
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1178
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

    // line 1212
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
        return "__string_template__4fe753a11fc32b41f19f3695f1a52040";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1379 => 1212,  1358 => 1178,  1347 => 83,  1338 => 1212,  1298 => 1178,  1279 => 1161,  1248 => 1132,  1225 => 1111,  1196 => 1084,  1146 => 1036,  1116 => 1008,  1082 => 976,  1051 => 947,  1020 => 918,  987 => 887,  950 => 852,  918 => 822,  884 => 790,  852 => 760,  818 => 728,  785 => 697,  755 => 669,  716 => 632,  683 => 601,  650 => 570,  617 => 539,  584 => 508,  552 => 478,  517 => 445,  482 => 412,  429 => 361,  378 => 312,  326 => 262,  277 => 215,  234 => 174,  218 => 160,  176 => 120,  134 => 83,  116 => 67,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4fe753a11fc32b41f19f3695f1a52040", "");
    }
}
