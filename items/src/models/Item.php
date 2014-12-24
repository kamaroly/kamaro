<?php namespace Kamaro\Items\Models;

/**
* Item Report
*/
class Item extends \Eloquent
{

  
   public static function boot()
    {
        static::saving(function()
        {
            Event::fire('item.change');
        });
    }
}