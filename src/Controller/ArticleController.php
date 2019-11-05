<?php
/**
 * Created by PhpStorm.
 * User: henintsoa
 * Date: 11/4/19
 * Time: 3:23 PM
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class ArticleController extends AbstractController
{
    /**
     * @Route("/news/{slug}")
     */
public function show($slug)
{   $comments = [
    'bye',
    'OOH I  did not notice this is an array',
];


    return $this->render('article/show.html.twig',[
        'title'=>$slug,
        'comments'=>$comments,

    ]);


}
}