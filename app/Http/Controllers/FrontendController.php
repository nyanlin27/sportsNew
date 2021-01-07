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
        // $posts = Post::take(2)->get();
        $posts = Post::all()->random(2);
        $populars= Post::take(5)->get();
        $theteams = Post::orderBy('id','desc')->take(2)->get();
        $leagues = League::all();
        $teams = Team::all();
        $matches = Match::all();
        $items = Item::orderBy('id', 'desc')->take(3)->get();
        $results = Result::all()->random(1);
        return view('frontend.home', compact('posts', 'matches', 'leagues', 'teams','items','theteams','populars', 'results'));
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
        return view('frontend.modern_news', compact('posts'));
    }
    public function blog_news($value = '')
    {
        $posts = Post::latest()->paginate(6);
        return view('frontend.blog_news', compact('posts'));

    }
    public function grid_news($value = '')
    {
        $posts = Post::all();
        $matches = Match::all();
        return view('frontend.Grid_news', compact('posts', 'matches'));

    }

    public function allmatches($value = '')
    {
        $matches = Match::all();
        return view('frontend.allmatches', compact('matches'));

    }





    public function shop_gallery($value = '')
    {
        // $posts = Post::latest()->paginate(8);
        $items = Item::latest()->paginate(8);
        // dd($items);
        return view('frontend.shop_gallery', compact('items'));
    }
    public function shop_discount($value = '')
    {
        return view('frontend.shop_discount');
    }

    public function contact($value = '')
    {
        return view('frontend.contact');
    }

    public function Faq($value = '')
    {
        return view('frontend.Faq');
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

        $populars= Post::take(5)->get();
        // dd($id);
        $post = Post::find($id);
        return view('frontend.news_details', compact('post','populars'));
    }

    public function match_details($id)
    {
        $matchs=Match::find($id);
        return view('frontend.match_details', compact('matchs'));
    }

     public function item_details($id)
    {
        $items = Item::find($id);
        $resents = Item::take(4)->get();
        return view('frontend.item_details', compact('items', 'resents'));
    }

    //match
    public function match($id)
    {
        $leagues = League::find($id);
        return view('frontend.match', compact('leagues'));
    }






    //Shoping Cart
    public function shoping_cart($value = '')
    {
        // $items = Item::find($id);
        return view('frontend.shoping_cart');
    }
}


