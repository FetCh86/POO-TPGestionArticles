<?php
/**
 * Created by PhpStorm.
 * User: fchou
 * Date: 01/11/2018
 * Time: 18:12
 */

declare(strict_types=1);

namespace App\Repository;


use App\Entity\Article as ArticleEntity;

final class InMemoryArticle implements Article
{

    private $articles = [
        [
            "id" => 1,
            "title" => "Les Français massivement opposés à la hausse des taxes sur les carburants",
            "content" => "Le pouvoir d'achat avant tout. Les vacances s'achèvent, la grogne monte. Deux semaines durant, 
            en famille ou entre amis, les Français se sont énervés sur la hausse des taxes sur les carburants ou le 
            fioul domestique. Si bien qu'à l'heure de retourner au travail, c'est une gifle cinglante qu'ils adressent 
            au gouvernement. Selon les résultats de notre sondage Odoxa-Dentsu Consulting pour Le Figaro et France Info, 
            ils sont ainsi 76 % à juger que la hausse des taxes «est une mauvaise chose car il faut avant tout favoriser
             le pouvoir d'achat des Français, quitte à ce qu'ils utilisent plus longtemps des produits pétroliers»."
        ],
        [
            "id" => 2,
            "title" => "Wall Street termine en hausse, après un rude mois d'octobre ",
            "content" => "Wall Street a fini en hausse mercredi pour le deuxième jour de suite, portée par des achats à 
            bon compte parmi les grandes valeurs du Nasdaq - durement sanctionnées ce mois-ci - et par une série de bons 
            résultats, dont Facebook et General Motors. L'indice Dow Jones a gagné 241,12 points, soit 0,97%, à 
            25.115,76 points. Le S&P-500, plus large, a pris 29,11 points, soit 1,09%, à 2.711,74. Le Nasdaq Composite a 
            avancé de son côté de 144,25 points (+2,01%) à 7.305,90."
        ],
        [
            "id" => 3,
            "title" => "Bientôt une taxe de 1 euro sur les colis livrés à domicile ? (PLF 2019)",
            "content" => "Pour tenter de contrer la disparition des commerces de proximité, certains maires ont recours 
            à des trésors d’imagination. Le maire de Cannes -soutenu par l’Association des Maires de France- vient de 
            déposer un curieux amendement dans le cadre du projet de loi de finances 2019. Ce dernier prévoit la mise en 
            place d’une taxe -baptisée « fiscalité locale commerciale équitable »- de 1 euro sur tout colis commandé sur 
            internet et livré à domicile. Le livraisons en points relais ne seraient pas concernées. Cette taxe 
            servirait à financer la baisse de la taxe foncière pour les petits commerces (un abattement de 10 % pour les 
            commerces de moins de 400 mètres carrés de surface)."
        ],
        [
            "id" => 4,
            "title" => "Toyota rappelle 1,6 million de voitures, dont 80.000 en France",
            "content" => "Le constructeur japonais Toyota a annoncé jeudi le rappel de plus de 1,6 million de véhicules 
            dans le monde pour des problèmes d'airbags. En France, plus de 80.000 modèles des véhicules concernés sont 
            en circulation.",
        ]
    ];

    public function find(string $id): ArticleEntity
    {
        if (!isset($this->articles[$id])){
            throw new \LogicException("No article with this id exists");
        }

        return $this->articles[$id];
    }

    public function findAll(): ArticleEntity
    {
        for ($i=0; $i < count($this->articles); $i++){
            return $this->articles[$i];
        }
        // TODO: Implement findAll() method.
    }
}