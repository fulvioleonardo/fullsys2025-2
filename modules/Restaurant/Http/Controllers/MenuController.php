<?php

namespace Modules\Restaurant\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MenuController extends Controller
{
    public function index()
    {
        // Show all menu items
    }

    public function store(Request $request)
    {
        // Add a new menu item
    }

    public function update($id, Request $request)
    {
        // Update an existing menu item
    }

    public function destroy($id)
    {
        // Delete a menu item
    }
}