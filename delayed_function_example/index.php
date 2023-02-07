<?php

ini_set('display_errors', true);

class Application
{
    public const TITLE_PLACEHOLDER = '#PASTE_TITLE_HERE#';

    private string $title = '';
    
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
    
    public function getTitle(): string
    {
        return $this->title;
    }
    
    public function showTitle(): void
    {
        echo self::TITLE_PLACEHOLDER;
    }
}

$APPLICATION = new Application();

require __DIR__ . '/header.php';

$APPLICATION->showTitle();

echo 'Hello Bitrixcasts.ru';

$APPLICATION->setTitle('Работает. ');

require __DIR__ . '/footer.php';
