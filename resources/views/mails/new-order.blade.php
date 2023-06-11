@component('mail::message')
# Появился новый заказ!
Дорогой создатель!

Пользователь нашего прекрасного магазина, которого зовут **{{ $user->name }} {{ $user->surname }}**, проживающий по
адресу:
**{{ $user->address }}**, создал заказ **№{{ $order->id }}**.
Заказ на *{{ $order->order_date }}*.
Описание заказа: *{{ $order-> order_date }}*.

## Перезвони, дорогой хозяин!
Заказчик ждёт. Телефон **{{ $user->phone }}**

@component('mail::button', ['url' => config('app.url') . '/admin'])
Ткни сюда, пожалуйста
@endcomponent

Спасибо,<br>
{{ config('app.name') }}
@endcomponent