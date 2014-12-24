<?php namespace Kamaro\Items\Controllers;

use Kamaro\Items\Models\Item as Item;
use BaseController, View, Input, Event, Redirect, Session, Config;
/**
 * Items controllers class
 */
 class ItemsController extends BaseController
 {
 	/**
 	 * Item model instance
 	 */
 	protected  $item;
 	function __construct(Item $item)
 	{
 	    //Check CSRF token on POST
		$this->beforeFilter('Sentinel\csrf', array('on' => array('post', 'put', 'delete')));

	    $this->item = $item;
 	}
   
   /**
    * Display Items in the database
    */
 	public function index()
 	{
      $items=$this->item->paginate(20);

      return View::make('items::partials.table')
                 ->with('items',$items);
 	}
    /**
     *   Store resources in the database
     */
 	public function store()
 	{
 		$item = new $this->item;
        $item->name='Product 1';
        $item->category='Category 1';
        $item->supplier_id=1;
        $item->item_number=rand(4,120);
        $item->description='description';
        $item->cost_price=200;
        $item->unit_price=250;
        $item->quantity=50;
        $item->reorder_level=5;
        $item->allow_alt_description=true;
        $item->is_serialized=false;
        $item->deleted=false;

        $item->save();

        return Redirect::back();
 	}
 } 
