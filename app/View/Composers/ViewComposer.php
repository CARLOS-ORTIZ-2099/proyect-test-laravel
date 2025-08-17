<?php

namespace App\View\Composers;

use Illuminate\View\View;

class ViewComposer
{
  public function compose(View $view): void
  {
    $view
      ->with('composerData', 'mensaje de un composer basado en clases')
      ->with('masData', 'mas contenido basado en clases');
  }
}
