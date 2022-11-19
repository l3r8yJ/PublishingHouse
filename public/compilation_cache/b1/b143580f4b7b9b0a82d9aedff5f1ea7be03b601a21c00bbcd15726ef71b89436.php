<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home.html */
class __TwigTemplate_11d8e6f9fa260a22c32c2c864c14b81307e1d3ed636dee7ec036c077e13d56ba extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Bootstrap demo</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"templates/style.css\" type=\"text/css\"/>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Roboto&display=swap\" rel=\"stylesheet\">
</head>
<body>
    <header>
      <div class=\"header-container\">
        <div class=\"header-menu-line container text-center\">
          <div class=\"row align-items-center\">
              <div class=\"col-2\">
                  <a href=\"\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" height=\"12\" class=\"location__icon\"><g fill=\"#6F6F6F\"><path d=\"M4.77 2.385c-1.155 0-2.108.969-2.108 2.153 0 1.185.938 2.154 2.107 2.154 1.17 0 2.108-.969 2.108-2.154 0-1.184-.954-2.153-2.108-2.153zm0 3.846c-.908 0-1.647-.754-1.647-1.693 0-.938.739-1.692 1.646-1.692.908 0 1.646.754 1.646 1.692 0 .939-.738 1.693-1.646 1.693z\"></path><path d=\"M4.77.077C2.307.077.261 2.047.091 4.569A4.535 4.535 0 0 0 .37 6.477c.216.6.585 1.17 1.062 1.692L4.6 11.846a.247.247 0 0 0 .17.077c.06 0 .138-.03.168-.077L8.092 8.17a4.876 4.876 0 0 0 1.062-1.692 4.55 4.55 0 0 0 .277-1.908C9.277 2.046 7.23.077 4.769.077zm3.968 6.23a4.294 4.294 0 0 1-.984 1.54l-2.985 3.491-3-3.492A4.455 4.455 0 0 1 .8 6.308C.6 5.738.508 5.169.554 4.6.692 2.6 2.308.538 4.769.538 7.231.538 8.862 2.6 8.985 4.6a4.082 4.082 0 0 1-.247 1.708z\"></path></g></svg>
                  <span class=\"location__current\">Волгоград</span>
                   </a>
              </div>
              <div class=\"col-2\">
                  <a href=\"\">
                      <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"#000000\" viewBox=\"0 0 128 128\" width=\"20px\" height=\"18px\">    <path d=\"M63,14.2l-48,17c-1.2,0.4-2,1.6-2,2.8v60c0,1.3,0.8,2.4,2,2.8l48,17c0.3,0.1,0.7,0.2,1,0.2c0.2,0,0.3,0,0.5,0 c0,0,0.1,0,0.1,0c0.1,0,0.2-0.1,0.3-0.1c0,0,0,0,0,0l48-17c1.2-0.4,2-1.6,2-2.8V34c0,0,0-0.1,0-0.1c0-0.1,0-0.3,0-0.4 c0,0,0-0.1,0-0.1c-0.2-1-0.9-1.9-1.9-2.2l-24-8.5c0,0-0.1,0-0.1,0c-0.6-0.2-1.4-0.3-2.1,0L40,39.2c-1.2,0.4-2,1.6-2,2.8v11 c0,1.7,1.3,3,3,3s3-1.3,3-3v-8.9l43.8-15.5L103,34L63,48.2c-1.2,0.4-2,1.5-2,2.8c0,0,0,0,0,0.1v55.8L19,91.9V36.1l46-16.3 c1.6-0.6,2.4-2.3,1.8-3.8C66.3,14.4,64.6,13.6,63,14.2z M67,53.1l42-14.9v53.6l-42,14.9V53.1z\"/></svg>
                      <span class=\"\">Отследить заказ</span>
                  </a>
              </div>
              <div class=\"col-2\">
                <a href=\"\">
                  Доставка и оплата
                </a>
              </div>
              <div class=\"col-2\">
                  <a href=\"\">
                    Поддержка
                  </a>
                </div>
              <div class=\"col-2\">
                  <a href=\"\">
                      +7 (495) 268-08-41
                  </a>
              </div>
              <div class=\"col-2\">
                  <a href=\"\">
                      <button>Стать автором ЭКСМО</button>
                  </a>
              </div>
            </div>
      </div>
      <div class=\"header-container container text-center\">
          <div class=\"row align-items-start\">
            <div class=\"col-3\">
              <a id=\"logo_link_icon\"href=\"\">
                  <svg id=\"cheader__logo-icon\" viewBox=\"0 0 29.2 47.7\"><path d=\"M29.2 21.5c0 8.6-8.3 12-16.1 9.5-5.8-2-2.8-6.7.4-5.7 12.3 4 14-11.1-2.6-19.3-3.2-1.5-3.6-3.3-2.2-6 8.5 3 20.5 11.3 20.5 21.5m-8.8 26.2c1.5-2.7 1.1-4.5-2.1-6-16.6-8.2-14.9-23.2-2.6-19.3 3.2 1 6.2-3.7.4-5.7C8.3 14.2 0 17.6 0 26.2c0 10.3 12 18.5 20.4 21.5\"></path></svg>
                  <svg id=\"cheader__logo-title\" viewBox=\"0 0 113.7 21.7\"><path d=\"M7.7 0c2.4 0 4.5.5 6.3 1.4 1.8.9 3.3 2.3 4.2 3.9 1 1.7 1.5 3.6 1.5 5.7 0 1.9-.5 3.8-1.6 5.5-1 1.7-2.5 3-4.2 3.9-1.8.9-3.8 1.3-6 1.3-2.9 0-5.6-.7-7.9-2v-3.9c1.5.8 2.8 1.4 4 1.8 1.2.4 2.4.6 3.5.6 2 0 3.8-.5 5.2-1.6 1.4-1 2.3-2.5 2.7-4.2H4.8V9.2h10.6C15 7.5 14.1 6.1 12.6 5c-1.4-1-3.1-1.6-4.9-1.6-1.3.1-2.5.3-3.7.6-1.2.4-2.4.9-3.8 1.7V1.8C2.7.6 5.2 0 7.7 0zm19.9.3v8.5h.2c.9 0 1.6-.2 2.1-.4.5-.3.9-.7 1.3-1.3.4-.6.8-1.3 1.2-2.3C33 3.5 33.5 2.6 34 2c.5-.6 1.1-1 1.8-1.3.7-.3 1.6-.4 2.6-.4.4 0 .7 0 1 .1v3.3c-.8 0-1.4.1-1.8.2-.4.1-.7.4-1 .8-.3.4-.6 1-1.1 2-.8 1.9-1.8 3.1-3.1 3.6 1 .4 1.9 1.1 2.7 2 .8.9 1.7 2.2 2.6 3.9l2.9 5.3h-4.5l-2.6-5c-.6-1.2-1.2-2.1-1.8-2.7-.6-.7-1.1-1.1-1.7-1.4-.6-.3-1.4-.4-2.4-.4v9.6h-4V.3h4zM53.9 0c1.2 0 2.4.1 3.5.4s2.4.7 3.7 1.4v3.8c-1.3-.7-2.5-1.3-3.6-1.6-1.1-.3-2.3-.5-3.5-.5-1.5 0-2.9.3-4.1.9-1.2.6-2.2 1.5-2.8 2.6-.7 1.1-1 2.4-1 3.8s.3 2.7 1 3.8 1.6 2 2.8 2.6c1.2.6 2.6.9 4.1.9 1.2 0 2.3-.2 3.3-.5 1.1-.3 2.4-.9 4-1.8v3.8c-1.4.7-2.6 1.2-3.8 1.5s-2.5.5-4 .5c-2.2 0-4.2-.4-6-1.3-1.8-.9-3.1-2.2-4.1-3.8C42.5 14.9 42 13 42 11c0-2.1.5-4 1.6-5.7 1-1.7 2.5-3 4.3-3.9 1.7-.9 3.7-1.4 6-1.4zM69 .3l6.9 8.3L82.8.3h3.6v21.1h-4.1V6.6h-.1l-6 7.4h-.6l-6.1-7.4h-.1v14.8h-4.1V.3H69zm33-.3c2.2 0 4.2.5 5.9 1.4 1.8.9 3.1 2.2 4.2 3.9 1 1.7 1.6 3.6 1.6 5.6 0 2-.5 3.8-1.5 5.5-1 1.7-2.4 3-4.2 3.9-1.8.9-3.8 1.4-6 1.4s-4.2-.5-6-1.4c-1.8-.9-3.2-2.3-4.2-3.9-1-1.7-1.5-3.5-1.5-5.5 0-1.9.5-3.8 1.5-5.5 1-1.7 2.4-3 4.1-4C97.7.5 99.7 0 102 0zm-7.4 10.9c0 1.4.3 2.7 1 3.8.6 1.1 1.5 2 2.7 2.6 1.1.6 2.4.9 3.9.9 2.2 0 4-.7 5.3-2 1.4-1.4 2.1-3.1 2.1-5.3 0-1.4-.3-2.7-.9-3.8-.6-1.1-1.5-2-2.7-2.6-1.1-.6-2.4-.9-3.9-.9-1.4 0-2.7.3-3.9.9-1.1.6-2 1.5-2.6 2.6-.7 1.1-1 2.3-1 3.8z\"></path></svg>
                  <svg id=\"cheader__logo-text\" viewBox=\"0 0 88 23\"><path d=\"M1.4.1v5.3L6.1.1h.8v7.6H5.5V2.6L.8 7.8H0V.1h1.4zM11 0c.8 0 1.4.2 1.9.5.4.4.7.9.7 1.5 0 .4-.1.7-.3 1s-.5.5-.9.7c.9.4 1.4 1 1.4 1.8 0 .7-.3 1.2-.8 1.6-.5.4-1.2.6-2.1.6-.8 0-1.6-.1-2.3-.4V6c.7.4 1.4.5 2.2.5.5 0 .8-.1 1.1-.3.3-.2.4-.4.4-.8 0-.7-.6-1-1.8-1H9.4V3.3h1.1c.5 0 .9-.1 1.2-.3.3-.2.4-.5.4-.8 0-.6-.5-.9-1.5-.9-.3 0-.7 0-1 .1-.4.1-.7.2-1 .3V.5C9.3.2 10.1 0 11 0zm7.9.1l2.6 6.4h.9v2.6h-1.5V7.7h-5.3v1.4h-1.4V6.5h.9L17.5.1h1.4zm-2.4 6.4H20l-1.8-4.7-1.7 4.7zM27.2.1l3.4 7.6H29l-.8-1.9h-3.4l-.7 1.9h-1.5L25.7.1h1.5zm-1.9 4.6h2.5l-1.3-3-1.2 3zM36.9.1v1.1h-2.7v6.5h-1.5V1.2H30V.1h6.9zm6.1 0v1.1h-3.4v2h3.3v1.1h-3.3v2.2H43v1.1h-5V.1h5zm5.1 0l3.4 7.6H50l-2.5-5.9-2.4 5.9h-1.5L47 .1h1.1zm5.8 0v3h1.2c.9 0 1.5.2 2 .6.5.4.8 1 .8 1.7s-.3 1.3-.7 1.7c-.5.4-1.2.6-2 .6h-2.8V.1h1.5zm1.3 6.5c.4 0 .7-.1.9-.3.2-.2.3-.5.3-.8 0-.4-.1-.6-.3-.9-.2-.2-.5-.3-.9-.3h-1.3v2.4h1.3zM63.1 0c.4 0 .9 0 1.3.1s.9.3 1.3.5V2c-.5-.3-.9-.5-1.3-.6s-.8-.2-1.2-.2c-.5 0-1 .1-1.5.3-.4.2-.8.5-1 .9-.2.4-.4.9-.4 1.4 0 .5.1 1 .4 1.4s.6.7 1 .9c.4.2.9.3 1.5.3.4 0 .8-.1 1.2-.2.4-.1.9-.3 1.4-.6V7c-.5.3-.9.4-1.4.6-.4.2-.9.2-1.4.2-.8 0-1.5-.2-2.2-.5-.6-.3-1.1-.8-1.5-1.4-.4-.6-.5-1.3-.5-2 0-.8.2-1.5.6-2.1.4-.6.9-1.1 1.5-1.4.6-.2 1.4-.4 2.2-.4zm5.5.1v3h.1c.3 0 .6-.1.7-.2.2-.1.3-.2.5-.5.2-.2.3-.5.4-.8.2-.5.4-.8.6-1 .2-.2.4-.4.6-.5.2-.1.6-.1.9-.1h.4v1.2c-.3 0-.5 0-.7.1-.1.1-.3.1-.4.3-.1.1-.2.4-.4.7-.3.7-.7 1.1-1.1 1.3.4.1.7.4 1 .7.3.3.6.8.9 1.4l1 1.9h-1.6l-.9-1.8c-.2-.4-.4-.8-.6-1-.2-.2-.4-.4-.6-.5-.2-.1-.5-.2-.8-.2v3.4h-1.4V.1h1.4zm9.6 0l3.4 7.6H80l-.8-1.9h-3.4l-.7 1.9h-1.5L76.7.1h1.5zm-1.9 4.6h2.5l-1.3-3-1.2 3zM88 .1v7.6h-1.5v-3h-.3c-.5 0-.9.1-1.2.4-.3.2-.6.6-.9 1.2l-.8 1.5h-1.7l.9-1.6c.3-.5.5-.9.8-1.2.3-.3.5-.5.9-.7-1.1-.3-1.6-1-1.6-1.9 0-.7.2-1.2.7-1.6.5-.4 1.2-.6 2-.6H88zm-4 2.3c0 .3.1.6.4.8.3.2.6.3 1.1.3h1.1V1.2h-1.1c-.5 0-.8.1-1.1.3-.3.2-.4.5-.4.9zM4.8 13.5v1.2H1.5v6.4H0v-7.6h4.8zm3.9 0c.7 0 1.3.2 1.7.6.4.4.7.9.7 1.6 0 .7-.2 1.2-.7 1.6-.5.4-1 .6-1.8.6H7.2v3.2H5.8v-7.6h2.9zm-.4 3.3c.4 0 .7-.1.9-.3.2-.2.3-.4.3-.8 0-.7-.5-1.1-1.4-1.1h-1v2.1h1.2zm4.7-3.3l2.6 6 2.1-6h1.5l-2.8 7.4c-.3.7-.6 1.2-1 1.6-.4.3-.8.5-1.4.5-.5 0-.8-.1-1.1-.2v-1.3c.3.2.7.3 1.1.3.2 0 .4-.1.6-.2.2-.1.3-.3.3-.6l-3.4-7.6H13zm14.1 0v7.6h-1.5v-6.4h-4v6.4h-1.5v-7.6h7zm8.6 0v7.6h-1.5v-6.4h-4v6.4h-1.5v-7.6h7zm5.5 0l3.4 7.6H43l-.8-1.9h-3.4l-.7 1.9h-1.5l3.1-7.6h1.5zm-1.9 4.6h2.5l-1.3-3-1.2 3z\"></path></svg>
              </a>
            </div>
            <div class=\"col-5\">
              <div class=\"search-container\">
                  
                    <form action=\"\">
                      <div class=\"dropdown\" id=\"search_dropdown\">
                        <button class=\"btn btn-secondary dropdown-toggle\" id=\"search-filter-btn\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                         Везде
                        </button>
                        <ul class=\"dropdown-menu\">
                          <li><a class=\"dropdown-item\" href=\"#\">Везде</a></li>
                          <li><a class=\"dropdown-item\" href=\"#\">Книги</a></li>
                          <li><a class=\"dropdown-item\" href=\"#\">Авторы</a></li>
                          <li><a class=\"dropdown-item\" href=\"#\">Персонажи</a></li>
                          <li><a class=\"dropdown-item\" href=\"#\">Серии</a></li>
                          <li><a class=\"dropdown-item\" href=\"#\">Подборки</a></li>
                          <li><a class=\"dropdown-item\" href=\"#\">Статьи</a></li>
                        </ul>
                      </div>
                      <input type=\"text\" id=\"search-input\" placeholder=\"Поиск по сайту\">
                      <button id=\"search_submit_btn\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"#000000\" viewBox=\"0 0 30 30\" width=\"30px\" height=\"30px\"><path d=\"M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z\"/></svg>
                      </button>
                    </form>
              </div>
            </div>
            <div class=\"col-2\">
              <svg id=\"authorization_icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 32\"><title/><g data-name=\"Layer 2\" id=\"Layer_2\"><path d=\"M16,17.5A7.5,7.5,0,1,1,23.5,10,7.5,7.5,0,0,1,16,17.5Zm0-14A6.5,6.5,0,1,0,22.5,10,6.51,6.51,0,0,0,16,3.5Z\"/><path d=\"M26,28.5H6a.5.5,0,0,1-.5-.5V22a.68.68,0,0,1,0-.14c.48-1.66,2-2.81,3.4-3.82.33-.25.64-.48.93-.72a.51.51,0,0,1,.68.05A7.17,7.17,0,0,0,16,19.5a7.11,7.11,0,0,0,5.45-2.13.51.51,0,0,1,.68-.05c.29.24.6.47.93.71,1.37,1,2.92,2.17,3.4,3.83a.68.68,0,0,1,0,.14v6A.5.5,0,0,1,26,28.5Zm-19.5-1h19V22.07c-.41-1.3-1.79-2.33-3-3.23l-.61-.46A8.24,8.24,0,0,1,16,20.5a8.29,8.29,0,0,1-5.89-2.12l-.62.46c-1.22.9-2.6,1.93-3,3.23Z\"/></g></svg>
              <a href=\"\"><span>Войти</span></a>
            </div>
            <div class=\"col-2\">
              <svg id=\"basket_icon\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" id=\"Capa_1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 299.915 299.915\" style=\"enable-background:new 0 0 299.915 299.915;\" xml:space=\"preserve\">
                <g>
                  <path d=\"M293.494,53.616H55.701c-0.463,0-0.88,0.174-1.318,0.27l-9.672-32.115c-0.109-0.347-0.341-0.604-0.495-0.925   c-0.264-3.303-2.956-5.919-6.324-5.919c-0.006,0-0.019,0-0.026,0L6.401,15.061C2.847,15.081-0.013,17.973,0,21.52   c0.013,3.541,2.886,6.401,6.427,6.401c0.006,0,0.019,0,0.026,0l26.652-0.116l61.524,204.187   c-6.112,5.585-10.013,13.541-10.013,22.468c0,16.858,13.663,30.527,30.527,30.527c16.858,0,30.527-13.67,30.527-30.527   c0-4.396-0.964-8.548-2.635-12.32h88.819c-1.671,3.773-2.635,7.924-2.635,12.32c0,16.858,13.663,30.527,30.527,30.527   c16.858,0,30.527-13.67,30.527-30.527s-13.67-30.527-30.527-30.527c-6.401,0-12.333,1.986-17.243,5.354H132.38   c-4.91-3.368-10.836-5.354-17.237-5.354c-3.181,0-6.189,0.623-9.075,1.523l-9.178-30.45l161.918-0.129   c2.834,0,5.167-1.87,6.016-4.422c0.219-0.405,0.456-0.797,0.585-1.26l34.274-126.39c0.219-0.803,0.244-1.607,0.154-2.384   c0.006-0.135,0.077-0.244,0.077-0.373C299.921,56.495,297.042,53.616,293.494,53.616z M259.753,236.781   c9.749,0,17.674,7.924,17.674,17.674c0,9.749-7.924,17.674-17.674,17.674c-9.75,0-17.674-7.924-17.674-17.674   C242.08,244.705,250.004,236.781,259.753,236.781z M115.15,236.781c9.75,0,17.674,7.924,17.674,17.674   c0,9.749-7.924,17.674-17.674,17.674s-17.674-7.924-17.674-17.674C97.476,244.705,105.4,236.781,115.15,236.781z M254.04,182.03   l-161.011,0.129L58.176,66.476h227.201L254.04,182.03z\"/>
                </g>
                </svg>
                <a href=\"\"><span>Корзина</span></a>
            </div>
          </div>
        </div>

        <nav class=\"navbar navbar-expand-lg bg-light\" id=\"navbar_container\">
          <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
              <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">
                    <svg id=\"books-nav-menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" id=\"Capa_1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 250.579 250.579\" style=\"enable-background:new 0 0 250.579 250.579;\" xml:space=\"preserve\">
                      <g id=\"Menu\">
                        <path style=\"fill-rule:evenodd;clip-rule:evenodd;\" d=\"M22.373,76.068h205.832c12.356,0,22.374-10.017,22.374-22.373   c0-12.356-10.017-22.373-22.374-22.373H22.373C10.017,31.323,0,41.339,0,53.696C0,66.052,10.017,76.068,22.373,76.068z    M228.205,102.916H22.373C10.017,102.916,0,112.933,0,125.289c0,12.357,10.017,22.373,22.373,22.373h205.832   c12.356,0,22.374-10.016,22.374-22.373C250.579,112.933,240.561,102.916,228.205,102.916z M228.205,174.51H22.373   C10.017,174.51,0,184.526,0,196.883c0,12.356,10.017,22.373,22.373,22.373h205.832c12.356,0,22.374-10.017,22.374-22.373   C250.579,184.526,240.561,174.51,228.205,174.51z\"/>
                      </g>
                      </svg>
                    <span id=\"books-nav-menu-text\" >Книги</span>
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Новинки</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Бестселлеры</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Акции</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Подборки</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Рейтинги</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Серии</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">
                    <span>Авторы</span> 
                    <svg class=\"down-arrow-nav-menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" enable-background=\"new 0 0 256 256\" height=\"256px\" id=\"Layer_1\" version=\"1.1\" viewBox=\"0 0 256 256\" width=\"256px\" xml:space=\"preserve\"><path d=\"M38.399,76.8c1.637,0,3.274,0.625,4.524,1.875l85.075,85.076l85.075-85.076c2.5-2.5,6.55-2.5,9.05,0s2.5,6.55,0,9.05  l-89.6,89.601c-2.5,2.5-6.551,2.5-9.051,0l-89.6-89.601c-2.5-2.5-2.5-6.55,0-9.05C35.124,77.425,36.762,76.8,38.399,76.8z\"/></svg>
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">
                    <span>Партнерам/ О нас</span> 
                    <svg class=\"down-arrow-nav-menu-icon\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" enable-background=\"new 0 0 256 256\" height=\"256px\" id=\"Layer_1\" version=\"1.1\" viewBox=\"0 0 256 256\" width=\"256px\" xml:space=\"preserve\"><path d=\"M38.399,76.8c1.637,0,3.274,0.625,4.524,1.875l85.075,85.076l85.075-85.076c2.5-2.5,6.55-2.5,9.05,0s2.5,6.55,0,9.05  l-89.6,89.601c-2.5,2.5-6.551,2.5-9.051,0l-89.6-89.601c-2.5-2.5-2.5-6.55,0-9.05C35.124,77.425,36.762,76.8,38.399,76.8z\"/></svg>
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Оптовые продажи книг</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">
                    <div id=\"subscribe-nav-box-item\">
                      <svg id=\"envelope-nav-icon\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" id=\"Capa_1\" x=\"0px\" y=\"0px\" width=\"612px\" height=\"612px\" viewBox=\"0 0 612 612\" style=\"enable-background:new 0 0 612 612;\" xml:space=\"preserve\">
                        <g>
                          <g id=\"Shape_11\">
                            <g>
                              <path d=\"M543.15,91.8H68.85C30.891,91.8,0,122.69,0,160.65v290.7C0,489.31,30.891,520.2,68.85,520.2h474.3     c37.959,0,68.85-30.891,68.85-68.851v-290.7C612,122.69,581.109,91.8,543.15,91.8z M543.15,107.1     c11.918,0,22.843,4.054,31.747,10.664L306,326.899L37.103,117.764c8.905-6.61,19.829-10.664,31.748-10.664H543.15z M596.7,451.35     c0,12.011-4.116,22.981-10.817,31.916L387.901,285.284l-10.817,10.817l197.981,197.982c-8.935,6.701-19.905,10.817-31.915,10.817     H68.85c-12.011,0-22.98-4.116-31.916-10.817l197.982-197.982l-10.817-10.817L26.117,483.266     C19.416,474.331,15.3,463.36,15.3,451.35v-290.7c0-12.041,4.146-23.042,10.878-31.992L306,346.3l279.821-217.642     c6.732,8.951,10.879,19.951,10.879,31.992V451.35z\"/>
                            </g>
                          </g>
                        </g>
                        </svg>
                        <span id=\"subscribe-nav-text\">Подписаться</span>
                    </div>
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">
                    <div id=\"journal-nav-box-item\">
                      <svg id=\"journal-nav-icon\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:sketch=\"http://www.bohemiancoding.com/sketch/ns\" width=\"64px\" height=\"48px\" viewBox=\"0 0 64 48\" version=\"1.1\">
                        <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" sketch:type=\"MSPage\">
                            <g id=\"Book-open\" sketch:type=\"MSLayerGroup\" transform=\"translate(1.000000, 2.000000)\" stroke=\"#6B6C6E\" stroke-width=\"2\">
                                <path d=\"M62,42 C62,43.1 61.1,44 60,44 C60,44 37,35.2 31,44 C25,35.2 2,44 2,44 C0.9,44 0,43.1 0,42 L0,5.8 C0,4.7 0.9,3.8 2,3.8 C2,3.8 27,-5 31,3.8 C35,-5 60,3.8 60,3.8 C61.1,3.8 62,4.7 62,5.8 L62,42 L62,42 Z\" id=\"Shape\" sketch:type=\"MSShapeGroup\"/>
                                <path d=\"M38,5.68434189e-14 L38,26.4 L41,19.6 L44,26.4 L44,1\" id=\"Shape\" sketch:type=\"MSShapeGroup\"/>
                                <path d=\"M31,3.9 L31,44\" id=\"Shape\" sketch:type=\"MSShapeGroup\"/>
                            </g>
                        </g>
                    </svg>
                      <span id=\"subscribe-nav-text\">Онлайн-журнал</span>
                    </div>
                  </a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <main>
      <div class=\"breadcrumb-container\">
        <div class=\"breadcrumb-section\">
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Главная</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Книги</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Художественная литература</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Детективы, триллеры</a></li>
              <li class=\"breadcrumb-item\"><a href=\"#\">Триллеры</a></li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">Алая река</li>
            </ol>
          </nav>
        </div>
      </div>
        <div class=\"book-card\">
          <div class=\"container text-center\">
            <div class=\"row\">
              <div class=\"col-1\">
                <div class=\"preview-image-container\">
                  <div class=\"image-item-container active-image\">
                    <img class=\"img-item\"src=\"https://cdn.eksmo.ru/v2/ITD000000000940514/COVER/cover1__w60.jpg\">
                  </div>
                  <div class=\"image-item-container\">
                    <img class=\"img-item\"src=\"https://cdn.eksmo.ru/v2/ITD000000000940514/COVER/cover4__w60.jpg\">
                  </div>
                  <div class=\"image-item-container\">
                    <img class=\"img-item\"src=\"https://cdn.eksmo.ru/v2/ITD000000000940514/COVER/spine__h100.jpg\">
                  </div>
                  <div class=\"image-item-container\">
                    <img class=\"img-item\"src=\"https://cdn.eksmo.ru/v2/ITD000000000940514/COVER/siluet__w60.jpg\">
                  </div>
                  <div class=\"image-item-container\">
                    <img class=\"img-item\"src=\"https://i.ytimg.com/vi/U-Fr6ObsuQo/0.jpg\">
                  </div> 
                </div>
              </div>
              <div class=\"col-5\">
                <div class=\"tags\">
                  <div class=\"tag-item\">
                    <a href=\"\" ><span>РЕКОМЕНДУЕМ</span></a>
                  </div>
                  <div class=\"tag-item\">
                    <a href=\"\" ><span>БЕСТСЕЛЛЕР NEW YORK TIMES
                    </span></a>
                  </div>
                  <div class=\"tag-item\">
                    <a href=\"\" ><span>БЕСТСЕЛЛЕР AMAZON</span></a>
                  </div>
                </div>
                  <div class=\"main-image-container\">
                    <img id=\"main-image\" src=\"https://cdn.eksmo.ru/v2/ITD000000000940514/COVER/cover1__w820.jpg\" alt=\"\">
                  </div>
                  <div class=\"options-container\">
                    <div class=\"container text-center\">
                      <div class=\"row\">
                        <div class=\"col\">
                          <div class=\"options-element\">
                              <span>Читать фрагмент</span>
                          </div>
                        </div>
                        <div class=\"col\">
                          <div class=\"options-element\">
                            <span>Слушать фрагмент</span>
                          </div>
                        </div>
                        <div class=\"col\">
                          <div class=\"options-element\">
                            <span>Добавить в подборку</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"together-container\">
                      <p>Вместе дешевле</p>
                      <div class=\"slider-container\">
                        <div id=\"carouselExampleControlsNoTouching\" class=\"carousel carousel-dark slide\" data-bs-touch=\"false\">
                          <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                              <div class=\"slider-together-item\">
                                <div class=\"img-min\">
                                    <img class=\"together-img-item\" src=\"https://cdn.eksmo.ru/v2/ITD000000000923455/COVER/cover1__w220.jpg\" alt=\"\">
                                </div>
                                Алекс Михаэлидес
                                <h5>Безмолвный пациент</h5>
                                <p>Алекс Михаэлидес</p>
                                <h2>662 Р</h2>
                              </div>
                            </div>
                            <div class=\"carousel-item active\">
                              <div class=\"slider-together-item\">
                                <div class=\"img-min\">
                                    <img class=\"together-img-item\" src=\"https://cdn.eksmo.ru/v2/ITD000000000953467/COVER/cover1__w220.jpg\" alt=\"\">
                                </div>
                                <h5>Я слежу за тобой</h5>
                                <p>Тереза Дрисхол</p>
                                <h2>675 Р</h2>
                              </div>
                            </div>
                          </div>
                          <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControlsNoTouching\" data-bs-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Previous</span>
                          </button>
                          <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControlsNoTouching\" data-bs-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Next</span>
                          </button>
                        </div>
                      </div>



                  </div>

                  <div class=\"carousel-item active\">
                    <div class=\"slider-item\">
                      
                      <div class=\"slider-item-text\">
                        <span>
                          Выгода 682 ₽ по промокоду HUGGE25
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class=\"buy-container\">
                      <div class=\"buy-price-value\">
                        <h3>Итого: </h3> 
                        Итого: 
                      </div> 
                      <div class=\"price-sale-container\">
                        <span id=\"new-price\">2045 ₽</span>
                        <span id=\"old-price\">2727 ₽</span>
                      </div>
                      <button id=\"add-in-basket\" class=\"in-basket-complect\" style=\"width: 250px;\">В корзину комплектом</button>
                  </div>






              </div>
                <div class=\"col-6\">
                  <div class=\"book-info-container\">
                    <h3>Алая река</h3>
                    <a href=\"\">Лиз мур</a>
                  </br><span>О книге</span>
                  </br><span>БЕСТСЕЛЛЕР NEW YORK TIMES</span>
                  </div>
                  <div class=\"prices-container\">
                      <div class=\"prices-main-content-container\">
                        <div class=\"container text-center price-items-container\">
                          <div class=\"row\">
                            <div class=\"col-4\">
                              <div class=\"price-item active-price\">
                                  <span>БУМАЖНАЯ</span></br>
                                  <div class=\"price-container\">
                                    <span> 570 ₽</span>
                                  </div>
                              </div>
                            </div>
                            <div class=\"col-4\">
                              <div class=\"price-item\">
                                <span>ЭЛЕКТРОННАЯ</span></br>
                                <div class=\"price-container\">
                                  <span> 249 ₽</span>
                                </div>
                            </div>
                            </div>
                            <div class=\"col-4\">
                              <div class=\"price-item\">
                                <span>АУДИОКНИГА</span></br>
                                <div class=\"price-container\">
                                  <span> 349 ₽</span>
                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"container text-center\">
                          <div class=\"row\">
                            <div class=\"col-5\">
                              <div class=\"price-sale-container\">
                                <span id=\"new-price\">570 ₽</span>
                                <span id=\"old-price\">695 ₽</span>
                                <div id=\"sale-value\">-18%</div>
                              </div>
                              <div class=\"col-7\">
                                <button id=\"add-in-basket\">Добавить в корзину</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"prices-stocks-container\">
                        <div  id=\"stocks-title\">
                          <span>Выберите самую удобную акцию:</span>
                        </div>
                        <div class=\"slider-container\">
                          <div id=\"carouselExampleControlsNoTouching\" class=\"carousel carousel-dark slide\" data-bs-touch=\"false\">
                            <div class=\"carousel-inner\">
                              <div class=\"carousel-item active\">
                                <div class=\"slider-item\">
                                  <svg id=\"like-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-hand-thumbs-up\" viewBox=\"0 0 16 16\">
                                    <path d=\"M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z\"/>
                                  </svg>
                                  <div class=\"slider-item-text\">
                                    <span>
                                      Уютная 25% скидка!
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class=\"carousel-item\">
                                <div class=\"slider-item\">
                                  <svg id=\"like-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-hand-thumbs-up\" viewBox=\"0 0 16 16\">
                                    <path d=\"M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z\"/>
                                  </svg>
                                  <div class=\"slider-item-text\">
                                    <span>
                                      Уютная 25% скидка!
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControlsNoTouching\" data-bs-slide=\"prev\">
                              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                              <span class=\"visually-hidden\">Previous</span>
                            </button>
                            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControlsNoTouching\" data-bs-slide=\"next\">
                              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                              <span class=\"visually-hidden\">Next</span>
                            </button>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class=\"characters-container\">
                    <h5>Характеристики</h5>
                    <div class=\"container text-center\">
                      <div class=\"row\">
                        <div class=\"col characters-column\">
                          <p>Серия: Главный триллер года</p>
                          <p>Издательство: Издательство \"Эксмо\"</p>
                          <p>Все характеристики</p>
                        </div>
                        <div class=\"col characters-column\">
                          <p>Кол-во страниц: 448</p>
                          <p>Дата выхода: 20 октября 2020</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"delivery-container\">
                    <div id=\"delivery-title\">
                      <span style=\"margin-right: 20px;\">Доставка</span>
                      <span>Способы оплаты</span>
                    </div>
                      <p> В наличии</p>
                      <p>Курьерская доставка 8 ноября, 204 руб.</p>
                      <p>Пункты выдачи 9 ноября, 0 руб., скидка 0rub для заказов от 0rub рублей</p>
                      <p>По вопросам заказа: +7 (495) 268-08-41</p>
                      <p>Гарантированный возврат от 2 до 10 дней</p>
                  </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>

    <footer>
      <div class=\"footer-container\">
        <div class=\"container text-center\">
          <div class=\"row\">
            <div class=\"col-2 footer-menu-column\">
              <div class=\"title-menu\">
                <a href=\"\" class=\"title-menu-link\"><span>О НАС</span></br></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>О компании</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Карьера</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Новости</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Foreign Rights</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Социальная ответственность</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Где купить</span></a>
              </div>
              <div class=\"content-menu last-menu-item\">
                <a href=\"\"  class=\"content-menu-link\"><span>Контакты</span></a>
              </div>
              <div class=\"title-menu\">
                <a href=\"\" class=\"title-menu-link\"><span>КНИГИ</span></br></a>
              </div>
              <div class=\"title-menu\">
                <a href=\"\" class=\"title-menu-link\"><span>НОВИНКИ</span></br></a>
              </div>
              <div class=\"title-menu\">
                <a href=\"\" class=\"title-menu-link\"><span>СЕРИИ</span></br></a>
              </div>
              <div class=\"title-menu\">
                <a href=\"\" class=\"title-menu-link\"><span>ПОДБОРКИ</span></br></a>
              </div>
            </div>
            <div class=\"col-2 footer-menu-column\">
              <div class=\"title-menu\">
                <a href=\"\" class=\"title-menu-link\"><span>ЖУРНАЛ</span></br></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Новости</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Жизненно</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Тесты</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Тренды</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Познавательно</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Мнения</span></a>
              </div>
            </div>
            <div class=\"col-2 footer-menu-column\">
              <div class=\"title-menu\">
                <a href=\"\" class=\"title-menu-link\"><span>ПАРТНЕРАМ</span></br></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Корпоративным клиентам</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Библиотекам</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Блогерам</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Книги Эксмо оптом</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Книги Эксмо за рубежом</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Франчайзинг с Эксмо</span></a>
              </div>
              <div class=\"content-menu last-menu-item\">
                <a href=\"\"  class=\"content-menu-link\"><span>Дайджест</span></a>
              </div>
              <div class=\"title-menu\">
                <a href=\"\" class=\"title-menu-link\"><span>АВТОРЫ</span></br></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Новым авторам</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Наши авторы</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>События и встречи</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Коммерчиские услуги по изданию книги</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Форум</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Служба заботы об авторах</span></a>
              </div>
            </div>
            <div class=\"col-2 footer-menu-column\">
              <div class=\"title-menu\">
                <a href=\"\" class=\"title-menu-link\"><span>ЧИТАТЕЛЯМ</span></br></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Часто задаваемые вопросы</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Конкурсы рецензий</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Словарь читателя</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Литературные премии</span></a>
              </div>
              <div class=\"content-menu last-menu-item\">
                <a href=\"\"  class=\"content-menu-link \"><span>Печать по требованию</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Сертификация</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Пользовательское соглашение</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Политика обработки персональных данных</span></a>
              </div>
              <div class=\"content-menu\">
                <a href=\"\"  class=\"content-menu-link\"><span>Политика обмена/возврата</span></a>
              </div>
              <div class=\"content-menu last-menu-item\">
                <a href=\"\"  class=\"content-menu-link \"><span>Доставка и оплата</span></a>
              </div>
              <div class=\"title-menu\">
                <a href=\"\" class=\"title-menu-link\"><span>КАРТА САЙТА</span></br></a>
              </div>
            </div>
            <div class=\"col-2 footer-menu-column\">
              <div class=\"title-menu\">
                <a href=\"\" class=\"title-menu-link\"><span>МНЕ ТОЛЬКО СПРОСИТЬ</span></br></a>
              </div>
              <div>
                <img id=\"faq-door-footer-image\" src=\"templates/images/faq-door.png\" alt=\"\">
              </div>
              <div>
                <button id=\"questions-footer-btn\">ЧАСТЫЕ ВОПРОСЫ</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"bottom-line-footer\">
        <div class=\"container text-center\">
          <div class=\"row\">
            <div class=\"col-4\" id=\"trademark-text-container\">
              <span>© ЭКСМО, 2022</span>
            </div>
            <div class=\"col-8\" id=\"text-info-footer-container\">
              <span>Лицензия № 46097      123308, г. Москва, Ул. Зорге, д.1, стр.1.      +7 (495) 411-68-86.</span>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3\" crossorigin=\"anonymous\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "home.html", "/usr/local/var/www/PublishingHouse/public/templates/home.html");
    }
}
