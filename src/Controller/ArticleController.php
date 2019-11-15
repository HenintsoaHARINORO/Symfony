<?php
/**
 * Created by PhpStorm.
 * User: henintsoa
 * Date: 11/4/19
 * Time: 3:23 PM
 */

namespace App\Controller;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/",name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }
    /**
     * @Route("/news/{slug}",name="article_show")
     */
public function show($slug)
{   $comments = [
    'bye',
    'OOH I  did not notice this is an array',
];


    return $this->render('article/show.html.twig',[
        'title'=> ucwords(str_replace('-',' ',$slug)),
        'slug'=>$slug,
        'comments'=>$comments,

    ]);


}
/**
 * @Route("/news/{slug}/heart",name="article_toggle_heart",methods={"POST"})
 */
public function toggleArticleHeart($slug,LoggerInterface $logger)
{
      //TODO-actually heart/unheart the article!
        $logger->info('Article is being hearted');
        return  $this->json(['hearts'=>rand(5,100)]);
}
}