<?php 

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plant;

class PlantSeeder extends Seeder
{
    public function run(): void
    {
        $aglaonema = Plant::create([
            'name' => 'Aglaonema',
                'image' => 'aglaonema.jpg',
                'watering_frequency' => 'Once a week',
                'fertilizer' => 'Once a month',
                'humidity' => 60,
                'sunlight' => 'Indirect light',
                'temperature' => '18-24°C',
                'pet_friendly' => false,
                'description' => 'Aglaonema is a low-maintenance plant with beautiful leaves.',
                'parent_id' => null
        ]);

        $alocasia = Plant::create([
            'name' => 'Alocasia',
                'image' => 'alocasia.jpg',
                'watering_frequency' => 'Twice a week',
                'fertilizer' => 'Every two weeks',
                'humidity' => 70,
                'sunlight' => 'Bright to partial shade',
                'temperature' => '20-26°C',
                'pet_friendly' => false,
                'description' => 'Alocasia has large leaves and requires high humidity.',
                'parent_id' => null
        ]);

        $anthurium = Plant::create([
            'name' => 'Anthurium',
                'image' => 'anthurium.jpg',
                'watering_frequency' => 'Once a week',
                'fertilizer' => 'Once a month',
                'humidity' => 60,
                'sunlight' => 'Diffused light',
                'temperature' => '18-25°C',
                'pet_friendly' => false,
                'description' => 'Anthurium is known for its beautiful flowers and glossy leaves.',
                'parent_id' => null
        ]);

        $begonia = Plant::create([
            'name' => 'Begonia',
            'image' => 'begonia.jpg',
            'watering_frequency' => 'Twice a week',
            'fertilizer' => 'Every two weeks',
            'humidity' => 60,
            'sunlight' => 'Partial shade',
            'temperature' => '18-24°C',
            'pet_friendly' => false,
            'description' => 'Begonia is popular for its colorful flowers and leaves.',
            'parent_id' => null
        ]);

        $bromelia = Plant::create([
            'name' => 'Bromeliad',
            'image' => 'bromelia.jpg',
            'watering_frequency' => 'Once every two weeks',
            'fertilizer' => 'Once a month',
            'humidity' => 50,
            'sunlight' => 'Bright light',
            'temperature' => '20-28°C',
            'pet_friendly' => true,
            'description' => 'Bromeliads are tropical plants with vibrant flowers.',
            'parent_id' => null
        ]);

        $cactus = Plant::create([
            'name' => 'Cactus',
            'image' => 'cactus.jpg',
            'watering_frequency' => 'Once a month',
            'fertilizer' => 'Once every three months',
            'humidity' => 30,
            'sunlight' => 'Direct sunlight',
            'temperature' => '15-30°C',
            'pet_friendly' => true,
            'description' => 'Cacti are extremely low-maintenance and drought-tolerant.',
                'parent_id' => null
        ]);

        $calathea = Plant::create([
            'name' => 'Calathea',
            'image' => 'calathea.jpg',
            'watering_frequency' => 'Twice a week',
            'fertilizer' => 'Every two weeks',
            'humidity' => 70,
            'sunlight' => 'Indirect light',
            'temperature' => '18-26°C',
            'pet_friendly' => true,
            'description' => 'Calathea has stunning foliage and thrives in high humidity.',
                'parent_id' => null
        ]);

        $ceropegia = Plant::create([
            'name' => 'Ceropegia',
            'image' => 'ceropegia.jpg',
            'watering_frequency' => 'Once a week',
            'fertilizer' => 'Every three weeks',
            'humidity' => 50,
            'sunlight' => 'Bright indirect light',
            'temperature' => '18-26°C',
            'pet_friendly' => true,
            'description' => 'Ceropegia, also known as String of Hearts, is a trailing plant with delicate heart-shaped leaves.',
                'parent_id' => null
        ]);

        $epipremnum = Plant::create([
            'name' => 'Epipremnum',
            'image' => 'epipremnum.jpg',
            'watering_frequency' => 'Once a week',
            'fertilizer' => 'Once a month',
            'humidity' => 50,
            'sunlight' => 'Low to bright indirect light',
            'temperature' => '18-30°C',
            'pet_friendly' => false,
            'description' => 'Epipremnum, also known as Pothos, is a hardy and fast-growing trailing plant that thrives in various lighting conditions.',
            'parent_id' => null
        ]);

        $ficus = Plant::create([
            'name' => 'Ficus',
            'image' => 'ficus.jpg',
            'watering_frequency' => 'Once a week',
            'fertilizer' => 'Every two weeks',
            'humidity' => 50,
            'sunlight' => 'Bright indirect light',
            'temperature' => '18-26°C',
            'pet_friendly' => false,
            'description' => 'Ficus is a popular indoor plant known for its glossy leaves and air-purifying properties.',
            'parent_id' => null
        ]);

        $hoya = Plant::create([
            'name' => 'Hoya',
            'image' => 'hoya.jpg',
            'watering_frequency' => 'Once a week',
            'fertilizer' => 'Once a month',
            'humidity' => 60,
            'sunlight' => 'Bright indirect light',
            'temperature' => '18-28°C',
            'pet_friendly' => true,
            'description' => 'Hoya, also known as Wax Plant, produces fragrant star-shaped flowers and thrives in high humidity.',
            'parent_id' => null
        ]);

        $marantha = Plant::create([
            'name' => 'Marantha',
            'image' => 'marantha.webp',
            'watering_frequency' => 'Twice a week',
            'fertilizer' => 'Every two weeks',
            'humidity' => 70,
            'sunlight' => 'Indirect light',
            'temperature' => '18-26°C',
            'pet_friendly' => true,
            'description' => 'Marantha is known for its unique prayer-like leaf movement.',
            'parent_id' => null
        ]);

        $monstera = Plant::create([
            'name' => 'Monstera',
            'image' => 'monstera.jpg',
            'watering_frequency' => 'Once a week',
            'fertilizer' => 'Every two weeks',
            'humidity' => 60,
            'sunlight' => 'Partial shade',
            'temperature' => '18-24°C',
            'pet_friendly' => false,
            'description' => 'Monstera is a popular houseplant with iconic split leaves.',
            'parent_id' => null
        ]);

        $peperomia = Plant::create([
            'name' => 'Peperomia',
            'image' => 'peperomia.jpg',
            'watering_frequency' => 'Once a week',
            'fertilizer' => 'Once a month',
            'humidity' => 50,
            'sunlight' => 'Indirect light',
            'temperature' => '18-25°C',
            'pet_friendly' => true,
            'description' => 'Peperomia has thick leaves and is easy to care for.',
            'parent_id' => null
        ]);

        $philodendron = Plant::create([
            'name' => 'Philodendron',
            'image' => 'philodendron.jpg',
            'watering_frequency' => 'Once a week',
            'fertilizer' => 'Every three weeks',
            'humidity' => 60,
            'sunlight' => 'Partial shade',
            'temperature' => '18-27°C',
            'pet_friendly' => false,
            'description' => 'Philodendron is an easy-care plant with beautiful foliage.',
            'parent_id' => null
        ]);

        $pilea = Plant::create([
            'name' => 'Pilea',
            'image' => 'pilea.jpg',
            'watering_frequency' => 'Once a week',
            'fertilizer' => 'Once a month',
            'humidity' => 50,
            'sunlight' => 'Indirect light',
            'temperature' => '18-25°C',
            'pet_friendly' => true,
            'description' => 'Pilea is famous for its unique round leaves.',
            'parent_id' => null
        ]);

        $stromanthe = Plant::create([
            'name' => 'Stromanthe',
            'image' => 'stromanthe.webp',
            'watering_frequency' => 'Twice a week',
            'fertilizer' => 'Every two weeks',
            'humidity' => 70,
            'sunlight' => 'Bright indirect light',
            'temperature' => '18-26°C',
            'pet_friendly' => true,
            'description' => 'Stromanthe has striking variegated leaves and prefers high humidity.',
            'parent_id' => null
        ]);

        $succulent = Plant::create([
            'name' => 'Succulent',
            'image' => 'succulent.jpg',
            'watering_frequency' => 'Once every two weeks',
            'fertilizer' => 'Once every three months',
            'humidity' => 40,
            'sunlight' => 'Bright direct light',
            'temperature' => '15-30°C',
            'pet_friendly' => true,
            'description' => 'Succulents store water in their leaves and require minimal watering.',
            'parent_id' => null
        ]);

        $syngonium = Plant::create([
            'name' => 'Syngonium',
            'image' => 'syngonium.jpg',
            'watering_frequency' => 'Once a week',
            'fertilizer' => 'Once a month',
            'humidity' => 60,
            'sunlight' => 'Bright indirect light',
            'temperature' => '18-26°C',
            'pet_friendly' => false,
            'description' => 'Syngonium is a fast-growing vine with arrow-shaped leaves.',
            'parent_id' => null
        ]);

        $tillandsia = Plant::create([
            'name' => 'Tillandsia',
            'image' => 'tillandsia.jpg',
            'watering_frequency' => 'Mist twice a week',
            'fertilizer' => 'Once a month (diluted spray)',
            'humidity' => 50,
            'sunlight' => 'Bright indirect light',
            'temperature' => '18-30°C',
            'pet_friendly' => true,
            'description' => 'Tillandsia, or air plants, absorb moisture from the air and do not need soil.',
            'parent_id' => null
        ]);

        $tradescantia = Plant::create([
            'name' => 'Tradescantia',
            'image' => 'tradescantia.jpg',
            'watering_frequency' => 'Once a week',
            'fertilizer' => 'Every two weeks',
            'humidity' => 50,
            'sunlight' => 'Bright indirect light',
            'temperature' => '18-27°C',
            'pet_friendly' => false,
            'description' => 'Tradescantia is a trailing plant with beautiful purple and green foliage.',
            'parent_id' => null
        ]);

        $zamioculcas = Plant::create([
            'name' => 'Zamioculcas',
            'image' => 'zamioculcas.jpg',
            'watering_frequency' => 'Once every two weeks',
            'fertilizer' => 'Once a month',
            'humidity' => 40,
            'sunlight' => 'Low to bright indirect light',
            'temperature' => '18-30°C',
            'pet_friendly' => false,
            'description' => 'Zamioculcas, also known as ZZ plant, is a hardy and low-maintenance plant with glossy, dark green leaves.',
            'parent_id' => null
        ]);

        Plant::create(
            [
                'name' => 'Aglaonema Lemon Mint',
                'image' => 'aglaonema_lemonmint.webp',
                'parent_id'=> $aglaonema->id
            ]);

        Plant::create(
            [
                'name' => 'Aglaonema Silver Bay',
                'image' => 'Aglaonema_silverbay.webp',
                'parent_id'=> $aglaonema->id
            ]);

        Plant::create(
            [
                'name' => 'Aglaonema Christina',
                'image' => 'Aglaonema_christina.webp',
                'parent_id'=> $aglaonema->id
            ]);

        Plant::create(
            [
                'name' => 'Aglaonema Apple Green',
                'image' => 'aglaonema_applegreen.webp',
                'parent_id'=> $aglaonema->id
            ]);

        Plant::create(       
            [
                'name' => 'Aglaonema Pink Princess',
                'image' => 'Aglaonema_pinkprincess.webp',
                'parent_id'=> $aglaonema->id
            ]);

        Plant::create(
            [
                'name' => 'Aglaonema Prestige',
                'image' => 'aglaonema_prestige.webp',
                'parent_id'=> $aglaonema->id
            ]);

        Plant::create(
            [
                'name' => 'Aglaonema Snow White',
                'image' => 'aglaonema_snowwhite.webp',
                'parent_id'=> $aglaonema->id
            ]);

        Plant::create(
            [
                'name' => 'Aglaonema Maria',
                'image' => 'aglaonema_maria.webp',
                'parent_id'=> $aglaonema->id
            ]);

        Plant::create(
            [
                'name' => 'Aglaonema Crete',
                'image' => 'aglaonema_crete.webp',
                'parent_id'=> $aglaonema->id
            ]);

            //Alocasia
        Plant::create(
            [
                'name' => 'Alocasia Cucullata',
                'image' => 'alocasia_cucullata.webp',
                'parent_id' => $alocasia->id,
            ]);

        Plant::create(
            [
                'name' => 'Alocasia Black Velvet',
                'image' => 'alocasia_blackvelvet.webp',
                'parent_id' => $alocasia->id,
            ]);

        Plant::create(
            [
                'name' => 'Alocasia Frydek Variegata',
                'image' => 'alocasia_frydekvariegata.webp',
                'parent_id' => $alocasia->id,
            ]);

        Plant::create(
            [
                'name' => 'Alocasia Zebrina',
                'image' => 'alocasia_zebrina.webp',
                'parent_id' => $alocasia->id,
            ]);

        Plant::create(
            [
                'name' => 'Alocasia Macrorhizos',
                'image' => 'alocasia_macrorhizos.webp',
                'parent_id' => $alocasia->id,
            ]);

        Plant::create(    
            [
                'name' => 'Alocasia Frydek',
                'image' => 'alocasia_frydek.webp',
                'parent_id' => $alocasia->id,
            ]);

        Plant::create(
            [
                'name' => 'Alocasia Polly',
                'image' => 'alocasia_polly.webp',
                'parent_id' => $alocasia->id,
            ]);

            //Anthurium
        Plant::create(
            [
                'name' => 'Anthurium Clarinervium',
                'image' => 'anthurium_clarinervium.jpeg',
                'parent_id' => $anthurium->id,
            ]);

        Plant::create(
            [
                'name' => 'Anthurium Silver Blush',
                'image' => 'Anthurium_silverblush.webp',
                'parent_id' => $anthurium->id,
            ]);

        Plant::create(   
            [
                'name' => 'Anthurium Crystallinum',
                'image' => 'anthurium_crystallinum.webp',
                'parent_id' => $anthurium->id,
            ]);

            //Begonia
        Plant::create(
            [
                'name' => 'Begonia Maculata',
                'image' => 'begonia_maculata.webp',
                'parent_id' => $begonia->id,
            ]);

            //Calathea
        Plant::create(  
            [
                'name' => 'Calathea Orbifolia Maculata',
                'image' => 'calathea_orbifolia.webp',
                'parent_id' => $calathea->id,
            ]);

        Plant::create(
            [
                'name' => 'Calathea Beauty Star',
                'image' => 'calathea_beautystar.webp',
                'parent_id' => $calathea->id,
            ]);

        Plant::create(
            [
                'name' => 'Calathea Rufibarba',
                'image' => 'calathea_rufibarba.webp',
                'parent_id' => $calathea->id,
            ]);

        Plant::create(
            [
                'name' => 'Calathea Makoyana',
                'image' => 'calathea_makoyana.webp',
                'parent_id' => $calathea->id,
            ]);

        Plant::create(
            [
                'name' => 'Calathea Freddie',
                'image' => 'calathea_freddie.webp',
                'parent_id' => $calathea->id,
            ]);

        Plant::create(
            [
                'name' => 'Calathea Sanderiana',
                'image' => 'calathea_sanderiana.webp',
                'parent_id' => $calathea->id,
            ]);

        Plant::create(
            [
                'name' => 'Calathea Medaillon',
                'image' => 'calathea_medaillon.webp',
                'parent_id' => $calathea->id,
            ]);

        Plant::create( 
            [
                'name' => 'Calathea Lancifolia',
                'image' => 'calathea_lancifolia.webp',
                'parent_id' => $calathea->id,
            ]);

            //Ceropegia
        Plant::create(
            [
                'name' => 'Ceropegia String Of Hearts Variegata',
                'image' => 'ceropegia_stringofheartsvariegata.webp',
                'parent_id' => $ceropegia->id,
            ]);

        Plant::create(
            [
                'name' => 'Ceropegia String Of Hearts',
                'image' => 'ceropegia_stringofhearts.webp',
                'parent_id' => $ceropegia->id,
            ]);

            //Epipremnum
        Plant::create(
            [
                'name' => 'Epipremnum Neon',
                'image' => 'epipremnum_neon.webp',
                'parent_id' => $epipremnum->id,
            ]);

        Plant::create(
            [
                'name' => 'Epipremnum Global Green',
                'image' => 'epipremnum_globalgreen.webp',
                'parent_id' => $epipremnum->id,
            ]);

            Plant::create(
            [
                'name' => 'Epipremnum Cebu Blue',
                'image' => 'epipremnum_cebublue.webp',
                'parent_id' => $epipremnum->id,
            ]);

            Plant::create(
            [
                'name' => 'Epipremnum Golden',
                'image' => 'epipremnum_golden.webp',
                'parent_id' => $epipremnum->id,
            ]);

            Plant::create(
            [
                'name' => 'Epipremnum Marble Queen',
                'image' => 'epipremnum_marblequeen.webp',
                'parent_id' => $epipremnum->id,
            ]);

            Plant::create(
            [
                'name' => 'Epipremnum Happy Leaf',
                'image' => 'epipremnum_happyleaf.webp',
                'parent_id' => $epipremnum->id,
            ]);

            Plant::create(
            [
                'name' => 'Epipremnum Njoy',
                'image' => 'epipremnum_njoy.webp',
                'parent_id' => $epipremnum->id,
            ]);

            //Ficus
            Plant::create(
            [
                'name' => 'Ficus Microcarpa Ginseng',
                'image' => 'ficus_microcarpaginseng.webp',
                'parent_id' => $ficus->id,
            ]);

            Plant::create(
            [
                'name' => 'Ficus Hivereana',
                'image' => 'ficus_hivereana.webp',
                'parent_id' => $ficus->id,
            ]);

            Plant::create(
            [
                'name' => 'Ficus Abidjan',
                'image' => 'ficus_abidjan.webp',
                'parent_id' => $ficus->id,
            ]);

            Plant::create(
            [
                'name' => 'Ficus Belize',
                'image' => 'ficus_belize.webp',
                'parent_id' => $ficus->id,
            ]);

            Plant::create(
            [
                'name' => 'Ficus Tineke',
                'image' => 'ficus_tineke.webp',
                'parent_id' => $ficus->id,
            ]);

            Plant::create(
            [
                'name' => 'Ficus Elastica Robusta',
                'image' => 'ficus_elasticarobusta.webp',
                'parent_id' => $ficus->id,
            ]);

            Plant::create(
            [
                'name' => 'Ficus Lyrata',
                'image' => 'ficus_lyrata.webp',
                'parent_id' => $ficus->id,
            ]);

            Plant::create(
            [
                'name' => 'Ficus Pumila White Sunny',
                'image' => 'ficus_pumilawhitesunny.webp',
                'parent_id' => $ficus->id,
            ]);

            Plant::create(
            [
                'name' => 'Ficus Audrey',
                'image' => 'ficus_audrey.webp',
                'parent_id' => $ficus->id,
            ]);

            //Hoya
            Plant::create(
            [
                'name' => 'Hoya Wayettii Color',
                'image' => 'hoya_wayettiicolor.webp',
                'parent_id' => $hoya->id,
            ]);

            Plant::create(
            [
                'name' => 'Hoya Carnosatri Color',
                'image' => 'hoya_carnosatricolor.webp',
                'parent_id' => $hoya->id,
            ]);

            Plant::create(
            [
                'name' => 'Hoya Australis Lisa',
                'image' => 'hoya_australislisa.webp',
                'parent_id' => $hoya->id,
            ]);

            Plant::create(
            [
                'name' => 'Hoya Pubicalyx',
                'image' => 'hoya_pubicalyx.webp',
                'parent_id' => $hoya->id,
            ]);

            Plant::create(
            [
                'name' => 'Hoya Krimson Queen',
                'image' => 'hoya_krimsonqueen.webp',
                'parent_id' => $hoya->id,
            ]);

            Plant::create(
            [
                'name' => 'Hoya Kerrii Variegata',
                'image' => 'hoya_kerriivariegata.webp',
                'parent_id' => $hoya->id,
            ]);

            // Marantha
            Plant::create(
            [
                'name' => 'Marantha Leuconeuara Kerchoveana Variegata',
                'image' => 'marantha_leuconeurakerchoveanavariegata.webp',
                'parent_id' => $marantha->id,
            ]);

            Plant::create(
            [
                'name' => 'Marantha Fascinator',
                'image' => 'marantha_fascinator.webp',
                'parent_id' => $marantha->id,
            ]);

            Plant::create(
            [
                'name' => 'Marantha Lemon Lime',
                'image' => 'marantha_lemonlime.webp',
                'parent_id' => $marantha->id,
            ]);

            Plant::create(
            [
                'name' => 'Marantha Leuconeura Kerchoveana',
                'image' => 'marantha_leuconeurakerchoveana.webp',
                'parent_id' => $marantha->id,
            ]);

            // Monstera
            Plant::create(
            [
                'name' => 'Monstera Deliciosa',
                'image' => 'monstera_deliciosa.webp',
                'parent_id' => $monstera->id,
            ]);

            Plant::create(
            [
                'name' => 'Monstera Siltepecana',
                'image' => 'monstera_siltepecana.webp',
                'parent_id' => $monstera->id,
            ]);

            Plant::create(
            [
                'name' => 'Monstera Rhaphidophora Terasperma Minima',
                'image' => 'rhaphidophora_tetraspermaminima.webp',
                'parent_id' => $monstera->id,
            ]);

            Plant::create(
            [
                'name' => 'Monstera Kerstenianum',
                'image' => 'monstera_karstenianum.webp',
                'parent_id' => $monstera->id,
            ]);

            Plant::create(
            [
                'name' => 'Monstera Adansonii',
                'image' => 'monstera_adansonii.webp',
                'parent_id' => $monstera->id,
            ]);

            Plant::create(
            [
                'name' => 'Monstera Thai Constellation',
                'image' => 'monstera_thaiconstellation.webp',
                'parent_id' => $monstera->id,
            ]);

            Plant::create(
            [
                'name' => 'Monstera Albo Variegata',
                'image' => 'monstera_albovariegata.webp',
                'parent_id' => $monstera->id,
            ]);
            
            // Peperomia
            Plant::create(
            [
                'name' => 'Peperomia Rosso',
                'image' => 'peperomia_rosso.webp',
                'parent_id' => $peperomia->id,
            ]);

            Plant::create(
            [
                'name' => 'Peperomia Caperata Lillian',
                'image' => 'peperomia_caperatalillian.webp',
                'parent_id' => $peperomia->id,
            ]);

            Plant::create(
            [
                'name' => 'Peperomia Tetraphylla Hope',
                'image' => 'peperomia_tetraphyllahope.webp',
                'parent_id' => $peperomia->id,
            ]);

            Plant::create(
            [
                'name' => 'Peperomia Argyreia',
                'image' => 'peperomia_argyreia.webp',
                'parent_id' => $peperomia->id,
            ]);

            Plant::create(
            [
                'name' => 'Peperomia Obtusi Folia',
                'image' => 'peperomia_obtusifolia.webp',
                'parent_id' => $peperomia->id,
            ]);

            Plant::create(
            [
                'name' => 'Peperomia Polybotrya Raindrop',
                'image' => 'peperomia_polybotryaraindrop.webp',
                'parent_id' => $peperomia->id,
            ]);

            Plant::create(
            [
                'name' => 'Peperomia Roccascuro',
                'image' => 'peperomia_roccascuro.webp',
                'parent_id' => $peperomia->id,
            ]);

            Plant::create(
            [
                'name' => 'Peperomia Obtusi Folia Variegata',
                'image' => 'peperomia_obtusifoliavariegata.webp',
                'parent_id' => $peperomia->id,
            ]);

            Plant::create(
            [
                'name' => 'Peperomia Caperta Caracas',
                'image' => 'peperomia_caperatacaracas.webp',
                'parent_id' => $peperomia->id,
            ]);

            //Philodendron
            Plant::create(
            [
                'name' => 'Philodendron Scanden Brasil',
                'image' => 'philodendron_scandensbrasil.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Florida Green',
                'image' => 'philodendron_floridagreen.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Fuzzy Petiole',
                'image' => 'philodendron_fuzzypetiole.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Xanadu',
                'image' => 'philodendron_xanadu.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Pink Princess',
                'image' => 'philodendron_pinkprincess.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Gloriosum',
                'image' => 'philodendron_gloriosum.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Narrow',
                'image' => 'philodendron_narrow.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Tortum',
                'image' => 'philodendron_tortum.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Melanochrysum',
                'image' => 'philodendron_melanochrysum.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Scandens Lemon Lime',
                'image' => 'philodendron_scandenslemonlime.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Birkin',
                'image' => 'philodendron_birkin.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Ring Of Fire ',
                'image' => 'philodendron_ringoffire.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Joepii',
                'image' => 'philodendron_joepii.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Plowmanii',
                'image' => 'philodendron_plowmanii.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Glorisum Zebra',
                'image' => 'philodendron_gloriosum_zebra.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Atabapoense',
                'image' => 'philodendron_atabapoense.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron El Choco Red',
                'image' => 'philodendron_elchocored.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron White Wizzard',
                'image' => 'philodendron_whitewizzard.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Florida ghost',
                'image' => 'philodendron_floridaghost.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Scandens Micans',
                'image' => 'philodendron_scandensmicans.webp',
                'parent_id' => $philodendron->id,
            ]);

            Plant::create(
            [
                'name' => 'Philodendron Florida Bronze',
                'image' => 'philodendron_floridabronze.webp',
                'parent_id' => $philodendron->id,
            ]);

            // Pilea
            Plant::create(
            [
                'name' => 'Pilea Moon Valley',
                'image' => 'pilea_moonvalley.webp',
                'parent_id' => $pilea->id,
            ]);

            Plant::create(
            [
                'name' => 'Pilea Glazcophylla Greyzy',
                'image' => 'pilea_glazcophyllagreyzy.webp',
                'parent_id' => $pilea->id,
            ]);

            Plant::create(
            [
                'name' => 'Pilea Peperomioides',
                'image' => 'pilea_peperomioides.webp',
                'parent_id' => $pilea->id,
            ]);

            Plant::create(
            [
                'name' => 'Pilea Peperomioides Mojito',
                'image' => 'pilea_peperomioidesmojito.webp',
                'parent_id' => $pilea->id,
            ]);

            //Stromanthe
            Plant::create(
            [
                'name' => 'Stromanthe Triostar',
                'image' => 'stromanthe_triostar.webp',
                'parent_id' => $stromanthe->id,
            ]);

            Plant::create(
            [
                'name' => 'Stromanthe Stripestar',
                'image' => 'stromanthe_stripestar.webp',
                'parent_id' => $stromanthe->id,
            ]);

            // Succulent
            Plant::create(
            [
                'name' => 'Haworthia Fasciata',
                'image' => 'haworthia_fasciata.webp',
                'parent_id' => $succulent->id,
            ]);

            Plant::create(
            [
                'name' => 'Sansevieria Masoniana',
                'image' => 'sansevieria_masoniana.webp',
                'parent_id' => $succulent->id,
            ]);

            Plant::create(
            [
                'name' => 'Sansevieria Laurentii',
                'image' => 'sansevieria_laurentii.webp',
                'parent_id' => $succulent->id,
            ]);

            Plant::create(
            [
                'name' => 'Sansevierie Trifasciata Moonshine',
                'image' => 'sansevieria_trifasciatamoonshine.webp',
                'parent_id' => $succulent->id,
            ]);

            Plant::create(
            [
                'name' => 'Sansevieria Silver Flame',
                'image' => 'sansevieria_silverflame.webp',
                'parent_id' => $succulent->id,
            ]);

            Plant::create(
            [
                'name' => 'Aloe Vera',
                'image' => 'aloe_vera.webp',
                'parent_id' => $succulent->id,
            ]);

            Plant::create(
            [
                'name' => 'Sansevieria Black Diamond',
                'image' => 'sansevieria_blackdiamond.webp',
                'parent_id' => $succulent->id,
            ]);

            Plant::create(
            [
                'name' => 'Aloe Tiki Tahi',
                'image' => 'aloe_tikitahi.webp',
                'parent_id' => $succulent->id,
            ]);

            Plant::create(
            [
                'name' => 'Crassula Hobbit',
                'image' => 'crassula_hobbit.webp',
                'parent_id' => $succulent->id,
            ]);

            Plant::create(
            [
                'name' => 'Sedum Burrito',
                'image' => 'sedum_burrito.webp',
                'parent_id' => $succulent->id,
            ]);

            Plant::create(
            [
                'name' => 'Sansevieria Cylindrica',
                'image' => 'sansevieria_cylindrica.webp',
                'parent_id' => $succulent->id,
            ]);

            // Syngonium
            Plant::create(
            [
                'name' => 'Syngonium Pink',
                'image' => 'syngonium_pink.webp',
                'parent_id' => $syngonium->id,
            ]);

            Plant::create(
            [
                'name' => 'Syngonium Mottled Mojito',
                'image' => 'syngonium_mottledmojito.webp',
                'parent_id' => $syngonium->id,
            ]);

            Plant::create(
            [
                'name' => 'Syngonium Neon Robusta',
                'image' => 'syngonium_neonrobusta.webp',
                'parent_id' => $syngonium->id,
            ]);

            Plant::create(
            [
                'name' => 'Syngonium Milk Confetti',
                'image' => 'syngonium_milkconfetti.webp',
                'parent_id' => $syngonium->id,
            ]);

            Plant::create(
            [
                'name' => 'Syngonium Arrow',
                'image' => 'syngonium_arrow.webp',
                'parent_id' => $syngonium->id,
            ]);

            Plant::create(
            [
                'name' => 'Syngonium Red Arrow',
                'image' => 'syngonium_redarrow.webp',
                'parent_id' => $syngonium->id,
            ]);

            Plant::create(
            [
                'name' => 'Syngonium Pink Splash',
                'image' => 'syngonium_pinksplash.webp',
                'parent_id' => $syngonium->id,
            ]);

            Plant::create(
            [
                'name' => 'Syngonium Red Spot Tricolor',
                'image' => 'syngonium_redspottricolor.webp',
                'parent_id' => $syngonium->id,
            ]);

            // Tradescantia
            Plant::create(
            [
                'name' => 'Tradescantia Nanouk',
                'image' => 'tradescantia_nanouk.webp',
                'parent_id' => $tradescantia->id,
            ]);

            Plant::create(
            [
                'name' => 'Tradescantia Zebrina',
                'image' => 'tradescantia_zebrina.webp',
                'parent_id' => $tradescantia->id,
            ]);

            // Zamioculcas
            Plant::create(
            [
                'name' => 'Zamiculcas Zenzi',
                'image' => 'zamioculcas_zenzi.webp',
                'parent_id' => $zamioculcas->id,
            ]);

            Plant::create(
            [
                'name' => 'Zamiculcas Zamiifolia',
                'image' => 'zamioculcas_zamiifolia.webp',
                'parent_id' => $zamioculcas->id,
            ]);

            Plant::create(
            [
                'name' => 'Zamiculcas Zamiifolia Raven',
                'image' => 'zamioculcas_zamiifoliaraven.webp',
                'parent_id' => $zamioculcas->id,
            ]);
    }
}