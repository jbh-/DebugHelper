# DebugHelper

This is a helper that adds [PHP Debug Bar](http://phpdebugbar.com/) functionality to the [Simple MVC Framework](https://github.com/simple-mvc-framework/v2). The debug bar will only show if the `ENVIRONMENT` constant in `index.php` is set to `development`.

## Use

1. Add Debug.php to helpers folder
2. Add rendering functions to header and footer as described in the PHP Debug Bar [documentation](http://phpdebugbar.com/docs/readme.html#quick-start).

### Example of `header.php`

```HTML+PHP
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>"
<head>

    <!-- Site meta -->
    <meta charset="utf-8">
    <title><?php echo $data['title'] . ' - ' . SITETITLE; //SITETITLE defined in app/core/config.php ?></title>

    <!-- CSS -->
    <?php
        helpers\assets::css(array(
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css',
        helpers\url::template_path() . 'css/style.css',
        ));

        // Render Debug Bar head include example.
        $debug = new helpers\Debug;
        echo $debug->renderHead();
    ?>

</head>
<body>
```

### Example of `footer.php`

```HTML+PHP
<!-- JS -->
    <?php
        helpers\assets::js(helpers\url::template_path() . 'js/jquery.js');

        // Render Debug Bar footer include example
        $debug = new helpers\Debug;
        echo $debug->render();
    ?>

</body>
</html>
```
