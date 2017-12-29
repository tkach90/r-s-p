<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 3,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Контакты',
    'longtitle' => '',
    'description' => '',
    'alias' => 'contacts',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 4,
    'menuindex' => 2,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1484303581,
    'editedby' => 1,
    'editedon' => 1484557957,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1484557957,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'contacts.php',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html lang="ru-RU">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Контакты компании Гео Влад - инженерные изыскания во Владимире и Владимирской области</title>
	
	<meta name="description" content="Свяжитесь со специалистами компании Гео Влад,  и получите бесплатную консультацию по вопросам инженерно-геологических изыскания и исследований во Владимире и Владимирской области." />
	
    <link href="/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="/css/magnific-popup.css" media="all" type="text/css">
	<link href="/css/style.css" type="text/css" rel="stylesheet" media="all">
	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	
	<!-- reCAPTCHA -->
<script type="text/javascript">

     //reCaptcha
    var resHome = 0;
    var resFooter = 0;
    var resContact = 0;
    function validateFormHome(){
         if (resHome!=1)
             {
              return false;
             } else {
                 resHome=0;
            };
        };
    var callbackHome = function (){
        resHome=1;

        };
        
    function validateFormFooter(){
        
         if (resFooter!=1)
             {
              return false;
             } else {
                 resFooter=0;
                };
        };
    var callbackFooter = function (){
        resFooter=1;
        
        };
        
    function validateFormContact(){
         if (resContact!=1)
             {
              return false;
             } else {
                 resContact=0;
            };
        };
    var callbackContact = function (){
        resContact=1;

        };
        
      var widgetCapthaFooter;
      var widgetCapthaHome;
      var widgetCapthaContact;
      var onloadCallback = function() {
         
        widgetCapthaFooter = grecaptcha.render(document.getElementById(\'footerCaptcha\'), {
          \'sitekey\' : \'6LdwTTQUAAAAAEfaO3P7sWSBQler3_v-jC42U1fM\',
          \'theme\' : \'dark\',
          \'size\' : \'compact\',
          \'callback\' : callbackFooter
        });
        
        
        
        if  (document.getElementById(\'homeCaptcha\')!==null){
        widgetCapthaHome = grecaptcha.render(document.getElementById(\'homeCaptcha\'), {
          \'sitekey\' : \'6LdwTTQUAAAAAEfaO3P7sWSBQler3_v-jC42U1fM\',
          \'callback\' : callbackHome      
        });
        };
        
        if  (document.getElementById(\'contactCaptcha\')!==null){
        widgetCapthaContact = grecaptcha.render(document.getElementById(\'contactCaptcha\'), {
                \'sitekey\' : \'6LdwTTQUAAAAAEfaO3P7sWSBQler3_v-jC42U1fM\',
                \'callback\' : callbackContact
        });
        };
        
      };
</script>

</head>
<body>
<header>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div class="navbar-brand"><a href="/"><div class="header-logo"><img src="/images/logo_white.png" alt="ГеоВлад" title="ГеоВлад"></div></a></div>
      <div class="navbar-text header-phone" ><a href="tel:74922222012"><span class="glyphicon glyphicon-earphone"></span> (4922) 22-20-12</a>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/">ГЛАВНАЯ</a></li>
        <li><a href="/ceny.php">ЦЕНЫ</a></li>
        <li><a href="/o-nas.php">О НАС</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">УСЛУГИ
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            
					<li><a href="/#ingenerno-geologicheskie">Инженерно-геологические изыскания</a></li>
					<li><a href="http://geo-vlad.ru/geologiya-uchastka.php">Геология участка</a></li>
					<li><a href="http://geo-vlad.ru/inzhenerno-geodezicheskie-izyskanija.php">Инженерно-геодезические изыскания</a></li>
					<li><a href="http://geo-vlad.ru/inzhenerno-ekologicheskie-izyskanija-vladimir.php">Инженерно-экологические изыскания</a></li>
					<li><a href="http://geo-vlad.ru/programma-ekologicheskogo-kontrolja.php">Программа экологического контроля</a></li>
					<li><a href="http://geo-vlad.ru/razrabotka-ekologicheskoj-dokumentacii.php">Разработка экологической документации</a></li>
					<li><a href="http://geo-vlad.ru/ekologicheskoe-proektirovanie.php">Экологическое проектирование</a></li>
					<li><a href="http://geo-vlad.ru/kompleksnoe-ekologicheskoe-soprovozhdenie.php">Комплексное экологическое сопровождение</a></li>
					<li><a href="http://geo-vlad.ru/kadastrovye-raboty-i-uslugi.php">Кадастровые работы и услуги</a></li>
					<li><a href="http://geo-vlad.ru/utochnenie-soglasovanie-granic-zemelnogo-uchastka.php">Уточнение и согласование границ земельного участка</a></li>
					<li><a href="http://geo-vlad.ru/topografo-geodezicheskaja-semka.php">Топографо-геодезическая съемка</a></li>
					<li><a href="http://geo-vlad.ru/geodezicheskaja-razbivka-osej.php">Геодезическая разбивка осей</a></li>
					<li><a href="http://geo-vlad.ru/gidrogeologicheskie-izyskanija.php">Гидрогеологические и гидрометеорологические изыскания</a></li>
					<li><a href="burenie-skvazhin-na-pesok.php">Бурение на песок</a></li>
          
          <li class="divider"></li>
          <li><a href="uslugi.php">ВСЕ УСЛУГИ</a></li>
         </ul>
      </li>
        
        
        <li><a href="/contacts.php">КОНТАКТЫ</a></li>
      </ul>
     
     <div class="navbar-text" style="float:right"><a href="mailto:geo-vlad17@yandex.ru"><span class="glyphicon glyphicon-envelope"></span>  geo-vlad17@yandex.ru</a></div>

    </div>
  </div>
</nav>
</header>
<main>
    
 <div class="container">
	<ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumps">
              <li itemprop="itemListElement" itemscope
                  itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/">
                <span itemprop="name">Главная</span></a>
                <meta itemprop="position" content="1" />
              </li>
			  <li itemprop="itemListElement" itemscope
                  itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="contacts.php">
                <span itemprop="name">Контакты</span></a>
                <meta itemprop="position" content="2" />
              </li>
            </ol>
</div>    

<div class="margin-block container ">
	
	    <div class="text-center"><h1 class="bordered">Контакты</h1></div>
                        <div class="col-md-6 home-contacts" >
                       
                      <div class="home-contacts-logo" ><img src="images/logo.png" alt="ГеоВлад" title="ГеоВлад"> </div>
                      
                      <p ><b><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></b><span > г. Владимир</span>, <span>ул. Разина, 21, оф. 301</span></p>
                      <p><b><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></b><a href="tel:74922222012"> +7 (4922) 22-20-12</a></p>
                      <p><b><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></b> <a href="mailto:geo-vlad17@yandex.ru"> geo-vlad17@yandex.ru</a></p>
                      <p ><b><span class="glyphicon glyphicon-time" aria-hidden="true">
							</span> </b> понедельник - суббота, с 8<sup>00</sup> до 19<sup>00</sup></p>
                    
            </div>        
    <div class="col-md-6 home-contact-form" id="contacts">
                      <div class="contact-form">
                          <form id="contact-form" action="/action-mail.php" method="post" enctype="multipart/form-data" onsubmit="return validateFormContact()">
                          <div class="home-input-group">
                             <label class="control-label"><strong>Ваше Имя<sup>*</sup></strong></label>
                                  <div class="home-input-group">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span><input type="text" placeholder="Иван Иванов" name="name" class="form-control" required>
                                  </div>
                                  <label class="control-label"><strong>Как с Вами связаться</strong> (укажите хотя бы один из вариантов)</label>
                                  <div class="home-input-group">
                                   <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><input type="text" placeholder="Ваш e-mail" name="email" class="form-control">
                                  </div>
                                  <div class="home-input-group">
                                   <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><input type="text" placeholder="Номер телефона" class="form-control" name="phone">
                                  </div>
                                </div>
                                <div class="home-input-group">
                                  <label class="control-label"><strong>Текст обращения<sup>*</sup></strong></label>
                                  <div class="home-input-group">
                                    <textarea name="question" form="contact-form" id="contact-form-textarea" placeholder="Ваш вопрос" required></textarea>
                                  </div>
                                </div>
                            <div class=\'contact-comments\'>*поле, обязательное для заполнения</div>
                            <div id="contactCaptcha"></div>
                            <div class="text-center">
                                <input type="submit" id="contact-form-submit" class="form-button" value="Отправить">   
                            </div>      
                              </form>
                      </div>      
                    </div>
</div>

<div class="container-fluid">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=ztxPSKtRcRdFHe-Paxr3sLLM826uJgbh&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
</div>


<script async type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "Инженерно-геологические изыскания во Владимире и Владимирской области",
  "image": "images/bg1.jpg",
  "description": "Заказывайте инженерно-геологические изыскания и исследования во Владимире и Владимирской области по выгодным ценам.",
    "brand": {
    "@type": "Organization",
    "name": "ГеоВлад"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.4",
    "reviewCount": "22"
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "RUB",
    "price": "25000.00",
    "priceValidUntil": "2017-03-03",
    "availability": "http://schema.org/InStock",
    "seller": {
      "@type": "Organization",
      "name": "ГеоВлад"
    }
  }
}
</script>
</main>

<footer>	
		<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-push-2" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="ГеоВлад">
				    <link itemprop="url" href="http://geo-vlad.ru">
					
					<div class="footer-logo" ><img src="images/logo_white.png" alt="ГеоВлад" title="ГеоВлад"></div> 
                         
						<ul class=\'footer-contacts\'> 
						<li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						    <meta itemprop="addressCountry" content="Россия">
							<meta itemprop="addressRegion" content="Владимирская область">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true">
							</span>
						    <span itemprop="addressLocality">г. Владимир</span>, <span itemprop="streetAddress">ул. Разина, 21, оф. 301</span>
							</li>
							<li ><span class="glyphicon glyphicon-time" aria-hidden="true">
							</span> Пн-Сб 08.00-19.00</li>							
							<li>
							<span class="glyphicon glyphicon-earphone" aria-hidden="true">
							</span>
							<span><a href="tel:+74922222012" itemprop="telephone">+7 (4922) 22-20-12</a>
							</span>
							</li>
							<li>
							<span class="glyphicon glyphicon-envelope" aria-hidden="true">
							</span>
							<a href="mailto:geo-vlad17@yandex.ru">
							<span itemprop="email">geo-vlad17@yandex.ru	</span>
							</a>
							
							</li>
						</ul>
					
					</div>

				
	
				<div class="col-md-4 col-md-push-2">
				<div class="h3 footer-title">Задайте вопрос</div>
				  				  <div class="footer-form">
				  	 <form id="footer-form" action="action-mail.php" method="post" enctype="multipart/form-data" onsubmit="return validateFormFooter()">
                          <div class="form-group">
                             <label class="control-label">Ваше Имя<sup>*</sup></label>
                                  <div class="footer-input-group">

                                    <span class="glyphicon glyphicon-user pos" aria-hidden="true"></span><input type="text" placeholder="Иван Иванов" name="name" class="form-control" required>
                                  </div>
                                  <label class="control-label">Как с вами связаться:</label>
                                  <div class="footer-input-group">
                                    <span class="glyphicon glyphicon-envelope pos" aria-hidden="true"></span><input type="text" placeholder="Ваш e-mail" name="email" class="form-control">
                                  </div>
                                  <div class="footer-input-group">
                                   <span class="glyphicon glyphicon-earphone pos" aria-hidden="true"></span><input type="text" placeholder="Номер телефона" class="form-control" name="phone">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label">Текст сообщения<sup>*</sup></label>
                                  <div class="footer-input-group">
                                    <textarea name="question" form="footer-form" id="contact-form-textarea" placeholder="Ваш вопрос" required></textarea>
                                  </div>
                                </div>
                                <div id="footerCaptcha"></div>
                                <div style="text-align:center"><input type="submit" value="Отправить">   
                            </div>      
                              </form>
                    </div>
				  </div>
				

		</div>
		</div>
	</footer>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|PT+Sans:400,400i,700&amp;subset=cyrillic" rel="stylesheet">
    <script src="https://use.fontawesome.com/01c5d59dc9.js"></script>
    <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    
    
<script>
$(document).ready(function() {
	$(".item-lib").magnificPopup({
		type: \'image\',
		gallery : {
			enabled: true
		},
		removalDelay: 300,
		mainClass: \'mfp-fade\'

	});
});
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter41879414 = new Ya.Metrika({
                    id:41879414,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/41879414" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-90227768-1\', \'auto\');
  ga(\'send\', \'pageview\');

</script>

<script type="text/javascript">
var ZCallbackWidgetLinkId  = \'12ace767b09d603512f370af7cc98407\';
var ZCallbackWidgetDomain  = \'my.zadarma.com\';
(function(){
    var lt = document.createElement(\'script\');
    lt.type =\'text/javascript\';
    lt.charset = \'utf-8\';
    lt.async = true;
    lt.src = \'https://\' + ZCallbackWidgetDomain + \'/callbackWidget/js/main.min.js?unq=\'+Math.floor(Math.random(0,1000)*1000);
    var sc = document.getElementsByTagName(\'script\')[0];
    if (sc) sc.parentNode.insertBefore(lt, sc);
    else document.documentElement.firstChild.appendChild(lt);
})();
</script>


</body>
</html>
	
</body>
</html>
',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.php',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[getImageList? 
            &tvname=`dropdown-list`
            &docid=`1`
            &tpl=`@CODE:
					<li><a href="[[+url]]">[[+title]]</a></li>`
            ]]' => '
					<li><a href="/#ingenerno-geologicheskie">Инженерно-геологические изыскания</a></li>
					<li><a href="http://geo-vlad.ru/geologiya-uchastka.php">Геология участка</a></li>
					<li><a href="http://geo-vlad.ru/inzhenerno-geodezicheskie-izyskanija.php">Инженерно-геодезические изыскания</a></li>
					<li><a href="http://geo-vlad.ru/inzhenerno-ekologicheskie-izyskanija-vladimir.php">Инженерно-экологические изыскания</a></li>
					<li><a href="http://geo-vlad.ru/programma-ekologicheskogo-kontrolja.php">Программа экологического контроля</a></li>
					<li><a href="http://geo-vlad.ru/razrabotka-ekologicheskoj-dokumentacii.php">Разработка экологической документации</a></li>
					<li><a href="http://geo-vlad.ru/ekologicheskoe-proektirovanie.php">Экологическое проектирование</a></li>
					<li><a href="http://geo-vlad.ru/kompleksnoe-ekologicheskoe-soprovozhdenie.php">Комплексное экологическое сопровождение</a></li>
					<li><a href="http://geo-vlad.ru/kadastrovye-raboty-i-uslugi.php">Кадастровые работы и услуги</a></li>
					<li><a href="http://geo-vlad.ru/utochnenie-soglasovanie-granic-zemelnogo-uchastka.php">Уточнение и согласование границ земельного участка</a></li>
					<li><a href="http://geo-vlad.ru/topografo-geodezicheskaja-semka.php">Топографо-геодезическая съемка</a></li>
					<li><a href="http://geo-vlad.ru/geodezicheskaja-razbivka-osej.php">Геодезическая разбивка осей</a></li>
					<li><a href="http://geo-vlad.ru/gidrogeologicheskie-izyskanija.php">Гидрогеологические и гидрометеорологические изыскания</a></li>
					<li><a href="burenie-skvazhin-na-pesok.php">Бурение на песок</a></li>',
    '[[$header]]' => '<link href="/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="/css/magnific-popup.css" media="all" type="text/css">
	<link href="/css/style.css" type="text/css" rel="stylesheet" media="all">
	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	
	<!-- reCAPTCHA -->
<script type="text/javascript">

     //reCaptcha
    var resHome = 0;
    var resFooter = 0;
    var resContact = 0;
    function validateFormHome(){
         if (resHome!=1)
             {
              return false;
             } else {
                 resHome=0;
            };
        };
    var callbackHome = function (){
        resHome=1;

        };
        
    function validateFormFooter(){
        
         if (resFooter!=1)
             {
              return false;
             } else {
                 resFooter=0;
                };
        };
    var callbackFooter = function (){
        resFooter=1;
        
        };
        
    function validateFormContact(){
         if (resContact!=1)
             {
              return false;
             } else {
                 resContact=0;
            };
        };
    var callbackContact = function (){
        resContact=1;

        };
        
      var widgetCapthaFooter;
      var widgetCapthaHome;
      var widgetCapthaContact;
      var onloadCallback = function() {
         
        widgetCapthaFooter = grecaptcha.render(document.getElementById(\'footerCaptcha\'), {
          \'sitekey\' : \'6LdwTTQUAAAAAEfaO3P7sWSBQler3_v-jC42U1fM\',
          \'theme\' : \'dark\',
          \'size\' : \'compact\',
          \'callback\' : callbackFooter
        });
        
        
        
        if  (document.getElementById(\'homeCaptcha\')!==null){
        widgetCapthaHome = grecaptcha.render(document.getElementById(\'homeCaptcha\'), {
          \'sitekey\' : \'6LdwTTQUAAAAAEfaO3P7sWSBQler3_v-jC42U1fM\',
          \'callback\' : callbackHome      
        });
        };
        
        if  (document.getElementById(\'contactCaptcha\')!==null){
        widgetCapthaContact = grecaptcha.render(document.getElementById(\'contactCaptcha\'), {
                \'sitekey\' : \'6LdwTTQUAAAAAEfaO3P7sWSBQler3_v-jC42U1fM\',
                \'callback\' : callbackContact
        });
        };
        
      };
</script>

</head>
<body>
<header>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div class="navbar-brand"><a href="/"><div class="header-logo"><img src="/images/logo_white.png" alt="ГеоВлад" title="ГеоВлад"></div></a></div>
      <div class="navbar-text header-phone" ><a href="tel:74922222012"><span class="glyphicon glyphicon-earphone"></span> (4922) 22-20-12</a>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/">ГЛАВНАЯ</a></li>
        <li><a href="/ceny.php">ЦЕНЫ</a></li>
        <li><a href="/o-nas.php">О НАС</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">УСЛУГИ
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            
					<li><a href="/#ingenerno-geologicheskie">Инженерно-геологические изыскания</a></li>
					<li><a href="http://geo-vlad.ru/geologiya-uchastka.php">Геология участка</a></li>
					<li><a href="http://geo-vlad.ru/inzhenerno-geodezicheskie-izyskanija.php">Инженерно-геодезические изыскания</a></li>
					<li><a href="http://geo-vlad.ru/inzhenerno-ekologicheskie-izyskanija-vladimir.php">Инженерно-экологические изыскания</a></li>
					<li><a href="http://geo-vlad.ru/programma-ekologicheskogo-kontrolja.php">Программа экологического контроля</a></li>
					<li><a href="http://geo-vlad.ru/razrabotka-ekologicheskoj-dokumentacii.php">Разработка экологической документации</a></li>
					<li><a href="http://geo-vlad.ru/ekologicheskoe-proektirovanie.php">Экологическое проектирование</a></li>
					<li><a href="http://geo-vlad.ru/kompleksnoe-ekologicheskoe-soprovozhdenie.php">Комплексное экологическое сопровождение</a></li>
					<li><a href="http://geo-vlad.ru/kadastrovye-raboty-i-uslugi.php">Кадастровые работы и услуги</a></li>
					<li><a href="http://geo-vlad.ru/utochnenie-soglasovanie-granic-zemelnogo-uchastka.php">Уточнение и согласование границ земельного участка</a></li>
					<li><a href="http://geo-vlad.ru/topografo-geodezicheskaja-semka.php">Топографо-геодезическая съемка</a></li>
					<li><a href="http://geo-vlad.ru/geodezicheskaja-razbivka-osej.php">Геодезическая разбивка осей</a></li>
					<li><a href="http://geo-vlad.ru/gidrogeologicheskie-izyskanija.php">Гидрогеологические и гидрометеорологические изыскания</a></li>
					<li><a href="burenie-skvazhin-na-pesok.php">Бурение на песок</a></li>
          
          <li class="divider"></li>
          <li><a href="uslugi.php">ВСЕ УСЛУГИ</a></li>
         </ul>
      </li>
        
        
        <li><a href="/contacts.php">КОНТАКТЫ</a></li>
      </ul>
     
     <div class="navbar-text" style="float:right"><a href="mailto:geo-vlad17@yandex.ru"><span class="glyphicon glyphicon-envelope"></span>  geo-vlad17@yandex.ru</a></div>

    </div>
  </div>
</nav>
</header>
<main>',
    '[[$contact-form]]' => '<div class="col-md-6 home-contacts" >
                       
                      <div class="home-contacts-logo" ><img src="images/logo.png" alt="ГеоВлад" title="ГеоВлад"> </div>
                      
                      <p ><b><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></b><span > г. Владимир</span>, <span>ул. Разина, 21, оф. 301</span></p>
                      <p><b><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></b><a href="tel:74922222012"> +7 (4922) 22-20-12</a></p>
                      <p><b><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></b> <a href="mailto:geo-vlad17@yandex.ru"> geo-vlad17@yandex.ru</a></p>
                      <p ><b><span class="glyphicon glyphicon-time" aria-hidden="true">
							</span> </b> понедельник - суббота, с 8<sup>00</sup> до 19<sup>00</sup></p>
                    
            </div>        
    <div class="col-md-6 home-contact-form" id="contacts">
                      <div class="contact-form">
                          <form id="contact-form" action="/action-mail.php" method="post" enctype="multipart/form-data" onsubmit="return validateFormContact()">
                          <div class="home-input-group">
                             <label class="control-label"><strong>Ваше Имя<sup>*</sup></strong></label>
                                  <div class="home-input-group">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span><input type="text" placeholder="Иван Иванов" name="name" class="form-control" required>
                                  </div>
                                  <label class="control-label"><strong>Как с Вами связаться</strong> (укажите хотя бы один из вариантов)</label>
                                  <div class="home-input-group">
                                   <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><input type="text" placeholder="Ваш e-mail" name="email" class="form-control">
                                  </div>
                                  <div class="home-input-group">
                                   <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><input type="text" placeholder="Номер телефона" class="form-control" name="phone">
                                  </div>
                                </div>
                                <div class="home-input-group">
                                  <label class="control-label"><strong>Текст обращения<sup>*</sup></strong></label>
                                  <div class="home-input-group">
                                    <textarea name="question" form="contact-form" id="contact-form-textarea" placeholder="Ваш вопрос" required></textarea>
                                  </div>
                                </div>
                            <div class=\'contact-comments\'>*поле, обязательное для заполнения</div>
                            <div id="contactCaptcha"></div>
                            <div class="text-center">
                                <input type="submit" id="contact-form-submit" class="form-button" value="Отправить">   
                            </div>      
                              </form>
                      </div>      
                    </div>',
    '[[$footer]]' => '</main>

<footer>	
		<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-push-2" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="ГеоВлад">
				    <link itemprop="url" href="http://geo-vlad.ru">
					
					<div class="footer-logo" ><img src="images/logo_white.png" alt="ГеоВлад" title="ГеоВлад"></div> 
                         
						<ul class=\'footer-contacts\'> 
						<li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						    <meta itemprop="addressCountry" content="Россия">
							<meta itemprop="addressRegion" content="Владимирская область">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true">
							</span>
						    <span itemprop="addressLocality">г. Владимир</span>, <span itemprop="streetAddress">ул. Разина, 21, оф. 301</span>
							</li>
							<li ><span class="glyphicon glyphicon-time" aria-hidden="true">
							</span> Пн-Сб 08.00-19.00</li>							
							<li>
							<span class="glyphicon glyphicon-earphone" aria-hidden="true">
							</span>
							<span><a href="tel:+74922222012" itemprop="telephone">+7 (4922) 22-20-12</a>
							</span>
							</li>
							<li>
							<span class="glyphicon glyphicon-envelope" aria-hidden="true">
							</span>
							<a href="mailto:geo-vlad17@yandex.ru">
							<span itemprop="email">geo-vlad17@yandex.ru	</span>
							</a>
							
							</li>
						</ul>
					
					</div>

				
	
				<div class="col-md-4 col-md-push-2">
				<div class="h3 footer-title">Задайте вопрос</div>
				  				  <div class="footer-form">
				  	 <form id="footer-form" action="action-mail.php" method="post" enctype="multipart/form-data" onsubmit="return validateFormFooter()">
                          <div class="form-group">
                             <label class="control-label">Ваше Имя<sup>*</sup></label>
                                  <div class="footer-input-group">

                                    <span class="glyphicon glyphicon-user pos" aria-hidden="true"></span><input type="text" placeholder="Иван Иванов" name="name" class="form-control" required>
                                  </div>
                                  <label class="control-label">Как с вами связаться:</label>
                                  <div class="footer-input-group">
                                    <span class="glyphicon glyphicon-envelope pos" aria-hidden="true"></span><input type="text" placeholder="Ваш e-mail" name="email" class="form-control">
                                  </div>
                                  <div class="footer-input-group">
                                   <span class="glyphicon glyphicon-earphone pos" aria-hidden="true"></span><input type="text" placeholder="Номер телефона" class="form-control" name="phone">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label">Текст сообщения<sup>*</sup></label>
                                  <div class="footer-input-group">
                                    <textarea name="question" form="footer-form" id="contact-form-textarea" placeholder="Ваш вопрос" required></textarea>
                                  </div>
                                </div>
                                <div id="footerCaptcha"></div>
                                <div style="text-align:center"><input type="submit" value="Отправить">   
                            </div>      
                              </form>
                    </div>
				  </div>
				

		</div>
		</div>
	</footer>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|PT+Sans:400,400i,700&amp;subset=cyrillic" rel="stylesheet">
    <script src="https://use.fontawesome.com/01c5d59dc9.js"></script>
    <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    
    
<script>
$(document).ready(function() {
	$(".item-lib").magnificPopup({
		type: \'image\',
		gallery : {
			enabled: true
		},
		removalDelay: 300,
		mainClass: \'mfp-fade\'

	});
});
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter41879414 = new Ya.Metrika({
                    id:41879414,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/41879414" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-90227768-1\', \'auto\');
  ga(\'send\', \'pageview\');

</script>

<script type="text/javascript">
var ZCallbackWidgetLinkId  = \'12ace767b09d603512f370af7cc98407\';
var ZCallbackWidgetDomain  = \'my.zadarma.com\';
(function(){
    var lt = document.createElement(\'script\');
    lt.type =\'text/javascript\';
    lt.charset = \'utf-8\';
    lt.async = true;
    lt.src = \'https://\' + ZCallbackWidgetDomain + \'/callbackWidget/js/main.min.js?unq=\'+Math.floor(Math.random(0,1000)*1000);
    var sc = document.getElementsByTagName(\'script\')[0];
    if (sc) sc.parentNode.insertBefore(lt, sc);
    else document.documentElement.firstChild.appendChild(lt);
})();
</script>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<link href="/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="/css/magnific-popup.css" media="all" type="text/css">
	<link href="/css/style.css" type="text/css" rel="stylesheet" media="all">
	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	
	<!-- reCAPTCHA -->
<script type="text/javascript">

     //reCaptcha
    var resHome = 0;
    var resFooter = 0;
    var resContact = 0;
    function validateFormHome(){
         if (resHome!=1)
             {
              return false;
             } else {
                 resHome=0;
            };
        };
    var callbackHome = function (){
        resHome=1;

        };
        
    function validateFormFooter(){
        
         if (resFooter!=1)
             {
              return false;
             } else {
                 resFooter=0;
                };
        };
    var callbackFooter = function (){
        resFooter=1;
        
        };
        
    function validateFormContact(){
         if (resContact!=1)
             {
              return false;
             } else {
                 resContact=0;
            };
        };
    var callbackContact = function (){
        resContact=1;

        };
        
      var widgetCapthaFooter;
      var widgetCapthaHome;
      var widgetCapthaContact;
      var onloadCallback = function() {
         
        widgetCapthaFooter = grecaptcha.render(document.getElementById(\'footerCaptcha\'), {
          \'sitekey\' : \'6LdwTTQUAAAAAEfaO3P7sWSBQler3_v-jC42U1fM\',
          \'theme\' : \'dark\',
          \'size\' : \'compact\',
          \'callback\' : callbackFooter
        });
        
        
        
        if  (document.getElementById(\'homeCaptcha\')!==null){
        widgetCapthaHome = grecaptcha.render(document.getElementById(\'homeCaptcha\'), {
          \'sitekey\' : \'6LdwTTQUAAAAAEfaO3P7sWSBQler3_v-jC42U1fM\',
          \'callback\' : callbackHome      
        });
        };
        
        if  (document.getElementById(\'contactCaptcha\')!==null){
        widgetCapthaContact = grecaptcha.render(document.getElementById(\'contactCaptcha\'), {
                \'sitekey\' : \'6LdwTTQUAAAAAEfaO3P7sWSBQler3_v-jC42U1fM\',
                \'callback\' : callbackContact
        });
        };
        
      };
</script>

</head>
<body>
<header>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div class="navbar-brand"><a href="/"><div class="header-logo"><img src="/images/logo_white.png" alt="ГеоВлад" title="ГеоВлад"></div></a></div>
      <div class="navbar-text header-phone" ><a href="tel:74922222012"><span class="glyphicon glyphicon-earphone"></span> (4922) 22-20-12</a>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/">ГЛАВНАЯ</a></li>
        <li><a href="/ceny.php">ЦЕНЫ</a></li>
        <li><a href="/o-nas.php">О НАС</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">УСЛУГИ
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            [[getImageList? 
            &tvname=`dropdown-list`
            &docid=`1`
            &tpl=`@CODE:
					<li><a href="[[+url]]">[[+title]]</a></li>`
            ]]
          
          <li class="divider"></li>
          <li><a href="uslugi.php">ВСЕ УСЛУГИ</a></li>
         </ul>
      </li>
        
        
        <li><a href="/contacts.php">КОНТАКТЫ</a></li>
      </ul>
     
     <div class="navbar-text" style="float:right"><a href="mailto:geo-vlad17@yandex.ru"><span class="glyphicon glyphicon-envelope"></span>  geo-vlad17@yandex.ru</a></div>

    </div>
  </div>
</nav>
</header>
<main>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<link href="/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="/css/magnific-popup.css" media="all" type="text/css">
	<link href="/css/style.css" type="text/css" rel="stylesheet" media="all">
	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	
	<!-- reCAPTCHA -->
<script type="text/javascript">

     //reCaptcha
    var resHome = 0;
    var resFooter = 0;
    var resContact = 0;
    function validateFormHome(){
         if (resHome!=1)
             {
              return false;
             } else {
                 resHome=0;
            };
        };
    var callbackHome = function (){
        resHome=1;

        };
        
    function validateFormFooter(){
        
         if (resFooter!=1)
             {
              return false;
             } else {
                 resFooter=0;
                };
        };
    var callbackFooter = function (){
        resFooter=1;
        
        };
        
    function validateFormContact(){
         if (resContact!=1)
             {
              return false;
             } else {
                 resContact=0;
            };
        };
    var callbackContact = function (){
        resContact=1;

        };
        
      var widgetCapthaFooter;
      var widgetCapthaHome;
      var widgetCapthaContact;
      var onloadCallback = function() {
         
        widgetCapthaFooter = grecaptcha.render(document.getElementById(\'footerCaptcha\'), {
          \'sitekey\' : \'6LdwTTQUAAAAAEfaO3P7sWSBQler3_v-jC42U1fM\',
          \'theme\' : \'dark\',
          \'size\' : \'compact\',
          \'callback\' : callbackFooter
        });
        
        
        
        if  (document.getElementById(\'homeCaptcha\')!==null){
        widgetCapthaHome = grecaptcha.render(document.getElementById(\'homeCaptcha\'), {
          \'sitekey\' : \'6LdwTTQUAAAAAEfaO3P7sWSBQler3_v-jC42U1fM\',
          \'callback\' : callbackHome      
        });
        };
        
        if  (document.getElementById(\'contactCaptcha\')!==null){
        widgetCapthaContact = grecaptcha.render(document.getElementById(\'contactCaptcha\'), {
                \'sitekey\' : \'6LdwTTQUAAAAAEfaO3P7sWSBQler3_v-jC42U1fM\',
                \'callback\' : callbackContact
        });
        };
        
      };
</script>

</head>
<body>
<header>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div class="navbar-brand"><a href="/"><div class="header-logo"><img src="/images/logo_white.png" alt="ГеоВлад" title="ГеоВлад"></div></a></div>
      <div class="navbar-text header-phone" ><a href="tel:74922222012"><span class="glyphicon glyphicon-earphone"></span> (4922) 22-20-12</a>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/">ГЛАВНАЯ</a></li>
        <li><a href="/ceny.php">ЦЕНЫ</a></li>
        <li><a href="/o-nas.php">О НАС</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">УСЛУГИ
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            [[getImageList? 
            &tvname=`dropdown-list`
            &docid=`1`
            &tpl=`@CODE:
					<li><a href="[[+url]]">[[+title]]</a></li>`
            ]]
          
          <li class="divider"></li>
          <li><a href="uslugi.php">ВСЕ УСЛУГИ</a></li>
         </ul>
      </li>
        
        
        <li><a href="/contacts.php">КОНТАКТЫ</a></li>
      </ul>
     
     <div class="navbar-text" style="float:right"><a href="mailto:geo-vlad17@yandex.ru"><span class="glyphicon glyphicon-envelope"></span>  geo-vlad17@yandex.ru</a></div>

    </div>
  </div>
</nav>
</header>
<main>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'contact-form' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'contact-form',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="col-md-6 home-contacts" >
                       
                      <div class="home-contacts-logo" ><img src="images/logo.png" alt="ГеоВлад" title="ГеоВлад"> </div>
                      
                      <p ><b><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></b><span > г. Владимир</span>, <span>ул. Разина, 21, оф. 301</span></p>
                      <p><b><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></b><a href="tel:74922222012"> +7 (4922) 22-20-12</a></p>
                      <p><b><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></b> <a href="mailto:geo-vlad17@yandex.ru"> geo-vlad17@yandex.ru</a></p>
                      <p ><b><span class="glyphicon glyphicon-time" aria-hidden="true">
							</span> </b> понедельник - суббота, с 8<sup>00</sup> до 19<sup>00</sup></p>
                    
            </div>        
    <div class="col-md-6 home-contact-form" id="contacts">
                      <div class="contact-form">
                          <form id="contact-form" action="/action-mail.php" method="post" enctype="multipart/form-data" onsubmit="return validateFormContact()">
                          <div class="home-input-group">
                             <label class="control-label"><strong>Ваше Имя<sup>*</sup></strong></label>
                                  <div class="home-input-group">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span><input type="text" placeholder="Иван Иванов" name="name" class="form-control" required>
                                  </div>
                                  <label class="control-label"><strong>Как с Вами связаться</strong> (укажите хотя бы один из вариантов)</label>
                                  <div class="home-input-group">
                                   <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><input type="text" placeholder="Ваш e-mail" name="email" class="form-control">
                                  </div>
                                  <div class="home-input-group">
                                   <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><input type="text" placeholder="Номер телефона" class="form-control" name="phone">
                                  </div>
                                </div>
                                <div class="home-input-group">
                                  <label class="control-label"><strong>Текст обращения<sup>*</sup></strong></label>
                                  <div class="home-input-group">
                                    <textarea name="question" form="contact-form" id="contact-form-textarea" placeholder="Ваш вопрос" required></textarea>
                                  </div>
                                </div>
                            <div class=\'contact-comments\'>*поле, обязательное для заполнения</div>
                            <div id="contactCaptcha"></div>
                            <div class="text-center">
                                <input type="submit" id="contact-form-submit" class="form-button" value="Отправить">   
                            </div>      
                              </form>
                      </div>      
                    </div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="col-md-6 home-contacts" >
                       
                      <div class="home-contacts-logo" ><img src="images/logo.png" alt="ГеоВлад" title="ГеоВлад"> </div>
                      
                      <p ><b><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></b><span > г. Владимир</span>, <span>ул. Разина, 21, оф. 301</span></p>
                      <p><b><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></b><a href="tel:74922222012"> +7 (4922) 22-20-12</a></p>
                      <p><b><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></b> <a href="mailto:geo-vlad17@yandex.ru"> geo-vlad17@yandex.ru</a></p>
                      <p ><b><span class="glyphicon glyphicon-time" aria-hidden="true">
							</span> </b> понедельник - суббота, с 8<sup>00</sup> до 19<sup>00</sup></p>
                    
            </div>        
    <div class="col-md-6 home-contact-form" id="contacts">
                      <div class="contact-form">
                          <form id="contact-form" action="/action-mail.php" method="post" enctype="multipart/form-data" onsubmit="return validateFormContact()">
                          <div class="home-input-group">
                             <label class="control-label"><strong>Ваше Имя<sup>*</sup></strong></label>
                                  <div class="home-input-group">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span><input type="text" placeholder="Иван Иванов" name="name" class="form-control" required>
                                  </div>
                                  <label class="control-label"><strong>Как с Вами связаться</strong> (укажите хотя бы один из вариантов)</label>
                                  <div class="home-input-group">
                                   <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><input type="text" placeholder="Ваш e-mail" name="email" class="form-control">
                                  </div>
                                  <div class="home-input-group">
                                   <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><input type="text" placeholder="Номер телефона" class="form-control" name="phone">
                                  </div>
                                </div>
                                <div class="home-input-group">
                                  <label class="control-label"><strong>Текст обращения<sup>*</sup></strong></label>
                                  <div class="home-input-group">
                                    <textarea name="question" form="contact-form" id="contact-form-textarea" placeholder="Ваш вопрос" required></textarea>
                                  </div>
                                </div>
                            <div class=\'contact-comments\'>*поле, обязательное для заполнения</div>
                            <div id="contactCaptcha"></div>
                            <div class="text-center">
                                <input type="submit" id="contact-form-submit" class="form-button" value="Отправить">   
                            </div>      
                              </form>
                      </div>      
                    </div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '</main>

<footer>	
		<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-push-2" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="ГеоВлад">
				    <link itemprop="url" href="http://geo-vlad.ru">
					
					<div class="footer-logo" ><img src="images/logo_white.png" alt="ГеоВлад" title="ГеоВлад"></div> 
                         
						<ul class=\'footer-contacts\'> 
						<li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						    <meta itemprop="addressCountry" content="Россия">
							<meta itemprop="addressRegion" content="Владимирская область">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true">
							</span>
						    <span itemprop="addressLocality">г. Владимир</span>, <span itemprop="streetAddress">ул. Разина, 21, оф. 301</span>
							</li>
							<li ><span class="glyphicon glyphicon-time" aria-hidden="true">
							</span> Пн-Сб 08.00-19.00</li>							
							<li>
							<span class="glyphicon glyphicon-earphone" aria-hidden="true">
							</span>
							<span><a href="tel:+74922222012" itemprop="telephone">+7 (4922) 22-20-12</a>
							</span>
							</li>
							<li>
							<span class="glyphicon glyphicon-envelope" aria-hidden="true">
							</span>
							<a href="mailto:geo-vlad17@yandex.ru">
							<span itemprop="email">geo-vlad17@yandex.ru	</span>
							</a>
							
							</li>
						</ul>
					
					</div>

				
	
				<div class="col-md-4 col-md-push-2">
				<div class="h3 footer-title">Задайте вопрос</div>
				  				  <div class="footer-form">
				  	 <form id="footer-form" action="action-mail.php" method="post" enctype="multipart/form-data" onsubmit="return validateFormFooter()">
                          <div class="form-group">
                             <label class="control-label">Ваше Имя<sup>*</sup></label>
                                  <div class="footer-input-group">

                                    <span class="glyphicon glyphicon-user pos" aria-hidden="true"></span><input type="text" placeholder="Иван Иванов" name="name" class="form-control" required>
                                  </div>
                                  <label class="control-label">Как с вами связаться:</label>
                                  <div class="footer-input-group">
                                    <span class="glyphicon glyphicon-envelope pos" aria-hidden="true"></span><input type="text" placeholder="Ваш e-mail" name="email" class="form-control">
                                  </div>
                                  <div class="footer-input-group">
                                   <span class="glyphicon glyphicon-earphone pos" aria-hidden="true"></span><input type="text" placeholder="Номер телефона" class="form-control" name="phone">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label">Текст сообщения<sup>*</sup></label>
                                  <div class="footer-input-group">
                                    <textarea name="question" form="footer-form" id="contact-form-textarea" placeholder="Ваш вопрос" required></textarea>
                                  </div>
                                </div>
                                <div id="footerCaptcha"></div>
                                <div style="text-align:center"><input type="submit" value="Отправить">   
                            </div>      
                              </form>
                    </div>
				  </div>
				

		</div>
		</div>
	</footer>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|PT+Sans:400,400i,700&amp;subset=cyrillic" rel="stylesheet">
    <script src="https://use.fontawesome.com/01c5d59dc9.js"></script>
    <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    
    
<script>
$(document).ready(function() {
	$(".item-lib").magnificPopup({
		type: \'image\',
		gallery : {
			enabled: true
		},
		removalDelay: 300,
		mainClass: \'mfp-fade\'

	});
});
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter41879414 = new Ya.Metrika({
                    id:41879414,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/41879414" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-90227768-1\', \'auto\');
  ga(\'send\', \'pageview\');

</script>

<script type="text/javascript">
var ZCallbackWidgetLinkId  = \'12ace767b09d603512f370af7cc98407\';
var ZCallbackWidgetDomain  = \'my.zadarma.com\';
(function(){
    var lt = document.createElement(\'script\');
    lt.type =\'text/javascript\';
    lt.charset = \'utf-8\';
    lt.async = true;
    lt.src = \'https://\' + ZCallbackWidgetDomain + \'/callbackWidget/js/main.min.js?unq=\'+Math.floor(Math.random(0,1000)*1000);
    var sc = document.getElementsByTagName(\'script\')[0];
    if (sc) sc.parentNode.insertBefore(lt, sc);
    else document.documentElement.firstChild.appendChild(lt);
})();
</script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '</main>

<footer>	
		<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-push-2" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="ГеоВлад">
				    <link itemprop="url" href="http://geo-vlad.ru">
					
					<div class="footer-logo" ><img src="images/logo_white.png" alt="ГеоВлад" title="ГеоВлад"></div> 
                         
						<ul class=\'footer-contacts\'> 
						<li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						    <meta itemprop="addressCountry" content="Россия">
							<meta itemprop="addressRegion" content="Владимирская область">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true">
							</span>
						    <span itemprop="addressLocality">г. Владимир</span>, <span itemprop="streetAddress">ул. Разина, 21, оф. 301</span>
							</li>
							<li ><span class="glyphicon glyphicon-time" aria-hidden="true">
							</span> Пн-Сб 08.00-19.00</li>							
							<li>
							<span class="glyphicon glyphicon-earphone" aria-hidden="true">
							</span>
							<span><a href="tel:+74922222012" itemprop="telephone">+7 (4922) 22-20-12</a>
							</span>
							</li>
							<li>
							<span class="glyphicon glyphicon-envelope" aria-hidden="true">
							</span>
							<a href="mailto:geo-vlad17@yandex.ru">
							<span itemprop="email">geo-vlad17@yandex.ru	</span>
							</a>
							
							</li>
						</ul>
					
					</div>

				
	
				<div class="col-md-4 col-md-push-2">
				<div class="h3 footer-title">Задайте вопрос</div>
				  				  <div class="footer-form">
				  	 <form id="footer-form" action="action-mail.php" method="post" enctype="multipart/form-data" onsubmit="return validateFormFooter()">
                          <div class="form-group">
                             <label class="control-label">Ваше Имя<sup>*</sup></label>
                                  <div class="footer-input-group">

                                    <span class="glyphicon glyphicon-user pos" aria-hidden="true"></span><input type="text" placeholder="Иван Иванов" name="name" class="form-control" required>
                                  </div>
                                  <label class="control-label">Как с вами связаться:</label>
                                  <div class="footer-input-group">
                                    <span class="glyphicon glyphicon-envelope pos" aria-hidden="true"></span><input type="text" placeholder="Ваш e-mail" name="email" class="form-control">
                                  </div>
                                  <div class="footer-input-group">
                                   <span class="glyphicon glyphicon-earphone pos" aria-hidden="true"></span><input type="text" placeholder="Номер телефона" class="form-control" name="phone">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label">Текст сообщения<sup>*</sup></label>
                                  <div class="footer-input-group">
                                    <textarea name="question" form="footer-form" id="contact-form-textarea" placeholder="Ваш вопрос" required></textarea>
                                  </div>
                                </div>
                                <div id="footerCaptcha"></div>
                                <div style="text-align:center"><input type="submit" value="Отправить">   
                            </div>      
                              </form>
                    </div>
				  </div>
				

		</div>
		</div>
	</footer>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|PT+Sans:400,400i,700&amp;subset=cyrillic" rel="stylesheet">
    <script src="https://use.fontawesome.com/01c5d59dc9.js"></script>
    <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    
    
<script>
$(document).ready(function() {
	$(".item-lib").magnificPopup({
		type: \'image\',
		gallery : {
			enabled: true
		},
		removalDelay: 300,
		mainClass: \'mfp-fade\'

	});
});
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter41879414 = new Ya.Metrika({
                    id:41879414,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/41879414" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-90227768-1\', \'auto\');
  ga(\'send\', \'pageview\');

</script>

<script type="text/javascript">
var ZCallbackWidgetLinkId  = \'12ace767b09d603512f370af7cc98407\';
var ZCallbackWidgetDomain  = \'my.zadarma.com\';
(function(){
    var lt = document.createElement(\'script\');
    lt.type =\'text/javascript\';
    lt.charset = \'utf-8\';
    lt.async = true;
    lt.src = \'https://\' + ZCallbackWidgetDomain + \'/callbackWidget/js/main.min.js?unq=\'+Math.floor(Math.random(0,1000)*1000);
    var sc = document.getElementsByTagName(\'script\')[0];
    if (sc) sc.parentNode.insertBefore(lt, sc);
    else document.documentElement.firstChild.appendChild(lt);
})();
</script>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'getImageList' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getImageList',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/**
 * getImageList
 *
 * Copyright 2009-2014 by Bruno Perner <b.perner@gmx.de>
 *
 * getImageList is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * getImageList is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getImageList; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package migx
 */
/**
 * getImageList
 *
 * display Items from outputvalue of TV with custom-TV-input-type MIGX or from other JSON-string for MODx Revolution 
 *
 * @version 1.4
 * @author Bruno Perner <b.perner@gmx.de>
 * @copyright Copyright &copy; 2009-2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version.
 * @package migx
 */

/*example: <ul>[[!getImageList? &tvname=`myTV`&tpl=`@CODE:<li>[[+idx]]<img src="[[+imageURL]]"/><p>[[+imageAlt]]</p></li>`]]</ul>*/
/* get default properties */


$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\');
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'\');
$wrapperTpl = $modx->getOption(\'wrapperTpl\', $scriptProperties, \'\');
$limit = $modx->getOption(\'limit\', $scriptProperties, \'0\');
$offset = $modx->getOption(\'offset\', $scriptProperties, 0);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$randomize = $modx->getOption(\'randomize\', $scriptProperties, false);
$preselectLimit = $modx->getOption(\'preselectLimit\', $scriptProperties, 0); // when random preselect important images
$where = $modx->getOption(\'where\', $scriptProperties, \'\');
$where = !empty($where) ? $modx->fromJSON($where) : array();
$sort = $modx->getOption(\'sort\', $scriptProperties, \'\');
$sort = !empty($sort) ? $modx->fromJSON($sort) : array();
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$placeholdersKeyField = $modx->getOption(\'placeholdersKeyField\', $scriptProperties, \'MIGX_id\');
$toJsonPlaceholder = $modx->getOption(\'toJsonPlaceholder\', $scriptProperties, false);
$jsonVarKey = $modx->getOption(\'jsonVarKey\', $scriptProperties, \'migx_outputvalue\');
$outputvalue = $modx->getOption(\'value\', $scriptProperties, \'\');
$outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
$docidVarKey = $modx->getOption(\'docidVarKey\', $scriptProperties, \'migx_docid\');
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource) ? $modx->resource->get(\'id\') : 1));
$docid = isset($_REQUEST[$docidVarKey]) ? $_REQUEST[$docidVarKey] : $docid;
$processTVs = $modx->getOption(\'processTVs\', $scriptProperties, \'1\');
$reverse = $modx->getOption(\'reverse\', $scriptProperties, \'0\');
$sumFields = $modx->getOption(\'sumFields\', $scriptProperties, \'\');
$sumPrefix = $modx->getOption(\'sumPrefix\', $scriptProperties, \'summary_\');
$addfields = $modx->getOption(\'addfields\', $scriptProperties, \'\');
$addfields = !empty($addfields) ? explode(\',\', $addfields) : null;
//split json into parts
$splits = $modx->fromJson($modx->getOption(\'splits\', $scriptProperties, 0));
$splitTpl = $modx->getOption(\'splitTpl\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$inheritFrom = $modx->getOption(\'inheritFrom\', $scriptProperties, \'\'); //commaseparated list of resource-ids or/and the keyword \'parents\' where to inherit from
$inheritFrom = !empty($inheritFrom) ? explode(\',\',$inheritFrom) : \'\';

$modx->setPlaceholder(\'docid\', $docid);

$base_path = $modx->getOption(\'base_path\', null, MODX_BASE_PATH);
$base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);

$migx = $modx->getService(\'migx\', \'Migx\', $modx->getOption(\'migx.core_path\', null, $modx->getOption(\'core_path\') . \'components/migx/\') . \'model/migx/\', $scriptProperties);
if (!($migx instanceof Migx))
    return \'\';
$migx->working_context = isset($modx->resource) ? $modx->resource->get(\'context_key\') : \'web\';

if (!empty($tvname)) {
    if ($tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname))) {

        /*
        *   get inputProperties
        */


        $properties = $tv->get(\'input_properties\');
        $properties = isset($properties[\'formtabs\']) ? $properties : $tv->getProperties();

        $migx->config[\'configs\'] = $modx->getOption(\'configs\', $properties, \'\');
        if (!empty($migx->config[\'configs\'])) {
            $migx->loadConfigs();
            // get tabs from file or migx-config-table
            $formtabs = $migx->getTabs();
        }
        if (empty($formtabs) && isset($properties[\'formtabs\'])) {
            //try to get formtabs and its fields from properties
            $formtabs = $modx->fromJSON($properties[\'formtabs\']);
        }

        if (!empty($properties[\'basePath\'])) {
            if ($properties[\'autoResourceFolders\'] == \'true\') {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'basePath\'] . $docid . \'/\';
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'] . $docid . \'/\';
            } else {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'base_path\'];
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'];
            }
        }
        if ($jsonVarKey == \'migx_outputvalue\' && !empty($properties[\'jsonvarkey\'])) {
            $jsonVarKey = $properties[\'jsonvarkey\'];
            $outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
        }
        
        if (empty($outputvalue)){
            $outputvalue = $tv->renderOutput($docid);
            if (empty($outputvalue) && !empty($inheritFrom)){
                foreach ($inheritFrom as $from){
                    if ($from == \'parents\'){
                        $outputvalue = $tv->processInheritBinding(\'\',$docid);
                    }else{
                        $outputvalue = $tv->renderOutput($from);
                    }
                    if (!empty($outputvalue)){
                        break;
                    }                    
                }
            }
        }

       
        /*
        *   get inputTvs 
        */
        $inputTvs = array();
        if (is_array($formtabs)) {

            //multiple different Forms
            // Note: use same field-names and inputTVs in all forms
            $inputTvs = $migx->extractInputTvs($formtabs);
        }
        if ($migx->source = $tv->getSource($migx->working_context, false)){
            $migx->source->initialize();
        }
        
    }


}

if (empty($outputvalue)) {
    return \'\';
}

//echo $outputvalue.\'<br/><br/>\';

$items = $modx->fromJSON($outputvalue);

// where filter
if (is_array($where) && count($where) > 0) {
    $items = $migx->filterItems($where, $items);
}
$modx->setPlaceholder($totalVar, count($items));

if (!empty($reverse)) {
    $items = array_reverse($items);
}

// sort items
if (is_array($sort) && count($sort) > 0) {
    $items = $migx->sortDbResult($items, $sort);
}

$summaries = array();
$output = \'\';
$items = $offset > 0 ? array_slice($items, $offset) : $items;
$count = count($items);

if ($count > 0) {
    $limit = $limit == 0 || $limit > $count ? $count : $limit;
    $preselectLimit = $preselectLimit > $count ? $count : $preselectLimit;
    //preselect important items
    $preitems = array();
    if ($randomize && $preselectLimit > 0) {
        for ($i = 0; $i < $preselectLimit; $i++) {
            $preitems[] = $items[$i];
            unset($items[$i]);
        }
        $limit = $limit - count($preitems);
    }

    //shuffle items
    if ($randomize) {
        shuffle($items);
    }

    //limit items
    $count = count($items);
    $tempitems = array();

    for ($i = 0; $i < $limit; $i++) {
        if ($i >= $count) {
            break;
        }
        $tempitems[] = $items[$i];
    }
    $items = $tempitems;

    //add preselected items and schuffle again
    if ($randomize && $preselectLimit > 0) {
        $items = array_merge($preitems, $items);
        shuffle($items);
    }

    $properties = array();
    foreach ($scriptProperties as $property => $value) {
        $properties[\'property.\' . $property] = $value;
    }

    $idx = 0;
    $output = array();
    $template = array();
    $count = count($items);

    foreach ($items as $key => $item) {
        $formname = isset($item[\'MIGX_formname\']) ? $item[\'MIGX_formname\'] . \'_\' : \'\';
        $fields = array();
        foreach ($item as $field => $value) {
            if (is_array($value)) {
                if (is_array($value[0])) {
                    //nested array - convert to json
                    $value = $modx->toJson($value);
                } else {
                    $value = implode(\'||\', $value); //handle arrays (checkboxes, multiselects)
                }
            }


            $inputTVkey = $formname . $field;

            if ($processTVs && isset($inputTvs[$inputTVkey])) {
                if (isset($inputTvs[$inputTVkey][\'inputTV\']) && $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inputTvs[$inputTVkey][\'inputTV\']))) {

                } else {
                    $tv = $modx->newObject(\'modTemplateVar\');
                    $tv->set(\'type\', $inputTvs[$inputTVkey][\'inputTVtype\']);
                }
                $inputTV = $inputTvs[$inputTVkey];

                $mTypes = $modx->getOption(\'manipulatable_url_tv_output_types\', null, \'image,file\');
                //don\'t manipulate any urls here
                $modx->setOption(\'manipulatable_url_tv_output_types\', \'\');
                $tv->set(\'default_text\', $value);
                $value = $tv->renderOutput($docid);
                //set option back
                $modx->setOption(\'manipulatable_url_tv_output_types\', $mTypes);
                //now manipulate urls
                if ($mediasource = $migx->getFieldSource($inputTV, $tv)) {
                    $mTypes = explode(\',\', $mTypes);
                    if (!empty($value) && in_array($tv->get(\'type\'), $mTypes)) {
                        //$value = $mediasource->prepareOutputUrl($value);
                        $value = str_replace(\'/./\', \'/\', $mediasource->prepareOutputUrl($value));
                    }
                }

            }
            $fields[$field] = $value;

        }

        if (!empty($addfields)) {
            foreach ($addfields as $addfield) {
                $addfield = explode(\':\', $addfield);
                $addname = $addfield[0];
                $adddefault = isset($addfield[1]) ? $addfield[1] : \'\';
                $fields[$addname] = $adddefault;
            }
        }

        if (!empty($sumFields)) {
            $sumFields = is_array($sumFields) ? $sumFields : explode(\',\', $sumFields);
            foreach ($sumFields as $sumField) {
                if (isset($fields[$sumField])) {
                    $summaries[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField] + $fields[$sumField];
                    $fields[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField];
                }
            }
        }


        if ($toJsonPlaceholder) {
            $output[] = $fields;
        } else {
            $fields[\'_alt\'] = $idx % 2;
            $idx++;
            $fields[\'_first\'] = $idx == 1 ? true : \'\';
            $fields[\'_last\'] = $idx == $limit ? true : \'\';
            $fields[\'idx\'] = $idx;
            $rowtpl = \'\';
            //get changing tpls from field
            if (substr($tpl, 0, 7) == "@FIELD:") {
                $tplField = substr($tpl, 7);
                $rowtpl = $fields[$tplField];
            }

            if ($fields[\'_first\'] && !empty($tplFirst)) {
                $rowtpl = $tplFirst;
            }
            if ($fields[\'_last\'] && empty($rowtpl) && !empty($tplLast)) {
                $rowtpl = $tplLast;
            }
            $tplidx = \'tpl_\' . $idx;
            if (empty($rowtpl) && !empty($$tplidx)) {
                $rowtpl = $$tplidx;
            }
            if ($idx > 1 && empty($rowtpl)) {
                $divisors = $migx->getDivisors($idx);
                if (!empty($divisors)) {
                    foreach ($divisors as $divisor) {
                        $tplnth = \'tpl_n\' . $divisor;
                        if (!empty($$tplnth)) {
                            $rowtpl = $$tplnth;
                            if (!empty($rowtpl)) {
                                break;
                            }
                        }
                    }
                }
            }

            if ($count == 1 && isset($tpl_oneresult)) {
                $rowtpl = $tpl_oneresult;
            }

            $fields = array_merge($fields, $properties);

            if (!empty($rowtpl)) {
                $template = $migx->getTemplate($tpl, $template);
                $fields[\'_tpl\'] = $template[$tpl];
            } else {
                $rowtpl = $tpl;

            }
            $template = $migx->getTemplate($rowtpl, $template);


            if ($template[$rowtpl]) {
                $chunk = $modx->newObject(\'modChunk\');
                $chunk->setCacheable(false);
                $chunk->setContent($template[$rowtpl]);


                if (!empty($placeholdersKeyField) && isset($fields[$placeholdersKeyField])) {
                    $output[$fields[$placeholdersKeyField]] = $chunk->process($fields);
                } else {
                    $output[] = $chunk->process($fields);
                }
            } else {
                if (!empty($placeholdersKeyField)) {
                    $output[$fields[$placeholdersKeyField]] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                } else {
                    $output[] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                }
            }
        }


    }
}

if (count($summaries) > 0) {
    $modx->toPlaceholders($summaries);
}


if ($toJsonPlaceholder) {
    $modx->setPlaceholder($toJsonPlaceholder, $modx->toJson($output));
    return \'\';
}

if (!empty($toSeparatePlaceholders)) {
    $modx->toPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}
/*
if (!empty($outerTpl))
$o = parseTpl($outerTpl, array(\'output\'=>implode($outputSeparator, $output)));
else 
*/

if ($count > 0 && $splits > 0) {
    $size = ceil($count / $splits);
    $chunks = array_chunk($output, $size);
    $output = array();
    foreach ($chunks as $chunk) {
        $o = implode($outputSeparator, $chunk);
        $output[] = $modx->getChunk($splitTpl, array(\'output\' => $o));
    }
    $outputSeparator = $splitSeparator;
}

if (is_array($output)) {
    $o = implode($outputSeparator, $output);
} else {
    $o = $output;
}

if (!empty($o) && !empty($wrapperTpl)) {
    $template = $migx->getTemplate($wrapperTpl);
    if ($template[$wrapperTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$wrapperTpl]);
        $properties[\'output\'] = $o;
        $o = $chunk->process($properties);
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $o);
    return \'\';
}

return $o;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * getImageList
 *
 * Copyright 2009-2014 by Bruno Perner <b.perner@gmx.de>
 *
 * getImageList is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * getImageList is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getImageList; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package migx
 */
/**
 * getImageList
 *
 * display Items from outputvalue of TV with custom-TV-input-type MIGX or from other JSON-string for MODx Revolution 
 *
 * @version 1.4
 * @author Bruno Perner <b.perner@gmx.de>
 * @copyright Copyright &copy; 2009-2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version.
 * @package migx
 */

/*example: <ul>[[!getImageList? &tvname=`myTV`&tpl=`@CODE:<li>[[+idx]]<img src="[[+imageURL]]"/><p>[[+imageAlt]]</p></li>`]]</ul>*/
/* get default properties */


$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\');
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'\');
$wrapperTpl = $modx->getOption(\'wrapperTpl\', $scriptProperties, \'\');
$limit = $modx->getOption(\'limit\', $scriptProperties, \'0\');
$offset = $modx->getOption(\'offset\', $scriptProperties, 0);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$randomize = $modx->getOption(\'randomize\', $scriptProperties, false);
$preselectLimit = $modx->getOption(\'preselectLimit\', $scriptProperties, 0); // when random preselect important images
$where = $modx->getOption(\'where\', $scriptProperties, \'\');
$where = !empty($where) ? $modx->fromJSON($where) : array();
$sort = $modx->getOption(\'sort\', $scriptProperties, \'\');
$sort = !empty($sort) ? $modx->fromJSON($sort) : array();
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$placeholdersKeyField = $modx->getOption(\'placeholdersKeyField\', $scriptProperties, \'MIGX_id\');
$toJsonPlaceholder = $modx->getOption(\'toJsonPlaceholder\', $scriptProperties, false);
$jsonVarKey = $modx->getOption(\'jsonVarKey\', $scriptProperties, \'migx_outputvalue\');
$outputvalue = $modx->getOption(\'value\', $scriptProperties, \'\');
$outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
$docidVarKey = $modx->getOption(\'docidVarKey\', $scriptProperties, \'migx_docid\');
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource) ? $modx->resource->get(\'id\') : 1));
$docid = isset($_REQUEST[$docidVarKey]) ? $_REQUEST[$docidVarKey] : $docid;
$processTVs = $modx->getOption(\'processTVs\', $scriptProperties, \'1\');
$reverse = $modx->getOption(\'reverse\', $scriptProperties, \'0\');
$sumFields = $modx->getOption(\'sumFields\', $scriptProperties, \'\');
$sumPrefix = $modx->getOption(\'sumPrefix\', $scriptProperties, \'summary_\');
$addfields = $modx->getOption(\'addfields\', $scriptProperties, \'\');
$addfields = !empty($addfields) ? explode(\',\', $addfields) : null;
//split json into parts
$splits = $modx->fromJson($modx->getOption(\'splits\', $scriptProperties, 0));
$splitTpl = $modx->getOption(\'splitTpl\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$inheritFrom = $modx->getOption(\'inheritFrom\', $scriptProperties, \'\'); //commaseparated list of resource-ids or/and the keyword \'parents\' where to inherit from
$inheritFrom = !empty($inheritFrom) ? explode(\',\',$inheritFrom) : \'\';

$modx->setPlaceholder(\'docid\', $docid);

$base_path = $modx->getOption(\'base_path\', null, MODX_BASE_PATH);
$base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);

$migx = $modx->getService(\'migx\', \'Migx\', $modx->getOption(\'migx.core_path\', null, $modx->getOption(\'core_path\') . \'components/migx/\') . \'model/migx/\', $scriptProperties);
if (!($migx instanceof Migx))
    return \'\';
$migx->working_context = isset($modx->resource) ? $modx->resource->get(\'context_key\') : \'web\';

if (!empty($tvname)) {
    if ($tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname))) {

        /*
        *   get inputProperties
        */


        $properties = $tv->get(\'input_properties\');
        $properties = isset($properties[\'formtabs\']) ? $properties : $tv->getProperties();

        $migx->config[\'configs\'] = $modx->getOption(\'configs\', $properties, \'\');
        if (!empty($migx->config[\'configs\'])) {
            $migx->loadConfigs();
            // get tabs from file or migx-config-table
            $formtabs = $migx->getTabs();
        }
        if (empty($formtabs) && isset($properties[\'formtabs\'])) {
            //try to get formtabs and its fields from properties
            $formtabs = $modx->fromJSON($properties[\'formtabs\']);
        }

        if (!empty($properties[\'basePath\'])) {
            if ($properties[\'autoResourceFolders\'] == \'true\') {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'basePath\'] . $docid . \'/\';
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'] . $docid . \'/\';
            } else {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'base_path\'];
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'];
            }
        }
        if ($jsonVarKey == \'migx_outputvalue\' && !empty($properties[\'jsonvarkey\'])) {
            $jsonVarKey = $properties[\'jsonvarkey\'];
            $outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
        }
        
        if (empty($outputvalue)){
            $outputvalue = $tv->renderOutput($docid);
            if (empty($outputvalue) && !empty($inheritFrom)){
                foreach ($inheritFrom as $from){
                    if ($from == \'parents\'){
                        $outputvalue = $tv->processInheritBinding(\'\',$docid);
                    }else{
                        $outputvalue = $tv->renderOutput($from);
                    }
                    if (!empty($outputvalue)){
                        break;
                    }                    
                }
            }
        }

       
        /*
        *   get inputTvs 
        */
        $inputTvs = array();
        if (is_array($formtabs)) {

            //multiple different Forms
            // Note: use same field-names and inputTVs in all forms
            $inputTvs = $migx->extractInputTvs($formtabs);
        }
        if ($migx->source = $tv->getSource($migx->working_context, false)){
            $migx->source->initialize();
        }
        
    }


}

if (empty($outputvalue)) {
    return \'\';
}

//echo $outputvalue.\'<br/><br/>\';

$items = $modx->fromJSON($outputvalue);

// where filter
if (is_array($where) && count($where) > 0) {
    $items = $migx->filterItems($where, $items);
}
$modx->setPlaceholder($totalVar, count($items));

if (!empty($reverse)) {
    $items = array_reverse($items);
}

// sort items
if (is_array($sort) && count($sort) > 0) {
    $items = $migx->sortDbResult($items, $sort);
}

$summaries = array();
$output = \'\';
$items = $offset > 0 ? array_slice($items, $offset) : $items;
$count = count($items);

if ($count > 0) {
    $limit = $limit == 0 || $limit > $count ? $count : $limit;
    $preselectLimit = $preselectLimit > $count ? $count : $preselectLimit;
    //preselect important items
    $preitems = array();
    if ($randomize && $preselectLimit > 0) {
        for ($i = 0; $i < $preselectLimit; $i++) {
            $preitems[] = $items[$i];
            unset($items[$i]);
        }
        $limit = $limit - count($preitems);
    }

    //shuffle items
    if ($randomize) {
        shuffle($items);
    }

    //limit items
    $count = count($items);
    $tempitems = array();

    for ($i = 0; $i < $limit; $i++) {
        if ($i >= $count) {
            break;
        }
        $tempitems[] = $items[$i];
    }
    $items = $tempitems;

    //add preselected items and schuffle again
    if ($randomize && $preselectLimit > 0) {
        $items = array_merge($preitems, $items);
        shuffle($items);
    }

    $properties = array();
    foreach ($scriptProperties as $property => $value) {
        $properties[\'property.\' . $property] = $value;
    }

    $idx = 0;
    $output = array();
    $template = array();
    $count = count($items);

    foreach ($items as $key => $item) {
        $formname = isset($item[\'MIGX_formname\']) ? $item[\'MIGX_formname\'] . \'_\' : \'\';
        $fields = array();
        foreach ($item as $field => $value) {
            if (is_array($value)) {
                if (is_array($value[0])) {
                    //nested array - convert to json
                    $value = $modx->toJson($value);
                } else {
                    $value = implode(\'||\', $value); //handle arrays (checkboxes, multiselects)
                }
            }


            $inputTVkey = $formname . $field;

            if ($processTVs && isset($inputTvs[$inputTVkey])) {
                if (isset($inputTvs[$inputTVkey][\'inputTV\']) && $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inputTvs[$inputTVkey][\'inputTV\']))) {

                } else {
                    $tv = $modx->newObject(\'modTemplateVar\');
                    $tv->set(\'type\', $inputTvs[$inputTVkey][\'inputTVtype\']);
                }
                $inputTV = $inputTvs[$inputTVkey];

                $mTypes = $modx->getOption(\'manipulatable_url_tv_output_types\', null, \'image,file\');
                //don\'t manipulate any urls here
                $modx->setOption(\'manipulatable_url_tv_output_types\', \'\');
                $tv->set(\'default_text\', $value);
                $value = $tv->renderOutput($docid);
                //set option back
                $modx->setOption(\'manipulatable_url_tv_output_types\', $mTypes);
                //now manipulate urls
                if ($mediasource = $migx->getFieldSource($inputTV, $tv)) {
                    $mTypes = explode(\',\', $mTypes);
                    if (!empty($value) && in_array($tv->get(\'type\'), $mTypes)) {
                        //$value = $mediasource->prepareOutputUrl($value);
                        $value = str_replace(\'/./\', \'/\', $mediasource->prepareOutputUrl($value));
                    }
                }

            }
            $fields[$field] = $value;

        }

        if (!empty($addfields)) {
            foreach ($addfields as $addfield) {
                $addfield = explode(\':\', $addfield);
                $addname = $addfield[0];
                $adddefault = isset($addfield[1]) ? $addfield[1] : \'\';
                $fields[$addname] = $adddefault;
            }
        }

        if (!empty($sumFields)) {
            $sumFields = is_array($sumFields) ? $sumFields : explode(\',\', $sumFields);
            foreach ($sumFields as $sumField) {
                if (isset($fields[$sumField])) {
                    $summaries[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField] + $fields[$sumField];
                    $fields[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField];
                }
            }
        }


        if ($toJsonPlaceholder) {
            $output[] = $fields;
        } else {
            $fields[\'_alt\'] = $idx % 2;
            $idx++;
            $fields[\'_first\'] = $idx == 1 ? true : \'\';
            $fields[\'_last\'] = $idx == $limit ? true : \'\';
            $fields[\'idx\'] = $idx;
            $rowtpl = \'\';
            //get changing tpls from field
            if (substr($tpl, 0, 7) == "@FIELD:") {
                $tplField = substr($tpl, 7);
                $rowtpl = $fields[$tplField];
            }

            if ($fields[\'_first\'] && !empty($tplFirst)) {
                $rowtpl = $tplFirst;
            }
            if ($fields[\'_last\'] && empty($rowtpl) && !empty($tplLast)) {
                $rowtpl = $tplLast;
            }
            $tplidx = \'tpl_\' . $idx;
            if (empty($rowtpl) && !empty($$tplidx)) {
                $rowtpl = $$tplidx;
            }
            if ($idx > 1 && empty($rowtpl)) {
                $divisors = $migx->getDivisors($idx);
                if (!empty($divisors)) {
                    foreach ($divisors as $divisor) {
                        $tplnth = \'tpl_n\' . $divisor;
                        if (!empty($$tplnth)) {
                            $rowtpl = $$tplnth;
                            if (!empty($rowtpl)) {
                                break;
                            }
                        }
                    }
                }
            }

            if ($count == 1 && isset($tpl_oneresult)) {
                $rowtpl = $tpl_oneresult;
            }

            $fields = array_merge($fields, $properties);

            if (!empty($rowtpl)) {
                $template = $migx->getTemplate($tpl, $template);
                $fields[\'_tpl\'] = $template[$tpl];
            } else {
                $rowtpl = $tpl;

            }
            $template = $migx->getTemplate($rowtpl, $template);


            if ($template[$rowtpl]) {
                $chunk = $modx->newObject(\'modChunk\');
                $chunk->setCacheable(false);
                $chunk->setContent($template[$rowtpl]);


                if (!empty($placeholdersKeyField) && isset($fields[$placeholdersKeyField])) {
                    $output[$fields[$placeholdersKeyField]] = $chunk->process($fields);
                } else {
                    $output[] = $chunk->process($fields);
                }
            } else {
                if (!empty($placeholdersKeyField)) {
                    $output[$fields[$placeholdersKeyField]] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                } else {
                    $output[] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                }
            }
        }


    }
}

if (count($summaries) > 0) {
    $modx->toPlaceholders($summaries);
}


if ($toJsonPlaceholder) {
    $modx->setPlaceholder($toJsonPlaceholder, $modx->toJson($output));
    return \'\';
}

if (!empty($toSeparatePlaceholders)) {
    $modx->toPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}
/*
if (!empty($outerTpl))
$o = parseTpl($outerTpl, array(\'output\'=>implode($outputSeparator, $output)));
else 
*/

if ($count > 0 && $splits > 0) {
    $size = ceil($count / $splits);
    $chunks = array_chunk($output, $size);
    $output = array();
    foreach ($chunks as $chunk) {
        $o = implode($outputSeparator, $chunk);
        $output[] = $modx->getChunk($splitTpl, array(\'output\' => $o));
    }
    $outputSeparator = $splitSeparator;
}

if (is_array($output)) {
    $o = implode($outputSeparator, $output);
} else {
    $o = $output;
}

if (!empty($o) && !empty($wrapperTpl)) {
    $template = $migx->getTemplate($wrapperTpl);
    if ($template[$wrapperTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$wrapperTpl]);
        $properties[\'output\'] = $o;
        $o = $chunk->process($properties);
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $o);
    return \'\';
}

return $o;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);