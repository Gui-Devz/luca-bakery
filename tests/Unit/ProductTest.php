<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Luca\Models\Product;

class ProductTest extends TestCase
{
    private array $productData;

    protected function setUp(): void
    {
        $this->productData = [
            'code' => 'BREAD01',
            'name' => 'Sourdough Bread',
            'price' => 5.99,
            'image' => 'bread.jpg',
            'description' => 'Fresh sourdough bread'
        ];
    }

    public function testProductCreation()
    {
        $product = new Product($this->productData);

        $this->assertEquals($this->productData['code'], $product->getCode());
        $this->assertEquals($this->productData['name'], $product->getName());
        $this->assertEquals($this->productData['price'], $product->getPrice());
        $this->assertEquals($this->productData['image'], $product->getImage());
        $this->assertEquals($this->productData['description'], $product->getDescription());
    }

    public function testProductCreationWithMissingData()
    {
        $product = new Product([]);

        $this->assertEquals('', $product->getCode());
        $this->assertEquals('', $product->getName());
        $this->assertEquals(0.0, $product->getPrice());
        $this->assertEquals('', $product->getImage());
        $this->assertEquals('', $product->getDescription());
    }

    public function testProductToArray()
    {
        $product = new Product($this->productData);
        $array = $product->toArray();

        $this->assertEquals($this->productData, $array);
    }

    public function testProductCreationWithPartialData()
    {
        $partialData = [
            'code' => 'BREAD01',
            'name' => 'Sourdough Bread'
        ];

        $product = new Product($partialData);

        $this->assertEquals($partialData['code'], $product->getCode());
        $this->assertEquals($partialData['name'], $product->getName());
        $this->assertEquals(0.0, $product->getPrice());
        $this->assertEquals('', $product->getImage());
        $this->assertEquals('', $product->getDescription());
    }
} 