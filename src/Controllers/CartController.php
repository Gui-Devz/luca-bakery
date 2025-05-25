<?php

namespace Luca\Controllers;

use Luca\Models\Product;

class CartController
{
    private $items = [];

    public function addItem(Product $product, int $quantity): bool
    {
        if ($quantity <= 0) {
            return false;
        }

        $code = $product->getCode();
        
        if (isset($this->items[$code])) {
            $this->items[$code]['quantity'] += $quantity;
        } else {
            $this->items[$code] = [
                'name' => $product->getName(),
                'price' => $product->getPrice(),
                'quantity' => $quantity,
                'image' => $product->getImage()
            ];
        }

        return true;
    }

    public function removeItem(string $code): bool
    {
        if (isset($this->items[$code])) {
            unset($this->items[$code]);
            return true;
        }
        return false;
    }

    public function updateQuantity(string $code, int $quantity): bool
    {
        if ($quantity <= 0) {
            return $this->removeItem($code);
        }

        if (isset($this->items[$code])) {
            $this->items[$code]['quantity'] = $quantity;
            return true;
        }
        return false;
    }

    public function emptyCart(): void
    {
        $this->items = [];
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getItemQuantity(string $code): int
    {
        return $this->items[$code]['quantity'] ?? 0;
    }

    public function getTotal(): float
    {
        $total = 0.0;
        foreach ($this->items as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }

    public function getItemCount(): int
    {
        return count($this->items);
    }

    public function hasItem(string $code): bool
    {
        return isset($this->items[$code]);
    }
} 