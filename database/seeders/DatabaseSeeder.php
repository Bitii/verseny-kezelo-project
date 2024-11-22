<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Versenyzok;
use App\Models\Versenyek;
use App\Models\Verseny;
use App\Models\User;
use App\Models\Fordulo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //3 user létrehozása
        $users = [
            ['email' => 'tesztelek@teszt.hu', 'nev' => 'Teszt Elek', 'telefonszam' => '06301234567', 'lakcim' => 'Budapest 1111, Teszt utca 1.'],
            ['email' => 'makkmarci@teszt.hu', 'nev' => 'Makk Marci', 'telefonszam' => '06307654321', 'lakcim' => 'Budapest 1111, Teszt utca 12.'],
            ['email' => 'gipszjakab@teszt.hu', 'nev' => 'Gipsz Jakab', 'telefonszam' => '06201234765', 'lakcim' => 'Budapest 1111, Teszt utca 4.'],
            ['email' => 'vincseszter@teszt.hu', 'nev' => 'Vincs Eszter', 'telefonszam' => '06201234756', 'lakcim' => 'Budapest 1111, Teszt utca 9.'],
            ['email' => 'mezeivirag@teszt.hu', 'nev' => 'Mezei Virág', 'telefonszam' => '06201289741', 'lakcim' => 'Budapest 1111, Teszt utca 7.'],
            ['email' => 'eszetlenke@teszt.hu', 'nev' => 'Eszet Lenke', 'telefonszam' => '06201159762', 'lakcim' => 'Budapest 1111, Teszt utca 69.'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
        // 3 verseny létrehozása
        $versenyek = [
            ['verseny_nev' => 'Matematika verseny', 'verseny_ev' => 2023, 'pontok_jo' => 10, 'pontok_rossz' => -1, 'pontok_ures' => 0, 'elerheto_nyelv' => 'HU'],
            ['verseny_nev' => 'Angol verseny', 'verseny_ev' => 2024, 'pontok_jo' => 15, 'pontok_rossz' => -1, 'pontok_ures' => -2, 'elerheto_nyelv' => 'HU'],
            ['verseny_nev' => 'Irodalom verseny', 'verseny_ev' => 2025, 'pontok_jo' => 20, 'pontok_rossz' => -1, 'pontok_ures' => -3, 'elerheto_nyelv' => 'HU'],
        ];

        foreach ($versenyek as $verseny) {
            Verseny::create($verseny);
        }

        // 3 fordulo létrehozása minden versenyhez
        $fordulok = [
            ['fordulo_nev' => '1. fordulo', 'idopont' => '2023-01-01', 'verseny_szamId' => 1],
            ['fordulo_nev' => '2. fordulo', 'idopont' => '2023-02-01', 'verseny_szamId' => 1],
            ['fordulo_nev' => '3. fordulo', 'idopont' => '2023-03-01', 'verseny_szamId' => 1],
            ['fordulo_nev' => '1. fordulo', 'idopont' => '2024-01-01', 'verseny_szamId' => 2],
            ['fordulo_nev' => '2. fordulo', 'idopont' => '2024-02-01', 'verseny_szamId' => 2],
            ['fordulo_nev' => '3. fordulo', 'idopont' => '2024-03-01', 'verseny_szamId' => 2],
            ['fordulo_nev' => '1. fordulo', 'idopont' => '2025-01-01', 'verseny_szamId' => 3],
            ['fordulo_nev' => '2. fordulo', 'idopont' => '2025-02-01', 'verseny_szamId' => 3],
            ['fordulo_nev' => '3. fordulo', 'idopont' => '2025-03-01', 'verseny_szamId' => 3],
        ];

        foreach ($fordulok as $fordulo) {
            Fordulo::create($fordulo);
        }

        // 3 versenyzo létrehozása minden fordulohoz
        $versenyzok = [
            ['nev' => 'Teszt Elek', 'felhasznaloId' => 1, 'forduloId' => 1],
            ['nev' => 'Makk Marci', 'felhasznaloId' => 2, 'forduloId' => 1],
            ['nev' => 'Gipsz Jakab', 'felhasznaloId' => 3, 'forduloId' => 1],
            ['nev' => 'Teszt Elek', 'felhasznaloId' => 1, 'forduloId' => 2],
            ['nev' => 'Makk Marci', 'felhasznaloId' => 2, 'forduloId' => 2],
            ['nev' => 'Gipsz Jakab', 'felhasznaloId' => 3, 'forduloId' => 2],
            ['nev' => 'Teszt Elek', 'felhasznaloId' => 1, 'forduloId' => 3],
            ['nev' => 'Makk Marci', 'felhasznaloId' => 2, 'forduloId' => 3],
            ['nev' => 'Gipsz Jakab', 'felhasznaloId' => 3, 'forduloId' => 3],
        ];

        foreach ($versenyzok as $versenyzo) {
            Versenyzok::create($versenyzo);
        }
    }
}
