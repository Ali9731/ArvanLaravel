<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arvan Cloud</title>
    <link rel="stylesheet" href="/style/fonts.css">
    <link rel="stylesheet" href="/style/custom.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<section class="Projects">
    <div class="Container">
        <div class="Projects__Header">
            <h2>فهرست پروژه ها</h2>
            <span>با فهرست پروژه های در جریان ابر آروان بیشتر آشنا شوید</span>
        </div>
        <br>
        <div  class="Projects__Tabs">
            <div class="Projects__Tab-Buttons">
                <button class="Projects__Tabs-Buttons-links" onclick="openTab(event, 'tab1')"><img src="/images/active_project.svg" alt=""><span>پروژه های فعال</span>
                </button>
                <button class="Projects__Tabs-Buttons-links" onclick="openTab(event, 'tab2')"><img src="/images/projects_waiting.svg" alt="">
                    <span>در حال ارزیابی</span></button>
                <button class="Projects__Tabs-Buttons-links Projects__Tabs-Buttons-links-active" onclick="openTab(event, 'tab3')"><img src="/images/projects_sucsess.svg" alt="">
                    <span>پروژه های اجرا شده</span></button>
            </div>
            <div id="tab1" class="Projects__Tab"  style="display: none;">

                <div class="Projects__Tab-Boxes">
                    <div class="Projects__Tab-Box-Title"><p>Wordpress</p> <div class="Projects__Tab-Box-Toggle"></div></div>
                    <div class="Projects__Tab-Box-Details">
                        <div class="Projects__Tab-Box-Details-Boxes">
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/page.svg" alt="">
                                <p>درخواست دهنده</p>
                                <span class="light_text_color">تیم CDN</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_up.svg" alt="">
                                <p>روش اجراو ارائه</p>
                                <span class="light_text_color">Opensourse/Github</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_signs.svg" alt="">
                                <p>زبان پروژه</p>
                                <span class="light_text_color">Pyton</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/Dollar.svg" alt="">
                                <p>مبلغ پروژه</p>
                                <span class="light_text_color">10,000,000 ریال</span>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-intro">
                            <div class="Projects__Tab-Box-Details-intro-logo"><img src="/images/pen-paper.svg" alt=""></div>
                            <div class="Projects__Tab-Box-Details-intro-text">
                                <h4>شرح پروژه</h4>
                                <p>نرم افزاری برای انتقال یک دامنه به همراه تنظیمات آن از روی کلودفلر به آروان</p>
                                <p>یک دامنه را به همراه تنظیمات مربوطه از سرویس کلودفلر به آروان منتقل کند API Key این نرم افزار باید بتواند با دریافت</p>
                                <p>حالت مطلوب میتواند یک وبسایت مستقل باشد و یا میتواند یک اسکریپتی که با دریافت اطلاعات مربوطه این کار را انجام دهد</p>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-Git">
                            <img src="/images/git.svg" alt="">
                            <div class="Projects__Tab-Box-Details-Git-address"><h4>صفحه گیت هاب</h4><p>https://github.com/features/codespaces</p></div>
                            <div class="Projects__Tab-Box-Details-Git-person"><img src="/images/person.svg" alt=""><span>توسط حسین سیدی</span></div>

                        </div>


                    </div>
                </div>
                <div class="Projects__Tab-Boxes ">
                    <div class="Projects__Tab-Box-Title"><p>Drupal plugin</p> <div class="Projects__Tab-Box-Toggle"></div></div>
                    <div class="Projects__Tab-Box-Details">
                        <div class="Projects__Tab-Box-Details-Boxes">
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/page.svg" alt="">
                                <p>درخواست دهنده</p>
                                <span class="light_text_color">تیم CDN</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_up.svg" alt="">
                                <p>روش اجراو ارائه</p>
                                <span class="light_text_color">Opensourse/Github</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_signs.svg" alt="">
                                <p>زبان پروژه</p>
                                <span class="light_text_color">Pyton</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/Dollar.svg" alt="">
                                <p>مبلغ پروژه</p>
                                <span class="light_text_color">10,000,000 ریال</span>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-intro">
                            <div class="Projects__Tab-Box-Details-intro-logo"><img src="/images/pen-paper.svg" alt=""></div>
                            <div class="Projects__Tab-Box-Details-intro-text">
                                <h4>شرح پروژه</h4>
                                <p>نرم افزاری برای انتقال یک دامنه به همراه تنظیمات آن از روی کلودفلر به آروان</p>
                                <p>یک دامنه را به همراه تنظیمات مربوطه از سرویس کلودفلر به آروان منتقل کند API Key این نرم افزار باید بتواند با دریافت</p>
                                <p>حالت مطلوب میتواند یک وبسایت مستقل باشد و یا میتواند یک اسکریپتی که با دریافت اطلاعات مربوطه این کار را انجام دهد</p>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-Git">
                            <img src="/images/git.svg" alt="">
                            <div class="Projects__Tab-Box-Details-Git-address"><h4>صفحه گیت هاب</h4><p>https://github.com/features/codespaces</p></div>
                            <div class="Projects__Tab-Box-Details-Git-person"><img src="/images/person.svg" alt=""><span>توسط حسین سیدی</span></div>

                        </div>


                    </div>
                </div>




            </div>
            <div id="tab2" class="Projects__Tab" style="display: none;">

                <div class="Projects__Tab-Boxes">
                    <div class="Projects__Tab-Box-Title"><p>Wordpress</p> <div class="Projects__Tab-Box-Toggle"></div></div>
                    <div class="Projects__Tab-Box-Details">
                        <div class="Projects__Tab-Box-Details-Boxes">
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/page.svg" alt="">
                                <p>درخواست دهنده</p>
                                <span class="light_text_color">تیم CDN</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_up.svg" alt="">
                                <p>روش اجراو ارائه</p>
                                <span class="light_text_color">Opensourse/Github</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_signs.svg" alt="">
                                <p>زبان پروژه</p>
                                <span class="light_text_color">Pyton</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/Dollar.svg" alt="">
                                <p>مبلغ پروژه</p>
                                <span class="light_text_color">10,000,000 ریال</span>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-intro">
                            <div class="Projects__Tab-Box-Details-intro-logo"><img src="/images/pen-paper.svg" alt=""></div>
                            <div class="Projects__Tab-Box-Details-intro-text">
                                <h4>شرح پروژه</h4>
                                <p>نرم افزاری برای انتقال یک دامنه به همراه تنظیمات آن از روی کلودفلر به آروان</p>
                                <p>یک دامنه را به همراه تنظیمات مربوطه از سرویس کلودفلر به آروان منتقل کند API Key این نرم افزار باید بتواند با دریافت</p>
                                <p>حالت مطلوب میتواند یک وبسایت مستقل باشد و یا میتواند یک اسکریپتی که با دریافت اطلاعات مربوطه این کار را انجام دهد</p>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-Git">
                            <img src="/images/git.svg" alt="">
                            <div class="Projects__Tab-Box-Details-Git-address"><h4>صفحه گیت هاب</h4><p>https://github.com/features/codespaces</p></div>
                            <div class="Projects__Tab-Box-Details-Git-person"><img src="/images/person.svg" alt=""><span>توسط حسین سیدی</span></div>

                        </div>


                    </div>
                </div>
                <div class="Projects__Tab-Boxes ">
                    <div class="Projects__Tab-Box-Title"><p>Drupal plugin</p> <div class="Projects__Tab-Box-Toggle"></div></div>
                    <div class="Projects__Tab-Box-Details">
                        <div class="Projects__Tab-Box-Details-Boxes">
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/page.svg" alt="">
                                <p>درخواست دهنده</p>
                                <span class="light_text_color">تیم CDN</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_up.svg" alt="">
                                <p>روش اجراو ارائه</p>
                                <span class="light_text_color">Opensourse/Github</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_signs.svg" alt="">
                                <p>زبان پروژه</p>
                                <span class="light_text_color">Pyton</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/Dollar.svg" alt="">
                                <p>مبلغ پروژه</p>
                                <span class="light_text_color">10,000,000 ریال</span>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-intro">
                            <div class="Projects__Tab-Box-Details-intro-logo"><img src="/images/pen-paper.svg" alt=""></div>
                            <div class="Projects__Tab-Box-Details-intro-text">
                                <h4>شرح پروژه</h4>
                                <p>نرم افزاری برای انتقال یک دامنه به همراه تنظیمات آن از روی کلودفلر به آروان</p>
                                <p>یک دامنه را به همراه تنظیمات مربوطه از سرویس کلودفلر به آروان منتقل کند API Key این نرم افزار باید بتواند با دریافت</p>
                                <p>حالت مطلوب میتواند یک وبسایت مستقل باشد و یا میتواند یک اسکریپتی که با دریافت اطلاعات مربوطه این کار را انجام دهد</p>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-Git">
                            <img src="/images/git.svg" alt="">
                            <div class="Projects__Tab-Box-Details-Git-address"><h4>صفحه گیت هاب</h4><p>https://github.com/features/codespaces</p></div>
                            <div class="Projects__Tab-Box-Details-Git-person"><img src="/images/person.svg" alt=""><span>توسط حسین سیدی</span></div>

                        </div>


                    </div>
                </div>
                <div class="Projects__Tab-Boxes ">
                    <div class="Projects__Tab-Box-Title"><p>CLI to work with CDN</p> <div class="Projects__Tab-Box-Toggle"></div></div>
                    <div class="Projects__Tab-Box-Details">
                        <div class="Projects__Tab-Box-Details-Boxes">
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/page.svg" alt="">
                                <p>درخواست دهنده</p>
                                <span class="light_text_color">تیم CDN</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_up.svg" alt="">
                                <p>روش اجراو ارائه</p>
                                <span class="light_text_color">Opensourse/Github</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_signs.svg" alt="">
                                <p>زبان پروژه</p>
                                <span class="light_text_color">Pyton</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/Dollar.svg" alt="">
                                <p>مبلغ پروژه</p>
                                <span class="light_text_color">10,000,000 ریال</span>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-intro">
                            <div class="Projects__Tab-Box-Details-intro-logo"><img src="/images/pen-paper.svg" alt=""></div>
                            <div class="Projects__Tab-Box-Details-intro-text">
                                <h4>شرح پروژه</h4>
                                <p>نرم افزاری برای انتقال یک دامنه به همراه تنظیمات آن از روی کلودفلر به آروان</p>
                                <p>یک دامنه را به همراه تنظیمات مربوطه از سرویس کلودفلر به آروان منتقل کند API Key این نرم افزار باید بتواند با دریافت</p>
                                <p>حالت مطلوب میتواند یک وبسایت مستقل باشد و یا میتواند یک اسکریپتی که با دریافت اطلاعات مربوطه این کار را انجام دهد</p>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-Git">
                            <img src="/images/git.svg" alt="">
                            <div class="Projects__Tab-Box-Details-Git-address"><h4>صفحه گیت هاب</h4><p>https://github.com/features/codespaces</p></div>
                            <div class="Projects__Tab-Box-Details-Git-person"><img src="/images/person.svg" alt=""><span>توسط حسین سیدی</span></div>

                        </div>


                    </div>
                </div>

                <div class="Projects__Tab-Boxes">
                    <div class="Projects__Tab-Box-Title"><p>CloudFlare to Arvan</p><div class="Projects__Tab-Box-Toggle"></div> </div>
                    <div class="Projects__Tab-Box-Details">
                        <div class="Projects__Tab-Box-Details-Boxes">
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/page.svg" alt="">
                                <p>درخواست دهنده</p>
                                <span class="light_text_color">تیم CDN</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_up.svg" alt="">
                                <p>روش اجراو ارائه</p>
                                <span class="light_text_color">Opensourse/Github</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_signs.svg" alt="">
                                <p>زبان پروژه</p>
                                <span class="light_text_color">Pyton</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/Dollar.svg" alt="">
                                <p>مبلغ پروژه</p>
                                <span class="light_text_color">10,000,000 ریال</span>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-intro">
                            <div class="Projects__Tab-Box-Details-intro-logo"><img src="/images/pen-paper.svg" alt=""></div>
                            <div class="Projects__Tab-Box-Details-intro-text">
                                <h4>شرح پروژه</h4>
                                <p>نرم افزاری برای انتقال یک دامنه به همراه تنظیمات آن از روی کلودفلر به آروان</p>
                                <p>یک دامنه را به همراه تنظیمات مربوطه از سرویس کلودفلر به آروان منتقل کند API Key این نرم افزار باید بتواند با دریافت</p>
                                <p>حالت مطلوب میتواند یک وبسایت مستقل باشد و یا میتواند یک اسکریپتی که با دریافت اطلاعات مربوطه این کار را انجام دهد</p>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-Git">
                            <img src="/images/git.svg" alt="">
                            <div class="Projects__Tab-Box-Details-Git-address"><h4>صفحه گیت هاب</h4><p>https://github.com/features/codespaces</p></div>
                            <div class="Projects__Tab-Box-Details-Git-person"><img src="/images/person.svg" alt=""><span>توسط حسین سیدی</span></div>

                        </div>


                    </div>
                </div>
                <div class="Projects__Tab-Boxes">
                    <div class="Projects__Tab-Box-Title"><p>IP WhiteList Script</p><div class="Projects__Tab-Box-Toggle"></div> </div>
                    <div class="Projects__Tab-Box-Details">
                        <div class="Projects__Tab-Box-Details-Boxes">
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/page.svg" alt="">
                                <p>درخواست دهنده</p>
                                <span class="light_text_color">تیم CDN</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_up.svg" alt="">
                                <p>روش اجراو ارائه</p>
                                <span class="light_text_color">Opensourse/Github</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_signs.svg" alt="">
                                <p>زبان پروژه</p>
                                <span class="light_text_color">Pyton</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/Dollar.svg" alt="">
                                <p>مبلغ پروژه</p>
                                <span class="light_text_color">10,000,000 ریال</span>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-intro">
                            <div class="Projects__Tab-Box-Details-intro-logo"><img src="/images/pen-paper.svg" alt=""></div>
                            <div class="Projects__Tab-Box-Details-intro-text">
                                <h4>شرح پروژه</h4>
                                <p>نرم افزاری برای انتقال یک دامنه به همراه تنظیمات آن از روی کلودفلر به آروان</p>
                                <p>یک دامنه را به همراه تنظیمات مربوطه از سرویس کلودفلر به آروان منتقل کند API Key این نرم افزار باید بتواند با دریافت</p>
                                <p>حالت مطلوب میتواند یک وبسایت مستقل باشد و یا میتواند یک اسکریپتی که با دریافت اطلاعات مربوطه این کار را انجام دهد</p>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-Git">
                            <img src="/images/git.svg" alt="">
                            <div class="Projects__Tab-Box-Details-Git-address"><h4>صفحه گیت هاب</h4><p>https://github.com/features/codespaces</p></div>
                            <div class="Projects__Tab-Box-Details-Git-person"><img src="/images/person.svg" alt=""><span>توسط حسین سیدی</span></div>

                        </div>


                    </div>
                </div>


            </div>
            <div id="tab3" class="Projects__Tab">

                <div class="Projects__Tab-Boxes">
                    <div class="Projects__Tab-Box-Title"><p>Wordpress</p> <div class="Projects__Tab-Box-Toggle"></div></div>
                    <div class="Projects__Tab-Box-Details">
                        <div class="Projects__Tab-Box-Details-Boxes">
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/page.svg" alt="">
                                <p>درخواست دهنده</p>
                                <span class="light_text_color">تیم CDN</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_up.svg" alt="">
                                <p>روش اجراو ارائه</p>
                                <span class="light_text_color">Opensourse/Github</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_signs.svg" alt="">
                                <p>زبان پروژه</p>
                                <span class="light_text_color">Pyton</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/Dollar.svg" alt="">
                                <p>مبلغ پروژه</p>
                                <span class="light_text_color">10,000,000 ریال</span>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-intro">
                            <div class="Projects__Tab-Box-Details-intro-logo"><img src="/images/pen-paper.svg" alt=""></div>
                            <div class="Projects__Tab-Box-Details-intro-text">
                                <h4>شرح پروژه</h4>
                                <p>نرم افزاری برای انتقال یک دامنه به همراه تنظیمات آن از روی کلودفلر به آروان</p>
                                <p>یک دامنه را به همراه تنظیمات مربوطه از سرویس کلودفلر به آروان منتقل کند API Key این نرم افزار باید بتواند با دریافت</p>
                                <p>حالت مطلوب میتواند یک وبسایت مستقل باشد و یا میتواند یک اسکریپتی که با دریافت اطلاعات مربوطه این کار را انجام دهد</p>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-Git">
                            <img src="/images/git.svg" alt="">
                            <div class="Projects__Tab-Box-Details-Git-address"><h4>صفحه گیت هاب</h4><p>https://github.com/features/codespaces</p></div>
                            <div class="Projects__Tab-Box-Details-Git-person"><img src="/images/person.svg" alt=""><span>توسط حسین سیدی</span></div>

                        </div>


                    </div>
                </div>
                <div class="Projects__Tab-Boxes ">
                    <div class="Projects__Tab-Box-Title"><p>CLI to work with CDN</p> <div class="Projects__Tab-Box-Toggle"></div></div>
                    <div class="Projects__Tab-Box-Details">
                        <div class="Projects__Tab-Box-Details-Boxes">
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/page.svg" alt="">
                                <p>درخواست دهنده</p>
                                <span class="light_text_color">تیم CDN</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_up.svg" alt="">
                                <p>روش اجراو ارائه</p>
                                <span class="light_text_color">Opensourse/Github</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_signs.svg" alt="">
                                <p>زبان پروژه</p>
                                <span class="light_text_color">Pyton</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/Dollar.svg" alt="">
                                <p>مبلغ پروژه</p>
                                <span class="light_text_color">10,000,000 ریال</span>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-intro">
                            <div class="Projects__Tab-Box-Details-intro-logo"><img src="/images/pen-paper.svg" alt=""></div>
                            <div class="Projects__Tab-Box-Details-intro-text">
                                <h4>شرح پروژه</h4>
                                <p>نرم افزاری برای انتقال یک دامنه به همراه تنظیمات آن از روی کلودفلر به آروان</p>
                                <p>یک دامنه را به همراه تنظیمات مربوطه از سرویس کلودفلر به آروان منتقل کند API Key این نرم افزار باید بتواند با دریافت</p>
                                <p>حالت مطلوب میتواند یک وبسایت مستقل باشد و یا میتواند یک اسکریپتی که با دریافت اطلاعات مربوطه این کار را انجام دهد</p>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-Git">
                            <img src="/images/git.svg" alt="">
                            <div class="Projects__Tab-Box-Details-Git-address"><h4>صفحه گیت هاب</h4><p>https://github.com/features/codespaces</p></div>
                            <div class="Projects__Tab-Box-Details-Git-person"><img src="/images/person.svg" alt=""><span>توسط حسین سیدی</span></div>

                        </div>


                    </div>
                </div>

                <div class="Projects__Tab-Boxes">
                    <div class="Projects__Tab-Box-Title"><p> CloudFlare to Arvan</p><div class="Projects__Tab-Box-Toggle"></div> </div>
                    <div class="Projects__Tab-Box-Details">
                        <div class="Projects__Tab-Box-Details-Boxes">
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/page.svg" alt="">
                                <p>درخواست دهنده</p>
                                <span class="light_text_color">تیم CDN</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_up.svg" alt="">
                                <p>روش اجراو ارائه</p>
                                <span class="light_text_color">Opensourse/Github</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_signs.svg" alt="">
                                <p>زبان پروژه</p>
                                <span class="light_text_color">Pyton</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/Dollar.svg" alt="">
                                <p>مبلغ پروژه</p>
                                <span class="light_text_color">10,000,000 ریال</span>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-intro">
                            <div class="Projects__Tab-Box-Details-intro-logo"><img src="/images/pen-paper.svg" alt=""></div>
                            <div class="Projects__Tab-Box-Details-intro-text">
                                <h4>شرح پروژه</h4>
                                <p>نرم افزاری برای انتقال یک دامنه به همراه تنظیمات آن از روی کلودفلر به آروان</p>
                                <p>یک دامنه را به همراه تنظیمات مربوطه از سرویس کلودفلر به آروان منتقل کند API Key این نرم افزار باید بتواند با دریافت</p>
                                <p>حالت مطلوب میتواند یک وبسایت مستقل باشد و یا میتواند یک اسکریپتی که با دریافت اطلاعات مربوطه این کار را انجام دهد</p>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-Git">
                            <img src="/images/git.svg" alt="">
                            <div class="Projects__Tab-Box-Details-Git-address"><h4>صفحه گیت هاب</h4><p>https://github.com/features/codespaces</p></div>
                            <div class="Projects__Tab-Box-Details-Git-person"><img src="/images/person.svg" alt=""><span>توسط حسین سیدی</span></div>

                        </div>


                    </div>
                </div>
                <div class="Projects__Tab-Boxes">
                    <div class="Projects__Tab-Box-Title"><p>IP WhiteList Script</p><div class="Projects__Tab-Box-Toggle"></div> </div>
                    <div class="Projects__Tab-Box-Details">
                        <div class="Projects__Tab-Box-Details-Boxes">
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/page.svg" alt="">
                                <p>درخواست دهنده</p>
                                <span class="light_text_color">تیم CDN</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_up.svg" alt="">
                                <p>روش اجراو ارائه</p>
                                <span class="light_text_color">Opensourse/Github</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_signs.svg" alt="">
                                <p>زبان پروژه</p>
                                <span class="light_text_color">Pyton</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/Dollar.svg" alt="">
                                <p>مبلغ پروژه</p>
                                <span class="light_text_color">10,000,000 ریال</span>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-intro">
                            <div class="Projects__Tab-Box-Details-intro-logo"><img src="/images/pen-paper.svg" alt=""></div>
                            <div class="Projects__Tab-Box-Details-intro-text">
                                <h4>شرح پروژه</h4>
                                <p>نرم افزاری برای انتقال یک دامنه به همراه تنظیمات آن از روی کلودفلر به آروان</p>
                                <p>یک دامنه را به همراه تنظیمات مربوطه از سرویس کلودفلر به آروان منتقل کند API Key این نرم افزار باید بتواند با دریافت</p>
                                <p>حالت مطلوب میتواند یک وبسایت مستقل باشد و یا میتواند یک اسکریپتی که با دریافت اطلاعات مربوطه این کار را انجام دهد</p>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-Git">
                            <img src="/images/git.svg" alt="">
                            <div class="Projects__Tab-Box-Details-Git-address"><h4>صفحه گیت هاب</h4><p>https://github.com/features/codespaces</p></div>
                            <div class="Projects__Tab-Box-Details-Git-person"><img src="/images/person.svg" alt=""><span>توسط حسین سیدی</span></div>

                        </div>


                    </div>
                </div>
                <div class="Projects__Tab-Boxes">
                    <div class="Projects__Tab-Box-Title"><p>cPanel Quick Installation
                        </p><div class="Projects__Tab-Box-Toggle"></div> </div>
                    <div class="Projects__Tab-Box-Details">
                        <div class="Projects__Tab-Box-Details-Boxes">
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/page.svg" alt="">
                                <p>درخواست دهنده</p>
                                <span class="light_text_color">تیم CDN</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_up.svg" alt="">
                                <p>روش اجراو ارائه</p>
                                <span class="light_text_color">Opensourse/Github</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_signs.svg" alt="">
                                <p>زبان پروژه</p>
                                <span class="light_text_color">Pyton</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/Dollar.svg" alt="">
                                <p>مبلغ پروژه</p>
                                <span class="light_text_color">10,000,000 ریال</span>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-intro">
                            <div class="Projects__Tab-Box-Details-intro-logo"><img src="/images/pen-paper.svg" alt=""></div>
                            <div class="Projects__Tab-Box-Details-intro-text">
                                <h4>شرح پروژه</h4>
                                <p>نرم افزاری برای انتقال یک دامنه به همراه تنظیمات آن از روی کلودفلر به آروان</p>
                                <p>یک دامنه را به همراه تنظیمات مربوطه از سرویس کلودفلر به آروان منتقل کند API Key این نرم افزار باید بتواند با دریافت</p>
                                <p>حالت مطلوب میتواند یک وبسایت مستقل باشد و یا میتواند یک اسکریپتی که با دریافت اطلاعات مربوطه این کار را انجام دهد</p>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-Git">
                            <img src="/images/git.svg" alt="">
                            <div class="Projects__Tab-Box-Details-Git-address"><h4>صفحه گیت هاب</h4><p>https://github.com/features/codespaces</p></div>
                            <div class="Projects__Tab-Box-Details-Git-person"><img src="/images/person.svg" alt=""><span>توسط حسین سیدی</span></div>

                        </div>


                    </div>
                </div>
                <div class="Projects__Tab-Boxes">
                    <div class="Projects__Tab-Box-Title"><p>Dynamic DNS</p> <div class="Projects__Tab-Box-Toggle"></div></div>
                    <div class="Projects__Tab-Box-Details">
                        <div class="Projects__Tab-Box-Details-Boxes">
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/page.svg" alt="">
                                <p>درخواست دهنده</p>
                                <span class="light_text_color">تیم CDN</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_up.svg" alt="">
                                <p>روش اجراو ارائه</p>
                                <span class="light_text_color">Opensourse/Github</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_signs.svg" alt="">
                                <p>زبان پروژه</p>
                                <span class="light_text_color">Pyton</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/Dollar.svg" alt="">
                                <p>مبلغ پروژه</p>
                                <span class="light_text_color">10,000,000 ریال</span>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-intro">
                            <div class="Projects__Tab-Box-Details-intro-logo"><img src="/images/pen-paper.svg" alt=""></div>
                            <div class="Projects__Tab-Box-Details-intro-text">
                                <h4>شرح پروژه</h4>
                                <p>نرم افزاری برای انتقال یک دامنه به همراه تنظیمات آن از روی کلودفلر به آروان</p>
                                <p>یک دامنه را به همراه تنظیمات مربوطه از سرویس کلودفلر به آروان منتقل کند API Key این نرم افزار باید بتواند با دریافت</p>
                                <p>حالت مطلوب میتواند یک وبسایت مستقل باشد و یا میتواند یک اسکریپتی که با دریافت اطلاعات مربوطه این کار را انجام دهد</p>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-Git">
                            <img src="/images/git.svg" alt="">
                            <div class="Projects__Tab-Box-Details-Git-address"><h4>صفحه گیت هاب</h4><p>https://github.com/features/codespaces</p></div>
                            <div class="Projects__Tab-Box-Details-Git-person"><img src="/images/person.svg" alt=""><span>توسط حسین سیدی</span></div>

                        </div>


                    </div>
                </div>
                <div class="Projects__Tab-Boxes">
                    <div class="Projects__Tab-Box-Title"><p>CLI to work with CDN</p> <div class="Projects__Tab-Box-Toggle"></div></div>
                    <div class="Projects__Tab-Box-Details">
                        <div class="Projects__Tab-Box-Details-Boxes">
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/page.svg" alt="">
                                <p>درخواست دهنده</p>
                                <span class="light_text_color">تیم CDN</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_up.svg" alt="">
                                <p>روش اجراو ارائه</p>
                                <span class="light_text_color">Opensourse/Github</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/project_signs.svg" alt="">
                                <p>زبان پروژه</p>
                                <span class="light_text_color">Pyton</span>
                            </div>
                            <div class="Projects__Tab-Box-Details-Box">
                                <img src="/images/Dollar.svg" alt="">
                                <p>مبلغ پروژه</p>
                                <span class="light_text_color">10,000,000 ریال</span>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-intro">
                            <div class="Projects__Tab-Box-Details-intro-logo"><img src="/images/pen-paper.svg" alt=""></div>
                            <div class="Projects__Tab-Box-Details-intro-text">
                                <h4>شرح پروژه</h4>
                                <p>نرم افزاری برای انتقال یک دامنه به همراه تنظیمات آن از روی کلودفلر به آروان</p>
                                <p>یک دامنه را به همراه تنظیمات مربوطه از سرویس کلودفلر به آروان منتقل کند API Key این نرم افزار باید بتواند با دریافت</p>
                                <p>حالت مطلوب میتواند یک وبسایت مستقل باشد و یا میتواند یک اسکریپتی که با دریافت اطلاعات مربوطه این کار را انجام دهد</p>
                            </div>
                        </div>
                        <div class="Projects__Tab-Box-Details-Git">
                            <img src="/images/git.svg" alt="">
                            <div class="Projects__Tab-Box-Details-Git-address"><h4>صفحه گیت هاب</h4><p>https://github.com/features/codespaces</p></div>
                            <div class="Projects__Tab-Box-Details-Git-person"><img src="/images/person.svg" alt=""><span>توسط حسین سیدی</span></div>

                        </div>


                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<section class="Meeting-structure">
    <div class="Container">
        <div class="Meeting-structure__Title">
            <div class="Meeting-structure__Title-header">
                <img src="/images/meeting-structure.svg" alt="">
                <h2>ساختار جلسات</h2>
            </div>
            <div class="Meeting-structure__Title-content">
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، </p>
            </div>
        </div>
        <div class="Meeting-structure__Tab" >
            <div class="Meeting-structure__Tab-Buttons">
                <div  class="Meeting-structure__Tab-Button Meeting-structure__Tab-Button--active" onclick="openMStab(event, 'MStab1')">
                    <div class="Meeting-structure__Tab-Button-Title">
                        جلسات استراتژی
                    </div>

                </div>
                <div  class="Meeting-structure__Tab-Button" onclick="openMStab(event, 'MStab2')">
                    <div class="Meeting-structure__Tab-Button-Title">
                        جلسات حاکمیت
                    </div>
                </div>
                <div  class="Meeting-structure__Tab-Button" onclick="openMStab(event, 'MStab3')">
                    <div class="Meeting-structure__Tab-Button-Title">
                        جلسات برنامه‌ریزی
                    </div>
                </div>
                <div  class="Meeting-structure__Tab-Button" onclick="openMStab(event, 'MStab4')">
                    <div class="Meeting-structure__Tab-Button-Title">
                        جلسات محصول
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="Meeting-structure--seperator"></div>
    <div class="Meeting-structure__Content">
        <div class="Container">
            <div class="Meeting-structure__Content-Container">
                <div id="MStab1" class="Meeting-structure__Content-Boxes Meeting-structure__Content-Boxes--active">
                    <div class="Meeting-structure__Content-Boxes-container">
                        <img src="/images/Polygon13.svg" alt="" style="right:5%">
                        <h3>جلسات استراتژی</h3>
                        <p> هر یک سال یک بار مجموعه جلساتی‌ تحت عنوان جلسات برنامه‌ریزی استراتژیک برگزار می‌شود. براساس این جلسات تیم راهبری داستان
                            یک‌ساله‌ی شرکت نگارش می‌شود OKR سال را می‌نویسد و پس از بحث و تبادل نظر</p><br>
                        <p> سازمان متناسب با رخداد‌های ۶ ماه گذشته برگزار OKR پس از گذشت ۶ ماهه مجموعه جلساتی در راستای بازنگری و یا اصلاح استراتژی و یا
                            می‌شود</p><br>
                        <strong>
                            حاضرین
                        </strong>
                        <p>تمامی اعضای شرکت می‌توانند در این جلسات حضور پیدا کنند. حضور راهبر‌های هر تیم در این جلسات اجباری است</p>
                    </div>
                </div>
                <div id="MStab2" class="Meeting-structure__Content-Boxes">
                    <div class="Meeting-structure__Content-Boxes-container">
                        <img src="/images/Polygon13.svg" alt="" style="right:29%">
                        <h3>جلسات حاکمیت دایره</h3>
                        <p> هر یک سال یک بار مجموعه جلساتی‌ تحت عنوان جلسات برنامه‌ریزی استراتژیک برگزار می‌شود. براساس این جلسات تیم راهبری داستان
                            یک‌ساله‌ی شرکت نگارش می‌شود OKR سال را می‌نویسد و پس از بحث و تبادل نظر</p><br>
                        <p> سازمان متناسب با رخداد‌های ۶ ماه گذشته برگزار OKR پس از گذشت ۶ ماهه مجموعه جلساتی در راستای بازنگری و یا اصلاح استراتژی و یا
                            می‌شود</p><br>
                        <strong>
                            حاضرین
                        </strong>

                    </div>
                </div>
                <div id="MStab3" class="Meeting-structure__Content-Boxes">
                    <div class="Meeting-structure__Content-Boxes-container">
                        <img src="/images/Polygon13.svg" alt="" style="right:60%">
                        <h3> جلسات برنامه‌ریزی </h3>
                        <p> هر یک سال یک بار مجموعه جلساتی‌ تحت عنوان جلسات برنامه‌ریزی استراتژیک برگزار می‌شود. براساس این جلسات تیم راهبری داستان
                            یک‌ساله‌ی شرکت نگارش می‌شود OKR سال را می‌نویسد و پس از بحث و تبادل نظر</p><br>
                        <p> سازمان متناسب با رخداد‌های ۶ ماه گذشته برگزار OKR پس از گذشت ۶ ماهه مجموعه جلساتی در راستای بازنگری و یا اصلاح استراتژی و یا
                            می‌شود</p><br>


                    </div>
                </div>

                <div id="MStab4" class="Meeting-structure__Content-Boxes">
                    <div class="Meeting-structure__Content-Boxes-container">
                        <img src="/images/Polygon13.svg" alt="" style="right:90%">
                        <h3>جلسات محصول</h3>
                        <p> هر یک سال یک بار مجموعه جلساتی‌ تحت عنوان جلسات برنامه‌ریزی استراتژیک برگزار می‌شود. براساس این جلسات تیم راهبری داستان
                            یک‌ساله‌ی شرکت نگارش می‌شود OKR سال را می‌نویسد و پس از بحث و تبادل نظر</p><br>
                        <p> سازمان متناسب با رخداد‌های ۶ ماه گذشته برگزار OKR پس از گذشت ۶ ماهه مجموعه جلساتی در راستای بازنگری و یا اصلاح استراتژی و یا
                            می‌شود</p><br>
                        <p>تمامی اعضای شرکت می‌توانند در این جلسات حضور پیدا کنند. حضور راهبر‌های هر تیم در این جلسات اجباری است</p>

                    </div>
                </div>



            </div>
        </div>
    </div>
</section>
<section class="Register-Form">
    <div class="Container">
        <div class="Register-Form-main">
            <form action="{{route('Register')}}" id="Register_Form" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="Register-Form__Title">
                    <h3>فرم ثبت نام شبکه ابریارهای آروان</h3>
                    <div class="Register-Form__Sub">.در صورتی که مایل باشید می‌توانید از برای ما رزومه بفرستید، لطفا فرم زیر را پر کنید</div>
                </div>
                <div class="Register-Form__Boxes">
                    <div class="Register-Form__Boxes-title">
                        اطلاعات فردی
                    </div>
                    <div class="Register-Form__Group">
                        <label for="name" class="Register-Form__field">
                            <span class="Register-Form__label Register-Form__label--required">نام</span>
                            <input name="name" type="text" id="Register-Form_name" class="Register-Form__input Register-Form__input--required" placeholder="نام و نام خانوادگی">
                            <div id="Register-Form_name_msg" class="Register-Form__input-error-msg"></div>
                        </label>
                        <label for="phone" class="Register-Form__field">
                            <span class="Register-Form__label Register-Form__label--required">تلفن</span>
                            <input name="phone" type="text" id="Register-Form_phone" class="Register-Form__input Register-Form__input--required Register-Form__input-phone" placeholder="0952654484">
                            <div id="Register-Form_phone_msg" class="Register-Form__input-error-msg"></div>
                        </label>
                        <label for="email" class="Register-Form__field">
                            <span class="Register-Form__label Register-Form__label--required">ایمیل</span>
                            <input name="mail" type="email" id="Register-Form_email" class="Register-Form__input Register-Form__input-email Register-Form__input--required" placeholder="example@email.com">
                            <div id="Register-Form_name_msg" class="Register-Form__input-error-msg"></div>
                        </label>
                        <label for="company_name" class="Register-Form__field">
                            <span class="Register-Form__label">نام شرکت</span>
                            <input name="company" type="text" id="Register-Form_company_name" class="Register-Form__input" placeholder="نام شرکت یا سازمان">
                            <div id="Register-Form_name_msg" class="Register-Form__input-error-msg"></div>
                        </label>
                    </div>

                </div>
                <div class="Register-Form__Boxes">
                    <div class="Register-Form__Boxes-title">
                        سوابق و تجربیات
                    </div>
                    <div class="Register-Form__Group">
                        <label for="resume" class="Register-Form__field">
                            <span class="Register-Form__label Register-Form__label--required">رزومه</span>
                            <div class="Register-Form__fileinput-box">
                                <p type="text" class="Register-Form__filetext "></p>
                                <input name="resume" type="file" id="Register-Form_resume" class="Register-Form__fileinput  Register-Form__fileinput--required">
                                <div id="Register-Form_name_msg" class="Register-Form__input-error-msg">حداکثر حجم مجاز فایل  1 مگابایت باشد</div>
                                <div class="Register-Form__input-button"><span>انتخاب فایل pdf</span></div>
                            </div>

                        </label>
                        <label for="portfolio" class="Register-Form__field">
                            <span class="Register-Form__label">پورتفولیو</span>
                            <div class="Register-Form__fileinput-box">
                                <p type="text" class="Register-Form__filetext ">اختیاری</p>
                                <input name="portfolio" type="file" id="Register-Form_portfolio" class="Register-Form__fileinput ">
                                <div id="Register-Form_name_msg" class="Register-Form__input-error-msg"></div>
                                <div class="Register-Form__input-button"><span>انتخاب فایل pdf</span></div>
                            </div>

                        </label>


                    </div>

                </div>
                <div class="Register-Form__Boxes">
                    <div class="Register-Form__Boxes-title">
                        توضیحات تکمیلی
                    </div>
                    <div class="Register-Form__Group">
                        <div class="Register-Form__field Register-Form__field-select">
                            <div class="Register-Form__label">نوع ابریار</div>
                            <div class="Register-Form__select">
                                <div class="Register-Form_type-selected" onclick="openOptions(this)">  <p class="D-none-Big">نوع ابریار</p></div>
                                <div class="Register-Form__options-box">
                                    <div class="Register-Form__options-title">نوع ابریار</div>
                                    <div class="Register-Form__option">ابریار کوچ ابری</div>
                                    <div class="Register-Form__option">ابریار فنی</div>
                                    <div class="Register-Form__option">ابریار بازارچه</div>
                                    <div class="Register-Form__option">ابریار آموزش</div>
                                    <div class="Register-Form__option">ابریار فروش</div>
                                    <input name="type" class="Register-Form__select-val" id="Register-Form_type" type="hidden">
                                </div>
                            </div>

                        </div>
                        <div class="Register-Form__field Register-Form__field-select">
                            <div class="Register-Form__label">سطح ابریار</div>
                            <div class="Register-Form__select">
                                <div class="Register-Form_type-selected" onclick="openOptions(this)">  <p class="D-none-Big">سطح ابریار</p> </div>
                                <div class="Register-Form__options-box">
                                    <div class="Register-Form__options-title">سطح ابریار</div>
                                    <div class="Register-Form__option">سطح 1</div>
                                    <div class="Register-Form__option">سطح 2</div>
                                    <div class="Register-Form__option">سطح </div>
                                    <div class="Register-Form__option">سطح 4</div>
                                    <input name="level" class="Register-Form__select-val" id="Register-Form_level" type="hidden">
                                </div>
                            </div>

                        </div>
                        <label for="description" class="Register-Form__field-full">
                            <span class="Register-Form__label">توضیحات</span>
                            <textarea name="description" class="Register-Form__textarea" id="Register-Form_description" placeholder="در صورتی نیاز به توضیحات تکمیلی لطفا در این باکس برای ما یادداشت بگذارید"></textarea>
                            <div id="Register-Form_name_msg" class="Register-Form__input-error-msg"></div>
                        </label>
                    </div>

                </div>
                <div class="Register-Form__footer">
                    <div class="Register-Form__comment">* پر کردن فیلدهایی که با ستاره مشخص شده ضروری است</div>
                    <div class="Register-Form__submit"><div id="Register-form__submitbtn" class="Register-Form__submit-btn">ثبت نام</div></div>
                </div>
            </form>
        </div>
    </div>
</section>
<section class="Footer">
    <div class="Container">
        <div class="Footer-gallery">
            <div class="Footer-gallery__title">
                پروژه‌های موفق
            </div>
            <div class="Footer-gallery__boxes-right-sign " onclick="gallery_slide(this,0)"></div>
            <div class="Footer-gallery__main">

                <div class="Footer-gallery__boxes" style="right: -240px;">

                    <div class="Footer-gallery__boxes-item"><img src="/images/footer-dayere.svg" alt=""></div>
                    <div class="Footer-gallery__boxes-item"><img src="/images/footer-lozi.svg" alt=""></div>
                    <div class="Footer-gallery__boxes-item"><img src="/images/footer-pasargad.svg" alt=""></div>
                    <div class="Footer-gallery__boxes-item"><img src="/images/footer-shenasa.svg" alt=""></div>
                    <div class="Footer-gallery__boxes-item"><img src="/images/footer-dayere.svg" alt=""></div>
                    <div class="Footer-gallery__boxes-item"><img src="/images/footer-lozi.svg" alt=""></div>
                    <div class="Footer-gallery__boxes-item"><img src="/images/footer-pasargad.svg" alt=""></div>
                    <div class="Footer-gallery__boxes-item">  <img src="/images/footer-shenasa.svg" alt=""></div>
                    <div class="Footer-gallery__boxes-item">  <img src="/images/footer-shenasa.svg" alt=""></div>
                    <div class="Footer-gallery__boxes-item"><img src="/images/footer-dayere.svg" alt=""></div>

                </div>

            </div>
            <div class="Footer-gallery__boxes-left-sign"  onclick="gallery_slide(this,1)"></div>
        </div>
    </div>
</section>

<script src="/js/custom.js"></script>

</body>
</html>
