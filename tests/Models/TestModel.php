<?php

namespace Italofantone\Sluggable\Tests\Models;

use Italofantone\Sluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    use Sluggable;

    protected $fillable = ['title'];

    // ...
}