<?php

class Weapon
{
  private string $name;
  private int $damage;

  public function __construct(string $name, int $damage)
  {
    $this->name = $name;
    $this->damage = $damage;
  }

    public function getName(): string
    {
      return $this->name;
    }
    public function setName(string $name): void
    {
      $this->name = $name;
    }
    public function getDamage(): int
    {
      return $this->damage;
    }
    public function setDamage(int $damage): void
    {
      $this->damage = $damage;
    }
    

    public function strike(): string
    {
      return "Mais aïeuh! <br>" ;
    }
  
}