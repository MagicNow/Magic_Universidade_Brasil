<?php

use Illuminate\Database\Seeder;

class PolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('poles')->delete();
        
        \DB::table('poles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'FILEM',
                'address' => 'Rua Rio Grande do Sul, 380',
                'city_id' => 57624,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Cajazeiras',
                'address' => 'Estrada do Coqueiro Grande, 48',
                'city_id' => 48890,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Faculdade Vasco da Gama',
                'address' => 'Avenida Vasco da Gama, 2787',
                'city_id' => 48890,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Faculdade Del Rey',
                'address' => 'Rua Ubá, 396',
                'city_id' => 50609,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Faculdade Frutal',
                'address' => 'Rua Nova Ponte, 439',
                'city_id' => 50997,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Faculdade da Cidade de Santa Luzia',
                'address' => 'Avenida Beira Rio, 2000',
                'city_id' => 51600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Faculdade Amambaí',
                'address' => 'Rua Padre Anchieta, 202',
                'city_id' => 51955,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Faculdade de Administração de Fátima do Sul',
                'address' => 'Rua Antônio Barbosa de Souza, 1010',
                'city_id' => 52012,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Faculdades Integradas de Naviraí',
                'address' => 'Rua Laurentino Pires de Arruda, 220',
                'city_id' => 52051,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Faculdades Integradas de Nova Andradina',
                'address' => 'Av. Antonio Joaquim de Moura Andrade, 910',
                'city_id' => 52057,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Faculdade de Ponta Porã',
                'address' => 'Rua Antônio João, 1675',
                'city_id' => 52072,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Faculdade Santa Emília de Rodat',
                'address' => 'Praça Caldas Brandã, s/n',
                'city_id' => 52804,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Faculdade Santa Catarina',
                'address' => 'Estrada do Arraial, 2740',
                'city_id' => 53242,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'FAKCEN',
                'address' => 'Rua Doutor Antônio de Paiva Júnior, 202',
                'city_id' => 53806,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'IA FEATI',
                'address' => 'Av. Tertuliano de Moura Bueno, 1400',
                'city_id' => 53949,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'FACESI',
                'address' => 'Rua Ludovico Bruschi, 505',
                'city_id' => 53952,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Faculdade do Noroeste Paranaense',
                'address' => 'Avenida Brasil, 1382',
                'city_id' => 54152,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Faculdade do Norte Pioneiro',
                'address' => 'BR 153 – KM 40',
                'city_id' => 54374,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Faculdade Global de Umuarama',
                'address' => 'Avenida Parigot de Souza, 3301',
                'city_id' => 54524,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Faculdade de Duque de Caxias',
                'address' => 'Rua Pedro Correia, 318 Vila Meriti',
                'city_id' => 54639,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Centro Universitário Moacyr Sreder Bastos',
                'address' => 'R. Engenheiro Trindade, 229',
                'city_id' => 54770,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Sociedade Unificada de Ensino Superior e Cultura',
                'address' => 'Rua General Caldwell, 197',
                'city_id' => 54770,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Faculdades Barddal',
                'address' => 'Avenida Madre Benvenuta, 416',
                'city_id' => 56122,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Faculdade de Araraquara',
                'address' => 'Rua Mahiba Barcha, 1169',
                'city_id' => 56577,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Instituto Educacional de Assis',
                'address' => 'Avenida Doutor Dória,260',
                'city_id' => 56591,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Faculdade de Auriflama – FAU',
                'address' => 'Via Acesso SP 310 Artur F. Neto,s/n – Km 2, 8',
                'city_id' => 56595,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Instituição de Ensino Superior de Avaré',
                'address' => 'Rua Goiás, 1121 – Centro – Avaré/SP',
                'city_id' => 56598,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Faculdade Alfacastelo',
                'address' => 'Estr. Dr. Cícero Borges de Moraes, 100',
                'city_id' => 56621,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Faculdade de Bauru',
                'address' => 'Rua Anhanguera, 9-19',
                'city_id' => 56626,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Faculdade de Birigui',
                'address' => 'Rua João Escanhuela, 133',
                'city_id' => 56634,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Instituto de Educação Superior de Boituva',
                'address' => 'Rodovia SP 129,Km 14',
                'city_id' => 56642,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'FMC',
                'address' => 'Rua México, 100',
                'city_id' => 56678,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Faculdade Politécnica de Campinas – Policamp',
                'address' => 'Rua Luiz Otávio, 1281',
                'city_id' => 56690,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Universidade Brasil – Campus Descalvado',
                'address' => 'Av. Hilário da Silva Passos, 950 – Parque Universitário',
                'city_id' => 56757,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Faculdade Diadema',
                'address' => 'Avenida Alda, 831',
                'city_id' => 56758,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Universidade Brasil – Campus Fernandópolis',
                'address' => 'Est. Projetada F-1,s/n – Fazenda Santa Rita',
                'city_id' => 56800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Faculdade de Guararapes',
                'address' => 'Rua Alfredo Pacheco, 750',
                'city_id' => 56839,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Organização Guará de Ensino',
                'address' => 'Avenida Pedro de Toledo, 195',
                'city_id' => 56841,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Faculdade do Guarujá',
                'address' => 'Via Santos Dumont Nº 3365 – Jardim Boa Esperança',
                'city_id' => 56846,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Faculdade de Ciências de Guarulhos',
                'address' => 'Avenida Guarulhos, 1844',
                'city_id' => 56847,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Escola Superior Paulista de Administração',
                'address' => 'Av. Guarulhos, 1844',
                'city_id' => 56847,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Faculdade de Hortolândia',
                'address' => 'Avenida Santana, 1070',
                'city_id' => 56853,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Faculdade Centro Paulista',
                'address' => 'Av. Dr. Victor Maida, 1055',
                'city_id' => 56861,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Faisa',
                'address' => 'Alameda Bahia, 490 – C',
                'city_id' => 56877,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Faculdade de Itapecerica da Serra',
                'address' => 'Estrada dos Maciéis, 210',
                'city_id' => 56903,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Faculdade de Tecnologia São Francisco',
                'address' => 'Av. Siqueira Campos, 1174',
                'city_id' => 56931,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Faculdade Eça de Queirós',
                'address' => 'Via de Acesso João de Góes, 2335',
                'city_id' => 56941,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Faculdade Jauense',
                'address' => 'Rua Conde do Pinhal, 166',
                'city_id' => 56949,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'José Bonifácio',
                'address' => 'Avenida Joaquim Moreira da Silva, 3200',
                'city_id' => 56955,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Faculdade de Ciências Gerenciais',
                'address' => 'Rua Senador Fonseca, 1182',
                'city_id' => 56959,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Faculdade de Marília',
                'address' => 'Rua Vinte e Quatro de Dezembro, 1251',
                'city_id' => 57012,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Faculdade de Mauá',
                'address' => 'Rua Vitorino Dell’Antonia, 349',
                'city_id' => 57019,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Faculdade de Mirandópolis',
                'address' => 'Avenida São Paulo, 965',
                'city_id' => 57028,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'FAIMI',
                'address' => 'Avenida Luiz Fernando Moreira, 1005',
                'city_id' => 57030,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Faculdade Monte Alto',
                'address' => 'Rua Wady Elias, 191',
                'city_id' => 57041,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Faculdade Ernesto Riscali',
                'address' => 'Rua Bruno Riscali, 569',
                'city_id' => 57089,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Faculdade de Orlândia',
                'address' => 'Avenida 15, 255',
                'city_id' => 57095,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Faculdade Cidade de Osasco',
                'address' => 'Rua São Bento,297 Vila Yolanda',
                'city_id' => 57096,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Faculdade de Saúde de São Paulo',
                'address' => 'Rua Antonio Buranello Filho,n°1000',
                'city_id' => 57141,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Faculdade Presidente Epitácio',
                'address' => 'Rua Pernambuco, 17-05',
                'city_id' => 57194,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Faculdade de Presidente Prudente',
                'address' => 'Avenida Presidente Prudente, 6093',
                'city_id' => 57195,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Presidente Venceslau',
                'address' => 'Rua Piracicaba, 47',
                'city_id' => 57196,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Faculdade Ranchariense',
                'address' => 'Avenida Pedro de Toledo, 1149',
                'city_id' => 57207,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Faculdades Integradas de Ribeirão Pires',
                'address' => 'Rua Coronel Oliveira Lima, 3345',
                'city_id' => 57222,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Associação Faculdade de Ribeirão Preto',
                'address' => 'Rua Saldanha Marinho, 915',
                'city_id' => 57223,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Faculdade Politec',
                'address' => 'Av. Santa Bárbara, 4.000 – Jd. Souza Queiroz',
                'city_id' => 57258,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Faculdade HSM',
                'address' => 'Rua Victor Meirelles, 602',
                'city_id' => 57279,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Instituto de Ensino Superior Santo André',
                'address' => 'Rua Delfim Moreira, 40',
                'city_id' => 57288,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Universidade Brasil – Polo EAD',
                'address' => 'Rua Conselheiro Lafaiete 35 – Embaré cep: 11040-280',
                'city_id' => 57299,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'FAPAN',
                'address' => 'Rua Marechal Deodoro, 1928',
                'city_id' => 57303,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Faculdade Tijucussu',
                'address' => 'Rua Martim Francisco, 471',
                'city_id' => 57305,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Faculdade FACMIL',
                'address' => 'Avenida Francisco das Chagas Oliveira, 791',
                'city_id' => 57322,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Faculdade Regional Tecmed',
                'address' => 'Avenida Francisco das Chagas Oliveira, 791',
                'city_id' => 57322,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Faculdade Centro Paulistano',
                'address' => 'Rua David Eid, 241',
                'city_id' => 57331,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Faculdade de Educação e Ciências Gerenciais de São Paulo',
                'address' => 'Rua Santa Crescência, 443',
                'city_id' => 57331,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Faculdade de São Paulo',
                'address' => 'Rua Irmãos Pilla, 144',
                'city_id' => 57331,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Faculdadede São Paulo – Centro Novo',
                'address' => 'Rua,Conselheiro,Crispiniano, 120',
                'city_id' => 57331,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Faculdadede São Paulo – Centro Velho',
                'address' => 'Rua Álvares Penteado, 216',
                'city_id' => 57331,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Faculdade Santa Izildinha',
                'address' => 'Rua Felice Buscaglia, 253',
                'city_id' => 57331,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Faculdade Villas Boas',
                'address' => 'Avenida Conde de Frontin, 1154',
                'city_id' => 57331,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Unicapital',
                'address' => 'Rua Coronel Joviniano Brandão, 418',
                'city_id' => 57331,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Universidade Brasil – Campus Itaquera',
                'address' => 'Rua Carolina Fonseca, 584 – Itaquera',
                'city_id' => 57331,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Faculdade Guaianás',
                'address' => 'Rua Carolina Fonseca, 235,Itaquera',
                'city_id' => 57331,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Faculdades,IntegradasPaulista',
                'address' => 'RuaIbipetuba, 42',
                'city_id' => 57331,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Faculdade São Roque',
                'address' => 'Avenida Varanguera, 623',
                'city_id' => 57334,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Universidade Brasil – Polo EAD',
                'address' => 'Rua Jordão Borghetti, 1260',
                'city_id' => 57349,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Faculdade de Sorocaba',
                'address' => 'Rua Doutor Álvaro Soares, 550',
                'city_id' => 57359,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Faculdade de Suzano',
                'address' => 'Rua José Correa Gonçalves, 57',
                'city_id' => 57366,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Faculdade Taquaritinga',
                'address' => 'Fazenda Contendas,s/n',
                'city_id' => 57649,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Faculdade Integração Tietê',
                'address' => 'Rua Santa Terezinha, 425',
                'city_id' => 57398,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Faculdades ESEFAP',
                'address' => 'Rua Mandaguaris, 274',
                'city_id' => 57411,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Faculdade de Vargem Grande Paulista',
                'address' => 'Estrada Planalto, 174 – Km 41, 5 – Rodovia Raposo Tavares',
                'city_id' => 57436,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Faculdade Integrada de Ensino Superior de Colinas',
                'address' => 'Rua Dom Manoel, 1297',
                'city_id' => 57500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}