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

/* __string_template__5c15e00fe1ee57e616681fd02a573212 */
class __TwigTemplate_98b922dad0941b4fa8fe1523f3512f49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__5c15e00fe1ee57e616681fd02a573212"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__5c15e00fe1ee57e616681fd02a573212"));

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

<title>Categories • store</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCategories';
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
    var token = '1e94181a55617180d7e8255c6832b709';
    var currentIndex = 'index.php?controller=AdminCategories';
    var employee_token = '4c097296ce084b2025447703872902eb';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin/index.php/improve/modules/manage?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc';
    var admin_notification_get_link = '/prestashop/admin/index.php/common/notifications?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin/index.php/common/notifications/ack?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc';
    var tab_modules_list = '';
    var";
        // line 42
        echo " update_success_msg = 'Mise à jour réussie';
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
      <link href=\"/prestashop/admin/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFracti";
        // line 67
        echo "onDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
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
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin/themes/default/js/vendor/nv.d3.min.js\"></script>

  

";
        // line 85
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr admincategories developer-mode\"
  data-base-url=\"/prestashop/admin/index.php\"  data-token=\"yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\">

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
          <a class=";
        // line 122
        echo "\"dropdown-item quick-row-link \"
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
        data-rand=\"106\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/categories\"
        data-post-link=\"http://localhost/prestashop/admin/index.php?controller=AdminQuickAccesses&token=6d3755e336ffe4af9824ab471f896be6\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Categories - Liste\"
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
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\"";
        // line 162
        echo " name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
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
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><";
        // line 176
        echo "i class=\"material-icons\">extension</i> Modules</a>
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
             d";
        // line 217
        echo "ata-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"197\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/categories\"
      data-post-link=\"http://localhost/prestashop/admin/index.php?controller=AdminQuickAccesses&token=6d3755e336ffe4af9824ab471f896be6\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Categories - Liste\"
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

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Votre boutique est en mode debug.</strong></p><p class=&quot;text-left&quot;>Tous les messages et erreurs PHP sont affichés. Lorsque vous n&#039;en avez plus besoin, &lt;strong&gt;désactivez&lt;/strong&gt; ce mode.</p>\"
             href=\"/prestashop/admin/index.php/configure/advanced/performance/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Mode debug</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://";
        // line 262
        echo "localhost/prestashop/\" target= \"_blank\">
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
                          <li class=\"nav-item\">
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
                          <div class=\"tab-pane active ";
        // line 317
        echo "empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=30d145fa2cf542a530b839635c6da8e8\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
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
      <i class=\"material-icons\">fibe";
        // line 360
        echo "r_manual_record</i> _status_
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
        <span class=\"employee_profile\">Ravi de vous revoir Hedi</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin/index.php/configure/advanced/employees/1/edit?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin/index.php/configure/advanced/employees/toggle-navigation?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admin/inde";
        // line 407
        echo "x.php?controller=AdminDashboard&amp;token=e4469283e6a658566779a46fdfe440d3\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminDashboard&amp;token=e4469283e6a658566779a46fdfe440d3\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin/index.php/sell/orders/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-le";
        // line 449
        echo "veltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin/index.php/sell/orders/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin/index.php/sell/orders/invoices/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin/index.php/sell/orders/credit-slips/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin/index.php/sell/orders/delivery-slips/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                          ";
        // line 480
        echo "                  
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCarts&amp;token=30d145fa2cf542a530b839635c6da8e8\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin/index.php/sell/catalog/products?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin/index.php/sell/catalog/products?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Products
                                </a>
                              </li>

               ";
        // line 511
        echo "                                                                   
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin/index.php/sell/catalog/categories?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin/index.php/sell/catalog/monitoring/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminAttributesGroups&amp;token=d7108561c9f64c24f1823b1134f75bd4\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin/index.php/sell/catalog/brands/?_token=yBErhqHEJR";
        // line 539
        echo "n1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin/index.php/sell/attachments/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCartRules&amp;token=749ba6b0f1ee96e9bd20213752b2a4fc\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin/index.php/sell/stocks/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li cl";
        // line 573
        echo "ass=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin/index.php/sell/customers/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin/index.php/sell/customers/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin/index.php/sell/addresses/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                           ";
        // line 602
        echo "                   
                  
                                                      
                  
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
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCustomerThreads&amp;token=952f98746e23ea028dab813bd5935537\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin/index.php/sell/customer-service/order-messages/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Order Messages
                                </a>
                          ";
        // line 631
        echo "    </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminReturn&amp;token=ab93666c08bf1f6b25fb57f6c72a3cd3\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
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
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"li";
        // line 672
        echo "nk-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin/index.php/improve/modules/manage?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin/index.php/improve/modules/manage?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin/index.php/improve/design/themes/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
          ";
        // line 702
        echo "            </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop/admin/index.php/improve/design/themes/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin/index.php/improve/design/mail_theme/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin/index.php/improve/design/cms-pages/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Pages
                                </a>
                              </li>

                                 ";
        // line 732
        echo "                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin/index.php/improve/design/modules/positions/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminImages&amp;token=6f6dd24ae15e2d2f8408b5d12b98b05a\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin/index.php/modules/link-widget/list?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin";
        // line 763
        echo "/index.php?controller=AdminCarriers&amp;token=627b89167de4e3429f0b96ba1c637427\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCarriers&amp;token=627b89167de4e3429f0b96ba1c637427\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin/index.php/improve/shipping/preferences/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelo";
        // line 795
        echo "ne has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin/index.php/improve/payment/payment_methods?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin/index.php/improve/payment/payment_methods?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin/index.php/improve/payment/preferences?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
        ";
        // line 825
        echo "          
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin/index.php/improve/international/localization/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin/index.php/improve/international/localization/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin/index.php/improve/international/zones/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Locations
                                </a>
                              </li>

                                        ";
        // line 855
        echo "                                          
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin/index.php/improve/international/taxes/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin/index.php/improve/international/translations/settings?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin/index.php/configure/shop/preferences/preferences?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </";
        // line 892
        echo "span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/preferences/preferences?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/order-preferences/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/product-preferences/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Product Settings
                                </a>
                              </l";
        // line 920
        echo "i>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/customer-preferences/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/contacts/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/seo-urls/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminSe";
        // line 950
        echo "archConf&amp;token=fb72e9702223dbdbb480e781b42f3d0a\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin/index.php/configure/advanced/system-information/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/system-information/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                            ";
        // line 982
        echo "  <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/performance/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/administration/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/emails/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/import/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
           ";
        // line 1012
        echo "                   
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/employees/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/sql-requests/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/logs/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/webservice-keys/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Webservice
                                </a>
                     ";
        // line 1041
        echo "         </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/feature-flags/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/security/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Security
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
                      <li class=\"breadcrumb-item\">Catalog</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin/index.php/sell/catalog/categories?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" aria-current=\"page\">Categories</a>
            </li>
                  </ol>
      </nav>
    

    <div cla";
        // line 1085
        echo "ss=\"title-row\">
      
          <h1 class=\"title\">
            Categories          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/prestashop/admin/index.php/sell/catalog/categories/new?id_parent=2&amp;_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\"                  title=\"Ajouter une catégorie\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Ajouter une catégorie
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminCategories%253Fversion%253D8.1.4%2526country%253Dfr/Aide?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\"
                   id=\"product_form_open_help\"
                >
                  Aide
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
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/prestashop/admin/index.php/sell/catalog/categories/new?id_parent=2&amp;_token=yBEr";
        // line 1129
        echo "hqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\"              title=\"Ajouter une catégorie\"            >
              Ajouter une catégorie
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminCategories%253Fversion%253D8.1.4%2526country%253Dfr/Aide?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\"
            >
              Aide
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
        // line 1158
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
        // line 1192
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 85
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1158
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1192
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__5c15e00fe1ee57e616681fd02a573212";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1439 => 1192,  1370 => 1158,  1335 => 85,  1320 => 1192,  1280 => 1158,  1249 => 1129,  1203 => 1085,  1157 => 1041,  1126 => 1012,  1094 => 982,  1060 => 950,  1028 => 920,  998 => 892,  959 => 855,  927 => 825,  895 => 795,  861 => 763,  828 => 732,  796 => 702,  764 => 672,  721 => 631,  690 => 602,  659 => 573,  623 => 539,  593 => 511,  560 => 480,  527 => 449,  483 => 407,  434 => 360,  389 => 317,  332 => 262,  285 => 217,  242 => 176,  226 => 162,  184 => 122,  142 => 85,  122 => 67,  95 => 42,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Categories • store</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminCategories\\';
    var iso_user = \\'fr\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'fr\\';
    var full_cldr_language_code = \\'fr-FR\\';
    var country_iso_code = \\'FR\\';
    var _PS_VERSION_ = \\'8.1.4\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'Une nouvelle commande a été passée sur votre boutique.\\';
    var order_number_msg = \\'Numéro de commande : \\';
    var total_msg = \\'Total : \\';
    var from_msg = \\'Du \\';
    var see_order_msg = \\'Afficher cette commande\\';
    var new_customer_msg = \\'Un nouveau client s\\\\\\'est inscrit sur votre boutique.\\';
    var customer_name_msg = \\'Nom du client : \\';
    var new_msg = \\'Un nouveau message a été posté sur votre boutique.\\';
    var see_msg = \\'Lire le message\\';
    var token = \\'1e94181a55617180d7e8255c6832b709\\';
    var currentIndex = \\'index.php?controller=AdminCategories\\';
    var employee_token = \\'4c097296ce084b2025447703872902eb\\';
    var choose_language_translate = \\'Choisissez la langue :\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/prestashop/admin/index.php/improve/modules/manage?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\\';
    var admin_notification_get_link = \\'/prestashop/admin/index.php/common/notifications?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/prestashop/admin/index.php/common/notifications/ack?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\\';
    var tab_modules_list = \\'\\';
    var' | raw }}{{ ' update_success_msg = \\'Mise à jour réussie\\';
    var search_product_msg = \\'Rechercher un produit\\';
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
      <link href=\"/prestashop/admin/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/prestashop\\\\/admin\\\\/\";
var baseDir = \"\\\\/prestashop\\\\/\";
var changeFormLanguageUrl = \"\\\\/prestashop\\\\/admin\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\\\u20ac\",\"numberSymbols\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\\\u00a0\\\\u00a4\",\"negativePattern\":\"-#,##0.00\\\\u00a0\\\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFracti' | raw }}{{ 'onDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
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
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin/themes/default/js/vendor/nv.d3.min.js\"></script>

  

' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-fr admincategories developer-mode\"
  data-base-url=\"/prestashop/admin/index.php\"  data-token=\"yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\">

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
          <a class=' | raw }}{{ '\"dropdown-item quick-row-link \"
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
        data-rand=\"106\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/categories\"
        data-post-link=\"http://localhost/prestashop/admin/index.php?controller=AdminQuickAccesses&token=6d3755e336ffe4af9824ab471f896be6\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Categories - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l\\'accès rapide
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
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\"' | raw }}{{ ' name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
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
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><' | raw }}{{ 'i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
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
             d' | raw }}{{ 'ata-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"197\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/categories\"
      data-post-link=\"http://localhost/prestashop/admin/index.php?controller=AdminQuickAccesses&token=6d3755e336ffe4af9824ab471f896be6\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Categories - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l\\'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin/index.php?controller=AdminQuickAccesses&token=6d3755e336ffe4af9824ab471f896be6\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Votre boutique est en mode debug.</strong></p><p class=&quot;text-left&quot;>Tous les messages et erreurs PHP sont affichés. Lorsque vous n&#039;en avez plus besoin, &lt;strong&gt;désactivez&lt;/strong&gt; ce mode.</p>\"
             href=\"/prestashop/admin/index.php/configure/advanced/performance/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Mode debug</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://' | raw }}{{ 'localhost/prestashop/\" target= \"_blank\">
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
                          <li class=\"nav-item\">
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
                          <div class=\"tab-pane active ' | raw }}{{ 'empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=30d145fa2cf542a530b839635c6da8e8\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s\\'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l\\'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l\\'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fibe' | raw }}{{ 'r_manual_record</i> _status_
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
        <span class=\"employee_profile\">Ravi de vous revoir Hedi</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin/index.php/configure/advanced/employees/1/edit?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin/index.php/configure/advanced/employees/toggle-navigation?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admin/inde' | raw }}{{ 'x.php?controller=AdminDashboard&amp;token=e4469283e6a658566779a46fdfe440d3\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminDashboard&amp;token=e4469283e6a658566779a46fdfe440d3\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin/index.php/sell/orders/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-le' | raw }}{{ 'veltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin/index.php/sell/orders/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin/index.php/sell/orders/invoices/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin/index.php/sell/orders/credit-slips/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin/index.php/sell/orders/delivery-slips/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                          ' | raw }}{{ '                  
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCarts&amp;token=30d145fa2cf542a530b839635c6da8e8\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin/index.php/sell/catalog/products?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin/index.php/sell/catalog/products?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Products
                                </a>
                              </li>

               ' | raw }}{{ '                                                                   
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin/index.php/sell/catalog/categories?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin/index.php/sell/catalog/monitoring/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminAttributesGroups&amp;token=d7108561c9f64c24f1823b1134f75bd4\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin/index.php/sell/catalog/brands/?_token=yBErhqHEJR' | raw }}{{ 'n1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin/index.php/sell/attachments/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCartRules&amp;token=749ba6b0f1ee96e9bd20213752b2a4fc\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin/index.php/sell/stocks/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li cl' | raw }}{{ 'ass=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin/index.php/sell/customers/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin/index.php/sell/customers/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin/index.php/sell/addresses/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                           ' | raw }}{{ '                   
                  
                                                      
                  
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
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCustomerThreads&amp;token=952f98746e23ea028dab813bd5935537\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin/index.php/sell/customer-service/order-messages/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Order Messages
                                </a>
                          ' | raw }}{{ '    </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminReturn&amp;token=ab93666c08bf1f6b25fb57f6c72a3cd3\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
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
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"li' | raw }}{{ 'nk-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin/index.php/improve/modules/manage?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin/index.php/improve/modules/manage?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin/index.php/improve/design/themes/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
          ' | raw }}{{ '            </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop/admin/index.php/improve/design/themes/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin/index.php/improve/design/mail_theme/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin/index.php/improve/design/cms-pages/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Pages
                                </a>
                              </li>

                                 ' | raw }}{{ '                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin/index.php/improve/design/modules/positions/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminImages&amp;token=6f6dd24ae15e2d2f8408b5d12b98b05a\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin/index.php/modules/link-widget/list?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin' | raw }}{{ '/index.php?controller=AdminCarriers&amp;token=627b89167de4e3429f0b96ba1c637427\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminCarriers&amp;token=627b89167de4e3429f0b96ba1c637427\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin/index.php/improve/shipping/preferences/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelo' | raw }}{{ 'ne has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin/index.php/improve/payment/payment_methods?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin/index.php/improve/payment/payment_methods?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin/index.php/improve/payment/preferences?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
        ' | raw }}{{ '          
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin/index.php/improve/international/localization/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin/index.php/improve/international/localization/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin/index.php/improve/international/zones/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Locations
                                </a>
                              </li>

                                        ' | raw }}{{ '                                          
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin/index.php/improve/international/taxes/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin/index.php/improve/international/translations/settings?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin/index.php/configure/shop/preferences/preferences?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </' | raw }}{{ 'span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/preferences/preferences?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/order-preferences/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/product-preferences/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Product Settings
                                </a>
                              </l' | raw }}{{ 'i>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/customer-preferences/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/contacts/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin/index.php/configure/shop/seo-urls/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin/index.php?controller=AdminSe' | raw }}{{ 'archConf&amp;token=fb72e9702223dbdbb480e781b42f3d0a\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin/index.php/configure/advanced/system-information/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/system-information/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                            ' | raw }}{{ '  <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/performance/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/administration/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/emails/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/import/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
           ' | raw }}{{ '                   
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/employees/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/sql-requests/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/logs/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/webservice-keys/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Webservice
                                </a>
                     ' | raw }}{{ '         </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/feature-flags/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin/index.php/configure/advanced/security/?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" class=\"link\"> Security
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
                      <li class=\"breadcrumb-item\">Catalog</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin/index.php/sell/catalog/categories?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\" aria-current=\"page\">Categories</a>
            </li>
                  </ol>
      </nav>
    

    <div cla' | raw }}{{ 'ss=\"title-row\">
      
          <h1 class=\"title\">
            Categories          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/prestashop/admin/index.php/sell/catalog/categories/new?id_parent=2&amp;_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\"                  title=\"Ajouter une catégorie\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Ajouter une catégorie
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminCategories%253Fversion%253D8.1.4%2526country%253Dfr/Aide?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\"
                   id=\"product_form_open_help\"
                >
                  Aide
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
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/prestashop/admin/index.php/sell/catalog/categories/new?id_parent=2&amp;_token=yBEr' | raw }}{{ 'hqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\"              title=\"Ajouter une catégorie\"            >
              Ajouter une catégorie
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminCategories%253Fversion%253D8.1.4%2526country%253Dfr/Aide?_token=yBErhqHEJRn1U4Fe_apgjNTcvhB3g5MveacbEwtYsSc\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n\\'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n\\'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
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
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__5c15e00fe1ee57e616681fd02a573212", "");
    }
}
