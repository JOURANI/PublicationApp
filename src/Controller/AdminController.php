<?php

namespace App\Controller;

use App\Datatables\UserDatatable;
use App\Entity\Users;
use Sg\DatatablesBundle\Datatable\Factory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     * @param Factory $factory
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addRole(Factory $factory,Request $request)
    {
//        $datatable = $this->get('sg_datatables.factory')->create(UserDatatable::class);
        $user = new Users();
        $datatable = $factory->create(UserDatatable::class,$user);
        $datatable->buildDatatable();

        if ($request->isXmlHttpRequest())
        {
            $responseService  = $this->get('sg_datatables.response');
            $responseService ->setDatatable($datatable);

            $responseService->getDatatableQueryBuilder();
            return $responseService->getResponse();
        }

        return $this->render('admin/addRole.html.twig', [
            'datatable' => $datatable,
        ]);
    }
}
