<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Luca\Controllers\CartController;
use Luca\Models\Product;

class CartControllerTest extends TestCase
{
    private CartController $cart;
    private Product $product;

    protected function setUp(): void
    {
        $this->cart = new CartController();
        $this->product = new Product([
            'code' => 'BREAD01',
            'name' => 'Sourdough Bread',
            'price' => 5.99,
            'image' => 'bread.jpg',
            'description' => 'Fresh sourdough bread'
        ]);
    }

    public function testAddItemToEmptyCart()
    {
        $result = $this->cart->addItem($this->product, 1);

        $this->assertTrue($result);
        $this->assertEquals(1, $this->cart->getItemCount());
        $this->assertEquals(1, $this->cart->getItemQuantity('BREAD01'));
    }

    public function testAddMultipleQuantityToCart()
    {
        $result = $this->cart->addItem($this->product, 3);

        $this->assertTrue($result);
        $this->assertEquals(3, $this->cart->getItemQuantity('BREAD01'));
    }

    public function testAddZeroQuantityFails()
    {
        $result = $this->cart->addItem($this->product, 0);

        $this->assertFalse($result);
        $this->assertEquals(0, $this->cart->getItemCount());
    }

    public function testAddNegativeQuantityFails()
    {
        $result = $this->cart->addItem($this->product, -1);

        $this->assertFalse($result);
        $this->assertEquals(0, $this->cart->getItemCount());
    }

    public function testAddSameItemIncreasesQuantity()
    {
        $this->cart->addItem($this->product, 1);
        $result = $this->cart->addItem($this->product, 2);

        $this->assertTrue($result);
        $this->assertEquals(3, $this->cart->getItemQuantity('BREAD01'));
        $this->assertEquals(1, $this->cart->getItemCount());
    }

    public function testRemoveExistingItem()
    {
        $this->cart->addItem($this->product, 1);
        $result = $this->cart->removeItem('BREAD01');

        $this->assertTrue($result);
        $this->assertEquals(0, $this->cart->getItemCount());
    }

    public function testRemoveNonExistingItem()
    {
        $result = $this->cart->removeItem('NONEXISTENT');

        $this->assertFalse($result);
    }

    public function testUpdateQuantity()
    {
        $this->cart->addItem($this->product, 1);
        $result = $this->cart->updateQuantity('BREAD01', 5);

        $this->assertTrue($result);
        $this->assertEquals(5, $this->cart->getItemQuantity('BREAD01'));
    }

    public function testUpdateQuantityToZeroRemovesItem()
    {
        $this->cart->addItem($this->product, 1);
        $result = $this->cart->updateQuantity('BREAD01', 0);

        $this->assertTrue($result);
        $this->assertEquals(0, $this->cart->getItemCount());
    }

    public function testGetTotal()
    {
        $this->cart->addItem($this->product, 2);
        $expectedTotal = 2 * 5.99;

        $this->assertEquals($expectedTotal, $this->cart->getTotal());
    }

    public function testEmptyCart()
    {
        $this->cart->addItem($this->product, 2);
        $this->cart->emptyCart();

        $this->assertEquals(0, $this->cart->getItemCount());
        $this->assertEquals(0, $this->cart->getTotal());
    }

    public function testHasItem()
    {
        $this->cart->addItem($this->product, 1);

        $this->assertTrue($this->cart->hasItem('BREAD01'));
        $this->assertFalse($this->cart->hasItem('NONEXISTENT'));
    }
} 