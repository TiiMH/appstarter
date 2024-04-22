<?php

namespace App\Models;

use CodeIgniter\Model;

class Abonne extends Model
{
    protected $table   = 'abonne';
    protected $primaryKey = 'matricule_abonne';
    protected $allowedFields = ['matricule_abonne', 'nom_abonne'];

    /**
     * retrouve une ligne de la table abonne par son matricule
     */
    function getabonneBymatricule($matricule)
    {
        return $this->find($matricule);
    }
}
