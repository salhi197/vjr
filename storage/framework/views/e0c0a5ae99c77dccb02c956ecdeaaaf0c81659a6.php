<?php $__env->startSection('content'); ?>


<div class="page-header">
    <h4 class="page-title"><?php echo e(trans('Créer Réglement')); ?></h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Vjr</a></li>
        <li class="breadcrumb-item active" aria-current="page">Réglement</li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <?php echo e(trans('main.instruction')); ?> :
                </h3>
            </div>
            <div class="card-body">
                    <form class="login100-form validate-form" method="POST" action="<?php echo e(route('reglement.store')); ?>">

                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Référence *</label>
                                <input type="text" class="form-control" id="titre" placeholder="985565" required>
                            </div>

                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label>Titre *</label>
                                <input type="text" class="form-control" value="<?php echo e($reglement->titre ?? ''); ?>" name="titre" id="titre" placeholder="loi..." required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Date *</label>
                                <input type="date" class="form-control" value="<?php echo e($reglement->ladate ?? ''); ?>" name="ladate" id="date" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label>Type de texte *</label>
                            <select id="selectpicker" value="<?php echo e($reglement->type ?? ''); ?>" name="type" class="form-control" data-live-search="true" required> 
                                <option selected>Choisir...</option>
                                <option> Accord</option>
                                <option> Arrêté</option>
                                <option> Arrêté interministériel</option>
                                <option> Avis</option>
                                <option> Barème</option>
                                <option> Bulletin d'information</option>
                                <option> Cahier des charges</option>
                                <option> Code</option>
                                <option> Communiqué</option>
                                <option> Convention</option>
                                <option> Convention internationale</option>
                                <option> Correspondance</option>
                                <option> Discours</option>
                                <option> Dispositif</option>
                                <option> Décision</option>
                                <option> Décision interministérielle</option>
                                <option> Déclaration</option>
                                <option> Décret</option>
                                <option> Décrit exécutif</option>
                                <option> Décret législatif</option>
                                <option> Décret présidentiel</option>
                                <option> Délibération</option>
                                <option> Guide</option>
                                <option> Instruction</option>
                                <option> Instruction interministérielle</option>
                                <option> Jurisprudence</option>
                                <option> Lettre</option>
                                <option> Loi</option>
                                <option> Loi organique</option>
                                <option> Modele</option>
                                <option> Norme</option>
                                <option> Note</option>
                                <option> Note circulaire</option>
                                <option> Notification</option>
                                <option> Ordononce</option>
                                <option> Plan d'action</option>
                                <option> Proclamation</option>
                                <option> Procés-verbal</option>
                                <option> Projet d'arrêté ministériel</option>
                                <option> Projet de cahier des charges</option>
                                <option> Projet de circulaire</option>
                                <option> Projet de décret présidentiel</option>
                                <option> Projet de loi</option>
                                <option> Projet de révision constitutionnelle</option>
                                <option> Proposition de loi</option>
                                <option> Rapport</option>
                                <option> Règlement</option>
                                <option> Résolution</option>
                                <option> Situation mensuelle</option>
                                <option> Télex</option>
                                <option> Télégramme</option>
                            </select>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Secteur</label>
                                <select id="selectpicker" value="<?php echo e($reglement->secteur ?? ''); ?>" name="secteur" class="form-control" data-live-search="true"> 
                                    <option selected>Choisir...</option>
                                    <option>Administration</option>
                                    <option>Affaires religieuses</option>
                                    <option>Affaires étrangères</option>
                                    <option>Agricultures et développement rural</option>
                                    <option>Agroalimentaire</option>
                                    <option>Agronomie</option>
                                    <option>Aménagement du territoire</option>
                                    <option>Artisanat</option>
                                    <option>Associations</option>
                                    <option>Assurances</option>
                                    <option>Audiovisuel</option>
                                    <option>Aviation civile</option>
                                    <option>Banque & Monnaie</option>
                                    <option>Bourse</option>
                                    <option>Commerce</option>
                                    <option>Commissariat et Expertise</option>
                                    <option>Communication</option>
                                    <option>Comptabilité</option>
                                    <option>Constitutionnel</option>
                                    <option>Contexte local</option>
                                    <option>Culture</option>
                                    <option>Douanes</option>
                                    <option>Droits civil</option>
                                    <option>Droit de l'Homme</option>
                                    <option>Défense nationale</option>
                                    <option>Economie</option>
                                    <option>Energie</option>
                                    <option>Environnement</option>
                                    <option>Education et enseignement superieur</option>
                                    <option>Etat civil</option>
                                    <option>Finance</option>
                                    <option>Formation</option>
                                    <option>Formation et enseignement</option>
                                    <option>Formes juridiques d'implantation</option>
                                    <option>HSE (santé, sécurité et environnement)</option>
                                    <option>Habitat</option>
                                    <option>Hydraulique et eau</option>
                                    <option>Hydrocarbures</option>
                                    <option>Immobilier</option>
                                    <option>Industrie</option>
                                    <option>Information</option>
                                    <option>Intèrieur</option>
                                    <option>Jeunesse et sports</option>
                                    <option>Judiciare</option>
                                    <option>Justice</option>
                                    <option>Justice militaire</option>
                                    <option>Legislation du travail</option>
                                    <option>Marchés Publics</option>
                                    <option>Maritime</option>
                                    <option>Mines</option>
                                    <option>Normalisation</option>
                                    <option>Normes</option>
                                    <option>Numérique</option>
                                    <option>Numérisation et statistiques</option>
                                    <option>Parlementaire</option>
                                    <option>Pharmacetique</option>
                                    <option>Poste</option>
                                    <option>Procédure civile et administrative</option>
                                    <option>Protocol international</option>
                                    <option>Présidence de la république</option>
                                    <option>Pénal</option>
                                    <option>Pêche</option>
                                    <option>Pêche et production halieutique</option>
                                    <option>Recherche scientifique</option>
                                    <option>Sanitaire</option>
                                    <option>Santé</option>
                                    <option>Santé animale</option>
                                    <option>Sciences</option>
                                    <option>Services</option>
                                    <option>Solidarité Nationale</option>
                                    <option>Système fiscal</option>
                                    <option>Système social</option>
                                    <option>Sureté nationale</option>
                                    <option>Technologie</option>
                                    <option>Transport</option>
                                    <option>Travaux publics</option>
                                    <option>Télécommunications</option>
                                    <option>Urbanisme</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Sous-secteur</label>
                                <select id="selectpicker" class="form-control" data-live-search="true"> 
                                    <option selected>Choisir...</option>
                                    <option>Acier & métallurgie</option>
                                    <option>Automobile</option>
                                    <option>Bureaux de liasion</option>
                                    <option>Cimenterie-Bétonnière</option>
                                    <option>Commerce exterieur</option>
                                    <option>Commerce international</option>
                                    <option>Conseil des participations de l'Etat</option>
                                    <option>Electrique & Electronique</option>
                                    <option>Energies renouvelables</option>
                                    <option>Etablissements permanent</option>
                                    <option>Gaz</option>
                                    <option>Groupements</option>
                                    <option>Hydrocarbure</option>
                                    <option>IAS (International Accounting Standards)</option>
                                    <option>IFRS (International Financial Reporting Standards)</option>
                                    <option>ISO (Organisation Internationale de Normalisation)</option>
                                    <option>Joint-venture</option>
                                    <option>Mines</option>
                                    <option>Nucléaire</option>                                                             
                                    <option>OMC (Organisation mondiale du commerce)</option>
                                    <option>PCAOB (Public Company Accounting Oversight Board)</option>
                                    <option>Protection du consommateur</option>
                                    <option>Pêche et aquaculture</option>
                                    <option>SCF (Système Comptable Financier)</option>
                                    <option>Sociétés commerciales</option>
                                    <option>Succursales</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label>Organisme</label>
                                <select id="selectpicker" value="<?php echo e($reglement->organisme ?? ''); ?>" name="organisme" class="form-control" data-live-search="true"> 
                                    <option selected>Choisir...</option>
                                    <option>Société des Eaux de l'Assainissement d'Alger</option>
                                    <option>Agence Nationale de Développement de l'invesstissement</option>
                                    <option>Agence Spatiale Algérienne</option>
                                    <option>Agroalimentaire</option>
                                    <option>Ambassade d'Algérie à Doha</option>
                                    <option>Ambassade d'Algérie à Kiev</option>
                                    <option>Ambassade d'Algérie en France</option>
                                    <option>Assemblé Populaire Nationale</option>
                                    <option>Association Professionnelle des Banques et des Etablissements Financiers</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>

                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Sous-organisme</label>
                                <select id="selectpicker" value="<?php echo e($reglement->sous_organisme ?? ''); ?>" name="sous_organisme" class="form-control" data-live-search="true"> 
                                    <option selected>Choisir...</option>
                                    <option>Agence National de Developpement de la PME</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label>Contenu</label>
                            <textarea class="form-control" value="<?php echo e($reglement->contenu ?? ''); ?>" name="contenu"></textarea>
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="form-row mb-4">
                            <button type="submit" class="btn btn-success btn-block mb-4 mr-2">Valider</button>
                            <button type="submit" class="btn btn-warning btn-block mb-4 mr-2">OCR</button>
                        </div>
                        <!--
                        <button type="submit" class="btn btn-success mb-4">Valider</button>
                    -->
                    </form>
            </div>
        </div>








    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.ui', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>