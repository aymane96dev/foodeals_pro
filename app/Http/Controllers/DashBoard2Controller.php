<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashBoard2Controller extends Controller
{
    
   /* public function getview(){
        return view('statistiques.kpi1');
    } */

    public function getplat(){

        $mons = DB::table('commandes')
            ->join('clients','clients.id','=','commandes.clients_id')
            ->whereNotNull('commandes.created_at')
            ->select(DB::raw(" EXTRACT(MONTH FROM commandes.created_at) as month"))
            ->groupby('month')
            ->get();

        $users = DB::table('users')->count();
        $cities = DB::table('villes')->select('*')->get();
        $villes = DB::table('villes')->select('id')->get();
        $ville = $villes[0]->id;

        $nbrcommandes = DB::table('commandes')
        ->select(DB::raw('count(*) as products'))
        ->where('commandes.villes_id','=',$ville)
        ->where(DB::raw('EXTRACT(MONTH FROM commandes.created_at)'),'=',$mons[0]->month)
        ->get();

        $today = Date('Y-m-d');

        $nbrcommandes_perday = DB::table('commandes')
            ->select(DB::raw('count(*) as products'))
            ->where('commandes.villes_id','=',$ville)
            ->whereDate('commandes.created_at',$today)
            ->get();

        return view('statistiques.kpi1',['cities'=>$cities,'nbrcommandes'=>$nbrcommandes,'mons'=>$mons,'users' => $users
        ,'nbrcommandes_perday'=>$nbrcommandes_perday]);
    }

    public function getcatproduits($id,$i)
    {
        $catprds = DB::table('produits')
            ->join('restaurants', 'restaurants.id', '=', 'produits.restaurants_id')
            ->join('typeproduits', 'typeproduits.id', '=', 'produits.typeproduits_id')
            ->select(DB::raw('sum(produits.qte) as products'),'typeproduits.name')
            ->where(DB::raw('EXTRACT(MONTH FROM produits.created_at)'),$id)
            ->where('restaurants.villes_id',$i)
            ->orderby('products','desc')
            ->groupby('typeproduits.name')
            ->take(10)
            ->get();
        return $catprds;
    }

    public function getcatproduitsperday($id)
    {
        $today = Date('Y-m-d');

        $catprds = DB::table('produits')
            ->join('restaurants', 'restaurants.id', '=', 'produits.restaurants_id')
            ->join('typeproduits', 'typeproduits.id', '=', 'produits.typeproduits_id')
            ->select(DB::raw('sum(produits.qte) as products'),'typeproduits.name')
            ->whereDate('produits.created_at',$today)
            ->where('restaurants.villes_id',$id)
            ->orderby('products','desc')
            ->groupby('typeproduits.name')
            ->take(10)
            ->get();

        return $catprds;
    }

    public function getcatfirst()
    {
          $firstmonth = DB::table('commandes')
            ->join('clients','clients.id','=','commandes.clients_id')
            ->select(DB::raw(" EXTRACT(MONTH FROM commandes.created_at) as month"))
            ->groupby('month')
            ->get();

        $fmonth = json_decode($firstmonth,true);
        for($i=0;$i<count($fmonth);$i++){
            if($fmonth[$i]['month'] == null){
                unset($fmonth[$i]);
            }
        }

        $idville = DB::table('villes')->first()->id;

        $catfirst = DB::table('produits')
            ->join('restaurants', 'restaurants.id', '=', 'produits.restaurants_id')
            ->join('typeproduits', 'typeproduits.id', '=', 'produits.typeproduits_id')
            ->select(DB::raw('sum(produits.qte) as products'),'typeproduits.name')
            ->where(DB::raw('EXTRACT(MONTH FROM produits.created_at)'),$fmonth[0]['month'])
            ->where('restaurants.villes_id',$idville)
            ->orderby('products','desc')
            ->groupby('typeproduits.name')
            ->take(10)
            ->get();
        return $catfirst;
    }

    public function gettotalcommandes($id,$i){

        $nbrcommandes = DB::table('commandes')
            ->select(DB::raw('count(*) as products'))
            ->where('commandes.villes_id','=',$i)
            ->where(DB::raw('EXTRACT(MONTH FROM commandes.created_at)'),$id)
            ->get();

        return $nbrcommandes;
    }

    public function getcmmdsperday($id){

        $today = Date('Y-m-d');

        $nbrcommandes = DB::table('commandes')
            ->select(DB::raw('count(*) as products'))
            ->where('commandes.villes_id','=',$id)
            ->whereDate('commandes.created_at',$today)
            ->get();

        return $nbrcommandes;
    }

    public function getclientscommandes($id,$i)
    {
        $cmmdsclient = DB::table('commandes')
        ->join('clients', 'clients.id', '=', 'commandes.clients_id')
        ->select(DB::raw('count(clients_id) as commandes'),'clients.name')
        ->where(DB::raw('EXTRACT(MONTH FROM commandes.created_at)'),[$id])
        ->where('commandes.villes_id',$i)
        ->orderby('commandes','desc')
        ->groupby('clients.name')
        ->take(10)
        ->get();
         return $cmmdsclient;       
    }

    public function getcltscmmdsfirst()
    {
        $firstmonth = DB::table('commandes')
            ->join('clients','clients.id','=','commandes.clients_id')
            ->select(DB::raw(" EXTRACT(MONTH FROM commandes.created_at) as month"))
            ->groupby('month')
            ->get();

        $fmonth = json_decode($firstmonth,true);
        for($i=0;$i<count($fmonth);$i++){
            if($fmonth[$i]['month'] == null){
                unset($fmonth[$i]);
            }
        }

        $idville = DB::table('villes')->first()->id;
        $cmmdsclient = DB::table('commandes')
        ->join('clients', 'clients.id', '=', 'commandes.clients_id')
        ->select(DB::raw('count(clients_id) as commandes'),'clients.name')
        ->where(DB::raw('EXTRACT(MONTH FROM commandes.created_at)'),$fmonth[0]['month'])
        ->where('commandes.villes_id',$idville)
        ->orderby('commandes','desc')
        ->groupby('clients.name')
        ->take(10)
        ->get();
         return $cmmdsclient;       
    }

    public function getcltscmmds($id,$i){

        $mns = DB::table('detailcommandes')
            ->join('commandes','commandes.id','=','detailcommandes.commandes_id')
            ->join('clients','clients.id','=','commandes.clients_id')
            ->select('clients.name',DB::raw(" sum(detailcommandes.qte) as qtes"))
            ->where(DB::raw('EXTRACT(MONTH FROM commandes.created_at)'),[$id])
            ->where('commandes.villes_id',$i)
            ->orderby('qtes','desc')
            ->groupby('clients.name')
            ->take(10)
            ->get();

        return $mns;
    }

    public function getcltscmmdsperday($id){

        $today = Date('Y-m-d');

        $mns = DB::table('detailcommandes')
            ->join('commandes','commandes.id','=','detailcommandes.commandes_id')
            ->join('clients','clients.id','=','commandes.clients_id')
            ->select('clients.name',DB::raw(" sum(detailcommandes.qte) as qtes"))
            ->whereDate('detailcommandes.created_at',$today)
            ->where('commandes.villes_id',$id)
            ->orderby('qtes','desc')
            ->groupby('clients.name')
            ->take(10)
            ->get();

        return $mns;
    }

    public function getclientscommandesperday($id){

        $today = Date('Y-m-d');

        $mns = DB::table('detailcommandes')
            ->join('commandes','commandes.id','=','detailcommandes.commandes_id')
            ->join('clients','clients.id','=','commandes.clients_id')
            ->select('clients.name',DB::raw(" sum(detailcommandes.qte) as qtes"))
            ->whereDate('detailcommandes.created_at',$today)
            ->where('commandes.villes_id',$id)
            ->orderby('qtes','desc')
            ->groupby('clients.name')
            ->take(10)
            ->get();

        return $mns;
    }

    public function getcmmdsmonthfirst(){

        $firstmonth = DB::table('commandes')
            ->join('clients','clients.id','=','commandes.clients_id')
            ->select(DB::raw(" EXTRACT(MONTH FROM commandes.created_at) as month"))
            ->groupby('month')
            ->get();

        $fmonth = json_decode($firstmonth,true);
        for($i=0;$i<count($fmonth);$i++){
            if($fmonth[$i]['month'] == null){
                unset($fmonth[$i]);
            }
        }

        $mns = DB::table('detailcommandes')
            ->join('commandes','commandes.id','=','detailcommandes.commandes_id')
            ->join('clients','clients.id','=','commandes.clients_id')
            ->select('clients.name',DB::raw(" sum(detailcommandes.qte) as qtes"))
            ->where(DB::raw('EXTRACT(MONTH FROM commandes.created_at)'),[$fmonth[0]['month']])
            ->orderby('qtes','desc')
            ->groupby('clients.name')
            ->take(10)
            ->get();

        return $mns;
    }

    public function getsommemens($id,$i){

        $sommes = DB::table('detailcommandes')
            ->join('commandes','commandes.id','=','detailcommandes.commandes_id')
            ->join('clients','clients.id','=','commandes.clients_id')
            ->join('produits','produits.id','=','detailcommandes.produits_id')
            ->select('clients.name',DB::raw(" sum(detailcommandes.qte*produits.prix) as somme "))
            ->where(DB::raw('EXTRACT(MONTH FROM commandes.created_at)'),[$id])
            ->where('commandes.villes_id',$i)
            ->orderby('somme','desc')
            ->groupby('clients.name')
            ->take(10)
            ->get();

        return $sommes;
    }

    public function getsommemensperday($id){

        $today = Date('Y-m-d');

        $sommes = DB::table('detailcommandes')
            ->join('commandes','commandes.id','=','detailcommandes.commandes_id')
            ->join('clients','clients.id','=','commandes.clients_id')
            ->join('produits','produits.id','=','detailcommandes.produits_id')
            ->select('clients.name',DB::raw(" sum(detailcommandes.qte*produits.prix) as somme "))
            ->whereDate('detailcommandes.created_at',$today)
            ->where('commandes.villes_id',$id)
            ->orderby('somme','desc')
            ->groupby('clients.name')
            ->take(10)
            ->get();

        return $sommes;
    }

    public function getsommemensfirst()
    {

        $firstmonth = DB::table('commandes')
            ->join('clients','clients.id','=','commandes.clients_id')
            ->select(DB::raw(" EXTRACT(MONTH FROM commandes.created_at) as month"))
            ->groupby('month')
            ->get();

        $fmonth = json_decode($firstmonth,true);
        for($i=0;$i<count($fmonth);$i++){
            if($fmonth[$i]['month'] == null){
                unset($fmonth[$i]);
            }
        }

        $idville = DB::table('villes')->first()->id;

        $sommes = DB::table('detailcommandes')
            ->join('commandes','commandes.id','=','detailcommandes.commandes_id')
            ->join('clients','clients.id','=','commandes.clients_id')
            ->join('produits','produits.id','=','detailcommandes.produits_id')
            ->select('clients.name',DB::raw(" sum(detailcommandes.qte*produits.prix) as somme "))
            ->where(DB::raw('EXTRACT(MONTH FROM commandes.created_at)'),[$fmonth[0]['month']])
            ->where('commandes.villes_id',$idville)
            ->orderby('somme','desc')
            ->groupby('clients.name')
            ->take(10)
            ->get();

        return $sommes;
    }
}
