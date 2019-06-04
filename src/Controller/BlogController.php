<?php
/**
 * Created by PhpStorm.
 * User: telematicsdataservices
 * Date: 2019-06-04
 * Time: 22:12
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/blog")
 */
class BlogController extends AbstractController
{
    private const POSTS = [
        [
            'id' => 1,
            'slug' => 'hello-world',
            'title' => 'Hello World'
        ],
        [
            'id' => 2,
            'slug' => 'hello-world2',
            'title' => 'Hello World 2'
        ],
        [
            'id' => 3,
            'slug' => 'hello-world3',
            'title' => 'Hello World 3'
        ]

    ];

    /**
     * @Route("/{page}", name="blog_list", defaults={"page": 5})
     */
    public function list($page = 1) {
        return new JsonResponse(
            [
                'page' => $page,
                'data' => self::POSTS
            ]
        );
    }

    /**
     * @Route("/{id}", name="blog_by_id")
     */
    public function post($id) {
        return new JsonResponse(
          array_search($id, array_column(self::POSTS, 'id'))
        );
    }

    /**
     * @Route("/{slug}", name="blog_by_slug")
     */
    public function post_by_slug($slug) {
        return new JsonResponse(
            array_search($slug, array_column(self::POSTS, 'slug'))
        );
    }
}
