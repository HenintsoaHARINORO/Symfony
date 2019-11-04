<?php
/**
 * Created by PhpStorm.
 * User: henintsoa
 * Date: 11/4/19
 * Time: 3:23 PM
 */
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class ArticleController
{
    /**
     * @Route("/news/{slug}")
     */
public function show($slug)
{
    return new Response(sprintf('OMG MY SYMFONY FIRST PAGE  : "%s"',$slug));

}
}