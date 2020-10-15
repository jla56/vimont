<?php

namespace App\Controller\Admin;

use App\Entity\Practitioner;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PractitionerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Practitioner::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
