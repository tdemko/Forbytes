<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php wp_title( '|', true, 'left' ); ?></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mainbundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/clientsbundle.min.css" />
    <?php get_template_part( 'custom', 'head' ); ?> 
    <?php wp_head(); ?>
</head>
<body class="clients">
    <?php get_header(); ?>
    <main>
        <section class="our-clients">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="title">Our top <span class="accent">clients</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <article class="cdon">
                                <div class="company-logo">
                                    <div class="icon-cdon"></div>
                                </div>
                                <p><span class="accent">CDON</span> is leading online retailer in the Nordic region, offering products and digital streaming services.</p>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <article class="lekmer">
                                <div class="company-logo">
                                    <div class="icon-lekmer"></div>
                                </div>
                                <p><span class="accent">Lekmer</span> is a leading online store for families with everything for kids.</p>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <article class="trademax">
                                <div class="company-logo">
                                    <div class="icon-trademax"></div>
                                </div>
                                <p><span class="accent">Trademax</span> is one of the biggest Nordic online stores for home decorations and furniture.</p>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <article class="telicminds">
                                <div class="company-logo">
                                    <div></div>
                                </div>
                                <p><span class="accent">Telic Minds</span> is a young company that constantly seeks for challenges in the IT industry.</p>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <article class="heppo">
                                <div class="company-logo">
                                    <div class="icon-heppo"></div>
                                </div>
                                <p><span class="accent">Heppo</span> online retailer of shoes, shoe accessories and accessories. (Acquired by Footway Group AB).</p>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <article class="stayhard">
                                <div class="company-logo">
                                    <div class="icon-stayhard"></div>
                                </div>
                                <p><span class="accent">Stayhard</span> is online fashion shop for men. It is designed to make the shopping experience easy and enjoyable.</p>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <article class="medbiblio">
                                <div class="company-logo">
                                    <div class="icon-medbiblio"></div>
                                </div>
                                <p><span class="accent">Medbiblio</span> is a service that aims to deliver scientific articles for doctors and other medical staff.</p>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <article class="newsperience">
                                <div class="company-logo">
                                    <div class="icon-newsperience"></div>
                                </div>
                                <p><span class="accent">Newsperience</span> offers applications for Facebook and LinkedIn plus guidance that can improve your company's presence in social media.</p>
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
                            <h1 class="title"><span class="accent">Your company </span>can be here too</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Send us an email and we will contact you</p>
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
                                    We'll follow up with you shortly                                </p>
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
            require(['app/clients'], function (clients) {
                clients.init()
            })
        });
    </script>
</body>
</html>
