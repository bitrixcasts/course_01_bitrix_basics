<?php
/** @var Application $APPLICATION */
$content = ob_get_contents();

ob_end_clean();

$content = str_replace(
    [Application::TITLE_PLACEHOLDER],
    [$APPLICATION->getTitle()],
    $content
);

echo $content;
