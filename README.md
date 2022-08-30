# Job Seeker Manager - Laravel

## Рабочее окружение

* PHP >= 7.2.5 (7.4.23)
  * BCMath PHP Extension
  * Ctype PHP Extension
  * Fileinfo PHP extension
  * JSON PHP Extension
  * Mbstring PHP Extension
  * OpenSSL PHP Extension
  * PDO PHP Extension
  * Tokenizer PHP Extension
  * XML PHP Extension
* MySql (MariaDB 10.3.34)

## Установка зависимостей

После установки зависимостей рекомендуется запускать:

```bash
 php artisan ide-helper:generate
 php artisan ide-helper:meta
```

## Начало работы

### Для локального запуска

После скачивания репозитория достаточно запустить `make init`. Команда скачает необходимые образы и создаст контейнеры,
после этого установит зависимости `composer` и выполнит первоначальную конфигурацию.
