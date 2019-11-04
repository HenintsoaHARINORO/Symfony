<?php
/**
 * Created by PhpStorm.
 * User: henintsoa
 * Date: 11/4/19
 * Time: 3:23 PM
 */
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
class ArticleController
{
public function homepage()
{
    return new Response("OMG MY SYMFONY FIRST PAGE");

}
}