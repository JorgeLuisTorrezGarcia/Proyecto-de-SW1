@extends('user.layouts.master')

@section('title','Order Detail')

@section('main-content')
<div class="card">
<h5 class="card-header">{{__("Order")}}       <a href="{{route('order.pdf',$order->id)}}" class=" btn btn-sm btn-primary shadow-sm float-right"><i class="fas fa-download fa-sm text-white-50"></i> Generar PDF</a>
  </h5>
  <div class="card-body">
    @if($order)
    <table class="table table-striped table-hover">
      <thead>
        <tr>
            <th>S.N.</th>
            <th>{{__("Order No")}}.</th>
            <th>{{__("Name")}}</th>
            <th>{{__("Email")}}</th>
            <th>{{__("Quantity")}}</th>
            <th>{{__("Charge")}}</th>
            <th>{{__("Total Amount")}}</th>
            <th>{{__("Status")}}</th>
            <th>{{__("Action")}}</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->cart_id}}</td>
            <td>{{$order->first_name}} {{$order->last_name}}</td>
            <td>{{$order->email}}</td>
            <td>{{$order->quantity}}</td>
            <td>${{number_format($order->delivery_charge,2)}}</td>
            <td>${{number_format($order->total_amount,2)}}</td>
            <td>
                @if($order->status=='new')
                  <span class="badge badge-primary">{{$order->status}}</span>
                @elseif($order->status=='process')
                  <span class="badge badge-warning">{{$order->status}}</span>
                @elseif($order->status=='delivered')
                  <span class="badge badge-success">{{$order->status}}</span>
                @else
                  <span class="badge badge-danger">{{$order->status}}</span>
                @endif
            </td>
            <td>
                <a href="{{route('order.edit',$order->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                <form method="POST" action="{{route('order.destroy',[$order->id])}}">
                  @csrf 
                  @method('delete')
                      <button class="btn btn-danger btn-sm dltBtn" data-id={{$order->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>
          
        </tr>
      </tbody>
    </table>

    <section class="confirmation_part section_padding">
      <div class="order_boxes">
        <div class="row">
          <div class="col-lg-6 col-lx-4">
            <div class="order-info">
              <h4 class="text-center pb-4">{{__("ORDER INFORMATION")}}</h4>
              <table class="table">
                    <tr class="">
                        <td>{{__("Order Number")}}</td>
                        <td> : {{$order->cart_id}}</td>
                    </tr>
                    <tr>
                        <td>{{__("Order Date")}}</td>
                        <td> : {{$order->created_at->diffForHumans()}}</td>
                    </tr>
                    <tr>
                        <td>{{__("Quantity")}}</td>
                        <td> : {{$order->quantity}}</td>
                    </tr>
                    <tr>
                        <td>{{__("Order Status")}}</td>
                        <td> : {{$order->status}}</td>
                    </tr>
                    <tr>
                        <td>{{__("Shipping Charge")}}</td>
                        <td> : $ {{number_format($order->delivery_charge,2)}}</td>
                    </tr>
                    <tr>
                        <td>{{__("Total Amount")}}</td>
                        <td> : $ {{number_format($order->total_amount,2)}}</td>
                    </tr>
                    <tr>
                        <td>{{__("Payment Method")}}</td>
                        <td> : </td>
                    </tr>
                    <tr>
                        <td>{{__("Payment Status")}}</td>
                        <td> : </td>
                    </tr>
              </table>
            </div>
          </div>

          <div class="col-lg-6 col-lx-4">
            <div class="shipping-info">
              <h4 class="text-center pb-4">{{__("SHIPPING INFORMATION")}}</h4>
              <table class="table">
                    <tr class="">
                        <td>{{__("Full Name")}}</td>
                        <td> : {{$order->first_name}} {{$order->last_name}}</td>
                    </tr>
                    <tr>
                        <td>{{__("Email")}}</td>
                        <td> : {{$order->email}}</td>
                    </tr>
                    <tr>
                        <td>{{__("Phone No")}}.</td>
                        <td> : {{$order->phone}}</td>
                    </tr>
                    <tr>
                        <td>{{__("Address")}}</td>
                        <td> : {{$order->address1}}, {{$order->address2}}</td>
                    </tr>
                    <tr>
                        <td>{{__("Country")}}</td>
                        <td> : {{$order->country}}</td>
                    </tr>
                    <tr>
                        <td>{{__("Post Code")}}</td>
                        <td> : {{$order->post_code}}</td>
                    </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif

  </div>
</div>
@endsection

@push('styles')
<style>
    .order-info,.shipping-info{
        background:#ECECEC;
        padding:20px;
    }
    .order-info h4,.shipping-info h4{
        text-decoration: underline;
    }

</style>
@endpush