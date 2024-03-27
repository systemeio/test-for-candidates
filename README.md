# Backend Test Task Mocks

Этот репозиторий содержит моки платежных процессоров PayPal и Stripe, которые **необходимо использовать** при выполнении [тестового задания](https://github.com/systemeio/backend-test-task) для бэкенд-разработчиков.

## Установка

Добавьте зависимость в `composer.json` вашего проекта:

```json
"require": {
    "systemeio/test-for-candidates": "^1.0.0"
}
```

Выполните `composer update`, чтобы загрузить моки в ваш проект.

## Использование

```php
$paypal = new PaypalPaymentProcessor();
$paypal->pay($amount);

$stripe = new StripePaymentProcessor();
$stripe->processPayment($amount);
```

Используйте предоставленные классы для имитации платежных операций в вашем тестовом задании.
