<?php

namespace Desymfony\DesymfonyBundle\Entity;

use Doctrine\ORM\EntityRepository;

class PonenteRepository extends EntityRepository
{
	//Aqui van los querys
	//DQL interantua con los objetos parecido al SQL
    public function findTodosAlfabeticamente()
    {
        return $this->getEntityManager()
                    ->createQuery('SELECT p FROM Desymfony\DesymfonyBundle\Entity\Ponente p
                                    ORDER BY p.nombre ASC')
                    ->getResult();  //Obtiene los objetos
    }
}