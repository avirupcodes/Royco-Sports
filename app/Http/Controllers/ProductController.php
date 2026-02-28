<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
       public function index(Request $request)
    {
        // Define categories and subcategories (already correct)
        $categories = [
            "Yoga Costume" => [],
            "Athletics Pant" => [],
            "Tracksuit Set" => [],
            "Slacks" => ["Full Slacks (stretchable)", "Half Slacks (stretchable)", "Half Slacks (Serina)"],
            "Inners" => ["Full Sleeves Inner (Stretchable)", "Full Sleeves Inner (Serina)"],
            "T-Shirt" => ["Nokia Round Neck", "Dotnet Round Neck", "Digital Round Neck", "Nokia Full Sleeves", "Digital Full Sleeves", "Customize Any Type of T-shirt"],
            "Jersey Set" => ["Nokia Jersey set", "Digital Jersey set", "Customize Jersey set"],
            "Half Pant" => ["Nokia Half Pant (Without Pocket)", "Dotnet Half Pant (Without Pocket)", "Nokia Half Pant (With Pocket)", "Dotnet Half Pant (With Pocket)", "NS Half pant", "Stretchable Half pant"],
            "Swimming Costume" => ["Swimming Shorts", "V-cut Swimming Costume"],
            "Bibs" => ["Bibs (Nokia)", "Bibs (Digital)"],
        ];

        // Products matched correctly with categories/subcategories
        $products = [
            // Yoga / Athletics / Tracksuit
            ["name" => "Yoga Costume (Female)", "image" => "product/yoga.png", "category" => "Yoga Costume"],
            ["name" => "Athletics Pant", "image" => "product/athletics-pant.png", "category" => "Athletics Pant"],
            ["name" => "Tracksuit Set", "image" => "product/tracksuit.png", "category" => "Tracksuit Set"],

            // Slacks
            ["name" => "Full Slacks (Stretchable)", "image" => "product/no-image.png", "category" => "Slacks"],
            ["name" => "Half Slacks (Stretchable)", "image" => "product/slacks-half-stretch.png", "category" => "Slacks"],
            ["name" => "Half Slacks (Serina)", "image" => "product/slacks-half-serina.png", "category" => "Slacks"],

            // Inners
            ["name" => "Full Sleeves Inner (Stretchable)", "image" => "product/inner-stretchable.png", "category" => "Inners"],
            ["name" => "Full Sleeves Inner (Serina)", "image" => "product/inner-serina.png", "category" => "Inners"],

            // T-Shirts
            ["name" => "Nokia Round Neck", "image" => "product/tshirt-nokia-round.png", "category" => "T-Shirt"],
            ["name" => "Dotnet Round Neck", "image" => "product/tshirt-dotnet-round.png", "category" => "T-Shirt"],
            ["name" => "Digital Round Neck", "image" => "product/tshirt-digital-round.png", "category" => "T-Shirt"],
            ["name" => "Nokia Full Sleeves", "image" => "product/no-image.png", "category" => "T-Shirt"],
            ["name" => "Digital Full Sleeves", "image" => "product/tshirt-digital.png", "category" => "T-Shirt"],
            ["name" => "Customize Any Type of T-shirt", "image" => "product/no-image.png", "category" => "T-Shirt"],

            // Jersey Set
            ["name" => "Nokia Jersey Set", "image" => "product/jersey-nokia.png", "category" => "Jersey Set"],
            ["name" => "Digital Jersey Set", "image" => "product/jersey-digital.png", "category" => "Jersey Set"],
            ["name" => "Customize Jersey Set", "image" => "product/jersey-nokia.png", "category" => "Jersey Set"],

            // Half Pants
            ["name" => "Nokia Half Pant (Without Pocket)", "image" => "product/half-nokia-no-pocket.png", "category" => "Half Pant"],
            ["name" => "Dotnet Half Pant (Without Pocket)", "image" => "product/no-image.png", "category" => "Half Pant"],
            ["name" => "Nokia Half Pant (With Pocket)", "image" => "product/half-nokia-pockets.png", "category" => "Half Pant"],
            ["name" => "Dotnet Half Pant (With Pocket)", "image" => "product/half-dotnet-pocket.png", "category" => "Half Pant"],
            ["name" => "NS Half Pant", "image" => "product/ns-half.png", "category" => "Half Pant"],
            ["name" => "Stretchable Half Pant", "image" => "product/half-stretchable.png", "category" => "Half Pant"],

            // Swimming Costume
            ["name" => "Swimming Shorts", "image" => "product/swimming-shorts.png", "category" => "Swimming Costume"],
            ["name" => "V-cut Swimming Costume Stretchable", "image" => "product/swimming-vcut-stretch.png", "category" => "Swimming Costume"],
            ["name" => "V-cut Swimming Costume Dotnet", "image" => "product/swimming-vcut-dotnet.png", "category" => "Swimming Costume"],
            ["name" => "Swimming Costume (Female)", "image" => "product/swimming-costume-female.png", "category" => "Swimming Costume"],

            // Bibs
            ["name" => "Bibs (Serina)", "image" => "product/bibs-serina.png", "category" => "Bibs"],
            ["name" => "Bibs (Digital)", "image" => "product/bibs-digital.png", "category" => "Bibs"],
            ["name" => "Bibs (Dotnet)", "image" => "product/bibs-dotnet.png", "category" => "Bibs"]
        ];

        // Filter products by selected category
        $selectedCategory = $request->query('category');
        if ($selectedCategory) {
            $products = array_values(array_filter($products, function ($product) use ($selectedCategory) {
                return $product['category'] === $selectedCategory;
            }));
        }

        return view('products', compact('categories', 'products', 'selectedCategory'));
    }
}
