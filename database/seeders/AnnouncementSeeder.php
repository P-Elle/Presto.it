<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // $faker = Faker::create();
        // foreach (range(1,100) as $index) {
        //     Announcement::insert([
        //         'user_id' => $faker->numberBetween(1, 2),
        //         'is_accepted'=> $faker->numberBetween(0, 1),
        //         'category_id' => $faker->numberBetween(1, 9),
        //         'title' => 'Titolo annuncio n. ' . $faker->numberBetween(0, 100),
        //         'description' => $faker->paragraph(),
        //         'price' => $faker->randomFloat(2, 1, 100),
        //         'created_at' => $faker->date('Y_m_d'),
        //         'updated_at' => now()
        //     ]);
        // }

        
        Announcement::create([
            'id' => 1,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 7,
            'title' => 'Men\'s Casual T-Shirt',
            'description' => 'Slim-fitting style, contrast raglan long sleeve, three-button henley placket, light weight & soft fabric for breathable and comfortable wearing. And Solid stitched shirts with round neck made for durability and a great fit for casual fashion wear and diehard baseball fans. The Henley style round neckline includes a three-button placket.',
            'price' => 22.50,
            'image' => 'https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);


        Announcement::create([
            'id' => 2,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 7,
            'title' => 'Men\'s Cotton Jacket',
            'description' => 'great outerwear jackets for Spring/Autumn/Winter, suitable for many occasions, such as working, hiking, camping, mountain/rock climbing, cycling, traveling or other outdoors.',
            'price' => 55.99,
            'image' => 'https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 3,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 7,
            'title' => 'Women\'s Short Sleeve T-shirt',
            'description' => '100% Polyester, Machine wash, 100% cationic polyester interlock, Machine Wash & Pre Shrunk for a Great Fit, Lightweight, roomy and highly breathable with moisture wicking fabric which helps to keep moisture away, Soft Lightweight Fabric with comfortable V-neck collar and a slimmer fit, delivers a sleek, more feminine silhouette and Added Comfort',
            'price' => 7.95,
            'image' => 'https://fakestoreapi.com/img/51eg55uWmdL._AC_UX679_.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 4,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 2,
            'title' => 'SanDisk SSD PLUS',
            'description' => '1TB Internal SSD - SATA III 6 Gb/s - Easy upgrade for faster boot up, shutdown, application load and response (As compared to 5400 RPM SATA 2.5” hard drive; Based on published specifications and internal benchmarking tests using PCMark vantage scores) Boosts burst write performance, making it ideal for typical PC workloads The perfect balance of performance and reliability Read/write speeds of up to 535MB/s/450MB/s (Based on internal testing; Performance may vary depending upon drive capacity, host device, OS and application',
            'price' => 109.00,
            'image' => 'https://fakestoreapi.com/img/61U7T1koQqL._AC_SX679_.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 5,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 2,
            'title' => 'WD 4TB Gaming Drive',
            'description' => 'Works with Playstation 4 Portable External Hard Drive - Expand your PS4 gaming experience, Play anywhere Fast and easy, setup Sleek design with high capacity, 3-year manufacturer\'s limited warranty',
            'price' => 114.00,
            'image' => 'https://fakestoreapi.com/img/61mtL65D4cL._AC_SX679_.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 6,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Vespa Primavera 125cc',
            'description' => 'La Vespa Primavera 125cc è un\'icona italiana nel mondo delle due ruote. Questo modello usato è in ottime condizioni, con una potenza perfetta per gli spostamenti urbani. Il design retrò e la maneggevolezza la rendono la scelta ideale per chi cerca un mezzo di trasporto classico ma sempre attuale.',
            'price' => 2.500,
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Facidmoto.ch%2Fcms%2Fsites%2Fdefault%2Ffiles%2Fimg%2Fepsilon%2Fv%2Fvespa_primavera_125_abs_12_blue.jpg&f=1&nofb=1&ipt=1ae90b061873a772b29abfffad84312e0043329670952648cad73f497330f92f&ipo=images',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 7,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Mazda MX-5 Miata',
            'description' => 'La Mazda MX-5 Miata è una roadster sportiva iconica, perfetta per gli appassionati di guida. Questo modello usato è in ottime condizioni, con un motore potente e un cambio manuale preciso. La trazione posteriore la rende divertente da guidare in ogni situazione. Se sei alla ricerca di un\'esperienza di guida emozionante, questa è l\'auto per te.',
            'price' => 15.000,
            'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fs1.cdn.autoevolution.com%2Fimages%2Fgallery%2FMAZDA-MX-5---Miata-5280_128.jpeg&f=1&nofb=1&ipt=07c0521b04aee4f0a0a8cc1e28c93209346321317841263006b9478ed6939b35&ipo=images',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 8,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Go Kart 200cc',
            'description' => 'Questo go kart nuovo è perfetto per chi cerca emozioni forti. Il potente motore a 4 tempi e il cambio automatico CVT garantiscono prestazioni eccezionali, mentre il telaio tubolare in acciaio e i freni a disco idraulici assicurano sicurezza e stabilità. Un\'esperienza di guida unica ad un prezzo accessibile.',
            'price' => 2.000,
            'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimage.made-in-china.com%2F2f0j00zBsQPyhCEkgj%2F200CC-Go-Kart-SX-G1101-1A-.jpg&f=1&nofb=1&ipt=13168544807605bc6823a5c0f17db2e75e576418dfb1a304275076728379d092&ipo=images',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 9,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 3,
            'title' => 'Friggitrice ad aria Philips',
            'description' => 'Capacità 1.2 kg, tecnologia Twin TurboStar, temperature regolabili, cestello antiaderente, lavabile in lavastoviglie. Questa friggitrice ad aria Philips usata poche volte è la soluzione perfetta per chi vuole godersi il gusto del cibo fritto senza l\'eccesso di olio. La tecnologia Twin TurboStar garantisce una cottura uniforme e croccante, mentre il cestello antiaderente e la possibilità di regolare la temperatura rendono facile la preparazione di una vasta gamma di cibi. Lavabile in lavastoviglie per una facile pulizia.',
            'price' => 50.00,
            'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.zPReBcCBlFJucBSalMPo3gHaHa%26pid%3DApi&f=1&ipt=4e7687c9f15647f1027bf3e648890328c4ddf26a945a42497f2f08a404aa48e7&ipo=images',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 10,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 3,
            'title' => 'Lavatrice LG Inverter Direct Drive',
            'description' => 'Carico 8 kg, classe energetica A+++, tecnologia Inverter Direct Drive, 6 Motion Direct Drive. Questa lavatrice LG usata pochi mesi è la scelta ideale per chi cerca un prodotto affidabile ed efficiente. La tecnologia Inverter Direct Drive e 6 Motion Direct Drive garantiscono un lavaggio delicato e performante, mentre la capacità di 8 kg permette di lavare grandi quantità di bucato in una sola volta. Con classe energetica A+++ e pochi mesi di utilizzo, è un\'occasione imperdibile.',
            'price' => 300.00,
            'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.tunisianet.com.tn%2F88990-large%2Fmachine-a-laver-lg-105-kg-6-motion-dd-inverter-direct-drive.jpg&f=1&nofb=1&ipt=c645cf5165cc6c10dda80d7601fa42669a3ea1cc78d4054ee43e2a3bbf752e11&ipo=images',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 11,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 3,
            'title' => 'Deumidificatore Trotec',
            'description' => 'TTK 70 S - Capacità di deumidificazione 20 litri/giorno, display digitale, funzione timer, filtro dell\'aria, modalità silenziosa. Questo deumidificatore Trotec è completamente nuovo e mai utilizzato. Con una capacità di deumidificazione di 20 litri al giorno, è in grado di mantenere gli ambienti asciutti e salubri. Il display digitale e la funzione timer lo rendono facile da usare, mentre il filtro dell\'aria e la modalità silenziosa lo rendono un prodotto versatile e discreto. Il prezzo di 250 euro lo rende un\'ottima scelta per chi cerca un prodotto di alta qualità a un prezzo accessibile.',
            'price' => 250.00,
            'image' => 'https://www.iorisparmioenergia.com/image/cache/data/00%20-%20Immagini%20articoli/01%20-RISPARMIO%20ENERGETICO/1.28%20-%20DEUMIDIFICATORI/trotec/TTK70S-SHOPPING-600x600.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 12,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 4,
            'title' => 'The silent Waters',
            'description' => 'di Brittainy C. Cherry, giallo, copertina rigida, 380 pagine - The silent Waters è un thriller psicologico che ti terrà col fiato sospeso fino all\'ultima pagina. Con una copertina rigida e 380 pagine, questo libro usato ma in ottime condizioni ti regalerà ore di intrattenimento a un prezzo imbattibile.',
            'price' => 8.00,
            'image' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1650395661i/60846964.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 13,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 4,
            'title' => 'I promessi Sposi',
            'description' => 'di Alessandro Manzoni, Copertina rigida, edizione critica con note e apparati - Un capolavoro della letteratura italiana che racconta la storia d\'amore tra Renzo e Lucia, ambientato nel Seicento. ',
            'price' => 20.00,
            'image' => 'https://img.ibs.it/images/9788844039653_0_0_2146_75.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 14,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 4,
            'title' => 'Il Signore degli Anelli',
            'description' => 'Versione integrale in lingua italiana, copertina rigida, illustrazioni a colori - Questa edizione speciale di "Il Signore degli Anelli" è la scelta perfetta per gli appassionati di Tolkien e per coloro che amano collezionare edizioni uniche di libri classici.',
            'price' => 50.00,
            'image' => 'https://image.anobii.com/images/0/0/2/25/258/2582/012582fdf235354dcf.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 15,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 5,
            'title' => 'The Legend of Zelda: Majora\'s Mask',
            'description' => 'Gioco per la console Nintendo 64 - Un\'avventura epica in cui Link deve salvare il mondo di Termina da una luna minacciosa.',
            'price' => 50.00,
            'image' => 'https://www.lukiegames.com/assets/images/N64/n64_the_legend_zelda_majoras_mask_noho_p_ctp9bx.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 16,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 5,
            'title' => 'Picross: Lord of the Nazarick',
            'description' => 'Videogioco di logica, stile puzzle, per Nintendo Switch - Risolvi i puzzle di Picross in un\'avventura epica con i personaggi di Overlord.',
            'price' => 29.99,
            'image' => 'https://images.nintendolife.com/a0aed52bc7599/picross-lord-of-the-nazarick-cover.cover_large.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 17,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 5,
            'title' => 'Yoku\'s Island Express',
            'description' => 'Esplora un\'isola tropicale in questo originale mix tra pinball e platform con grafica accattivante e colonna sonora coinvolgente.',
            'price' => 19.99,
            'image' => 'https://oyster.ignimgs.com/mediawiki/apis.ign.com/yokus-island-express/f/fe/Yokus-island-express---button-1527715086181.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 18,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 6,
            'title' => 'Tavolo da ping pong',
            'description' => 'Dimensioni standard, superficie in MDF, telaio in acciaio, ruote per trasporto - Tavolo da ping pong perfetto per divertirsi con amici e famiglia. Robusto e facile da trasportare grazie alle ruote integrate.',
            'price' => 200.00,
            'image' => 'https://contents.mediadecathlon.com/p1761195/k$3fb93d31bc7b6a3730a77f561a452652/sq/Tavolo+ping+pong+PPT+500+outdoor+blu.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 19,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 6,
            'title' => 'Vogatore Fitness',
            'description' => 'Vogatore pieghevole con regolazione della resistenza a 10 livelli e display LCD -  Il vogatore fitness è perfetto per un allenamento completo a casa, occupa poco spazio grazie alla sua chiusura compatta.',
            'price' => 399.99,
            'image' => 'https://www.cyclettetapisroulant.it/wp-content/uploads/2020/04/vogatore-jk-fitness.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 20,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 6,
            'title' => 'Trampolino elastico',
            'description' => 'Dimensioni: 3 metri di diametro, altezza 1,2 metri. Materiale: struttura in acciaio inossidabile, tappeto elastico in PVC. Capacità di carico: fino a 120 kg. Divertiti con amici e familiari con questo trampolino resistente e sicuro. Fornisce ore di divertimento acquatico.',
            'price' => 150.00,
            'image' => 'https://tappeto-elastico.it/21737-thickbox_default/trampolino-elastico-interrato-mirage-360.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 21,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 8,
            'title' => 'Samsung Galaxy S21',
            'description' => 'Schermo AMOLED da 6.2", fotocamera da 64 MP, processore Snapdragon 888. Un telefono Android di ultima generazione, con prestazioni elevate e una fotocamera di alta qualità.',
            'price' => 799.00,
            'image' => 'https://i.expansys.net/img/b/330000/samsung-galaxy-s21-5g-dual-sim-sm-g9960.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 22,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 8,
            'title' => 'Motorola Moto G9 Power',
            'description' => 'Schermo 6,8" HD+, processore Octa-Core, 4GB RAM, 128GB di storage, tripla fotocamera. Potente e versatile, con una grande batteria per un\'esperienza senza interruzioni.',
            'price' => 169.00,
            'image' => 'https://www.elgiganten.se/image/dv_web_D180001002596336/236596/motorola-moto-g9-power-smartphone-4128gb-metallic-sage.jpg?$fullsize$',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 23,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 8,
            'title' => 'Sony Xperia 5 III',
            'description' => 'Display OLED 6,1 pollici, processore Qualcomm Snapdragon 888, fotocamera triple 12MP, batteria 4500mAh. Telefono Sony con prestazioni elevate, ottima fotocamera e design elegante.',
            'price' => 799.00,
            'image' => 'https://c2.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2021/04/sony-xperia-1-iii-frandroid-2021.png?resize=350',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 24,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 9,
            'title' => 'Armadio in legno massello',
            'description' => 'Dimensioni: 150x200x60 cm, con ante scorrevoli e ripiani interni. Armadio spazioso e robusto in legno massello con ante scorrevoli e ripiani interni. Perfetto per la camera da letto.',
            'price' => 300.00,
            'image' => 'https://img.edilportale.com/products/NOTE-Vitamin-design-24944-vrel6615b591.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 25,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 9,
            'title' => 'Letto a Castello Moderno',
            'description' => 'Struttura in legno massello, due letti singoli sovrapposti, scaletta inclusa. Questo letto a castello moderno è perfetto per risparmiare spazio in una stanza con due bambini. La struttura in legno massello è robusta e resistente, mentre la scaletta inclusa rende facile salire e scendere dal letto superiore.',
            'price' => 500.00,
            'image' => 'https://img.edilportale.com/products/prodotti-187626-rel92375cbf86e440739b14d8265ebbc7e3.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Announcement::create([
            'id' => 26,
            'is_accepted' => 1,
            'user_id' => 1,
            'category_id' => 9,
            'title' => 'Porta in legno',
            'description' => 'Dimensioni standard, maniglie e cerniere incluse. Porta in legno massello di qualità, perfetta per rinnovare la tua casa con un tocco di eleganza.',
            'price' => 150.00,
            'image' => 'https://i.pinimg.com/originals/a0/d3/34/a0d33496bd41e3e147c5a1372164cca5.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

