<?php

namespace App\DataFixtures;
use App\Entity\BlogPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $blogPost = new BlogPost();
        $blogPost->setTitle('a first post');
        $blogPost->setPublished(new \DateTime('2018-05-06 09:56:23'));
        $blogPost->setContent('here is some content');
        $blogPost->setAuthor('John Biddulph');
        $blogPost->setSlug('xx-xx');

        $manager->persist($blogPost);

        $blogPost = new BlogPost();
        $blogPost->setTitle('a second post');
        $blogPost->setPublished(new \DateTime('2018-02-11 04:54:13'));
        $blogPost->setContent('here is some more content');
        $blogPost->setAuthor('John Biddulph');
        $blogPost->setSlug('xx-oo');

        $manager->persist($blogPost);
        $manager->flush();
    }
}
