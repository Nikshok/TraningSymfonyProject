<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Post;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('admin1');
        $user->setPassword('test1');
        $user->setEmail('admin1@mail.com');
        $user->setCreatedAt(new \DateTime());
        $post = new Post();
        $post->setName('post1');
        $post->setText('text1');
        $post->setCreatedAt(new \DateTime());
        $post->setUser($user);

        $manager->persist($post);
        $manager->persist($user);

        $user = new User();
        $user->setUsername('admin2');
        $user->setPassword('test2');
        $user->setEmail('admin2@mail.com');
        $user->setCreatedAt(new \DateTime());
        $post = new Post();
        $post->setName('post1');
        $post->setText('text1');
        $post->setCreatedAt(new \DateTime());
        $post->setUser($user);

        $manager->persist($post);
        $manager->persist($user);

        $user = new User();
        $user->setUsername('admin3');
        $user->setPassword('test3');
        $user->setEmail('admin3@mail.com');
        $user->setCreatedAt(new \DateTime());
        $post = new Post();
        $post->setName('post1');
        $post->setText('text1');
        $post->setCreatedAt(new \DateTime());
        $post->setUser($user);

        $manager->persist($post);
        $manager->persist($user);

        $user = new User();
        $user->setUsername('admin4');
        $user->setPassword('test4');
        $user->setEmail('admin4@mail.com');
        $user->setCreatedAt(new \DateTime());
        $post = new Post();
        $post->setName('post1');
        $post->setText('text1');
        $post->setCreatedAt(new \DateTime());
        $post->setUser($user);

        $manager->persist($post);
        $manager->persist($user);

        $user = new User();
        $user->setUsername('admin5');
        $user->setPassword('test5');
        $user->setEmail('admin5@mail.com');
        $user->setCreatedAt(new \DateTime());
        $post = new Post();
        $post->setName('post1');
        $post->setText('text1');
        $post->setCreatedAt(new \DateTime());
        $post->setUser($user);

        $manager->persist($post);
        $manager->persist($user);

        $manager->flush();
    }

}