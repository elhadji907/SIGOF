<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    /**
     * List of applications to add.
     */
    private $permissions = [
        'role-create',
        'role-update',
        'role-show',
        'role-view',
        'role-delete',
        'give-role-permissions',
        'user-create',
        'user-update',
        'user-show',
        'user-view',
        'user-delete',
        'employe-create',
        'employe-update',
        'employe-show',
        'employe-view',
        'employe-delete',
        'direction-create',
        'direction-update',
        'direction-show',
        'direction-view',
        'direction-delete',
        'permission-create',
        'permission-update',
        'permission-show',
        'permission-view',
        'permission-delete',
        'courriers-create',
        'courriers-update',
        'courriers-show',
        'courriers-view',
        'courriers-delete',
        'arrive-create',
        'arrive-update',
        'arrive-show',
        'arrive-view',
        'arrive-delete',
        'depart-create',
        'depart-update',
        'depart-show',
        'depart-view',
        'depart-delete',
        'interne-create',
        'interne-update',
        'interne-show',
        'interne-view',
        'interne-delete',
        'categorie-create',
        'categorie-update',
        'categorie-show',
        'categorie-view',
        'categorie-delete',
        'demande-create',
        'demande-update',
        'demande-show',
        'demande-view',
        'demandes-delete',
        'individuelle-create',
        'individuelle-update',
        'individuelle-show',
        'individuelle-view',
        'individuelle-delete',
        'collective-create',
        'collective-update',
        'collective-show',
        'collective-view',
        'collective-delete',
        'pcharge-create',
        'pcharge-update',
        'pcharge-show',
        'pcharge-view',
        'pcharge-delete',
        'demandeur-create',
        'demandeur-update',
        'demandeur-show',
        'demandeur-view',
        'demandeur-delete',
        'operateur-create',
        'operateur-update',
        'operateur-show',
        'operateur-view',
        'operateur-delete',
        'operateur-demande-create',
        'operateur-demande-update',
        'operateur-demande-show',
        'devenir-operateur-view',
        'operateur-demande-delete',
        'agrement-create',
        'agrement-update',
        'agrement-show',
        'agrement-view',
        'agrement-delete',
        'commission-create',
        'commission-update',
        'commission-show',
        'commission-view',
        'commission-delete',
        'module-create',
        'module-update',
        'module-show',
        'module-view',
        'module-delete',
        'domaine-create',
        'domaine-update',
        'domaine-show',
        'domaine-view',
        'domaine-delete',
        'secteur-create',
        'secteur-update',
        'secteur-show',
        'secteur-view',
        'secteur-delete',
        'formation-create',
        'formation-update',
        'formation-show',
        'formation-view',
        'formation-delete',
        'ingenieur-create',
        'ingenieur-update',
        'ingenieur-show',
        'ingenieur-view',
        'ingenieur-delete',
        'evaluateur-create',
        'evaluateur-update',
        'evaluateur-show',
        'evaluateur-view',
        'evaluateur-delete',
        'loalite-create',
        'loalite-update',
        'loalite-show',
        'loalite-view',
        'loalite-delete',
        'region-create',
        'region-update',
        'region-show',
        'region-view',
        'region-delete',
        'departement-create',
        'departement-update',
        'departement-show',
        'departement-view',
        'departement-delete',
        'arrondissement-create',
        'arrondissement-update',
        'arrondissement-show',
        'arrondissement-view',
        'arrondissement-delete',
        'commune-create',
        'commune-update',
        'commune-show',
        'commune-view',
        'commune-delete',
        'fonction-create',
        'fonction-update',
        'fonction-show',
        'fonction-view',
        'fonction-delete',
        'loi-create',
        'loi-update',
        'loi-show',
        'loi-view',
        'loi-delete',
        'decret-create',
        'decret-update',
        'decret-show',
        'decret-view',
        'decret-delete',
        'pv-recrutement-create',
        'pv-recrutement-update',
        'pv-recrutement-show',
        'pv-recrutement-view',
        'pv-recrutement-delete',
        'decision-create',
        'decision-update',
        'decision-show',
        'decision-view',
        'decision-delete',
        'article-create',
        'article-update',
        'article-show',
        'article-view',
        'article-delete',
        'nommination-create',
        'nommination-update',
        'nommination-show',
        'nommination-view',
        'nommination-delete',
        'rapport-create',
        'rapport-update',
        'rapport-show',
        'rapport-view',
        'rapport-delete',
        'rapport-individuelle-view',
        'rapport-collective-view',
        'rapport-courrier-view',
        'rapport-arrive-view',
        'rapport-depart-view',
        'rapport-interne-view',
        'rapport-operateur-view',
        'rapport-formation-view',
        'rapport-formes-view',
        'rapport-user-view',
        'rapport-suivi-formes-view',
        'home-view',
        'courrier-view',
        'localite-view',
        'agrement-commission',
        'validate-module-collective',
        'projet-create',
        'projet-view',
        'projet-show',
        'projet-update',
        'projet-delete',
        'file-create',
        'file-view',
        'file-show',
        'file-update',
        'file-delete',
        'convention-create',
        'convention-view',
        'convention-show',
        'convention-update',
        'convention-delete',
        'referentiel-create',
        'referentiel-view',
        'referentiel-show',
        'referentiel-update',
        'referentiel-delete',
        'onfpevaluateur-create',
        'onfpevaluateur-view',
        'onfpevaluateur-show',
        'onfpevaluateur-update',
        'onfpevaluateur-delete',
        'operateur-check',
        'module-check',
        'individuelle-check',
        'collective-check',
        'ingenieur-check',
        'evaluateur-check',
        'onfpevaluateur-check',
        'email-formation',
        'annuler-formation',
        'terminer-formation',
        'demarrer-formation',
        'evaluer-formation',
        'attestation-formation',
        'pv-formation',
        'lettre-formation',
        'abe-formation',
        'jury-formation',
        'retirer-demandeur-formation',
        'devenir-operateur-agrement-create',
        'devenir-operateur-agrement-update',
        'devenir-operateur-agrement-show',
        'devenir-operateur-agrement-view',
        'devenir-operateur-agrement-delete',
        'devenir-operateur-agrement-ouvert',
        'une-view',
        'une-show',
        'une-create',
        'une-update',
        'une-delete',
        'contact-view',
        'contact-show',
        'contact-create',
        'contact-update',
        'contact-delete',
        'antenne-view',
        'antenne-show',
        'antenne-create',
        'antenne-update',
        'antenne-delete',
    ];

    public function run(): void
    {
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        }


        // Create admin User and assign the role to him.
       /*  $user = User::create([
            'name' => 'Prevail Ejimadu',
            'email' => 'test@example.com',
            'password' => Hash::make('password')
        ]); */

        /* $role = Role::create(['name' => 'admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);
 */
        /* $user->assignRole([$role->id]); */


        $this->call([
            CategorieSeeder::class,
            SecteurSeeder::class,
            DomaineSeeder::class,
            ModuleSeeder::class,
            DiplomeSeeder::class,
            DiplomeproSeeder::class,
            RegionSeeder::class,
            DepartementSeeder::class,
            ArrondissementSeeder::class,
            CommuneSeeder::class,
            FonctionSeeder::class,
            DirectionSeeder::class,
            AdministrateurSeeder::class,
            GestionnaireSeeder::class,
            EmployeeSeeder::class,
            RoleSeeder::class,
            LoiSeeder::class,
            DecretSeeder::class,
            ProcesverbalSeeder::class,
            DecisionSeeder::class,
            ArticleSeeder::class,
            NomminationSeeder::class,
            IndemniteSeeder::class,
            TypeformationSeeder::class,
            ProjetSeeder::class,
            IngenieurSeeder::class,
            EvaluateurSeeder::class,
            OnfpevaluateurSeeder::class,
            FileSeeder::class,
            ConventionSeeder::class,
            ReferentielSeeder::class,
            AntenneSeeder::class,
            ServiceSeeder::class,
            IndividuelleSeeder::class,
        ]);
    }
}
