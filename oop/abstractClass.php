<?php

abstract class ProductFeatures {
    abstract function productDetails();
    abstract function productImages();
    abstract function productOwnerDetails();
}


class UploadProduct extends ProductFeatures {
    function productDetails() {
        echo "Product Details: This is a sample product.<br />";
    }

    function productImages() {
        echo "Product Images: image1.jpg, image2.jpg<br />";
    }

    function productOwnerDetails() {
        echo "Product Owner Details: John Doe,
        Email: 0Eg0V@example.com<br />";
    }
}

$upload = new UploadProduct();
$upload->productDetails();
$upload->productImages();
$upload->productOwnerDetails();




?>