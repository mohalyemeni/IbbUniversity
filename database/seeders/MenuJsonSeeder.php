<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Menu;

class MenuJsonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(public_path('app/menus-json.json'));
        $menus = json_decode($json, true);

        if (is_null($menus)) {
            dd('فشل في تحويل JSON. تحقق من تنسيقه أو موقعه.');
        }

        $idMap = [];

        foreach ($menus as $menu) {
            $menuModel = Menu::create([
                'title' => $menu['title'],
                'slug' => $menu['slug'],
                'description' => $menu['description'],
                'link' => $menu['link'],
                'icon' => $menu['icon'],
                'section' => $menu['section'],
                'metadata_title' => $menu['metadata_title'],
                'status' => $menu['status'],
                'parent_id' => null,
                'published_on' => $menu['published_on'],
                'created_by' => $menu['created_by'],
                'created_at' => $menu['created_at'],
            ]);

            $idMap[$menu['old_id']] = $menuModel->id;
        }

        foreach ($menus as $menu) {
            if (!is_null($menu['parent_id'])) {
                $newId = $idMap[$menu['old_id']];
                $newParentId = $idMap[$menu['parent_id']] ?? null;

                Menu::where('id', $newId)->update(['parent_id' => $newParentId]);
            }
        }
    }
}
