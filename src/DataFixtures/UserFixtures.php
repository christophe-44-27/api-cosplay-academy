<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Project;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 20 products! Bam!
        for ($i = 0; $i < 20; $i++) {
            $project = new Project();
            $project->setName('project '.$i);
            $project->setDescription("Lorem Ipsum Tartiflette Poutine");
            $project->setOwner(1);
            $project->setServices(1);
            $manager->persist($project);
        }

        $manager->flush();
    }
}
