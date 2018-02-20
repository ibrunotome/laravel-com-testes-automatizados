<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'code'  => '654',
                'title' => 'Banco A.J.Renner S.A.'
            ],
            [
                'code'  => '246',
                'title' => 'Banco ABC Brasil S.A.'
            ],
            [
                'code'  => '25',
                'title' => 'Banco Alfa S.A.'
            ],
            [
                'code'  => '641',
                'title' => 'Banco Alvorada S.A.'
            ],
            [
                'code'  => '213',
                'title' => 'Banco Arbi S.A.'
            ],
            [
                'code'  => '19',
                'title' => 'Banco Azteca do Brasil S.A.'
            ],
            [
                'code'  => '29',
                'title' => 'Banco Banerj S.A.'
            ],
            [
                'code'  => '0',
                'title' => 'Banco Bankpar S.A.'
            ],
            [
                'code'  => '740',
                'title' => 'Banco Barclays S.A.'
            ],
            [
                'code'  => '107',
                'title' => 'Banco BBM S.A.'
            ],
            [
                'code'  => '31',
                'title' => 'Banco Beg S.A.'
            ],
            [
                'code'  => '739',
                'title' => 'Banco BGN S.A.'
            ],
            [
                'code'  => '96',
                'title' => 'Banco BM&F de Serviços de Liquidação e Custódia S.A'
            ],
            [
                'code'  => '318',
                'title' => 'Banco BMG S.A.'
            ],
            [
                'code'  => '752',
                'title' => 'Banco BNP Paribas Brasil S.A.'
            ],
            [
                'code'  => '248',
                'title' => 'Banco Boavista Interatlântico S.A.'
            ],
            [
                'code'  => '218',
                'title' => 'Banco Bonsucesso S.A.'
            ],
            [
                'code'  => '65',
                'title' => 'Banco Bracce S.A.'
            ],
            [
                'code'  => '36',
                'title' => 'Banco Bradesco BBI S.A.'
            ],
            [
                'code'  => '204',
                'title' => 'Banco Bradesco Cartões S.A.'
            ],
            [
                'code'  => '394',
                'title' => 'Banco Bradesco Financiamentos S.A.'
            ],
            [
                'code'  => '237',
                'title' => 'Banco Bradesco S.A.'
            ],
            [
                'code'  => '225',
                'title' => 'Banco Brascan S.A.'
            ],
            [
                'code'  => 'M15',
                'title' => 'Banco BRJ S.A.'
            ],
            [
                'code'  => '208',
                'title' => 'Banco BTG Pactual S.A.'
            ],
            [
                'code'  => '44',
                'title' => 'Banco BVA S.A.'
            ],
            [
                'code'  => '263',
                'title' => 'Banco Cacique S.A.'
            ],
            [
                'code'  => '473',
                'title' => 'Banco Caixa Geral - Brasil S.A.'
            ],
            [
                'code'  => '412',
                'title' => 'Banco Capital S.A.'
            ],
            [
                'code'  => '40',
                'title' => 'Banco Cargill S.A.'
            ],
            [
                'code'  => '745',
                'title' => 'Banco Citibank S.A.'
            ],
            [
                'code'  => 'M08',
                'title' => 'Banco Citicard S.A.'
            ],
            [
                'code'  => '241',
                'title' => 'Banco Clássico S.A.'
            ],
            [
                'code'  => 'M19',
                'title' => 'Banco CNH Capital S.A.'
            ],
            [
                'code'  => '215',
                'title' => 'Banco Comercial e de Investimento Sudameris S.A.'
            ],
            [
                'code'  => '756',
                'title' => 'Banco Cooperativo do Brasil S.A. - BANCOOB'
            ],
            [
                'code'  => '748',
                'title' => 'Banco Cooperativo Sicredi S.A.'
            ],
            [
                'code'  => '75',
                'title' => 'Banco CR2 S.A.'
            ],
            [
                'code'  => '721',
                'title' => 'Banco Credibel S.A.'
            ],
            [
                'code'  => '222',
                'title' => 'Banco Credit Agricole Brasil S.A.'
            ],
            [
                'code'  => '505',
                'title' => 'Banco Credit Suisse (Brasil) S.A.'
            ],
            [
                'code'  => '229',
                'title' => 'Banco Cruzeiro do Sul S.A.'
            ],
            [
                'code'  => '266',
                'title' => 'Banco Cédula S.A.'
            ],
            [
                'code'  => '3',
                'title' => 'Banco da Amazônia S.A.'
            ],
            [
                'code'  => '083-3',
                'title' => 'Banco da China Brasil S.A.'
            ],
            [
                'code'  => 'M21',
                'title' => 'Banco Daimlerchrysler S.A.'
            ],
            [
                'code'  => '707',
                'title' => 'Banco Daycoval S.A.'
            ],
            [
                'code'  => '300',
                'title' => 'Banco de La Nacion Argentina'
            ],
            [
                'code'  => '495',
                'title' => 'Banco de La Provincia de Buenos Aires'
            ],
            [
                'code'  => '494',
                'title' => 'Banco de La Republica Oriental del Uruguay'
            ],
            [
                'code'  => 'M06',
                'title' => 'Banco de Lage Landen Brasil S.A.'
            ],
            [
                'code'  => '24',
                'title' => 'Banco de Pernambuco S.A. - BANDEPE'
            ],
            [
                'code'  => '456',
                'title' => 'Banco de Tokyo-Mitsubishi UFJ Brasil S.A.'
            ],
            [
                'code'  => '214',
                'title' => 'Banco Dibens S.A.'
            ],
            [
                'code'  => '1',
                'title' => 'Banco do Brasil S.A.'
            ],
            [
                'code'  => '47',
                'title' => 'Banco do Estado de Sergipe S.A.'
            ],
            [
                'code'  => '37',
                'title' => 'Banco do Estado do Pará S.A.'
            ],
            [
                'code'  => '39',
                'title' => 'Banco do Estado do Piauí S.A. - BEP'
            ],
            [
                'code'  => '41',
                'title' => 'Banco do Estado do Rio Grande do Sul S.A.'
            ],
            [
                'code'  => '4',
                'title' => 'Banco do Nordeste do Brasil S.A.'
            ],
            [
                'code'  => '265',
                'title' => 'Banco Fator S.A.'
            ],
            [
                'code'  => 'M03',
                'title' => 'Banco Fiat S.A.'
            ],
            [
                'code'  => '224',
                'title' => 'Banco Fibra S.A.'
            ],
            [
                'code'  => '626',
                'title' => 'Banco Ficsa S.A.'
            ],
            [
                'code'  => 'M18',
                'title' => 'Banco Ford S.A.'
            ],
            [
                'code'  => '233',
                'title' => 'Banco GE Capital S.A.'
            ],
            [
                'code'  => '734',
                'title' => 'Banco Gerdau S.A.'
            ],
            [
                'code'  => 'M07',
                'title' => 'Banco GMAC S.A.'
            ],
            [
                'code'  => '612',
                'title' => 'Banco Guanabara S.A.'
            ],
            [
                'code'  => 'M22',
                'title' => 'Banco Honda S.A.'
            ],
            [
                'code'  => '63',
                'title' => 'Banco Ibi S.A. Banco Múltiplo'
            ],
            [
                'code'  => 'M11',
                'title' => 'Banco IBM S.A.'
            ],
            [
                'code'  => '604',
                'title' => 'Banco Industrial do Brasil S.A.'
            ],
            [
                'code'  => '320',
                'title' => 'Banco Industrial e Comercial S.A.'
            ],
            [
                'code'  => '653',
                'title' => 'Banco Indusval S.A.'
            ],
            [
                'code'  => '630',
                'title' => 'Banco Intercap S.A.'
            ],
            [
                'code'  => '077-9',
                'title' => 'Banco Intermedium S.A.'
            ],
            [
                'code'  => '249',
                'title' => 'Banco Investcred Unibanco S.A.'
            ],
            [
                'code'  => 'M09',
                'title' => 'Banco Itaucred Financiamentos S.A.'
            ],
            [
                'code'  => '184',
                'title' => 'Banco Itaú BBA S.A.'
            ],
            [
                'code'  => '479',
                'title' => 'Banco ItaúBank S.A'
            ],
            [
                'code'  => '376',
                'title' => 'Banco J. P. Morgan S.A.'
            ],
            [
                'code'  => '74',
                'title' => 'Banco J. Safra S.A.'
            ],
            [
                'code'  => '217',
                'title' => 'Banco John Deere S.A.'
            ],
            [
                'code'  => '76',
                'title' => 'Banco KDB S.A.'
            ],
            [
                'code'  => '757',
                'title' => 'Banco KEB do Brasil S.A.'
            ],
            [
                'code'  => '600',
                'title' => 'Banco Luso Brasileiro S.A.'
            ],
            [
                'code'  => '212',
                'title' => 'Banco Matone S.A.'
            ],
            [
                'code'  => 'M12',
                'title' => 'Banco Maxinvest S.A.'
            ],
            [
                'code'  => '389',
                'title' => 'Banco Mercantil do Brasil S.A.'
            ],
            [
                'code'  => '746',
                'title' => 'Banco Modal S.A.'
            ],
            [
                'code'  => 'M10',
                'title' => 'Banco Moneo S.A.'
            ],
            [
                'code'  => '738',
                'title' => 'Banco Morada S.A.'
            ],
            [
                'code'  => '66',
                'title' => 'Banco Morgan Stanley S.A.'
            ],
            [
                'code'  => '243',
                'title' => 'Banco Máxima S.A.'
            ],
            [
                'code'  => '45',
                'title' => 'Banco Opportunity S.A.'
            ],
            [
                'code'  => 'M17',
                'title' => 'Banco Ourinvest S.A.'
            ],
            [
                'code'  => '623',
                'title' => 'Banco Panamericano S.A.'
            ],
            [
                'code'  => '611',
                'title' => 'Banco Paulista S.A.'
            ],
            [
                'code'  => '613',
                'title' => 'Banco Pecúnia S.A.'
            ],
            [
                'code'  => '094-2',
                'title' => 'Banco Petra S.A.'
            ],
            [
                'code'  => '643',
                'title' => 'Banco Pine S.A.'
            ],
            [
                'code'  => '724',
                'title' => 'Banco Porto Seguro S.A.'
            ],
            [
                'code'  => '735',
                'title' => 'Banco Pottencial S.A.'
            ],
            [
                'code'  => '638',
                'title' => 'Banco Prosper S.A.'
            ],
            [
                'code'  => 'M24',
                'title' => 'Banco PSA Finance Brasil S.A.'
            ],
            [
                'code'  => '747',
                'title' => 'Banco Rabobank International Brasil S.A.'
            ],
            [
                'code'  => '088-4',
                'title' => 'Banco Randon S.A.'
            ],
            [
                'code'  => '356',
                'title' => 'Banco Real S.A.'
            ],
            [
                'code'  => '633',
                'title' => 'Banco Rendimento S.A.'
            ],
            [
                'code'  => '741',
                'title' => 'Banco Ribeirão Preto S.A.'
            ],
            [
                'code'  => 'M16',
                'title' => 'Banco Rodobens S.A.'
            ],
            [
                'code'  => '72',
                'title' => 'Banco Rural Mais S.A.'
            ],
            [
                'code'  => '453',
                'title' => 'Banco Rural S.A.'
            ],
            [
                'code'  => '422',
                'title' => 'Banco Safra S.A.'
            ],
            [
                'code'  => '33',
                'title' => 'Banco Santander (Brasil) S.A.'
            ],
            [
                'code'  => '250',
                'title' => 'Banco Schahin S.A.'
            ],
            [
                'code'  => '743',
                'title' => 'Banco Semear S.A.'
            ],
            [
                'code'  => '749',
                'title' => 'Banco Simples S.A.'
            ],
            [
                'code'  => '366',
                'title' => 'Banco Société Générale Brasil S.A.'
            ],
            [
                'code'  => '637',
                'title' => 'Banco Sofisa S.A.'
            ],
            [
                'code'  => '12',
                'title' => 'Banco Standard de Investimentos S.A.'
            ],
            [
                'code'  => '464',
                'title' => 'Banco Sumitomo Mitsui Brasileiro S.A.'
            ],
            [
                'code'  => '082-5',
                'title' => 'Banco Topázio S.A.'
            ],
            [
                'code'  => 'M20',
                'title' => 'Banco Toyota do Brasil S.A.'
            ],
            [
                'code'  => 'M13',
                'title' => 'Banco Tricury S.A.'
            ],
            [
                'code'  => '634',
                'title' => 'Banco Triângulo S.A.'
            ],
            [
                'code'  => 'M14',
                'title' => 'Banco Volkswagen S.A.'
            ],
            [
                'code'  => 'M23',
                'title' => 'Banco Volvo (Brasil) S.A.'
            ],
            [
                'code'  => '655',
                'title' => 'Banco Votorantim S.A.'
            ],
            [
                'code'  => '610',
                'title' => 'Banco VR S.A.'
            ],
            [
                'code'  => '370',
                'title' => 'Banco WestLB do Brasil S.A.'
            ],
            [
                'code'  => '21',
                'title' => 'BANESTES S.A. Banco do Estado do Espírito Santo'
            ],
            [
                'code'  => '719',
                'title' => 'Banif-Banco Internacional do Funchal (Brasil)S.A.'
            ],
            [
                'code'  => '755',
                'title' => 'Bank of America Merrill Lynch Banco Múltiplo S.A.'
            ],
            [
                'code'  => '744',
                'title' => 'BankBoston N.A.'
            ],
            [
                'code'  => '73',
                'title' => 'BB Banco Popular do Brasil S.A.'
            ],
            [
                'code'  => '78',
                'title' => 'BES Investimento do Brasil S.A.-Banco de Investimento'
            ],
            [
                'code'  => '69',
                'title' => 'BPN Brasil Banco Múltiplo S.A.'
            ],
            [
                'code'  => '70',
                'title' => 'BRB - Banco de Brasília S.A.'
            ],
            [
                'code'  => '092-2',
                'title' => 'Brickell S.A. Crédito, financiamento e Investimento'
            ],
            [
                'code'  => '104',
                'title' => 'Caixa Econômica Federal'
            ],
            [
                'code'  => '477',
                'title' => 'Citibank N.A.'
            ],
            [
                'code'  => '081-7',
                'title' => 'Concórdia Banco S.A.'
            ],
            [
                'code'  => '097-3',
                'title' => 'Cooperativa Central de Crédito Noroeste Brasileiro Ltda.'
            ],
            [
                'code'  => '085-x',
                'title' => 'Cooperativa Central de Crédito Urbano-CECRED'
            ],
            [
                'code'  => '099-x',
                'title' => 'Cooperativa Central de Economia e Credito Mutuo das Unicreds'
            ],
            [
                'code'  => '090-2',
                'title' => 'Cooperativa Central de Economia e Crédito Mutuo das Unicreds'
            ],
            [
                'code'  => '089-2',
                'title' => 'Cooperativa de Crédito Rural da Região de Mogiana'
            ],
            [
                'code'  => '087-6',
                'title' => 'Cooperativa Unicred Central Santa Catarina'
            ],
            [
                'code'  => '098-1',
                'title' => 'Credicorol Cooperativa de Crédito Rural'
            ],
            [
                'code'  => '487',
                'title' => 'Deutsche Bank S.A. - Banco Alemão'
            ],
            [
                'code'  => '751',
                'title' => 'Dresdner Bank Brasil S.A. - Banco Múltiplo'
            ],
            [
                'code'  => '64',
                'title' => 'Goldman Sachs do Brasil Banco Múltiplo S.A.'
            ],
            [
                'code'  => '62',
                'title' => 'Hipercard Banco Múltiplo S.A.'
            ],
            [
                'code'  => '399',
                'title' => 'HSBC Bank Brasil S.A. - Banco Múltiplo'
            ],
            [
                'code'  => '168',
                'title' => 'HSBC Finance (Brasil) S.A. - Banco Múltiplo'
            ],
            [
                'code'  => '492',
                'title' => 'ING Bank N.V.'
            ],
            [
                'code'  => '652',
                'title' => 'Itaú Unibanco Holding S.A.'
            ],
            [
                'code'  => '341',
                'title' => 'Itaú Unibanco S.A.'
            ],
            [
                'code'  => '79',
                'title' => 'JBS Banco S.A.'
            ],
            [
                'code'  => '488',
                'title' => 'JPMorgan Chase Bank'
            ],
            [
                'code'  => '14',
                'title' => 'Natixis Brasil S.A. Banco Múltiplo'
            ],
            [
                'code'  => '753',
                'title' => 'NBC Bank Brasil S.A. - Banco Múltiplo'
            ],
            [
                'code'  => '086-8',
                'title' => 'OBOE Crédito Financiamento e Investimento S.A.'
            ],
            [
                'code'  => '254',
                'title' => 'Paraná Banco S.A.'
            ],
            [
                'code'  => '409',
                'title' => 'UNIBANCO - União de Bancos Brasileiros S.A.'
            ],
            [
                'code'  => '230',
                'title' => 'Unicard Banco Múltiplo S.A.'
            ],
            [
                'code'  => '091-4',
                'title' => 'Unicred Central do Rio Grande do Sul'
            ],
            [
                'code'  => '84',
                'title' => 'Unicred Norte do Paraná'
            ],
        ];

        DB::table('banks')->insert($data);
    }
}