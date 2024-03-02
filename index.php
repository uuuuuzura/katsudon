<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Katsudon - TCG Collection</title>
  </head>
  <body>
    <div class="container">
      <header class="banner">
      </header>
      <nav>
        <ul class="sitenav">
          <li class="sitenav__item sitenav--step-1">
            <a href="/" class="sitenav__link">
              <span class="sitenav__number">01.</span> Index
            </a>
          </li>
          <li class="sitenav__item sitenav--step-2">
            <a href="/albums" class="sitenav__link">
              <span class="sitenav__number">02.</span> Albums
            </a>
          </li>
          <li class="sitenav__item sitenav--step-3">
            <a href="/trading" class="sitenav__link">
              <span class="sitenav__number">03.</span> Trading
            </a>
          </li>
          <li class="sitenav__item sitenav--step-4">
            <a href="/mastered" class="sitenav__link">
              <span class="sitenav__number">04.</span> Mastered
            </a>
          </li>
          <li class="sitenav__item sitenav--step-5">
            <a href="/logs" class="sitenav__link">
              <span class="sitenav__number">05.</span> Logs
            </a>
          </li>
        </ul>
      </nav>

        <?php
        $request = $_SERVER["REQUEST_URI"];

        switch ($request) {
            case "/":
            case "":
                require __DIR__ . '/pages/index.php';
                break;
            default:
                $filename = __DIR__ . "/pages" . $request . ".php";
                if (file_exists($filename)) {
                    require $filename;
                    break;
                }

                http_response_code(404);
                break;
        }
        ?>

    <footer class="footer">
        <p class="footer__paragraph">
          Banner image by <a class="link" target="_blank" href="https://twitter.com/okazakiokaa">おかざきおか</a> 🎴
          Background from <a class="link" target="_blank" href="https://www.toptal.com/designers/subtlepatterns/">Subtle Patterns</a> 🎴
          Part of <a class="link" href="https://quailmail.moe/">quailmail.moe</a>
        </p>
      </footer>
    </div>
  </body>
</html>