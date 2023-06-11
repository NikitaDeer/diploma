@component('mail::message')
# Появился новый заказ!
Дорогой создатель!

Пользователь нашего прекрасного заведения, которого зовут **{{ $user->name }} {{ $user->surname }}**, проживающий по
адресу:
**{{ $user->address }}**, создал заказ **№{{ $order->id }}**.

@component('mail::table')
| Услуга | На дату | Стоимость |
| :----- |:------- | ---------:|
| {{ $order->service->name }} | {{ $order->order_date }} | {{ $order->service->price }} &#8381; |
@endcomponent

Описание заказа: *{{ $order->description }}*.

## Перезвони, дорогой хозяин!
Заказчик ждёт. Телефон **{{ $user->phone }}**

@component('mail::button', ['url' => config('app.url') . '/admin'])
Ткни сюда, пожалуйста
@endcomponent

Спасибо,<br>
{{ config('app.name') }}
@endcomponent