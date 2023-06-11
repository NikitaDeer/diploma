<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Mail\NewOrder;
use App\Models\Service;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Order\StoreOrderRequest;

class OrderController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    // $orders = Order::all();
    // return view('orders.index', compact('orders'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(): View
  {
    $services = Service::where('is_published', 1)->get();
    // dd($services[1]->name);
    return view('order', compact('services'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreOrderRequest $request)
  {

    $data = $request->validated();

    $data['user_id'] = auth()->id();

    // Order::firstOrCreate($data);
    $order = Order::create($data);

    $user = auth()->user();

    // отправка письма
    Mail::to('nikita@dergunov.info')
      ->send(new NewOrder($user, $order));

    // или вывод письма для отладки
    // return new NewOrder($user, $order);

    // return to_route('')
    //   ->withSuccess("Товар создан");

    return to_route('home')->with('success', 'Order created successfully');
  }

  /**
   * Display the specified resource.
   */
  public function show(Order $order)
  {
    // return view('orders.show', compact('order'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Order $order)
  {
    // $services = Service::where('is_published', 1)->get();
    // return view('orders.edit', compact('order', 'services'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Order $order)
  {
    // $data = $request->validated();

    // $order->update($data);

    // return redirect()->route('orders.index')->with('success', 'Order updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Order $order)
  {
    // $order->delete();

    // return redirect()->route('orders.index')->with('success', 'Order deleted successfully');
  }
}
