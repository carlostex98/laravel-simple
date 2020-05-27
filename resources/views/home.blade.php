<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ HTML::script('js/uikit.min.js') }}
    {{ HTML::script('js/uikit-icons.min.js') }}
    {{ HTML::style('css/uikit.min.css') }}
    <title>Directorio</title>
</head>

<body>
    <div class="uk-grid-small uk-child-width-auto uk-margin" uk-grid uk-countdown="date: 2020-06-03T03:24:07+00:00">
        <div>
            <div class="uk-countdown-number uk-countdown-days"></div>
        </div>
        <div>
            <div class="uk-countdown-number uk-countdown-hours"></div>
        </div>
        <div>
            <div class="uk-countdown-number uk-countdown-minutes"></div>
        </div>
        <div>
            <div class="uk-countdown-number uk-countdown-seconds"></div>
        </div>
    </div>
</body>

</html>