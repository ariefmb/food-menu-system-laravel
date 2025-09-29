<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    public function create()
    {
        return view('menus.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_menu' => 'required|string|max:255',
            'jenis_menu' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image_url' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image_url')) {
            $validate['image_url'] = $request->file('image_url')->store('menu_images', 'public');
        }

        Menu::create($validate);

        return redirect()->route('menus.index')->with('success', 'Menu berhasil dibuat!');
    }

    public function edit(Menu $menu)
    {
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $validate = $request->validate([
            'nama_menu' => 'required|string|max:255',
            'jenis_menu' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image_url' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image_url')) {
            if ($menu->image_url) {
                Storage::disk('public')->delete($menu->image_url);
            }
            $validate['image_url'] = $request->file('image_url')->store('menus', 'public');
        }

        $menu->update($validate);

        return redirect()->route('menus.index')->with('success', 'Menu berhasil diupdate!');
    }

    public function destroy(Menu $menu)
    {
        if ($menu->image_url) {
            Storage::disk('public')->delete($menu->image_url);
        }

        $menu->delete();

        return redirect()->route('menus.index')->with('success', 'Menu berhasil dihapus!');
    }
}
