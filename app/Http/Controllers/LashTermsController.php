<?php

 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\File;
 use Illuminate\Support\Facades\Response;

 class LashTermsController extends Controller
 {
     public function index()
     {
         $file = public_path().DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'others'.DIRECTORY_SEPARATOR.'lash_terms.pdf';
         $file = File::get($file);
         $response = Response::make($file,200);
         $response->header('Content-Type', 'application/pdf');
         $response->header('Content-Disposition', 'inline; filename="lash_terms.pdf"');
         return $response;
     }
 }