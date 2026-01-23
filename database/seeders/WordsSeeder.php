<?php

namespace Database\Seeders;

use App\Models\Word;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WordsSeeder extends Seeder
{

    protected $words = [
        [
            "id" => "1",
            "word" => "alvíssaras",
            "category" => "substantivo",
            "meaning" => "Recompensa ou anúncio de boas notícias",
            "synonymous" => [
                "boa-nova",
                "notícia",
                "recompensa"
            ]
        ],
        [
            "id" => "2",
            "word" => "aceso",
            "category" => "adjetivo",
            "meaning" => "Que demonstra intensidade ou vivacidade",
            "synonymous" => [
                "intenso",
                "vivaz",
                "ardente"
            ]
        ],
        [
            "id" => "3",
            "word" => "contumaz",
            "category" => "adjetivo",
            "meaning" => "Que insiste ou persiste em algo",
            "synonymous" => [
                "persistente",
                "teimoso",
                "reincidente"
            ]
        ],
        [
            "id" => "4",
            "word" => "inefável",
            "category" => "adjetivo",
            "meaning" => "Que não pode ser expresso por palavras",
            "synonymous" => [
                "indizível",
                "inexprimível",
                "impronunciável"
            ]
        ],
        [
            "id" => "5",
            "word" => "lancinante",
            "category" => "adjetivo",
            "meaning" => "Que causa dor intensa e contínua",
            "synonymous" => [
                "dilacerante",
                "agudo",
                "doloroso"
            ]
        ],
        [
            "id" => "6",
            "word" => "prolixo",
            "category" => "adjetivo",
            "meaning" => "Que fala ou escreve em excesso",
            "synonymous" => [
                "verboso",
                "excessivo",
                "demorado"
            ]
        ],
        [
            "id" => "7",
            "word" => "efêmero",
            "category" => "adjetivo",
            "meaning" => "Que dura pouco tempo",
            "synonymous" => [
                "passageiro",
                "transitório",
                "momentâneo"
            ]
        ],
        [
            "id" => "8",
            "word" => "escusa",
            "category" => "substantivo",
            "meaning" => "Justificativa ou desculpa",
            "synonymous" => [
                "desculpa",
                "pretexto",
                "justificativa"
            ]
        ],
        [
            "id" => "9",
            "word" => "idiossincrasia",
            "category" => "substantivo",
            "meaning" => "Característica particular de comportamento ou personalidade",
            "synonymous" => [
                "peculiaridade",
                "singularidade",
                "traço"
            ]
        ],
        [
            "id" => "10",
            "word" => "verve",
            "category" => "substantivo",
            "meaning" => "Entusiasmo ou criatividade na expressão",
            "synonymous" => [
                "inspiração",
                "vivacidade",
                "talento"
            ]
        ],
        [
            "id" => "11",
            "word" => "astuto",
            "category" => "adjetivo",
            "meaning" => "Que age com inteligência e esperteza",
            "synonymous" => [
                "esperto",
                "ardiloso",
                "sagaz"
            ]
        ],
        [
            "id" => "12",
            "word" => "cândido",
            "category" => "adjetivo",
            "meaning" => "Que demonstra pureza ou ingenuidade",
            "synonymous" => [
                "ingênuo",
                "puro",
                "inocente"
            ]
        ],
        [
            "id" => "13",
            "word" => "desídia",
            "category" => "substantivo",
            "meaning" => "Falta de cuidado ou de empenho",
            "synonymous" => [
                "negligência",
                "desleixo",
                "indolência"
            ]
        ],
        [
            "id" => "14",
            "word" => "parcimônia",
            "category" => "substantivo",
            "meaning" => "Ato de usar algo com moderação",
            "synonymous" => [
                "moderação",
                "economia",
                "sobriedade"
            ]
        ],
        [
            "id" => "15",
            "word" => "tácito",
            "category" => "adjetivo",
            "meaning" => "Que não é expresso claramente, mas é entendido",
            "synonymous" => [
                "implícito",
                "subentendido",
                "silencioso"
            ]
        ],
        [
            "id" => "16",
            "word" => "alhear",
            "category" => "verbo",
            "meaning" => "Tornar alheio ou indiferente",
            "synonymous" => [
                "afastar",
                "desinteressar",
                "alienar"
            ]
        ],
        [
            "id" => "17",
            "word" => "hesitar",
            "category" => "verbo",
            "meaning" => "Demonstrar dúvida antes de agir",
            "synonymous" => [
                "duvidar",
                "vacilar",
                "titubear"
            ]
        ],
        [
            "id" => "18",
            "word" => "pernóstico",
            "category" => "adjetivo",
            "meaning" => "Que demonstra afetação ou falsa erudição",
            "synonymous" => [
                "presunçoso",
                "afetado",
                "pedante"
            ]
        ],
        [
            "id" => "19",
            "word" => "resignar",
            "category" => "verbo",
            "meaning" => "Aceitar algo sem resistência",
            "synonymous" => [
                "aceitar",
                "conformar-se",
                "submeter-se"
            ]
        ],
        [
            "id" => "20",
            "word" => "soturno",
            "category" => "adjetivo",
            "meaning" => "Que demonstra tristeza ou seriedade excessiva",
            "synonymous" => [
                "melancólico",
                "sombrio",
                "taciturno"
            ]
        ],
        [
            "id" => "21",
            "word" => "abstruso",
            "category" => "adjetivo",
            "meaning" => "Difícil de compreender",
            "synonymous" => [
                "obscuro",
                "complexo",
                "intricado"
            ]
        ],
        [
            "id" => "22",
            "word" => "acuidade",
            "category" => "substantivo",
            "meaning" => "Capacidade de perceber detalhes com precisão",
            "synonymous" => [
                "perspicácia",
                "agudeza",
                "clareza"
            ]
        ],
        [
            "id" => "23",
            "word" => "beligerante",
            "category" => "adjetivo",
            "meaning" => "Que demonstra disposição para conflito",
            "synonymous" => [
                "hostil",
                "combativo",
                "agressivo"
            ]
        ],
        [
            "id" => "24",
            "word" => "conjectura",
            "category" => "substantivo",
            "meaning" => "Suposição baseada em indícios",
            "synonymous" => [
                "hipótese",
                "suposição",
                "dedução"
            ]
        ],
        [
            "id" => "25",
            "word" => "dilapidar",
            "category" => "verbo",
            "meaning" => "Gastar ou destruir de forma irresponsável",
            "synonymous" => [
                "desperdiçar",
                "esbanjar",
                "dissipar"
            ]
        ],
        [
            "id" => "26",
            "word" => "eloquente",
            "category" => "adjetivo",
            "meaning" => "Que se expressa com clareza e persuasão",
            "synonymous" => [
                "expressivo",
                "persuasivo",
                "articulado"
            ]
        ],
        [
            "id" => "27",
            "word" => "fútil",
            "category" => "adjetivo",
            "meaning" => "Que não tem importância ou profundidade",
            "synonymous" => [
                "superficial",
                "vazio",
                "insignificante"
            ]
        ],
        [
            "id" => "28",
            "word" => "inócuo",
            "category" => "adjetivo",
            "meaning" => "Que não causa dano ou prejuízo",
            "synonymous" => [
                "inofensivo",
                "incuo",
                "inerte"
            ]
        ],
        [
            "id" => "29",
            "word" => "juízo",
            "category" => "substantivo",
            "meaning" => "Capacidade de avaliar ou decidir corretamente",
            "synonymous" => [
                "discernimento",
                "avaliação",
                "critério"
            ]
        ],
        [
            "id" => "30",
            "word" => "lascívia",
            "category" => "substantivo",
            "meaning" => "Desejo sexual excessivo",
            "synonymous" => [
                "luxúria",
                "sensualidade",
                "volúpia"
            ]
        ],
        [
            "id" => "31",
            "word" => "moroso",
            "category" => "adjetivo",
            "meaning" => "Que é lento ou demorado",
            "synonymous" => [
                "lento",
                "vagaroso",
                "arrastado"
            ]
        ],
        [
            "id" => "32",
            "word" => "neófito",
            "category" => "substantivo",
            "meaning" => "Pessoa iniciante em alguma atividade",
            "synonymous" => [
                "iniciante",
                "novato",
                "principiante"
            ]
        ],
        [
            "id" => "33",
            "word" => "obstinado",
            "category" => "adjetivo",
            "meaning" => "Que não desiste facilmente",
            "synonymous" => [
                "teimoso",
                "persistente",
                "determinado"
            ]
        ],
        [
            "id" => "34",
            "word" => "prescindir",
            "category" => "verbo",
            "meaning" => "Decidir não utilizar algo",
            "synonymous" => [
                "dispensar",
                "abdicar",
                "renunciar"
            ]
        ],
        [
            "id" => "35",
            "word" => "quimera",
            "category" => "substantivo",
            "meaning" => "Ideia ou sonho impossível de realizar",
            "synonymous" => [
                "ilusão",
                "fantasia",
                "utopia"
            ]
        ],
        [
            "id" => "36",
            "word" => "reticente",
            "category" => "adjetivo",
            "meaning" => "Que evita se expressar claramente",
            "synonymous" => [
                "reservado",
                "evasivo",
                "cauteloso"
            ]
        ],
        [
            "id" => "37",
            "word" => "subjacente",
            "category" => "adjetivo",
            "meaning" => "Que está implícito ou escondido",
            "synonymous" => [
                "implícito",
                "latente",
                "oculto"
            ]
        ],
        [
            "id" => "38",
            "word" => "temerário",
            "category" => "adjetivo",
            "meaning" => "Que age sem cautela ou prudência",
            "synonymous" => [
                "imprudente",
                "audacioso",
                "arriscado"
            ]
        ],
        [
            "id" => "39",
            "word" => "usura",
            "category" => "substantivo",
            "meaning" => "Cobrança excessiva de juros",
            "synonymous" => [
                "agiotagem",
                "exploração",
                "ganância"
            ]
        ],
        [
            "id" => "40",
            "word" => "zeloso",
            "category" => "adjetivo",
            "meaning" => "Que demonstra cuidado e dedicação",
            "synonymous" => [
                "cuidadoso",
                "atencioso",
                "dedicado"
            ]
        ],
        [
            "id" => "41",
            "word" => "afável",
            "category" => "adjetivo",
            "meaning" => "Que demonstra gentileza e cordialidade",
            "synonymous" => [
                "amável",
                "cordial",
                "gentil"
            ]
        ],
        [
            "id" => "42",
            "word" => "alvitre",
            "category" => "substantivo",
            "meaning" => "Opinião ou sugestão apresentada",
            "synonymous" => [
                "opinião",
                "sugestão",
                "parecer"
            ]
        ],
        [
            "id" => "43",
            "word" => "anátema",
            "category" => "substantivo",
            "meaning" => "Algo considerado indigno ou condenado",
            "synonymous" => [
                "condenação",
                "maldição",
                "repúdio"
            ]
        ],
        [
            "id" => "44",
            "word" => "assaz",
            "category" => "advérbio",
            "meaning" => "Em quantidade suficiente ou elevada",
            "synonymous" => [
                "bastante",
                "muito",
                "suficientemente"
            ]
        ],
        [
            "id" => "45",
            "word" => "cizânia",
            "category" => "substantivo",
            "meaning" => "Discórdia ou desavença provocada",
            "synonymous" => [
                "intriga",
                "discórdia",
                "conflito"
            ]
        ],
        [
            "id" => "46",
            "word" => "corolário",
            "category" => "substantivo",
            "meaning" => "Conclusão natural decorrente de algo",
            "synonymous" => [
                "consequência",
                "resultado",
                "desfecho"
            ]
        ],
        [
            "id" => "47",
            "word" => "dissensão",
            "category" => "substantivo",
            "meaning" => "Falta de concordância ou desacordo",
            "synonymous" => [
                "divergência",
                "desacordo",
                "discordância"
            ]
        ],
        [
            "id" => "48",
            "word" => "eximir",
            "category" => "verbo",
            "meaning" => "Liberar de obrigação ou responsabilidade",
            "synonymous" => [
                "dispensar",
                "isentar",
                "desobrigar"
            ]
        ],
        [
            "id" => "49",
            "word" => "frugal",
            "category" => "adjetivo",
            "meaning" => "Que vive com simplicidade e moderação",
            "synonymous" => [
                "simples",
                "moderado",
                "sóbrio"
            ]
        ],
        [
            "id" => "50",
            "word" => "gregário",
            "category" => "adjetivo",
            "meaning" => "Que gosta de viver em grupo",
            "synonymous" => [
                "sociável",
                "coletivo",
                "social"
            ]
        ],
        [
            "id" => "51",
            "word" => "hesitante",
            "category" => "adjetivo",
            "meaning" => "Que demonstra indecisão",
            "synonymous" => [
                "indeciso",
                "vacilante",
                "inseguro"
            ]
        ],
        [
            "id" => "52",
            "word" => "insólito",
            "category" => "adjetivo",
            "meaning" => "Que foge do comum ou do habitual",
            "synonymous" => [
                "incomum",
                "inusitado",
                "estranho"
            ]
        ],
        [
            "id" => "53",
            "word" => "jactância",
            "category" => "substantivo",
            "meaning" => "Atitude de quem se vangloria",
            "synonymous" => [
                "ostentação",
                "vaidade",
                "arrogância"
            ]
        ],
        [
            "id" => "54",
            "word" => "lídimo",
            "category" => "adjetivo",
            "meaning" => "Que é verdadeiro ou legítimo",
            "synonymous" => [
                "autêntico",
                "genuíno",
                "legítimo"
            ]
        ],
        [
            "id" => "55",
            "word" => "magnânimo",
            "category" => "adjetivo",
            "meaning" => "Que demonstra grandeza de espírito",
            "synonymous" => [
                "generoso",
                "nobre",
                "altruísta"
            ]
        ],
        [
            "id" => "56",
            "word" => "nóxio",
            "category" => "adjetivo",
            "meaning" => "Que é prejudicial ou nocivo",
            "synonymous" => [
                "nocivo",
                "danoso",
                "pernicioso"
            ]
        ],
        [
            "id" => "57",
            "word" => "opróbrio",
            "category" => "substantivo",
            "meaning" => "Desonra ou vergonha pública",
            "synonymous" => [
                "vergonha",
                "desonra",
                "ignomínia"
            ]
        ],
        [
            "id" => "58",
            "word" => "pífio",
            "category" => "adjetivo",
            "meaning" => "De qualidade muito baixa",
            "synonymous" => [
                "medíocre",
                "ruim",
                "insignificante"
            ]
        ],
        [
            "id" => "59",
            "word" => "querela",
            "category" => "substantivo",
            "meaning" => "Discussão ou conflito prolongado",
            "synonymous" => [
                "disputa",
                "contenda",
                "litígio"
            ]
        ],
        [
            "id" => "60",
            "word" => "vetusto",
            "category" => "adjetivo",
            "meaning" => "Muito antigo ou envelhecido",
            "synonymous" => [
                "antigo",
                "arcaico",
                "ultrapassado"
            ]
        ],
        [
            "id" => "61",
            "word" => "abnegado",
            "category" => "adjetivo",
            "meaning" => "Que se sacrifica em benefício de outros",
            "synonymous" => [
                "altruísta",
                "dedicado",
                "desprendido"
            ]
        ],
        [
            "id" => "62",
            "word" => "balbúrdia",
            "category" => "substantivo",
            "meaning" => "Grande confusão ou desordem",
            "synonymous" => [
                "tumulto",
                "confusão",
                "desordem"
            ]
        ],
        [
            "id" => "63",
            "word" => "circunspecto",
            "category" => "adjetivo",
            "meaning" => "Que age com prudência e seriedade",
            "synonymous" => [
                "prudente",
                "cauteloso",
                "reservado"
            ]
        ],
        [
            "id" => "64",
            "word" => "deleitar",
            "category" => "verbo",
            "meaning" => "Proporcionar prazer ou satisfação",
            "synonymous" => [
                "agradar",
                "encantar",
                "satisfazer"
            ]
        ],
        [
            "id" => "65",
            "word" => "escarnecer",
            "category" => "verbo",
            "meaning" => "Zombar ou ridicularizar alguém",
            "synonymous" => [
                "zombar",
                "ridicularizar",
                "satirizar"
            ]
        ],
        [
            "id" => "66",
            "word" => "fastígio",
            "category" => "substantivo",
            "meaning" => "Ponto mais alto ou ápice",
            "synonymous" => [
                "ápice",
                "cume",
                "clímax"
            ]
        ],
        [
            "id" => "67",
            "word" => "hediondo",
            "category" => "adjetivo",
            "meaning" => "Que causa horror ou repulsa",
            "synonymous" => [
                "repugnante",
                "horrível",
                "abominável"
            ]
        ],
        [
            "id" => "68",
            "word" => "incólume",
            "category" => "adjetivo",
            "meaning" => "Que não sofreu dano",
            "synonymous" => [
                "ileso",
                "intacto",
                "indene"
            ]
        ],
        [
            "id" => "69",
            "word" => "jubiloso",
            "category" => "adjetivo",
            "meaning" => "Que demonstra grande alegria",
            "synonymous" => [
                "contente",
                "radiante",
                "festivo"
            ]
        ],
        [
            "id" => "70",
            "word" => "lúgubre",
            "category" => "adjetivo",
            "meaning" => "Que inspira tristeza ou melancolia",
            "synonymous" => [
                "sombrio",
                "melancólico",
                "fúnebre"
            ]
        ],
        [
            "id" => "71",
            "word" => "meticuloso",
            "category" => "adjetivo",
            "meaning" => "Que presta atenção extrema aos detalhes",
            "synonymous" => [
                "minucioso",
                "cuidadoso",
                "rigoroso"
            ]
        ],
        [
            "id" => "72",
            "word" => "negligenciar",
            "category" => "verbo",
            "meaning" => "Deixar de dar a devida atenção",
            "synonymous" => [
                "descuidar",
                "omitir",
                "ignorar"
            ]
        ],
        [
            "id" => "73",
            "word" => "obnubilado",
            "category" => "adjetivo",
            "meaning" => "Com a mente confusa ou turvada",
            "synonymous" => [
                "confuso",
                "perturbado",
                "entorpecido"
            ]
        ],
        [
            "id" => "74",
            "word" => "peremptório",
            "category" => "adjetivo",
            "meaning" => "Que é definitivo ou não admite contestação",
            "synonymous" => [
                "categórico",
                "definitivo",
                "decisivo"
            ]
        ],
        [
            "id" => "75",
            "word" => "quiescente",
            "category" => "adjetivo",
            "meaning" => "Que está em repouso ou inativo",
            "synonymous" => [
                "inativo",
                "latente",
                "adormecido"
            ]
        ],
        [
            "id" => "76",
            "word" => "recrudescente",
            "category" => "adjetivo",
            "meaning" => "Que volta a se intensificar",
            "synonymous" => [
                "agravado",
                "intensificado",
                "renascente"
            ]
        ],
        [
            "id" => "77",
            "word" => "sisudo",
            "category" => "adjetivo",
            "meaning" => "Que demonstra seriedade excessiva",
            "synonymous" => [
                "sério",
                "grave",
                "austero"
            ]
        ],
        [
            "id" => "78",
            "word" => "transeunte",
            "category" => "substantivo",
            "meaning" => "Pessoa que passa por um local",
            "synonymous" => [
                "passante",
                "pedestre",
                "viandante"
            ]
        ],
        [
            "id" => "79",
            "word" => "ubíquo",
            "category" => "adjetivo",
            "meaning" => "Que está presente em toda parte",
            "synonymous" => [
                "onipresente",
                "difuso",
                "generalizado"
            ]
        ],
        [
            "id" => "80",
            "word" => "volátil",
            "category" => "adjetivo",
            "meaning" => "Que muda com facilidade ou é instável",
            "synonymous" => [
                "instável",
                "mutável",
                "inconstante"
            ]
        ],
        [
            "id" => "81",
            "word" => "acintoso",
            "category" => "adjetivo",
            "meaning" => "Que ofende ou provoca deliberadamente",
            "synonymous" => [
                "provocador",
                "insolente",
                "desafiador"
            ]
        ],
        [
            "id" => "82",
            "word" => "belicoso",
            "category" => "adjetivo",
            "meaning" => "Que tem inclinação para conflitos ou guerras",
            "synonymous" => [
                "combativo",
                "hostil",
                "agressivo"
            ]
        ],
        [
            "id" => "83",
            "word" => "conciso",
            "category" => "adjetivo",
            "meaning" => "Que se expressa de forma breve e clara",
            "synonymous" => [
                "breve",
                "sucinto",
                "objetivo"
            ]
        ],
        [
            "id" => "84",
            "word" => "dissipar",
            "category" => "verbo",
            "meaning" => "Fazer desaparecer gradualmente ou desperdiçar",
            "synonymous" => [
                "dispersar",
                "desperdiçar",
                "diluir"
            ]
        ],
        [
            "id" => "85",
            "word" => "escorreito",
            "category" => "adjetivo",
            "meaning" => "Que está correto e bem elaborado",
            "synonymous" => [
                "correto",
                "impecável",
                "adequado"
            ]
        ],
        [
            "id" => "86",
            "word" => "facínora",
            "category" => "substantivo",
            "meaning" => "Pessoa que comete crimes graves",
            "synonymous" => [
                "criminoso",
                "malfeitor",
                "bandido"
            ]
        ],
        [
            "id" => "87",
            "word" => "galhardo",
            "category" => "adjetivo",
            "meaning" => "Que demonstra elegância ou bravura",
            "synonymous" => [
                "elegante",
                "altivo",
                "valente"
            ]
        ],
        [
            "id" => "88",
            "word" => "hábil",
            "category" => "adjetivo",
            "meaning" => "Que demonstra destreza ou competência",
            "synonymous" => [
                "competente",
                "destro",
                "capaz"
            ]
        ],
        [
            "id" => "89",
            "word" => "impávido",
            "category" => "adjetivo",
            "meaning" => "Que não demonstra medo",
            "synonymous" => [
                "destemido",
                "intrépido",
                "corajoso"
            ]
        ],
        [
            "id" => "90",
            "word" => "jocoso",
            "category" => "adjetivo",
            "meaning" => "Que demonstra humor ou graça",
            "synonymous" => [
                "bem-humorado",
                "irônico",
                "brincalhão"
            ]
        ],
        [
            "id" => "91",
            "word" => "leniente",
            "category" => "adjetivo",
            "meaning" => "Que é indulgente ou tolerante em excesso",
            "synonymous" => [
                "tolerante",
                "indulgente",
                "complacente"
            ]
        ],
        [
            "id" => "92",
            "word" => "mórbido",
            "category" => "adjetivo",
            "meaning" => "Relacionado aoent ou que desperta fascínio pelo sofrimento",
            "synonymous" => [
                "doentio",
                "sombrio",
                "macabro"
            ]
        ],
        [
            "id" => "93",
            "word" => "nebuloso",
            "category" => "adjetivo",
            "meaning" => "Que não é claro ou definido",
            "synonymous" => [
                "obscuro",
                "confuso",
                "impreciso"
            ]
        ],
        [
            "id" => "94",
            "word" => "opulento",
            "category" => "adjetivo",
            "meaning" => "Que demonstra grande riqueza ou abundância",
            "synonymous" => [
                "rico",
                "abundante",
                "faustoso"
            ]
        ],
        [
            "id" => "95",
            "word" => "prolatar",
            "category" => "verbo",
            "meaning" => "Declarar ou enunciar formalmente",
            "synonymous" => [
                "declarar",
                "pronunciar",
                "enunciar"
            ]
        ],
        [
            "id" => "96",
            "word" => "quimérico",
            "category" => "adjetivo",
            "meaning" => "Que é fantasioso ou irreal",
            "synonymous" => [
                "ilusório",
                "irreal",
                "fantástico"
            ]
        ],
        [
            "id" => "97",
            "word" => "resiliente",
            "category" => "adjetivo",
            "meaning" => "Que consegue se adaptar e superar adversidades",
            "synonymous" => [
                "adaptável",
                "resistente",
                "flexível"
            ]
        ],
        [
            "id" => "98",
            "word" => "sibilino",
            "category" => "adjetivo",
            "meaning" => "Que é enigmático ou difícil de interpretar",
            "synonymous" => [
                "enigmático",
                "obscuro",
                "misterioso"
            ]
        ],
        [
            "id" => "99",
            "word" => "tácito",
            "category" => "adjetivo",
            "meaning" => "Que é entendido sem ser declarado",
            "synonymous" => [
                "implícito",
                "subentendido",
                "silencioso"
            ]
        ],
        [
            "id" => "100",
            "word" => "verossímil",
            "category" => "adjetivo",
            "meaning" => "Que parece verdadeiro ou plausível",
            "synonymous" => [
                "plausível",
                "crível",
                "provável"
            ]
        ]
    ];

    public function run(): void
    {
        foreach ($this->words as $word) {
            Word::create([
                'word' => $word['word'],
                'category' => $word['category'],
                'meaning' => $word['meaning'],
                'synonymous' => $word['synonymous'],
            ]);
        }
    }
}
