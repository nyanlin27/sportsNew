<?php

namespace App\Http\Controllers;

use App\Post;
use App\League;
use App\Team;
use App\Match;
use App\Result;
use App\Item;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Match_;

class FrontendController extends Controller
{
    public function index($value = '')
    {
        $posts = Post::take(2)->get();
        $populars= Post::take(5)->get();
        $theteams = Post::orderBy('id','desc')->take(2)->get();
        $leagues = League::all();
        $teams = Team::all();
        $matches = Match::all();
        $items = Item::orderBy('id', 'desc')->take(3)->get();
        return view('frontend.home', compact('posts', 'matches', 'leagues', 'teams','items','theteams','populars'));
    }


    public function championleague($value = '')
    {
        return view('frontend.champion_league');
    }
    public function europaleague($value = '')
    {
        return view('frontend.europa_league');
    }
    public function premierleague($value = '')
    {
        // $matches = Match::all();
        // return view('frontend.premier_league', compact('matches'));
        return view('frontend.premier_league');
    }

    public function laliga($value = '')
    {
        return view('frontend.laliga');
    }
    public function serie_a($value = '')
    {
        return view('frontend.serie_a');
    }
    public function bundesliga($value = '')
    {
        return view('frontend.bundesliga');
    }
    public function ligue_1($value = '')
    {
        // $matches = Match::all();
        // return view('frontend.ligue_1', compact('matches'));
        return view('frontend.ligue_1');


    }

    public function modern_news($value = '')
    {
        // dd($id);
        $posts = Post::latest()->paginate(8);
        $leagues = League::all();
        return view('frontend.modern_news', compact('posts', 'leagues'));

    }
    public function blog_news($value = '')
    {
        $posts = Post::all();
        $leagues = League::all();
        return view('frontend.blog_news', compact('posts', 'leagues'));

    }
    public function grid_news($value = '')
    {
        $posts = Post::all();
        $matches = Match::all();
        $leagues = League::all();
        return view('frontend.Grid_news', compact('posts', 'matches', 'leagues'));

    }



    public function shop_gallery($value = '')
    {
        // $posts = Post::latest()->paginate(8);
        $items = Item::latest()->paginate(8);
        $leagues = League::all();
        // dd($items);
        return view('frontend.shop_gallery', compact('items', 'leagues'));
    }
    public function shop_discount($value = '')
    {
        $leagues = League::all();
        return view('frontend.shop_discount', compact('leagues'));
    }

    public function contact($value = '')
    {
        $leagues = League::all();
        return view('frontend.contact', compact('leagues'));
    }

    public function faq($value = '')
    {
        return view('frontend.faq');
    }
    public function example($value = '')
    {
        return view('frontend.example');
    }
    public function premier_league_table($value = '')
    {
        return view('frontend.premier_league_table');
    }
    public function laliga_table($value = '')
    {
        return view('frontend.laliga_table');
    }
    public function bundesliga_table($value = '')
    {
        return view('frontend.bundesliga_table');
    }
    public function serie_a_table($value = '')
    {
        return view('frontend.serie-a_table');
    }
    public function ligue_1_table($value = '')
    {
        return view('frontend.ligue_1_table');
    }

    public function champion_league_table($value = '')
    {
        return view('frontend.champion_league_table');
    }

    public function europa_league_table($value = '')
    {
        return view('frontend.europa_league_table');
    }
    public function news_details($id)
    {
        // dd($id);
        $post = Post::find($id);
        $leagues = League::all();
        return view('frontend.news_details', compact('post', 'leagues'));
    }
     public function item_details($id)
    {
        $items = Item::find($id);
        $resents = Item::take(4)->get();
        $leagues = League::all();
        return view('frontend.item_details', compact('items', 'resents', 'leagues'));
    }

      public function shopping_cart($value = '')
    {
        return view('frontend.shopping_cart');
    }



}//end of controller

