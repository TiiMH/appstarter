<?php

namespace App\Models;

use CodeIgniter\Model;

class Abonne extends Model
{
    protected $table = 'abonne';
    protected $primaryKey = 'matricule_abonne';
    protected $allowedFields = ['matricule_abonne', 'nom_abonne'];

    /**
     * Retrouve une ligne de la table abonne par son matricule_abonne
     */
    function getAbonneByMatricule($matricule)
    {
        return $this->find($matricule);
    }
}
