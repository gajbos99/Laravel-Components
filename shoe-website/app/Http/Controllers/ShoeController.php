<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ShoeController extends Controller
{

    private Collection $shoes;

    public function __construct()
    {
        $this->shoes = collect([
            ["name" => "Air Max", "type" => "Sneakers", "sale" => true, "price" => 155.38],
            ["name" => "Classic Runner", "type" => "Sneakers", "sale" => true, "price" => 73.97],
            ["name" => "Trail Blazer", "type" => "Sneakers", "sale" => true, "price" => 117.88],
            ["name" => "Urban Walker", "type" => "Boots", "sale" => true, "price" => 179.98],
            ["name" => "Sprint Pro", "type" => "Sneakers", "sale" => false, "price" => 102.92],
            ["name" => "Winter Shield", "type" => "Boots", "sale" => true, "price" => 76.49],
            ["name" => "Summit Sneaker", "type" => "Sneakers", "sale" => false, "price" => 184.3],
            ["name" => "Comfy Clog", "type" => "Sneakers", "sale" => false, "price" => 154.43],
            ["name" => "Leather Luxe", "type" => "Sneakers", "sale" => false, "price" => 172.75],
            ["name" => "Speedster", "type" => "Boots", "sale" => true, "price" => 125.34],
            ["name" => "Alpine Trek", "type" => "Boots", "sale" => false, "price" => 185.75],
            ["name" => "Casual Flex", "type" => "Boots", "sale" => true, "price" => 110.16],
            ["name" => "Road Runner", "type" => "Sneakers", "sale" => false, "price" => 119.04],
            ["name" => "Cozy Boot", "type" => "Sneakers", "sale" => false, "price" => 141.87],
            ["name" => "Trail Master", "type" => "Boots", "sale" => false, "price" => 94.76],
            ["name" => "Street Style", "type" => "Sneakers", "sale" => true, "price" => 101.69],
            ["name" => "Athletic Edge", "type" => "Sneakers", "sale" => true, "price" => 70.38],
            ["name" => "Daily Walker", "type" => "Boots", "sale" => false, "price" => 56.33],
            ["name" => "Explorer Pro", "type" => "Boots", "sale" => true, "price" => 98.06],
            ["name" => "Hiker Elite", "type" => "Boots", "sale" => false, "price" => 141.07],
        ]);
    }
    public function sale()
    {
        return view('index', [
            'title' => 'Sale Shoes',
            'shoes' => $this->shoes->where('sale', true)]);
    }

    public function shoes()
    {
        return view('index', [
            'title' => 'All Shoes',
            'shoes' => $this->shoes]);
    }

    public function sneakers()
    {
        return view('index', [
            'title' => 'Sneakers',
            'shoes' => $this->shoes->where('type', 'Sneakers')]);
    }

    public function boots()
    {
        return view('index', [
            'title' => 'Boots',
            'shoes' => $this->shoes->where('type', 'Boots')]);
    }
}
