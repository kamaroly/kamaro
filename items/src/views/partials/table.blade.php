@extends('templates::layouts.default')
@section('content')
@include('items::partials.menu')
        <div class="panel-body">
            <section class="table-flip-scroll">
                @if(count($items)>0)
                <table class="table table-bordered table-striped cf">
                    <thead class="cf">
                        <tr>
                            <th>{{Lang::get('items::item.code')}}</th>
                            <th>{{Lang::get('items::item.name')}}</th>
                            <th>{{Lang::get('items::item.category')}}</th>
                            <th>{{Lang::get('items::item.unit_price')}}</th>
                            <th>{{Lang::get('items::item.cost_price')}}</th>
                            <th>{{Lang::get('items::item.quantity')}}</th>
                            <th>{{Lang::get('items::item.reorder_level')}}</th>
                           
                            <th><i class="ti-settings"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td>{{$item->item_number}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->category}}</td>
                            <td>{{$item->unit_price}}</td>
                            <td>{{$item->cost_price}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->reorder_level}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                 <h3>{{Lang::get('items::items.no_item_available')}}</h3>
                @endif
            </section>
    @stop