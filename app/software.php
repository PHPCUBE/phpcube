<?php

  use Silex\Application;
  use Symfony\Component\Validator\Validation;
  use Symfony\Component\Validator\Constraints as Assert;
  use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\HttpKernel\HttpKernelInterface;


  /**
   *
   * Default Controller
   *
   */
  $app->get ('/software/{software}', function (Request $request) use ($app) {

     return $app->render ('pages/404.html');

  })->value ('software', 'all')
    ->bind ('software');
