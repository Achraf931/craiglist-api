<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\Favorite;
use App\Models\Image;
use App\Models\Offer;
use App\Models\SubCategory;
use App\Models\User;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Achraf Sama',
            'email' => 'admin@admin.fr',
            'password' => Hash::make('achraftest'),
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.fr',
            'password' => Hash::make('achraftest'),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@test.fr',
            'password' => Hash::make('achraftest'),
            'is_admin' => false
        ]);

        Category::create([
            'name' => 'Mangas',
            'slug' => Str::slug('Mangas')
        ]);

        Category::create([
            'name' => 'Sports',
            'slug' => Str::slug('Sports')
        ]);

        Category::create([
            'name' => 'Dev',
            'slug' => Str::slug('Dev')
        ]);

        Category::create([
            'name' => 'Jeux',
            'slug' => Str::slug('Jeux')
        ]);

        Category::create([
            'name' => 'Voyages',
            'slug' => Str::slug('Voyages')
        ]);

        SubCategory::create([
            'name' => 'Hentai',
            'category_id' => 1,
            'slug' => Str::slug('Hentai')
        ]);

        SubCategory::create([
            'name' => 'Shônen',
            'category_id' => 1,
            'slug' => Str::slug('Shônen')
        ]);

        SubCategory::create([
            'name' => 'OAV',
            'category_id' => 1,
            'slug' => Str::slug('OAV')
        ]);

        SubCategory::create([
            'name' => 'Seinen',
            'category_id' => 1,
            'slug' => Str::slug('Seinen')
        ]);

        SubCategory::create([
            'name' => 'Loli',
            'category_id' => 1,
            'slug' => Str::slug('Loli')
        ]);

        SubCategory::create([
            'name' => 'Shôjo',
            'category_id' => 1,
            'slug' => Str::slug('Shôjo')
        ]);

        SubCategory::create([
            'name' => 'Josei',
            'category_id' => 1,
            'slug' => Str::slug('Josei')
        ]);

        SubCategory::create([
            'name' => 'Yaoi',
            'category_id' => 1,
            'slug' => Str::slug('Yaoi')
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'sub_category_id' => 1,
            'title' => 'Parlons du Hentai',
            'slug' => Str::slug('Parlons du Hentai'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'sub_category_id' => 1,
            'title' => 'Parlons du Hentai',
            'slug' => Str::slug('Parlons du Hentai'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'sub_category_id' => 1,
            'title' => 'Parlons du Hentai',
            'slug' => Str::slug('Parlons du Hentai'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'sub_category_id' => 1,
            'title' => 'Parlons du Hentai',
            'slug' => Str::slug('Parlons du Hentai'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'sub_category_id' => 1,
            'title' => 'Parlons du Hentai',
            'slug' => Str::slug('Parlons du Hentai'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'sub_category_id' => 1,
            'title' => 'Parlons du Hentai',
            'slug' => Str::slug('Parlons du Hentai'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'sub_category_id' => 1,
            'title' => 'Parlons du Hentai',
            'slug' => Str::slug('Parlons du Hentai'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'sub_category_id' => 1,
            'title' => 'Parlons du Hentai',
            'slug' => Str::slug('Parlons du Hentai'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'sub_category_id' => 1,
            'title' => 'Parlons du Hentai',
            'slug' => Str::slug('Parlons du Hentai'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        Offer::create([
            'user_id' => 1,
            'city_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 1,
            'title' => 'Autre sujet',
            'slug' => Str::slug('Autre sujet'),
            'description' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes)."
        ]);

        City::create([
            'name' => 'Montreuil',
            'slug' => Str::slug('Montreuil')
        ]);

        City::create([
            'name' => 'Noisy-Le-Sec',
            'slug' => Str::slug('Noisy-Le-Sec')
        ]);

        City::create([
            'name' => 'Les Lilas',
            'slug' => Str::slug('Les Lilas')
        ]);

        City::create([
            'name' => 'Paris',
            'slug' => Str::slug('Paris')
        ]);

        City::create([
            'name' => 'Pantin',
            'slug' => Str::slug('Pantin')
        ]);

        City::create([
            'name' => 'Romainville',
            'slug' => Str::slug('Romainville')
        ]);

        City::create([
            'name' => 'Bobigny',
            'slug' => Str::slug('Bobigny')
        ]);

        City::create([
            'name' => 'Rosny-Sous-Bois',
            'slug' => Str::slug('Rosny-Sous-Bois')
        ]);

        City::create([
            'name' => 'Bagnolet',
            'slug' => Str::slug('Bagnolet')
        ]);

        Image::create([
            'url_path' => 'https://external-preview.redd.it/ja2rwASy69ySlG3q_Brb8RhD7Sq2gzUEqSxxAbomVS8.png?auto=webp&s=d94d3cd074c7933031287abca2bcfc9735c1c8a6',
            'offer_id' => 1
        ]);

        Image::create([
            'url_path' => 'https://external-preview.redd.it/ja2rwASy69ySlG3q_Brb8RhD7Sq2gzUEqSxxAbomVS8.png?auto=webp&s=d94d3cd074c7933031287abca2bcfc9735c1c8a6',
            'offer_id' => 1
        ]);

        Image::create([
            'url_path' => 'https://external-preview.redd.it/ja2rwASy69ySlG3q_Brb8RhD7Sq2gzUEqSxxAbomVS8.png?auto=webp&s=d94d3cd074c7933031287abca2bcfc9735c1c8a6',
            'offer_id' => 1
        ]);

        Image::create([
            'url_path' => 'https://external-preview.redd.it/ja2rwASy69ySlG3q_Brb8RhD7Sq2gzUEqSxxAbomVS8.png?auto=webp&s=d94d3cd074c7933031287abca2bcfc9735c1c8a6',
            'offer_id' => 1
        ]);

        Favorite::create([
            'user_id' => 1,
            'offer_id' => rand(1, 27)
        ]);

        Favorite::create([
            'user_id' => 1,
            'offer_id' => rand(1, 27)
        ]);

        Favorite::create([
            'user_id' => 1,
            'offer_id' => rand(1, 27)
        ]);

        Favorite::create([
            'user_id' => 1,
            'offer_id' => rand(1, 27)
        ]);

        Favorite::create([
            'user_id' => 1,
            'offer_id' => rand(1, 27)
        ]);

        Favorite::create([
            'user_id' => 1,
            'offer_id' => rand(1, 27)
        ]);

        Favorite::create([
            'user_id' => 1,
            'offer_id' => rand(1, 27)
        ]);

        Favorite::create([
            'user_id' => 1,
            'offer_id' => rand(1, 27)
        ]);

        Favorite::create([
            'user_id' => 1,
            'offer_id' => rand(1, 27)
        ]);

        Favorite::create([
            'user_id' => 1,
            'offer_id' => rand(1, 27)
        ]);

        Favorite::create([
            'user_id' => 1,
            'offer_id' => rand(1, 27)
        ]);

        Favorite::create([
            'user_id' => 1,
            'offer_id' => rand(1, 27)
        ]);

        Favorite::create([
            'user_id' => 1,
            'offer_id' => rand(1, 27)
        ]);

        Favorite::create([
            'user_id' => 1,
            'offer_id' => rand(1, 27)
        ]);

        Favorite::create([
            'user_id' => 1,
            'offer_id' => rand(1, 27)
        ]);
    }
}
