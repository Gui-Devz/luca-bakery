<?php

namespace Luca\Models;

class Product
{
    private $code;
    private $name;
    private $price;
    private $image;
    private $description;

    public function __construct(array $data)
    {
        $this->code = $data['code'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->price = $data['price'] ?? 0.0;
        $this->image = $data['image'] ?? '';
        $this->description = $data['description'] ?? '';
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function toArray(): array
    {
        return [
            'code' => $this->code,
            'name' => $this->name,
            'price' => $this->price,
            'image' => $this->image,
            'description' => $this->description
        ];
    }
} 