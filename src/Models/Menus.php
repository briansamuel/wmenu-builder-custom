<?php

namespace Harimayco\Menu\Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';

    public function __construct( array $attributes = [] ){
    	//parent::construct( $attributes );
    	$this->table = config('menu.table_prefix') . $this->table;
    }

    public static function byName($name)
    {
        return self::where('name', '=', $name)->first();
    }

}
