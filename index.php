<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php wp_title( '|', true, 'left' ); ?></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mainbundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/servicesbundle.min.css" />
    <?php get_template_part( 'custom', 'head' ); ?> 
    <style>
        .services #fullpage {
            height: 1080px;
        }
    </style>
    <?php wp_head(); ?>
</head>
<body class="services">
    <?php get_header(); ?>
    <main>
        <div id="fullpage">
            <section class="section home">
                <div class="slide what-we-do">
                    <div class="background">
                    </div>
                    <div class="content">
                        <div class="content-background"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 adv-small">
                                    <div class="adv">
                                        <h1>We convert technology into <span class="accent">value</span></h1>
                                        <div class="icon arrow-down">
                                            <div>
                                                <span class="icon-arrowdown"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-offset-1 col-xs-5 adv-big">
                                    <div class="adv">
                                        <h1 class="accent">We convert technology into value</h1>
                                        <p>We will make your real needs come true with the help of technologies, our skills and knowledge.</p>
                                        <button class="btn btn-success btn-lg">See what we do</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="what-we-do">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title">What we <span class="accent">do</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <article class="analyze">
                                <div class="icon default">
                                    <span class="icon-analyze"></span>
                                </div>
                                <h2>Analyze</h2>
                                <p>We will work together with you to reveal your real business needs and will create the plan supported with needed documentation to improve your business with the help of software solutions.</p>
                            </article>
                        </div>
                        <div class="col-sm-4">
                            <article class="develop">
                                <div class="icon default">
                                    <span class="icon-develop"></span>
                                </div>
                                <h2>Develop</h2>
                                <p>We understand that true need of our clients is not the software, but the value it gives to them. Using our skills and knowledge, we will develop the software that gives this value to you. Communication here is the key to success.</p>
                            </article>
                        </div>
                        <div class="col-sm-4">
                            <article class="optimize">
                                <div class="icon default">
                                    <span class="icon-optimize"></span>
                                </div>
                                <h2>Optimize</h2>
                                <p>We will find out all shortcomings and bottlenecks to make you software optimal. We perform optimization on all levels: from design to run time.</p>
                            </article>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <article class="improve">
                                <div class="icon default">
                                    <span class="icon-improve"></span>
                                </div>
                                <h2>Improve</h2>
                                <p>Progress never stops. New challenges and modern trends demand every day work to keep your software up with the times. We keep our minds open and never stop learning to ensure that software we deliver is able to deal with today’s and tomorrow’s challenges.</p>
                            </article>
                        </div>
                        <div class="col-sm-4">
                            <article class="support">
                                <div class="icon default">
                                    <span class="icon-support"></span>
                                </div>
                                <h2>Support</h2>
                                <p>Delivery of the software solution is just the beginning of an ongoing process of innovation and constant development. Any software strives to preserve its efficiency competing with new challenges and increase of demand.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="how-we-work dark">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title">How we <span class="accent">work</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <article class="dedicated-team">
                                <h2>Dedicated team</h2>
                                <div class="icon arrow-down">
                                    <div>
                                        <span class="icon-arrowdown"></span>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <div>
                                        <p class="article-desc">To put it simple: it’s like your own employees, but <span class="accent">you don’t need to worry</span> about recruiting, payroll administration, career development, training, motivation, facilities and legal support. You simply send us list of skills and some technical requirements and in a few weeks you have your team up and running.</p>
                                        <div>
                                            <b>This model is best for:</b>
                                            <ul>
                                                <li class="clearfix">
                                                    <div>
                                                        <span class="icon icon-clients"></span>
                                                    </div>
                                                    <p><span class="accent">Clients</span> that have constant need in IT professionals to build, support or improve their online business.</p>
                                                </li>
                                                <li class="clearfix">
                                                    <div>
                                                        <span class="icon icon-companies"></span>
                                                    </div>
                                                    <p><span class="accent">Companies</span> with IT departments (including software development companies) that face lack of IT professionals or want to outsource software development to third party.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="custom-development">
                                <h2>Custom development</h2>
                                <div class="icon arrow-down">
                                    <div>
                                        <span class="icon-arrowdown"></span>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <div>
                                        <p class="article-desc">For irregular or one-off projects we suggest custom development model of cooperation. It’s simple and <span class="accent">cost effective</span>: you order – we deliver.</p>
                                        <div>
                                            <b>This model employs two price systems:</b>
                                            <ul>
                                                <li class="clearfix">
                                                    <div>
                                                        <span class="icon icon-clients"></span>
                                                    </div>
                                                    <p>Time and Material for <span class="accent">big</span> or <span class="accent">medium</span> projects.</p>
                                                </li>
                                                <li class="clearfix">
                                                    <div>
                                                        <span class="icon icon-companies"></span>
                                                    </div>
                                                    <p>Fixed Cost, for <span class="accent">small projects</span> with clearly defined requirements.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="technologies-we-use">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title">Technologies we <span class="accent">use</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <article class="clearfix dot-net">
                                <div class="row">
                                    <div class="col-md-6 left-part">
                                        <nav>
                                            <ul class="clearfix">
                                                <li data-item="dot-net" class="dot-net-item"><span></span></li>
                                                <li data-item="php" class="php-item"><span></span></li>
                                                <li data-item="front-end" class="front-end-item"><span></span></li>
                                            </ul>
                                        </nav>
                                        <span class="icon-dotnet dot-net-img"></span><span class="icon-php php-img"></span><span class="icon-frontend front-end-img"></span>
                                    </div>
                                    <div class="col-md-6 right-part">
                                        <div class="dot-net-info">
                                            <h2>.Net</h2>
                                            <div class="clearfix">
                                                <ul>
                                                    <li>Microsoft .NET (C#) 2.0 - 4.5</li>
                                                    <li>Mono Framework</li>
                                                    <li>ASP.NET AJAX / WebForms</li>
                                                    <li>ASP.NET MVC</li>
                                                    <li>ASP.NET Web API</li>
                                                    <li>ADO.NET</li>
                                                    <li>WinRT (Window 8), XAML</li>
                                                    <li>MS SQL Server Services</li>
                                                    <li>MS EntityFramework</li>
                                                    <li>NHibernate ORM</li>
                                                </ul>
                                                <ul>
                                                    <li>Windows Azure Services</li>
                                                    <li>WCF (SOAP and REST web-services)</li>
                                                    <li>Windows Identity Foundation</li>
                                                    <li>ServiceStack</li>
                                                    <li>Orchard CMS</li>
                                                    <li>Sitefinity CMS</li>
                                                    <li>Telerik components, Kendo UI</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="php-info">
                                            <h2>Php</h2>
                                            <div class="clearfix">
                                                <ul>
                                                    <li>Zend Framework</li>
                                                    <li>Symfony, Yii, Kohana, CakePHP</li>
                                                    <li>CodeIgnitor, Laravel, Akelos</li>
                                                    <li>WordPress</li>
                                                    <li>CMS: Drupal, Joomla!, TYPO3</li>
                                                    <li>CMS: Xaraya, Centurion, ExpressionEngine</li>
                                                    <li>E-Commerce: Magento, Zen Cart</li>
                                                    <li>E-Commerce: Drupal Commerce</li>
                                                    <li>E-Commerce: OpenCart, PrestaShop</li>
                                                    <li>NHibernaPHPUnitte ORM</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="front-end-info">
                                            <h2>Front end</h2>
                                            <div class="clearfix">
                                                <ul>
                                                    <li>HTML 4, HTML 5</li>
                                                    <li>CSS 2, CSS 3</li>
                                                    <li>LESS, SASS</li>
                                                    <li>XML, XSL, XSLT</li>
                                                    <li>XPath</li>
                                                    <li>XAML</li>
                                                    <li>Twitter Bootstrap</li>
                                                    <li>QUnit, Jasmine, Mocha</li>
                                                </ul>
                                                <ul>
                                                    <li>JavaScript</li>
                                                    <li>jQuery, jQuery UI</li>
                                                    <li>Single Page Application</li>
                                                    <li>Durandal</li>
                                                    <li>ExtJS, KendoUI, MooTools</li>
                                                    <li>SAngularJS</li>
                                                    <li>Backbone.js</li>
                                                    <li>Knockout.js</li>
                                                    <li>Processing.js, Raphaël.js</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-us dark">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title">Let's work <span class="accent">together</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p>We would like to talk about how we can <span class="accent">improve your business</span></p>
                            <div class="email-form">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label class="sr-only"></label>
                                        <input type="email" class="form-control input-lg inp-send-mail" placeholder="Email" />
                                        <div class="mail-error">The email address is not valid</div>
                                    </div>
                                    <button class="btn btn-success btn-lg btn-send-mail">Send</button>
                                </div>
                                <p class="mail-success accent text-center hidden">
                                    We'll follow up with you shortly                               
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/require.js"></script>
    <script>
        require(['<?php echo get_template_directory_uri(); ?>/js/requireConfig.js'], function () {
            require(['app/services'], function (services) {
                services.init()
            })
        });
    </script>
</body>
</html>
