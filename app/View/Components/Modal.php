<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
  public $size;
  public $message;
  public $messageLong;
  public function __construct($tamanio, $mensaje, $mensajeGrande)
  {
    $this->size = $tamanio;
    $this->message = $mensaje;
    $this->messageLong = $mensajeGrande;
  }

  public function render(): View|Closure|string
  {
    return view('components.modal');
  }
}
