<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Form\FormBuilder;
use App\Form\ReportFormType;

use App\Entity\Comment;
use App\Entity\Question;


class ReportController extends Controller {

    public function reportQuestion(Question $question, UserInterface $user, Request $request) {

        if(!empty($question)) {

            $user = $this->getUser();
            $report = new Report();
            $report->setUser($user);
            $report->setQuestion($question);

            $form = $this->createForm(ReportFormType::class, $report, ['standalone' => false]);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($report);
                $entityManager->flush(); 
            }
        }
        return new Response($this->redirectToRoute("homepage"));
    }
    
    public function reportComment(Comment $comment, UserInterface $user, Request $request) {

        if(!empty($comment)) {

            $user = $this->getUser();
            $report = new Report();
            $report->setUser($user);
            $report->setComment($comment);

            $form = $this->createForm(ReportFormType::class, $report, ['standalone' => false]);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($report);
                $entityManager->flush();
            } 
        }
        
    }
}

?>