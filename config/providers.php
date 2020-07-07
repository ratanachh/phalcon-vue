<?php

use App\Providers\AclProvider;
use App\Providers\AssetsProvider;
use App\Providers\AuthProvider;
use App\Providers\ConfigProvider;
use App\Providers\CryptProvider;
use App\Providers\DbProvider;
use App\Providers\DispatcherProvider;
use App\Providers\FlashProvider;
use App\Providers\LoaderProvider;
use App\Providers\LoggerProvider;
use App\Providers\MailProvider;
use App\Providers\ModelsMetadataProvider;
use App\Providers\RouterProvider;
use App\Providers\SecurityProvider;
use App\Providers\SessionBagProvider;
use App\Providers\SessionProvider;
use App\Providers\UrlProvider;
use App\Providers\ViewProvider;

return [
    AclProvider::class,
    AuthProvider::class,
    ConfigProvider::class,
    CryptProvider::class,
    DbProvider::class,
    DispatcherProvider::class,
    FlashProvider::class,
    LoggerProvider::class,
    MailProvider::class,
    ModelsMetadataProvider::class,
    RouterProvider::class,
    SessionBagProvider::class,
    SessionProvider::class,
    SecurityProvider::class,
    UrlProvider::class,
    ViewProvider::class,
    AssetsProvider::class,
    LoaderProvider::class
];
