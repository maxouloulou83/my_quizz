<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Reponse;
use App\Entity\Score;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class QuizzController extends AbstractController
{
    public function index(): Response
    {
        $categories = $this->getDoctrine()->getRepository('App:Categorie')->findAll();

        return $this->render('quiz/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    public function show(Categorie $categorie, Request $request)
    {
        $question_id = $request->get('number');

        $question = $categorie->getQuestions()[$question_id];

        try {
            $reponses = $this->getDoctrine()
                ->getRepository(Reponse::class)
                ->findBy(['question' => $question->getId()]);

            shuffle($reponses);
        } catch (\Error $e){
            return $this->quizzEnd($categorie);
        }

        if ($request->isMethod('POST')) {
            $reponse = $this->getDoctrine()
                ->getRepository(Reponse::class)
                ->findOneBy(['question' =>$question->getId(), 'reponseExpected' => 1]);

            $reponse = $reponse->getReponse();

            $idReponse = $request->get('reponse');

            $result = $this->getDoctrine()
                ->getRepository(Reponse::class)
                ->findOneBy(['id' => $idReponse, 'reponseExpected' => 1]);

            if ($this->getUser() === null) {
                if ($question_id === "0") {
                    $session = new Session();

                    $session->set('name', $categorie->getName());
                    $session->set('date', date("Y-m-d H:i:s"));
                    $session->set('nbQuestion', count($categorie->getQuestions()));

                    if ($result) {
                        $session->set('score', 1);
                    } else {
                        $session->set('score', 0);
                    }

                } else {
                    $session = $request->getSession();

                    if ($result) {
                        $session->set('score', $session->get('score') + 1);
                    }
                }

            } else {
                $id_user = $this->getUser()->getId();

                $entityManager = $this->getDoctrine()->getManager();

                if ($question_id === "0") {
                    $date = date("Y-m-d H:i:s");

                    $addScore = new Score();
                    $addScore->setDate($date);
                    $addScore->setCategorie($categorie);

                    if ($result) {
                        $addScore->setScore(1);
                    } else {
                        $addScore->setScore(0);
                    }


                } else {
                    $addScore = $this->getDoctrine()
                        ->getRepository(Score::class)
                        ->findByUserScore($id_user);

                    if ($result) {
                        $addScore->setScore($addScore->getScore() + 1);
                    }
                }

                $addScore->setUserId($id_user);
                $addScore->setName($categorie->getName());

                $entityManager->persist($addScore);
                $entityManager->flush();
            }

            $question_id++;
        }

        return $this->render('quiz/show.html.twig',[
            'question'=>$question,
            'categorie' => $categorie,
            'result' => $result ?? '',
            'reponses' => $reponses,
            'reponse' => $reponse ?? null,
            'nextQuestion' => $question_id ?? 1
        ]);
    }

    public function quizzEnd(Categorie $categorie)
    {
        return $this->render('quiz/end.html.twig', compact('categorie'));
    }

    public function userhistory(User $user): Response
    {
        if ($this->getUser()->getId() !== $user->getId()) {
            return $this->redirectToRoute('home');
        }

        $scores = $this->getDoctrine()
            ->getRepository(Score::class)
            ->findBy(['user_id' => $user->getId()], ['id' => 'DESC']);

        return $this->render('quiz/history.html.twig', compact('user', 'scores'));
    }
}



