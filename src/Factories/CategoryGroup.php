<?php

namespace markhuot\CraftQL\Factories;

use markhuot\CraftQL\Factories\BaseFactory;
use markhuot\CraftQL\Types\Category as CategoryObjectType;

class CategoryGroup extends BaseFactory {

    function make($raw, $request) {
        return new CategoryObjectType($request, $raw);
    }

    function can($id, $mode='query') {
        return true;
    }

}